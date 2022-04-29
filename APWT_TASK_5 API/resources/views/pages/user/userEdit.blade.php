@extends('layouts.app')
@section('content')
<h2>Edit User</h2>
<form action="{{route('userEdit')}}" class="form-group" method="post">
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
        <input type="text" name="id" value="{{$user->id}}" class="form-control" readonly>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{$user->name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  
  
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{$user->email}}" class="form-control">
    </div>
  
    <div class="col-md-4 form-group">
        <span>phone</span>
        <input type="text" name="phone" value="{{$user->phone}}" class="form-control">
    </div>
    <div class="col-md-4 form-group">
        <span>Address</span>
        <input type="text" name="address" value="{{$user->address}}" class="form-control">
    </div>
    
    <input type="submit" class="btn btn-success" value="Edit" >                  
</form>
@endsection