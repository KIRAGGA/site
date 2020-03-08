<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <h1>Create project</h1>

    <form method="POST" action="/projects">
         {{ csrf_field() }}
        <div>
        <input type="text" name="title" placeholder="Project title" required>
        </div>
        <div>
            <input type="text" name="description" placeholder="Project description" required>
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</body>
</html>