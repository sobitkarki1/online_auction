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
            <a class="border" href="{{url('/login')}}">Login</a>
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
    <div class="footer">
            <a class="border last" href="#">About</a><br> <br>
            <a class="border last" href="#">Product</a><br> <br>
            <a class="border last" href="contactus/contact.html">Contact-Us</a><br> <br>
            <a class="border last" href="#">Privacy-Policy</a><br> <br>
            <a class="border last" href="#">Terms Of service</a><br> <br>
        </div>
    </footer>
</body>
</html>

