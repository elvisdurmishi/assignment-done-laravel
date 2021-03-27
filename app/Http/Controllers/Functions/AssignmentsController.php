<?php

namespace App\Http\Controllers\Functions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignmentsController extends Controller
{
    public function index(){
        return view("assignments.index");
    }
}
