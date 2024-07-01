<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
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
            <h3>Find us</h3>
        </div>
        
    </header>
    <br><br>
<!-- <h2>Contact Us</h2> -->
 <br>
        <section class="location">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.876930320698!2d83.97457957538761!3d28.211051475897523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595ab009e696f%3A0x8657229f67dc8afb!2z4KSq4KWL4KSW4KSw4KS-IOCkh-CkqOCljeCknOCkv-CkqOCkv-Ckr-CksOCkv-CkmSDgpJXgpLLgpYfgpJw!5e0!3m2!1sne!2snp!4v1719135148166!5m2!1sne!2snp"
                width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <br>
        <section class="contactus">
            <div id="detail">
                <div>
                    <i class="fa fa-home"></i></a>
                    <span>
                        <h5>Phirke, Pokhara-9</h5>
                    </span>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <span>
                        <h5>9826610929</h5>
                        <p></p>
                    </span>
                </div>
                <div>
                <i class="fa-solid fa-envelope"></i>                    <span>
                        <h5>online.auction577@gmail.com</h5>
                    </span>
                </div>
            </div>
        </section> <br><br>
        <h4>Comment</h4><br><br>
        <section class="comment">
            <div class="commentd">
                <form action="{{ route('feedback.store') }}" method="post">
                @csrf
                    <br><dir><input type="text" name="name" placeholder="Enter your name" required></dir>
                    <br><dir><input type="email" name="email" placeholder="Enter email address" required></dir>
                    <br><dir><textarea class="message" rows="8" name="message" placeholder="Message" required></textarea></dir>
                    <br><dir><button type="submit" class="red-button">Send Message</button></dir><br>
                </form>
                @if(session('success'))
                <p>{{ session('success') }}</p>
                @endif
            </div>

        </section>
        <div class="contactinfo">
            <H5>Contact us </H5>
            <p>You can find us on our social media or you can mail us on our given Email below.
                <br><u>online.auction577@gmail.com</u>
            </p>
            <a href="https://www.facebook.com/Sandeshspk52"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://web.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
        </div>
<br>

    </section>
    <script>

        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }

    </script>

    </section>

    <br> <br>
    <footer>
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