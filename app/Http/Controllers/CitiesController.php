<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Department;

class CitiesController extends Controller
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
        $list = City::with('department')
                    ->orderBy('description')
                    ->get();

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
        $input = $request->only('description', 'department_id');

        $rules = [
            'description' => 'required|max:100',
            'category_id' => 'required|numeric',
        ];

        $validator = Validator::make($input, $rules);

        if($validator->fails()) {
            return response()->json(['success'=> false, 'message'=> $validator->messages()], 404);
        }

        try {
            City::create($input);
            return response()->json(['success'=> true, 'message'=> Lang::get('validation.attributes.create_success')], 200);
        } catch (\Exception $ex) {
            return response()->json(['success'=> false, 'message'=> $ex->getMessage()], 404);
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
        $input = $request->only('description', 'department_id');

        $rules = [
            'description' => 'required|max:100',
            'category_id' => 'required|numeric',
        ];

        $validator = Validator::make($input, $rules);

        if($validator->fails()) {
            return response()->json(['success'=> false, 'message'=> $validator->messages()], 404);
        }

        try {
            $itemToEdit = City::find($id);
            if ($itemToEdit == false) {
                return response()->json(['success'=> false, 'message'=> Lang::get('validation.attributes.register_not_found')], 404);
            }

            $itemToEdit->update($input);
            return response()->json(['success'=> true, 'message'=> Lang::get('validation.attributes.update_success')], 200);
        } catch (\Exception $ex) {
            return response()->json(['success'=> false, 'message'=> $ex->getMessage()], 404);
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
            $itemToDelete = City::find($id);
            if ($itemToDelete == false) {
                return response()->json(['success'=> false, 'message'=> Lang::get('validation.attributes.register_not_found')], 404);
            }

            $itemToDelete->delete();
            return response()->json(['success'=> true, 'message'=> Lang::get('validation.attributes.delete_success')], 200);
        } catch (\Exception $ex) {
            return response()->json(['success'=> false, 'message'=> $ex->getMessage()], 404);
        }
    }
}
