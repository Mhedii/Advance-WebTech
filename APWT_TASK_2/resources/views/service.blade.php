@extends('layouts.app')
@section('content')

<h1>Just checking with array</h1>

<ul>
@foreach($details as $detail)
    <li>{{$detail}}</li>
@endforeach
</ul>

@endsection
