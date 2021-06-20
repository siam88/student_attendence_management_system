<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Session;

class studentController extends Controller
{
    public function login(){
        return view('login');
    }
    public function studentloged(Request $request){
        $students=Student::where('username',$request->username)->where('password',$request->password)->get()->toArray();

        if($students){
            $request->session()->put('admin_session',$students[0]['id']);
            return redirect('dashboard/');
        }else{
            session::flash('coc','Email and Password not matched');
            return redirect('/login/')->withInput();
        }
    }
    public function dashboard(){
    	return view('dashboard');
    }

    public function show(){
        $students=Student::all();
        return view('details',compact('students'));
    }
    public function edit($id){
        $student=Student::find($id);
        return view('detailsEdit',compact('student'));
    }

    public function update(Request $request,$id){
        $student=student::find($id);
        $student->username=$request->username;
        $student->password=$request->password;
        $student->save();
        return redirect('details');
    }
}
