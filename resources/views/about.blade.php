<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newindex.css') }}">

</head>
<body>
    <header>
        <div class="rohit">
        <h1>Online Auction</h1>
            <div class="ray">
          
            <a class="border" href="{{url('/')}}">Home</a>
            <a class="border" href="/contactus">Contact-us</a>
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
            <a class="border" href="product">Product</a>
        <a class="border" href="{{ url('/items/create') }}">Add-Item</a>
               
 
            </div>
        </div>
    </header>
    <br>
    <h4>About Us</h4>
    <br>
<div class="para1">
<p>
    Welcome to Online Auction, your premier destination for auctions. Whether you're a seasoned collector, a hobbyist seeking unique finds, or simply looking to declutter and sell, we provide a seamless platform to buy and sell a wide range of items from the comfort of your home.
</p>
</div>
<br><br>

 <h4>Our Mission</h4>
<div class="para2">
    <p>
In this website, our mission is to connect buyers and sellers in a secure and user-friendly online marketplace. We strive to create an environment where enthusiasts can discover rare treasures and sellers can reach a global audience with ease. Transparency, integrity, and customer satisfaction are at the core of everything we do.
</p>
</div>

<div class="join">
<p>Join Online Auction today and experience the thrill of online auctions like never before. Whether you're buying or selling, our platform is designed to meet your needs and exceed your expectations. Explore, bid, and sell with confidence—your next great find or successful sale awaits!
</p></div>
<br><br>
<div class="con">
<p>If you have any questions or feedback, feel free to contact us<br><a href="{{url('/contactus')}}"> <br><button class="red-button">Contact Us</button></dir><br></a> <br> We are here to assist you!</p> <br>
</div>

<footer>
    <div class="footer"> <br><br>
            <a class="border last" href="#">About</a>
            <a class="border last" href="{{url('/product')}}">Product</a>
            <a class="border last" href="{{url('/contactus')}}">Contact-Us</a>
            <a class="border last" href="{{url('/privacy-policy')}}">Privacy-Policy</a>
            <a class="border last" href="{{url('/terms')}}">Terms Of service</a>
        </div>
    </footer>

</body>
</html>