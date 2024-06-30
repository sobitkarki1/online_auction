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
</div>
            <div class="inputsearch">
            <form action="{{ route('search.index') }}" method="GET">  
            <input id="input" type="text" name="query" placeholder="Search here" >
            <button class="search" type="submit">Search</button>
            </form>
            </div>
@if(isset($query))
<h1>Search Results for "{{ $query }}"</h1>

@if($results->isEmpty())
<div class="noresult">
<p>No results found.</p>
</div>
@else
<ul>

    @foreach($results as $result)
   
    @if($loop->iteration % 4 == 1)
        <div class="content">
        @endif
        

        <div class="box">
            <h2>{{ $result->name }}</h2>
            <div class="box-img"
                style="background-image: url('{{ asset(str_replace('public', 'storage', $result->image_path)) }}');">
            </div>
            <h2 class="minprice">Current Price: {{ $result->minimum_price}}</h2>

            <a class="border seemore" href="{{url('/seemore/' . $result->id)}}">See More</a>
        </div>
        
        @if($loop->iteration % 4 == 0)
        </div>
        @endif
    @endforeach
</ul>

@endif
@endif
</body>
</html>