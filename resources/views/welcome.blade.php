<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    
    <!-- load font awesome for icons -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="sass/googlemap.scss" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class=""></i>Brayan Badminton</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Booking</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
                <a href="contact.html" class="nav-item nav-link">Contact</a>
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
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><img
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
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/BA1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Tempat Penyewaan Badminton Online Terbaik di Purwokerto</h5>
                                <h1 class="display-3 text-white animated slideInDown">Platform Penyewaan Lapangan Badminton Online Terbaik!</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Menyediakan berbagai tempat penyewaan lapangan badminton terbaik yang adai di daerah Purwokerto.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Booking Now</a>
                                <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/BA2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Tempat Penyewaan Badminton Online Terbaik di Purwokerto</h5>
                                <h1 class="display-3 text-white animated slideInDown">Pesan Lapangan Badminton Dari Rumah Anda!</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Pemesanan lapangan badminton di daerah Purwokerto lebih mudah melalui gadget anda.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Booking Now</a>
                                <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Booking Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

 
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4" style= "justify-content: center">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-map text-primary mb-4"></i>
                            <h5 class="mb-3">LOKASI</h5>
                            <p>Memudahkan mencari tempat lapangan badminton di daerah Purwokerto</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-calendar text-primary mb-4"></i>
                            <h5 class="mb-3">EVENT</h5>
                            <p>Menyediakan layanan dan harga terbaik untuk yang mengadakan acara tournamen olahraga</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-mobile text-primary mb-4"></i>
                            <h5 class="mb-3">WEBSITE</h5>
                            <p>Pemesanan lapangan badminton dapat dilakukan melalui website atau secara online</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fas fa-wallet text-primary mb-4"></i>
                            <h5 class="mb-3">PEMBAYARAN</h5>
                            <p>Menyediakan pembayaran melalui online demi keamanan dan kenyamanan pelanggan </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Lokasi</h6>
                <h1 class="mb-5">PILIH TEMPAT BERMAIN KAMU</h1>
            </div>
    <div class="container my-5">
        <div class="row">
         @foreach($tempats as $tempat)
            <div class="col-lg-4 mb-5">
                <div class="card" style="width: 18rem;">
                <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                @if($tempat->image)
                     <img src="{{ asset('images/tempat/'.$tempat->image) }}" class="card-img-top" alt="...">
                @endif
            </div>  
        </div>
        <div class="text-center p-4 pb-0">
        <!-- <h3 class="mb-0">$149.00</h3> -->
        <!-- <a href="{{ url('detail-booking/'. $tempat->id) }}" class="btn btn-primary">Detail</a> -->
        <h5 class="card-title">{{ $tempat->name }}</h5>
            
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small></small>
            </div>
            
                            <!-- <h5 class="mb-4">Nama Badminton : {{ $tempat->name }}</h5> -->
                            <!-- <h5 class="mb-4">Web Design & Development Course for Beginners</h5> -->
                        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ url('detail-booking/'. $tempat->id) }}">Lihat Jadwal</a>
</div> <br>
                    <div class="d-flex border-top">
                        <a href='https://wa.me/{{ $tempat->waa }}' class="btn flex-fill text-center py-2">
                            <small><i class="fa fa-phone text-primary me-2" ></i>{{ $tempat->operator }}</small>
                        </a>
                        <a class="btn flex-fill text-center py-2">
                            <small><i class="fa fa-clock text-danger me-2" ></i>{{ $tempat->tutup }}</small>
                        </a>
                        <a href='{{ $tempat->maps }}' class="btn flex-fill text-center py-2">
                            <small><i class="fa fa-map-marker-alt text-primary me-2" ></i>Maps</small></a>
                    </div>
                <!-- <div class="card-body">
                    {{-- <p class="card-text">Harga : Rp{{ number_format($tempat->price,2,',','.') }} / Jam</p> --}}
                    {{-- <a href="{{ route('booking', ['number' => $tempat->number])  }}" class="btn btn-primary">Booking</a> --}}
                </div> -->
            </div>
        </div>
         @endforeach
    </div>  
      
            <!-- <div class="container my-5">
            <div class="row">
                @foreach($tempats as $tempat)
                    <div class="col-lg-4 mb-5">
                        <div class="card" style="width: 18rem;">
                        @if($tempat->image)
                            <img src="{{ asset('images/tempat/'.$tempat->image) }}" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Nama Badminton : {{ $tempat->name }}</h5>
                            <a href="{{ url('detail-booking/'. $tempat->id) }}" class="btn btn-primary">Detail</a>
                            {{-- <p class="card-text">Harga : Rp{{ number_format($tempat->price,2,',','.') }} / Jam</p> --}}
                            {{-- <a href="{{ route('booking', ['number' => $tempat->number])  }}" class="btn btn-primary">Booking</a> --}}
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> -->

    
    <!-- Courses End -->

    <!-- Jadwal Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">JADWAL</h6>
                <h1 class="mb-5">LIHAT JADWAL HARI INI</h1>
            </div>
            <div class="container">
            <div class="card">
                <div class="card-body">
                    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

                    <div id='calendar'></div>
                </div>
            </div>
        </div> -->


<!-- WHATSAPP MENGAMBANG -->
        <!-- <style>
           
        .wafixed {
    position: fixed;
    right: 30px;
    bottom: 30px;
    z-index: 1;
} 
</style>
    <a class="wafixed" href="https://wa.me/87721191022" target="_blank"><span class="fa-stack fa-lg">
    <i class="fa fa-circle fa-stack-2x text-success"></i>
    <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
</span></a> -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/gambar1.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to Brayan Badminton</h1>
                    <p class="mb-4">Website yang menyediakan pemesanan lapangan badminton khusus daerah Purwokerto secara online.</p>
                    <p class="mb-4">Pembayaran dapat melalui online, jadwal selalu up to date setiap hari dan informasi lengkap sesuai dengan yang ada di tempat.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pemesanan Melalui Online</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pembayaran Melalui Online</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Lokasi Lapangan Badminton Terbaik</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Jadwal Up to Date</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Harga Terjangkau</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Kualitas Lapangan Terjamin</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- GALERI Start -->
    <!-- <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">GALERI</h6>
                <h1 class="mb-5">GALERI PEMAIN</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-1.jpg" alt=""> -->
                                <!-- <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div> -->
                            <!-- </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-2.jpg" alt=""> -->
                                <!-- <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div> -->
                            <!-- </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-3.jpg" alt=""> -->
                                <!-- <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div> -->
                            <!-- </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;"> -->
                        <!-- <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                            <small class="text-primary">49 Courses</small>
                        </div> -->
                    <!-- </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Categories Start -->


    


    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Pelatih</h6>
                <h1 class="mb-5">Pelatih Handal</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Instructor Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->

    <div id="map"></div>
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">TESTIMONI</h6>
                <h1 class="mb-5">APA KATA MEREKA?</h1>
            </div>
            
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">KEMAL SABNANI</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"Website Brayan Badminton dampak positif untuk kami. Adanya fitur jadwal, komunitas badminton dapat berkumpul & bermain dengan website ini."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">PRADANA SUGARDA</h5>
                    <p>Buruh</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"Dengan website Brayan Badminton pengguna bisa mendapatkan informasi jadwal, melaakukan pemesanan lapangan, bahkan mencari tim untuk main. Sebagai pengelola fasilitas olahraga baru, kami sangat terbantu dengan website pemesanan ini."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">FERALDO AXEL PAULUS</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"Mengatur jadwal lapangan menjadi lebih mudah dengan website brayan badminton. Fitur online booking membuat traffic penyewaan lapangan meningkat, bahkan pada waktu yang sama sebelumnya sepi."</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">SUGENG SUTOPO</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">"Kami sangat merekomendasikan website ini karena sangat membantu mengakses data pemesanan lapangan secara online. Data transaksi harian, mingguan, hingga bulanan juga kami dapatkan secara up-to-date."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        
    <!-- Footer Start -->
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
                            <img class="img-fluid bg-light p-1" src="img/gopay.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/visa.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/master.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/atmbersama.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/permata.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/bni.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/bni.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/bca.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/qris.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/shopeepay.png" alt="">
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
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script id="midtrans-script" type="text/javascript" src="https://api.midtrans.com/v2/assets/js/midtrans-new-3ds.min.js" data-environment="sandbox" data-client-key="<INSERT YOUR CLIENT KEY HERE>"></script>
    <script src="js/googlemap.js" defer></script>
	

    <script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...

            bookings={!! json_encode($bookings) !!};

            console.log(bookings)
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: bookings


            });
        });
</script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>