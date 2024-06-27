<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newindex</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/newindex.css') }}">

</head>
<body>
    <header>
        <div class="rohit">
            <h1>Online Auction</h1>
            <div class="ray">
            <a class="border" href="index.html">Home</a>
            <a class="border" href="contactus/contact.html">Contact-us</a>
            <a class="border" href="#">About</a>
            <a class="border" href="login.html">Login</a>
            <a class="border" href="register.html">Register</a>
            </div>
            <div class="inputbutton">
            <input id="input" type="text" placeholder="search here" >
            <div class="icon">
            <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="box">
            <h2>R15 V3</h2>
            <div class="box-img" style="background-image: url('Yamaha-R15-V4-1jpg-1-jpg.webp');"></div>
            <h2> Current Price: 250000</h2>
            <a class="border" href="seemore/fulldeteals.html">See more</a>
        </div>
        <div class="box"><h2>Nord2</h2>
            <div class="box-img" style="background-image: url('oneplus-nord-2-in-hand.webp');"></div>
            <h2>Current Price: 50000</h2>
            <a class="border" href="seemore/fulldeteals1.html">See more</a></div>
        <div class="box"><h2>Table</Table></h2>
            <div class="box-img" style="background-image: url('table.webp');"></div>
            <h2>Current Price: 30000</h2>
            <a class="border" href="seemore/fulldeteals2.html">See more</a></div>
        <div class="box"><h2>Freeze</h2>
            <div class="box-img" style="background-image: url('freeze.jpg');"></div>
            <h2>current Price: 40000</h2>
            <a class="border" href="seemore/fulldeteals3.html">See more</a></div>
    </div>
    <div class="content">
        <div class="box">
            <h2>Supra</h2>
            <div class="box-img" style="background-image: url('supra.webp');"></div>
            <h2>Current Price: 50000000</h2>
            <a class="border" href="seemore/fulldeteals4.html">See more</a>
        </div>
        <div class="box"><h2>Gaming-PC</h2>
            <div class="box-img" style="background-image: url('gaming-pc.jpg');"></div>
            <h2>current Price: 60000</h2>
            <a class="border" href="seemore/fulldeteals5.html">See more</a></div>
        <div class="box"><h2>House</h2>
            <div class="box-img" style="background-image: url('house.jpg');"></div>
            <h2>Current Price: 30000000</h2>
            <a class="border" href="seemore/fulldeteals6.html">See more</a></div>
        <div class="box"><h2>Jordan</h2>
            <div class="box-img" style="background-image: url('jordan.webp');"></div>
            <h2>Current Price: 8000</h2>
            <a class="border" href="seemore/fulldeteals7.html">See more</a>
        </div>
    </div>

        <br><br>
        <h3> This is where I will test the add item</h3>

        
        @foreach($items as $item)

        @if($loop->iteration % 4 == 1)
        <div class="content">
        @endif
        
          <div class="box">
            <h2>{{ $item->name }}</h2>
            <div class="box-img" style="background-image: url('{{ asset(str_replace('public', 'storage', $item->image_path)) }}');"></div>
            <h2>Current Price: {{ $item->price }}</h2>
            <a class="border" href="seemore/fulldetails.html">See more</a>
          </div>   
        

        @if($loop->iteration % 4 == 0)
        </div>
        @endif


        

        @endforeach

        </div>
    
    <div class="add">
        <a class="border" href="{{ url('/items/create') }}">Add-Item</a>
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