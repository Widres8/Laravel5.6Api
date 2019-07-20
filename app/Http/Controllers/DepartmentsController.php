<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Department::all();

        return response()->json(['success'=> true, 'data'=> $list], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only('description');

        $rules = [
            'description' => 'required|max:100|unique:departments'
        ];

        $validator = Validator::make($input, $rules);

        if($validator->fails()) {
            return response()->json(['success'=> false, 'message'=> $validator->messages()], 400);
        }

        try {
            Department::create($input);
            return response()->json(['success'=> true, 'message'=> Lang::get('validation.attributes.create_success')], 200);
        } catch (\Exception $ex) {
            return response()->json(['success'=> false, 'message'=> $ex->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->only('description');

        $rules = [
            'description' => 'required|max:100',
        ];

        $validator = Validator::make($input, $rules);

        if($validator->fails()) {
            return response()->json(['success'=> false, 'message'=> $validator->messages()], 400);
        }

        try {
            $itemToEdit = Department::find($id);
            if ($itemToEdit == false) {
                return response()->json(['success'=> false, 'message'=> Lang::get('validation.attributes.register_not_found')], 404);
            }

            $itemToEdit->update($input);
            return response()->json(['success'=> true, 'message'=> Lang::get('validation.attributes.update_success')], 200);
        } catch (\Exception $ex) {
            return response()->json(['success'=> false, 'message'=> $ex->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $itemToDelete = Department::find($id);
            if ($itemToDelete == false) {
                return response()->json(['success'=> false, 'message'=> Lang::get('validation.attributes.register_not_found')], 404);
            }

            $itemToDelete->delete();
            return response()->json(['success'=> true, 'message'=> Lang::get('validation.attributes.delete_success')], 200);
        } catch (\Exception $ex) {
            return response()->json(['success'=> false, 'message'=> $ex->getMessage()], 500);
        }
    }
}
