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
        @csrf
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>
        <div>
            <input type="text" name="description" placeholder="Project description">
        </div>
        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>
</body>
</html>