@extends('layout')

@section('title', 'Home' )
 

@section('content')
<p> This is my home page</p>
<ul>
    <?php foreach ($tasks as $task) : ?>
     <li><? $task; ?></li>
    <?php endforeach?>
</ul>
@endsection