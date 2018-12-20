@extends('layout')


@section('content')
    <h1 class="title">Projects</h1>
    <ul>
        @foreach ($project as $project)
            <a href="/projects/{{ $project->id }}">
                <li>{{ $project->title}}</li>
            </a>
        @endforeach
    </ul>
@endsection