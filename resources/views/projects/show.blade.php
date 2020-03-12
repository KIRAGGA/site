@extends('layout')

@section('content')
<h1>{{$project->title}}</h1>
<p>{{$project->description}}</p>


@if ($project->tasks->count())
    <div>
        @foreach ($project->tasks as $task)
    <li>{{$task->description}}</li>
            
        @endforeach
    </div>
@endif

<p>
    <a href="/projects/{{$project->id}}/edit">edit</a>
</p>
@endsection