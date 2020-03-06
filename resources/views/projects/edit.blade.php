@extends('Layout')


@section('content')
    <h1>Edit project</h1>
    <form action="/projects/{{$project->id}}" method="POST" >
        {{ method_field('PATCH') }}

        {{ csrf_field() }}
        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title}}">
            </div>
        </div>
        <div class="field">
            <label for="" class="label">Description</label>
            <div class="control">
            <textarea name="description" class="textarea">{{$project->description}}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
                
            </div>
           
        </div>
    </form>
    <form action="" method="post">
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete</button>
                
            </div>
           
        </div>
    </form>
@endsection