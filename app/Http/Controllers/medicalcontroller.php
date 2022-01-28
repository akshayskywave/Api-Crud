<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicalmodel;

class medicalcontroller extends Controller
{
    public function medistore(Request $request)
    {
        $medivar = new Medicalmodel();
        $medivar->name = $request->input('name');
        $medivar->Medical_name = $request->input('Medical_name');
        $medivar->Medical_address = $request->input('Medical_address');
        $medivar->phone = $request->input('phone');
        $medivar->Email = $request->input('Email');
        $medivar->save();

        return  response()->json([
            'status' => 'success',
            'status_code' => 200,
            'message' => 'The Data have saved successfully!'
    ]);

    }

    public function medishow()
    {
        $medivar = Medicalmodel::all();
        return response()->json($medivar);
    }

    public function medishowid($id)
    {
        $medivar = Medicalmodel::find($id);
        return response()->json($medivar);
    }
}
