<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Univeristy of Science and Technology of Southern Philippines</title>
    <link rel="shortcut_icon" href="{{ asset('frontend/images/toga.png') }}">
    <link rel="icon" href="{{ asset('frontend/images/toga.png') }}" type=image/x-icon>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <head>
        <body>
            <section class="header">
                <nav>
                    <a href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo.png')}}"></a>
                    <div class="nav-links" id="navLinks">
                        <i class="fa fa-times" onclick="hideMenu()"></i>
                        <ul>
                            <li><a href="{{ url('/') }}">HOME</a></li>
                            <li><a href="">ABOUT</a></li>
                            <li><a href="">COURSE</a></li>
                            <li><a href="">BLOG</a></li>
                            <li><a href="{{ url('contact') }}">CONTACT</a></li>
                        </ul>
                    </div>
                    <i class="fa fa-bars" onclick="showMenu()"></i>
                </nav>   

<!---------------form--------------->
<div class="container">
    <form onsubmit="sendEmail(); reset(); return false;">
        <h3>Get In Touch</h3>
        <input type="text" id="name" placeholder="Your Name" required> 
        <input type="email" id="email" placeholder="Your Email ID" required> 
        <input type="number" id="phone" placeholder="Your Phone Number" required> 
        <textarea id="message" rows="4" placeholder="How can we help you"></textarea>
        <button type="submit">Send</button>
    </form>
</div>
<div class="gap"></div>
</section>

<!--------------footer-------------->
<section class="footer">
    <h4>About Us</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took <br>a galley of type and scrambled it to make a type specimen book.</p>
            <div class="icons">
                <a href="https://www.facebook.com/ustp2016"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/ssgcustp"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/explore/locations/226831593/university-of-science-and-technology-of-southern-philippines/"><i class="fa fa-instagram"></i></a> 
                <i class="fa fa-linkedin"></i>                
            </div>
            <p>Made with <i class="fa fa-heart-o"></i> by Easy Tutorials</p>
</section>

        <!----------javaSrcipt for Toggle Menu------------>            
        <script src="{{ asset('frontend/js/index.js') }}"></script>
        <!---------javascript for contact us page------->
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        </body>
    </head>
</html>