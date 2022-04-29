<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    // use \Illuminate\Foundation\Auth\AuthenticatesUsers;

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoginRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoginRequest  $request
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoginRequest $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
    public function signupget()
    {
       return view("signup");                     
    }
    
    public function signuppost(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required|min:5|max:10',
                'email' => 'required',
                'password' => 'required',
                'address' => 'required',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'dob' => 'required',
            ]
        );   
        
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->dob=$request->dob;
        $user->password=$request->password;
        $user->phone=$request->phone;
        $user->save();
        return redirect(Route('login'));


    }

    
    public function loginpost(Request $request)
    {
       

        $user = User::where('email',$request->email)
        ->where('password',$request->password)
        ->first();

            // return $user;
            if($user){
            $request->session()->put('user',$user->name);
            return redirect()->route('home');
            }
            else {
                return view("login");
            }
    
  
    }
    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }

        
    public function loginget()
    {
        // return view("login");
        $user = User::all();

        // return view('pages.user.list')->with('users', $users);
        return ($user);
    }

    public function userList(){
        $users = User::all();

        // return view('pages.user.list')->with('users', $users);
        return ($users);
        
    }
    public function userEdit(Request $request){

        $user = User::where('id', $request->id)->first();

        // return $student;
        // return view('pages.user.userEdit')->with('user', $user);;
        return ($user);

    }
    public function userEditSubmitted(Request $request){

        $user = User::where('id', $request->id)->first();

        // return $request->id;
        
        $user->id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        // $user->email = $request->email;
        $user->save();

        return redirect()->route('userList');
    }

    public function userDelete(Request $request){
        $user = User::where('id', $request->id)->first();
        $user->delete();
        
        
        return redirect()->route('userList');
    }

}
