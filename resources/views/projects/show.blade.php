@extends('layout')

@section('content')
<h1>{{$project->title}}</h1>
<div>
    {{$project->description}}
    <p>
        <a href="/projects/{{$project->id}}/edit">edit</a>
    </p>
</div>


@if ($project->tasks->count())
    <div>
        @foreach ($project->tasks as $task)
            <div>
            <form method="POST" action="/tasks/{{ $task->id}}">
                    @method('PATCH')
                    @csrf

                    <label for="completed" class="checkbox">
                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                        {{$task->description}}
                    </label>
                 </form>
            
            </div>
        @endforeach
    </div>
@endif

<form action="" method="post">
    <div>
        <label for="description">New  Task</label>

        <div>
            <input type="text" class="input" name="description" placeholder="New Task">
        </div>
    </div>
</form>

@endsection