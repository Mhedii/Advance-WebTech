@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>

<body style="background-color: #e3f2fd;">
    <div class="row mt-5">
        <div class="col-lg-3"></div>

        <div class="mt-5">
             
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
<div class="col">
      
    </div>
        <div class="col-lg-6 p-5 justify-content-center">
            <div >
                <form action="{{('login')}}" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3 d-flex">
                        <label for="email" class="form-label col-lg-3 col-sm-3">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">

                    </div>
                    <div class="mb-3 d-flex">
                        <label for="password" class="form-label col-lg-3 col-sm-3">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Email Password"> 

                    </div>
 
                    <div class="row">
                        <div class="col-lg-5 col-sm-5"></div>
                        <div class="col-lg-2 col-sm-2">
                                            <button type="submit" class="btn btn-primary ">Submit</button>
                                        </div>
                        <div class="col-lg-5 col-sm-5"></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col">
      
    </div>
    </div>

</body>

</html>
@endsection