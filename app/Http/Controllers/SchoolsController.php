<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schools;

class SchoolsController extends Controller
{
    public function handson(){
        $handson = Schools::all();
        return view('Schools.handson', ['Schools' => $handson] );
    }

    public function store(Request $request){
        $data = $request->validate([
            'schoolname'=>'required|max:50',
            'address'=>'required|max:75',
            'schoolID'=>'required|unique:schools'
        ]);
        $newSchool = Schools::create($data);

        return redirect()->route('Schools.handson')->with('success', 'School information saved successfully!');
    }
}
