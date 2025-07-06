<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script type="text/javascript"
src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="SET_YOUR_CLIENT_KEY_HERE"></script>
<title>Laravel</title>
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
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"></i>Brayan Badminton</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link text-dark ">Home</a>
                <a href="about.html" class="nav-item nav-link text-dark">About</a>
                <a href="courses.html" class="nav-item nav-link active text-primary">Booking</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
                <a href="contact.html" class="nav-item nav-link text-dark">Contact</a>
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
      <div class="container my-5">

        @if(session()->has('message'))
            <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert" id="alert-message">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">{{ __('CREATE BOOKING') }}</h1>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- <form action="{{ url('/booking') }}" method="POST" enctype="">
                                @csrf --}}
                                <input type="text" name="tempat_id" id="tempat_id" value="{{ $arenas->tempat_id }}" hidden>
                                <div class="form-group mb-2">
                                    <label for="time_from">Nama</label>
                                    <input type="text" class="form-control " id="name" name="name" value="{{ old('name') }}" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="time_from">Alamat</label>
                                    <input type="text" class="form-control " id="adress" name="adress" value="{{ old('adress') }}" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="time_from">Phone</label>
                                    <input type="number" class="form-control " id="phone" name="phone" value="{{ old('phone') }}" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="time_from">Harga</label>
                                    <input type="hidden" value="{{ $arenas->price }}" id="price_hour">
                                    <input type="text" class="form-control " id="total_price" name="total_price" value="{{ $arenas->price }}" readonly/>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="arena_id">{{ __('Nomer Lapangan') }}</label>
                                    <select name="arena_id" id="arena_id" class="form-control">
                                            <option selected value="{{ $arenas->id }}">{{ $arenas->number }}</option>
                                    </select>
                                </div>


                                <div class="form-group mb-2">
                                    <label for="time_from">{{ __('Jam Mulai') }}</label>
                                    <input type="text" onclick="date_from()" class="form-control datetimepicker" id="time_from" name="time_from" value="{{ old('time_from') }}" />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="time_to">{{ __('Jam Berakhir') }}</label>
                                    <input type="text" onclick="date_from()" onclick="" class="form-control datetimepicker" id="time_to" name="time_to" value="{{ old('time_to') }}" />
                                </div>
                                <a href='javascript:void(0)' onclick="updatePrice()" id="check-harga" class="btn btn-success">Check Harga</a>
                                <button hidden type="submit" id='btn-block' class="btn btn-primary btn-block">{{ __('Booking') }}</button>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function date_from(){
            document.getElementById('btn-block').setAttribute("hidden", true);
            document.getElementById('check-harga').removeAttribute("hidden");

        }


        function updatePrice(){
            var from = document.getElementById('time_from').value.split(' ')[1];
            var to = document.getElementById('time_to').value.split(' ')[1];

            var result = diff(from, to);
            var hour = result.split(':')[0];

            if (hour === undefined) {
                console.log("This is undefined");
            }

            s = hour.replace(/^0+/, '');

            if(s < 1  ){
                return alert('Minimal Pesan Satu Jam!');
            }

            var price = document.getElementById('price_hour').value * s;
            console.log(price);
            document.getElementById('total_price').value = price;
            document.getElementById('btn-block').removeAttribute("hidden");
            document.getElementById('check-harga').setAttribute("hidden", true);


        }


        function diff(start, end) {
            start = start.split(":");
            end = end.split(":");
            var startDate = new Date(0, 0, 0, start[0], start[1], 0);
            var endDate = new Date(0, 0, 0, end[0], end[1], 0);
            var diff = endDate.getTime() - startDate.getTime();
            var hours = Math.floor(diff / 1000 / 60 / 60);
            diff -= hours * 1000 * 60 * 60;
            var minutes = Math.floor(diff / 1000 / 60);

            // If using time pickers with 24 hours format, add the below line get exact hours
            if (hours < 0)
            hours = hours + 24;

            return (hours <= 9 ? "0" : "") + hours + ":" + (minutes <= 9 ? "0" : "") + minutes;
        }
        console.log('asw2');

        $("button").click(function() {
            // var name     = $("input[name=name]").val();
            // var password = $("input[name=password]").val();
            // var email    = $("input[name=email]").val();
            var name     =  $('#name').val();
            var adress =  $('#adress').val();
            var phone =  $('#phone').val();
            var tempat_id =  $('#tempat_id').val();
            var arena_id =  $('#arena_id').val();
            var total_price =  $('#total_price').val();
            var time_from =  $('#time_from').val();
            var time_to =  $('#time_to').val();

            $.ajax({
                type:'POST',
                url:"{{ url('/booking') }}",
                data:{name:name, adress:adress, phone:phone, tempat_id:tempat_id, arena_id:arena_id, total_price:total_price, time_from:time_from, time_to:time_to},

                success:function(data){
                    window.snap.pay(data.token);

                }
            });
            // $.post("/booking", {
                // name: $('#name'),
                // adress: $('#adress'),
                // phone: $('#phone'),
                // tempat_id: $('#tempat_id'),
                // arena_id: $('#arena_id'),
                // total_price: $('#total_price'),
                // time_from: $('#time_from'),
                // time_to: $('#time_to'),
            // },

            // function(data,status) {
            //     console.log(data);
            // });
        });

        // <button id="pay-button">Pay!</button>


        var dateToday = new Date();
        $('.datetimepicker').datetimepicker({
            minDate: dateToday,
            format: 'YYYY-MM-DD HH:mm',
            locale: 'en',
            sideBySide: true,
            icons: {
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right'
            },
            stepping: 60
        });
    </script>
    </body>
</html>