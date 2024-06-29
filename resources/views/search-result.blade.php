<!-- resources/views/search-results.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Search Results</h1>
    
    @if ($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach ($results as $result)
                <li>{{ $result->name }}</li> <!-- Adjust to display relevant data -->
            @endforeach
        </ul>
    @endif
@endsection
