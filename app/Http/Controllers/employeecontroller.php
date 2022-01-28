<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employeemodel;

class employeecontroller extends Controller
{
    public function empstore (Request $request)
    {
        $empdata = new employeemodel();
        $empdata->name =$request->input('name');
        $empdata->exprincle =$request->input('exprincle');
        $empdata->salary =$request->input('salary');
        $empdata->phone =$request->input('phone');
        $empdata->email =$request->input('email');
        $empdata->save();

        return  response()->json([
            'status' => 'success',
            'status_code' => 200,
            'message' => 'The Data have saved successfully!'
        ]);
        
    }

    public function empshow()
    {
        $empdata = employeemodel::all();
        return response()->json($empdata);
    }

    public function empshowid($id)
    {
        $empdata = employeemodel::find($id);
        return response()->json($empdata);
    }
}
