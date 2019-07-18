<?php

namespace App\Http\Controllers\Security;

use JWTAuth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Validator, DB, Hash, Mail;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Password;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['login', 'register', 'recover', 'verifyUser']]);
    }

    /**
     * API Register
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $credentials = $request->only('first_name','last_name', 'address','mobile','email','document_type', 'document','password','is_verified', 'created_by');

        $rules = [
            'first_name'    => 'required|max:60',
            'last_name'     => 'required|max:60',
            'address'       => 'required|max:60',
            'mobile'        => 'required|max:20',
            'document_type' => 'required|max:20',
            'document'      => 'required|max:20|unique:users',
            'password'      => 'required',
            'created_by'    => 'required',
            'email'         => 'required|email|max:255|unique:users'
        ];

        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()]);
        }

        $name = $request->first_name;
        $email = $request->email;

        $user = User::create($credentials);

        $verification_code = str_random(30); //Generate verification code

        DB::table('user_verifications')->insert(['user_id'=>$user->id,'token'=>$verification_code]);

        $subject = Lang::get('validation.attributes.verify_email_subject');
        Mail::send('email.verify', compact('name', 'verification_code'),
            function($mail) use ($email, $name, $subject){
                $mail->from(getenv('FROM_EMAIL_ADDRESS'), getenv('MAIL_FROM_NAME'));
                $mail->to($email, $name);
                $mail->subject($subject);
            });

        return response()->json([
            'success'=> true,
            'message'=> 'Thanks for signing up! Please check your email to complete your registration.'
        ]);
    }

    /**
     * API Verify User
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function verifyUser($verification_code)
    {
        $check = DB::table('user_verifications')->where('token',$verification_code)->first();
        $message = '';
        $status = true;
        if(!is_null($check)){
            $user = User::find($check->user_id);
            if($user->is_verified == 1){
                $message = Lang::get('validation.attributes.verify_account_already');
            }
            $user->update(['is_verified' => 1]);
            DB::table('user_verifications')->where('token',$verification_code)->delete();
            $message = Lang::get('validation.attributes.verify_account');
        } else {
            $status = false;
            $message = Lang::get('validation.attributes.verify_account_invalid');
        }
        return view('auth.verifyUser', compact('message', 'status'));
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $validator = Validator::make($credentials, $rules);
        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()], 401);
        }

        $credentials['is_verified'] = 1;

        try {
            // attempt to verify the credentials and create a token for the user
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'success' => false,
                    'error' => 'We cant find an account with this credentials. Please make sure you entered the right information and you have verified your email address.'
                ], 404);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json([
                'success' => false,
                'error' => 'Failed to login, please try again.'
            ], 500);
        }
        // all good so return the token
        return $this->respondWithToken($token);
    }

    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token
     *
     * @param Request $request
     */
    public function logout(Request $request)
    {

        $this->validate($request, ['token' => 'required']);

        try {
            JWTAuth::invalidate($request->input('token'));
            return response()->json([
                'success' => true,
                'message'=> "You have successfully logged out."
                ]);
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json([
                'success' => false,
                'error' => 'Failed to logout, please try again.'
            ], 500);
        }
    }

    /**
     * API Recover Password
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function recover(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $error_message = "Your email address was not found.";
            return response()->json(['success' => false, 'error' => ['email'=> $error_message]], 401);
        }

        try {
            Password::sendResetLink($request->only('email'), function (Message $message) {
                $message->subject('Your Password Reset Link');
            });
        } catch (\Exception $e) {
            //Return with error
            $error_message = $e->getMessage();
            return response()->json(['success' => false, 'error' => $error_message], 401);
        }

        return response()->json([
            'success' => true,
            'data'=> ['message'=> 'A reset email has been sent! Please check your email.']
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json($this->ResponseUserRolesPermissions());
    }

    public function payload()
    {
        return response()->json(auth()->payload());
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard();
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        $response = array_merge(
            [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,
            ],
            $this->ResponseUserRolesPermissions()
        );
        return response()->json($response);
    }

    protected function ResponseUserRolesPermissions() {
        return [
            'user' => auth()->user(),
            'roles' => auth()->user()->rolesUser()->with('permissions')->get(),
        ];
    }
}
