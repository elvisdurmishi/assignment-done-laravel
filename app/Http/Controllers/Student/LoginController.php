<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('student.login');
    }

    public function store(Request $request){
        //validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))){
            return back()->with('status', 'Invalid login detail');
        }

        return redirect()->route('classes');
    }
}
