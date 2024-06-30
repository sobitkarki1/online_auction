<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
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
            <a class="border" href="{{url('/login')}}">Login</a>
            <a class="border" href="{{url('/product')}}">Products</a>
        <a class="border" href="{{ url('/items/create') }}">Add-Item</a>
            </div>
           
    </header>
   

<footer>
    <div class="footer">
            <a class="border last" href="{{url('/about')}}">About</a><br> <br>
            <a class="border last" href="{{url('/product')}}">Product</a><br> <br>
            <a class="border last" href="{{url('/contactus')}}">Contact-Us</a><br> <br>
            <a class="border last" href="#">Privacy-Policy</a><br> <br>
            <a class="border last" href="#">Terms Of service</a><br> <br>
        </div>
    </footer>
</body>
</html>
