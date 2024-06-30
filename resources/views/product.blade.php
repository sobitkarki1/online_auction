<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

</head>
<body>
    <header>
        <div class="rohit">
            <h1>Online Auction</h1>
            <div class="ray">
            <a class="border" href="{{url('/')}}">Home</a>
            <a class="border" href="{{url('/contactus')}}">Contact-us</a>
            <a class="border" href="{{url('/about')}}">About</a>
            @auth
        <!-- User is authenticated, show logout link -->
        <form style="display: inline-block" method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
        </form>
    @else
        <!-- User is not authenticated, show login link -->
        <a class="border" href="{{ route('login') }}">Login</a>
    @endauth
            <a class="border" href="{{url('/product')}}">Product</a>
            <!-- <a class="border" href="{{url('/register')}}">Register</a> -->
        <a class="border" href="{{ url('/items/create') }}">Add-Item</a>
    
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
            <h2 class="minprice">Current Price: {{ $item->minimum_price}}</h2>
          
            <a class="border seemore" href="{{url('/seemore/' . $item->id)}}">See More</a>
          </div>   
        
        @if($loop->iteration % 4 == 0)
        </div>
        @endif


        

        @endforeach

        </div>
    <br>
    <br>
    <br>
    <br>
    
    <footer>
    <div class="footer"> <br><br>
            <a class="border last" href="{{url('/about')}}">About</a>
            <a class="border last" href="{{url('/product')}}">Product</a>
            <a class="border last" href="{{url('/contactus')}}">Contact-Us</a>
            <a class="border last" href="{{url('/privacy-policy')}}">Privacy-Policy</a>
            <a class="border last" href="{{url('/terms')}}">Terms Of service</a>
        </div>
    </footer>
</body>
</html>

