<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentmodel;



class Apicontroller extends Controller
{
    public function store(Request $request)
    {
        $students = new studentmodel();
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->phone = $request->input('phone');

        $students->save();
        return  response()->json([
            'status' => 'success',
            'status_code' => 200,
            'message' => 'The Data have saved successfully!'
    ]);
    }

    
    public function stushow()
    {
        $students = studentmodel::all();
        return  response()->json($students);
    }

    public function stushowid($id)
    {
        $students = studentmodel::find($id);
        return  response()->json($students);
    }

}