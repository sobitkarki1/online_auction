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
    <header>
        <div class="rohit">
            <h1>Online Auction</h1>
            <div class="ray">
            <a class="border" href="{{url('/')}}">Home</a>
            <a class="border" href="{{url('/contactus')}}">Contact-us</a>
            <a class="border" href="{{url('/about')}}">About</a>
            <a class="border" href="login.html">Login</a>
            <a class="border" href="register.html">Register</a>
        <a class="border" href="{{ url('/items/create') }}">Add-Item</a>
    
            </div>
            <div class="inputbutton">
            <input id="input" type="text" placeholder="Search here" >
            <div class="icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            </div>
        </div>
    </header>

        <br><br>
        

        
        @foreach($items as $item)

        @if($loop->iteration % 4 == 1)
        <div class="content">
        @endif
        
          <div class="box">
            <h2>{{ $item->name }}</h2>
            <div class="box-img" style="background-image: url('{{ asset(str_replace('public', 'storage', $item->image_path)) }}');"></div>
            <h2>Current Price: {{ $item->minimum_price}}</h2>
            <a class="border" href="{{url('/seemore/' . $item->id)}}">See More</a>
          </div>   
        

        @if($loop->iteration % 4 == 0)
        </div>
        @endif


        

        @endforeach

        </div>
    
    <footer>
        <div class="footer">
            <a class="border last" href="#">About</a>
            <br>
            <a class="border last" href="#">Product</a>
            <br>
            <a class="border last" href="contactus/contact.html">Contact-Us</a>
            <br>
            <a class="border last" href="#">Privacy-Policy</a>
            <br>
            <a class="border last" href="#">Terms Of service</a>
        </div>
    </footer>
</body>
</html>