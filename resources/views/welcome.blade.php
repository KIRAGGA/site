@extends('layout')

@section('title', 'Home' )
 

@section('content')
<p> This is my home page</p>
<ul>
    @foreach ($tasks as $task)
     <li>{{$task}}</li>
    @endforeach
</ul>
@endsection