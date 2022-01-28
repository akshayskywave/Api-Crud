<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biomodel;

class Biocontroller extends Controller
{
    public function biostore(Request $request)
    {
        $biovariables = new biomodel();
        $biovariables->name = $request->input('name');
        $biovariables->father_name = $request->input('father_name');
        $biovariables->mother_name = $request->input('mother_name');
        $biovariables->sister_name = $request->input('sister_name');
        $biovariables->phone_number = $request->input('phone_number');
        $biovariables->save();

        return  response()->json([
            'status' => 'success',
            'status_code' => 200,
            'message' => 'The Data have saved successfully!'
    ]);

    }

    public function bioshow()
    {
        $biofetch = biomodel::all();
        return response()->json($biofetch);
    }

    public function bioshowid($id)
    {
        $biofetch = biomodel::find($id);
        return response()->json($biofetch);
    }
}

