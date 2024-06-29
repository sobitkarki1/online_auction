<!-- resources/views/search/results.blade.php -->

<h1>Search Results for "{{ $query }}"</h1>

@if($results->isEmpty())
    <p>No results found.</p>
@else
    <ul>
        @foreach($results as $result)
            <li>{{ $result->column_name }}</li> <!-- Replace 'column_name' with the actual column you want to display -->
        @endforeach
    </ul>
@endif
