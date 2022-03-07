@extends('layouts.app')
@section('content')

<h1>Our team mates</h1>

<ul>
@foreach($details1 as $d1)
    <li>{{$d1}}</li>
@endforeach
<br>
@foreach($details2 as $d2)
    <li>{{$d2}}</li>
@endforeach
<br>
@foreach($details3 as $d3)
    <li>{{$d3}}</li>
@endforeach
</ul>

@endsection
