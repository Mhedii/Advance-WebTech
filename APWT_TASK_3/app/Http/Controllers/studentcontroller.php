<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Illuminate\Routing\Route;

class studentcontroller extends Controller
{
    public function databaseget()
    {
        $student = student::all();
        return $student;                       
    }
    
    public function signupget()
    {
       return view("signup");                     
    }
    
    public function signuppost(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required',
                'dob' => 'required',
                'email' => 'required'
            ]
        );   
        
        $student=new student();
        $student->name=$request->name;
        $student->dob=$request->dob;
        $student->email=$request->email;
        $student->save();
        return redirect(Route('signup'));


    }

    public function crudget()
    {
        $students=student::all();
        return view("crud",['students'=>$students]);
    }

    public function editget($id){
        $student=student::find($id);
        return view('edit',['student'=>$student]);
    }
    public function updatepost(request $request,$id){
        $student=student::find($id);
        $student->name = $request->name;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->save();
        return redirect(Route('crud'));
        
    }
    
    public function deleteget($id){
        $student = student::destroy($id);
        return redirect(Route('crud'));


    }
}
