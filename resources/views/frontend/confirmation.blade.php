@extends('frontend.layouts.master')
@section('title', $page_tile)
@section('main-content')
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (isset($formData))
            <h3>Submitted Data:</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Name:</strong> {{ $formData['name'] }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $formData['email'] }}</li>
                <li class="list-group-item"><strong>Phone:</strong> {{ $formData['phone'] }}</li>
                <li class="list-group-item"><strong>Message:</strong> {{ $formData['message'] }}</li>
            </ul>
        @else
            <p>No form data available.</p>
        @endif
    </div>

@endsection
