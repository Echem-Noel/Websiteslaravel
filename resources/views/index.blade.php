<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut_icon" href="{{ asset('frontend/images/toga.png') }}">
    <link rel="icon" href="{{ asset('frontend/images/toga.png') }}" type=image/x-icon>
    <title>Univeristy of Science and Technology of Southern Philippines</title>
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
                <div class="text-box">
                    <h1>World's Biggest Univeristy</h1>
                    <p>The University of Science and Technology of Southern Philippines (USTP) is a state university established on August 16, 2016, 
                        <br>by virtue of Republic Act 10919 through the amalgamation of the Mindanao University of Science and Technology (MUST)<br>
                         in Cagayan de Oro City, Misamis Oriental and the Misamis Oriental State</p>
                    <a href="" class="hero-btn">Visit us To know More</a>     
                 </div>    
            </section>

<!------------course------------->
<section class="course">
    <h1>Courses We Offer</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <div class="row">
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="course-col">
            <h3>Degree</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="course-col">
            <h3>Post Graduation</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
    </div>
</section>

<!-------campus------>
<section class="campus">
    <h1>Our Global Campus</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    
    <div class="row">
        <div class="campus-col">
            <img src="{{ asset('frontend/images/london.png') }}">
            <div class="layer">
                <h3>LONDON</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="{{ asset('frontend/images/newyork.png') }}">
            <div class="layer">
                <h3>NEW YORK</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="{{ asset('frontend/images/washington.png') }}">
            <div class="layer">
                <h3>WASHINGTON</h3>
            </div>
        </div>
    </div>
</section>

<!---------facilities---------->
<section class="facilities">
    <h1>Our Facilities</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

    <div class="row">
            <div class="facilities-col">
                <img src="{{ asset('frontend/images/library.png') }}" alt="">
                <h3>World Class Library</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="facilities-col">
                <img src="{{ asset('frontend/images/basketball.png') }}" alt="">
                <h3>Largest Play Ground</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
            <div class="facilities-col">
                <img src="{{ asset('frontend/images/cafeteria.png') }}" alt="">
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
    </div>
</section>

<!--------Testimonials-------->
<section class="testimonials"> 
    <h1>What Our Students Say</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

    <div class="row">
        <div class="testimonial-col">
            <img src="{{ asset('frontend/images/user1.png') }}">
            <div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <h3>Christine Bekley</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="testimonial-col">
            <img src="{{ asset('frontend/images/user2.png') }}">
            <div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <h3>David Byer</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
            </div>
        </div>
    </div>
</section>

<!--------------Call to Action-------------->
<section class="cta">
    <h1>Enroll For Our Various Online Courses<br> Anywhere From The World</h1>
    <a href="{{ url('contact')}}" class="hero-btn">CONTACT US</a> 

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
        </body>
    </head>
</html>