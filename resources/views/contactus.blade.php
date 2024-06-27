<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">

</head>
<body>
    <header>
        <div class="rohit">
            <h1>Online Auction</h1>
            <div class="ray">
            <a class="border" href="{{url('/')}}">Home</a>
            <a class="border" href="contactus/contact.html">Contact-us</a>
            <a class="border" href="#">About</a>
            <a class="border" href="login.html">Login</a>
            <a class="border" href="register.html">Register</a>
        <a class="border" href="{{ url('/items/create') }}">Add-Item</a>
    
            </div>
           
        </div>
    </header>
    <br><br>
<h2>Contact Us</h2>
</body>
</html>