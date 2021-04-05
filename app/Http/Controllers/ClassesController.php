<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index(){
        return view("classes.index");
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'section' => 'required',
            'subject' => 'required',
        ]);

        $model = Classroom::create([
            'name' => $request->name,
            'section' => $request->section,
            'subject' => $request->subject,
        ]);

        $model->users()->attach(auth()->user()->id);
        
        return back();
    }
}
