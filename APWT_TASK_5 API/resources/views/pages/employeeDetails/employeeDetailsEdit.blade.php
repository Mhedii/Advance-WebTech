@extends('layouts.app')
@section('content')
<h2>Edit employeedetails</h2>
<form action="{{route('employeedetailsEdit')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-md-4 form-group">
        <span>ID</span>
        <input type="text" name="id" value="{{$employeedetails->id}}" class="form-control" readonly>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{$employeedetails->name}}" class="form-control" readonly>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  
  
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{$employeedetails->email}}" class="form-control" readonly>
    </div>
  
    <div class="col-md-4 form-group">
        <span>Role</span>
        <input type="text" name="role" value="{{$employeedetails->role}}" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Salary</span>
        <input type="text" name="salary" value="{{$employeedetails->salary}}" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Bonus</span>
        <input type="text" name="bonus" value="{{$employeedetails->bonus}}" class="form-control">
    </div>
    
    <input type="submit" class="btn btn-success" value="Edit" >                  
</form>
@endsection