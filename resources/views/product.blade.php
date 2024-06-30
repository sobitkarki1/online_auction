<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
<header>
        <div class="rohit">
            <h1>Online Auction</h1>
            <div class="ray">
            <a class="border" href="{{url('/')}}">Home</a>
            <a class="border" href="{{url('/contactus')}}">Contact-us</a>
            <a class="border" href="{{url('/about')}}">About</a>
            <a class="border" href="{{url('/login')}}">Login</a>
            <!-- <a class="border" href="{{url('/register')}}">Register</a> -->
        <a class="border" href="{{ url('/items/create') }}">Add-Item</a>
    
            </div>
            <div class="inputbutton">
            <form action="{{ route('search.index') }}" method="GET">  
            <input id="input" type="text" name="query" placeholder="Search here" >
            <button class="search" type="submit">Search</button>
            </form>
            </div>
        </div>
    </header>
</body>
</html>
