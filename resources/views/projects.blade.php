@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <h1>Projects</h1>
    @foreach($projects as $project)
        <div>
            <h2>{{ $project->title }}</h2>
            <p>{{ $project->description }}</p>
            <!-- Add more project details as needed -->
        </div>
    @endforeach
@endsection
