<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <script src="main.js"></script>
    <style>
        body{
            margin-top:30px;
            margin-left:30px;
            margin-right:30px;
        }
    </style>
</head>
<body>
    <h1 class="title">Create New Project</h1>

    <form method="POST" action="/projects">
    {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Project Title</label>
            <div class="control">
                <input class="input {{ $errors->has('title') ? 'is-danger' : ''}}" type="text" name="title" value="{{ old('title') }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Project Description</label>
            <div class="control">
                <textarea class="textarea  {{ $errors->has('description') ? 'is-danger' : ''}}" name="description" required>{{ old('description') }} </textarea>
            </div>
        </div>

        <div>
            <button class="button is-link" type="Submit">Create</button>
        </div>
        <br>

        @include('error')

    </form>
</body>
</html>