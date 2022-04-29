<?php

namespace App\Http\Controllers;

use App\Models\employeeDetails;
use App\Http\Requests\StoreemployeeDetailsRequest;
use App\Http\Requests\UpdateemployeeDetailsRequest;

class EmployeeDetailsController extends Controller
{
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
     * @param  \App\Http\Requests\StoreemployeeDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreemployeeDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employeeDetails  $employeeDetails
     * @return \Illuminate\Http\Response
     */
    public function show(employeeDetails $employeeDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employeeDetails  $employeeDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(employeeDetails $employeeDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateemployeeDetailsRequest  $request
     * @param  \App\Models\employeeDetails  $employeeDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateemployeeDetailsRequest $request, employeeDetails $employeeDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employeeDetails  $employeeDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(employeeDetails $employeeDetails)
    {
        //
    }

    public function employeeDetails(){
        $employeedetails = employeeDetails::all();

        // return view('pages.employeeDetails.list')->with('employeedetails', $employeedetails);
        return ($employeedetails);
        
    }
    public function employeeDetailsEdit(Request $request){

        $employeedetails = employeeDetails::where('id', $request->id)->first();

        // return $student;
        return view('pages.employeeDetails.employeeDetailsEdit')->with('employeedetails', $employeedetails);;

    }
    public function employeeDetailsEditSubmitted(Request $request){

        $employeedetails = employeeDetails::where('id', $request->id)->first();

        // return $request->id;
        
        $employeedetails->id = $request->id;
        $employeedetails->name = $request->name;
        $employeedetails->email = $request->email;
        $employeedetails->role = $request->role;
        $employeedetails->salary = $request->salary;
        $employeedetails->bonus = $request->bonus;
        $employeedetails->save();

        return redirect()->route('employeeDetails');
    }

    public function employeeDetailsDelete(Request $request){
        $employeedetails = employeeDetails::where('id', $request->id)->first();
        $employeedetails->delete();
        
        return redirect()->route('employeeDetails');
    }
}
