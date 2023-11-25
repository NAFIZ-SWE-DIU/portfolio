@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Contact Me</h1>
    <form method="post" action="/contact">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <!-- Add more form fields as needed -->
        <button type="submit">Submit</button>
    </form>
@endsection
