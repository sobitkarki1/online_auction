<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/newindex.css') }}">

</head>
<body>
<form action="{{ route('search.index') }}" method="GET">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>
@if(isset($query))
<h1>Search Results for "{{ $query }}"</h1>

@if($results->isEmpty())
<p>No results found.</p>
@else
<ul>

    @foreach($results as $result)
   
    <div class="content">
        

        <div class="box">
            <h2>{{ $result->name }}</h2>
            <div class="box-img"
                style="background-image: url('{{ asset(str_replace('public', 'storage', $result->image_path)) }}');">
            </div>
            <h2 class="minprice">Current Price: {{ $result->minimum_price}}</h2>

            <a class="border seemore" href="{{url('/seemore/' . $result->id)}}">See More</a>
        </div>
    </div>
    @endforeach
</ul>

@endif
@endif
</body>
</html>