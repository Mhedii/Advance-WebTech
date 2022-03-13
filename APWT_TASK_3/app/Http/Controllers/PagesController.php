<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function service(){
        $name = "Mehedi Hasan";
        $id="11-11111-1";
        $dob = "1-1-2000";
        $details=array("Name:$name" , "ID:$id", "Date Of Birth:$dob");
        return view('service')
    
        ->with('details', $details);
       
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }

    public function team(){
        $name = "Mehedi Hasan";
        $id="11-11111-1";
        $dob = "1-1-2000";
        $details1=array("Name:$name" , "ID:$id", "Date Of Birth:$dob");
        $name1 = "Alif";
        $id1="11-11111-1";
        $dob1 = "1-1-2000";
        $details2=array("Name:$name" , "ID:$id", "Date Of Birth:$dob");
        $name2 = "Azan";
        $id2="11-11111-1";
        $dob2 = "1-1-2000";
        $details3=array("Name:$name" , "ID:$id", "Date Of Birth:$dob");
        return view('team')
    
        ->with('details1', $details1)
        ->with('details2', $details2)
        ->with('details3', $details3);
       
    }
}
