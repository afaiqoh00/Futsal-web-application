<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Brayan') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('ib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('css/login.css') }}" rel="stylesheet"> -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"></i>Brayan Badminton</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="" class="nav-item nav-link text-dark ">Home</a>
                <a href="" class="nav-item nav-link text-dark">About</a>
                <a href="" class="nav-item nav-link active text-primary">Booking</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
                <a href="" class="nav-item nav-link text-dark">Contact</a>
                <style>
                    .btn-primary:hover {
                    color: #000;
                    background-color: #2bc5d4;
                    border-color: #1fc2d1;
                    }
                </style>
                @guest
                <a href="{{ route('login') }}" class=" login btn btn-primary py-4 px-lg-5 d-lg-block nav-item nav-link">LOGIN
                <i class="fa fa-arrow-right ms-3"></i>
                </a>
                @endguest
                @auth
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown"><img
            src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
            class="rounded-circle"
            height="22"
            alt="Portrait of a Woman"
            loading="lazy"
          />{{ auth()->user()->name }}</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Setting</a>
                        <li><hr class="dropdown-divider bg-p"></li>
                        <a href="#" class="dropdown-item text-danger" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="">Logout</a> 
                        <form id="logout-form" action="{{ route('logout') }}" method="post">
                        @csrf
                        </form>
    <!-- <li><a class="dropdown-item" href="#">Separated link</a></li>
                        <a href="404.html" class="dropdown-item">404 Page</a> -->
                    </div>
                </div>
                        <!-- <li class="nav-item dropdown mr-5">
                            <a class="login btn btn-primary nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </div>
                        </li> -->
                        @endauth
                
            </div>
            <!-- @guest -->
                <!-- <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item"> -->
                    <!-- <a class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" href="{{ route('login') }}">LOGIN
                    <i class="fa fa-arrow-right ms-3"></i>
                    </a> -->
                <!-- </li> -->
            <!-- @endguest -->
            <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">LOGIN<i class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
        
    </nav>
    <!-- Slideshow container -->
    <style>
        .containerr{
            width:100%;
            overflow:hidden;
           /* max-height:350px; */

        }
        .containerr img{
            object-fit: cover; /* Do not scale the image */
  object-position: center; /* Center the image within the element */
  width: 100%;
  max-height: 350px;
  margin-bottom: 0;
        }
    
    </style>
    <div class="container containerr my-3">

        <img src="{{  asset('images/tempat/'.$arenas[0]['tempats']['image']) }}" alt="Girl in a jacket" style="width:100%" >
    </div>    
    
    <div class="container my-3">
    <div class="mt-5 mb-5">
    <section class="py-0">
    <div class="container">
        <!-- <div class="block mt-3">
            <h1><b>Lapangan Latih Jakarta International Stadium</b></h1>
        </div>

        <div class="block">
            <h4>
                    <a class="color--primary font-weight-bold" href="/venue?sportId=1">Football</a>
                
                in <a class="h5 color--primary" href="/venue?cityId=5">Jakarta Utara</a>
            </h4> -->
        </div>
              <h1>  {{ !empty($arenas[0]) ?  $arenas[0]->tempats->name : '' }}</h1>
         
          <div>
            <h4>
                    <a class="color--primary font-weight-bold" href="/venue?sportId=1">Best Badminton Hall in Purwokerto!</a>
            </h4>
        </div>
        </div>
            <div class="row ">
                @foreach($arenas as $arena)
                    <div class="col-lg-4 mb-5">
                        <div class="card" style="width: 18rem;">
                        @if($arena->image)
                            <img src="{{ asset('images/arena/'.$arena['image']) }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Nomer Lapangan : {{ $arena->number }}</h5>
                            <p class="card-text">Harga : Rp{{ number_format($arena->price,2,',','.') }} / Jam</p>
                            <a href="{{ url('booking/create/'. $arena->id)  }}" class="btn btn-primary">Booking</a>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
       

        <div class="container">
            <div class="card">
                <div class="card-header">
                    Jadwal Booking Lapangan
                </div>

                <div class="card-body">
                    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

                    <div id='calendar'></div>
                </div>
            </div>
            
        </div>
<!-- Footer Start -->
<div class="container">
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Brayan Badminton</h4>
                    <a class="btn btn-link" href="about.html">About Us</a>
                    <a class="btn btn-link" href="contac.html">Contact Us</a>
                    <a class="btn btn-link" href="privacy.html">Privacy Policy</a>
                    <a class="btn btn-link" href="tnc.html">Terms & Condition</a>
                    <a class="btn btn-link" href="faq.html">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Jatisari, Sumampir Purwokerto Utara. Banyumas, Jawa Tengah</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 87721191022</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>brayanbadmin01@gmail.com</p>
                    
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/pb.brayanofficial/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                        <!-- <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Payments</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/gopay.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/visa.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/master.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/atmbersama.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/permata.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/bri.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/bni.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/bca.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/qris.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/shopeepay.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Brayan Badminton</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://www.instagram.com/a.faiqoh_/">Alfi Faiqoh</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Footer End -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
            page is now ready, initialize the calendar...


            console.log(bookings)
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: bookings


            });
        });
</script>
</body>
</html>
