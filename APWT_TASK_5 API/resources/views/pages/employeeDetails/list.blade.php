@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>employeeDetails List</title>
</head>

<body style="background-color: #e3f2fd;">
<table class="table table-border">
        <tr>
            
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Employee email</th>
            <th>Role</th>
            <th>Salary</th>
            <th>Bonus</th>
            <th>Action</th>
            

        </tr>
        @foreach($employeedetails as $employeedetail)
        <tr>
            <td>{{ $employeedetail->id}}</td>
            <td>{{ $employeedetail->name}}</td>
            <td>{{ $employeedetail->email}}</td>
            <td>{{ $employeedetail->role}}</td>
            <td>{{ $employeedetail->salary}}</td>
            <td>{{ $employeedetail->bonus}}</td>
            
            <td><a href="/employeeDetailsEdit/{{$employeedetail->id}}/{{$employeedetail->name}}">Edit</a></td>
            <td><a href="/employeeDetailsDelete/{{$employeedetail->id}}/{{$employeedetail->name}}">delete</a></td>

        </tr>
        @endforeach
        
    </table>
</body>

</html>
@endsection

    
