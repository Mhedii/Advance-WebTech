<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function signuppost(Request $request)
    {
        $validate = $request->validate([
            'address'=>'required',
            'phone'=>'required',
            'dob'=>'required',
            'email'=>'required',
            'password'=>'required'
        ],

        [
            'dob.required'=>'Please enter your Date of birth',
            'phone.required'=>'Please enter your phone number',
            'password.required'=>'Please enter your password',
            'email.required'=>'Please enter your email',
            'address.required'=>'Please enter your address'
        ]
        );
        return "Registration Complete";
    }


    public function signupget()
    {
        return view("signup");
    }


    public function loginpost(Request $request)
    {
        $validate = $request->validate(
            [
               
                'email' => 'required',
                'password' => 'required'
            ],

            [
                'email.required' => 'Please enter your email',
                'password.required' => 'Please enter your password'
            ]
        );
        
        return "Login successful";
    }


        
    public function loginget()
    {
        return view("login");
    }
}
