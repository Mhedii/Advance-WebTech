@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User List</title>
</head>

<body style="background-color: #e3f2fd;">
<table class="table table-border">
        <tr>
            
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Our Cost</th>
            <th>Selling Cost</th>
            <th>Amount</th>
            <th>Total Our Cost</th>
            <th>Total Sale</th>
            <th>Profit</th>

        </tr>
        @foreach($productdetails as $productdetail)
        <tr>
            <td>{{ $productdetail->id}}</td>
            <td>{{ $productdetail->p_name}}</td>
            <td>{{ $productdetail->ourCost}}</td>
            <td>{{ $productdetail->sellingCost}}</td>
            <td>{{ $productdetail->amount}}</td>
            <td>{{($productdetail->ourCost)*($productdetail->amount)}}</td>
            <td>{{($productdetail->sellingCost)*($productdetail->amount)}}</td>
            <td>{{($productdetail->totalsale)-($productdetail->totalourCost)}}</td>


        </tr>
        @endforeach
        
    </table>
</body>

</html>
@endsection

    
