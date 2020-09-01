<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class studentController extends Controller
{
    public function view(){
      $my_students = Student::all();

      return view('students', compact('my_students'));
    }
}
