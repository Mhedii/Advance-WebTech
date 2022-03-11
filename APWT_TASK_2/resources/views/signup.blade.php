@extends('layouts.app')
 @section('content')

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <title></title>
 </head>

 <body>

     <div class="row">
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

         <div class=" col-lg-6 mt-5 ">
             <div >

                 <form action="{{route('signup')}}" method="post">
                     {{csrf_field()}}
                     <div class="mb-3">
                         <label for="email" class="form-label">Email address</label>
                         <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
                       
                     </div>
                     <div class="mb-3">
                         <label for="password" class="form-label">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                      
                     </div>
                     <div class="mb-3">
                         <label for="address" class="form-label">Address</label>
                         <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
                
                     </div>
                     <div class="mb-3">
                         <label for="phone" class="form-label">Phone</label>
                         <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                      
                     </div>
                     <div class="mb-3">
                         <label for="dob" class="form-label">Date Of Birth</label>
                         <input type="text" class="form-control" name="dob" placeholder="Enter Your Email Date Of birth">

                     </div>

<div class="justify-content-lg-center">
<button type="submit" class="btn btn-primary ">Submit</button>
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