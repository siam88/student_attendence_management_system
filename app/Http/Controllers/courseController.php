<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class courseController extends Controller
{
   public function show(){
       $courses=Course::paginate(4);
       return view('courseDetails',compact('courses'));
   }

  
}
