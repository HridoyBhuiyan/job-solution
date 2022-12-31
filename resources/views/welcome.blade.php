
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Job_Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction Company Website Template" name="keywords">
    <meta content="Construction Company Website Template" name="description">

    <!-- Favicon -->
    <link href="frontend/img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="F:\Serve Human Foundation\fontawesome-free-5.15.2-web\fontawesome-free-5.15.2-web\css\all.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- CSS {{asset('frontend')}}/libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/{{asset('frontend')}}/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/slick/slick.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/dist')}}/UserCss/style.css" rel="stylesheet">
    <link href="{{asset('frontend/dist')}}/css/all.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="logo">
                        <a href="index.html">
                            <img src="{{asset('frontend')}}/dist/img/logo1.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 d-none d-lg-block">
                    <div class="row">
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-calendar"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Opening Hour</h3>
                                    <p>Mon - Fri, 8:00 - 9:00</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Call Us</h3>
                                    <p>+012 345 6789</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="top-bar-item">
                                <div class="top-bar-icon">
                                    <i class="flaticon-send-mail"></i>
                                </div>
                                <div class="top-bar-text">
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">Jobs</a>
                        <a href="#" class="nav-item nav-link">Employer</a>
                        <a href="#" class="nav-item nav-link">Training</a>
                        <a href="#" class="nav-item nav-link">Blog</a>
                        
                    </div>

                    <div class="navbar-nav ml-auto">
                        
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
                    </div>

                    

            </nav>
        </div>
{{--        <a href="{{route('postjob')}}" class="nav-item nav-link">Post A Job</a>--}}
    </div>
    <!-- Nav Bar End -->


    <!-- Carousel Start -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('frontend')}}/dist/img/carousel-1.jpg" alt="Carousel Image">
                <div class="carousel-caption">
                    <h1 class="animated fadeInLeft">Find The Right Job</h1>

                    

                    <a class="btn animated fadeInUp"
                       href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend')}}/dist/img/carousel-2.jpg" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">Dream jobs</p>
                    <h1 class="animated fadeInLeft">Build your career</h1>
                    <a class="btn animated fadeInUp"
                       href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend')}}/dist/img/carousel-3.jpg" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">We Are Trusted</p>
                    <h1 class="animated fadeInLeft">For Your Dream Job</h1>
                    <a class="btn animated fadeInUp"
                       href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->

    <!-- browse catagary start -->
    <section class="catagori">
        <div class="browse_catagori">
            <div class="row">
                <div class="col-9">
                    <div class="catagory_wise">
                        <div class="browse_head">
                            <i class="fas fa-list"></i>
                            <h3>Brows Category</h3>
                        </div>
                        <div class="row">
                            <div class="col-4">
                            
                                <ul>
                                    <li><a href="#">Accounting/Finance (140)</a></li>
                                    <li><a href="#">Bank/ Non-Bank Fin. Institution (36)</a></li>
                                    <li><a href="#">Commercial/Supply Chain (105)</a></li>
                                    <li><a href="#">Education/Training (88)</a></li>
                                    <li><a href="#">Engineer/Architects (161)</a></li>
                                    <li><a href="#">Garments/Textile (304)</a></li>
                                    <li><a href="#"> HR/Org. Development (70)</a></li>
                                    <li><a href="#">Gen Mgt/Admin (126)</a></li>
                                    <li><a href="#">Design/Creative (38)</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                
                                <ul>
                                    <li><a href="#">
                                   </a></li>
                                    <li><a href="#">
                                            Beauty Care/ Health & Fitness (1)</a></li>
                                    <li><a href="#">
                                            Electrician/ Construction/ Repair (26)
                                        </a></li>
                                    <li><a href="#">IT & Telecommunication (294)
                                        </a></li>
                                    <li><a href="#">Marketing/Sales (340)
                                        </a></li>
                                    <li><a href="#">Customer Support/Call Centre (36)</a></li>
                                    <li><a href="#">Media/Ad./Event Mgt. (29)</a></li>
                                    <li><a href="#">
                                            Medical/Pharma (132)</a></li>
                                </ul>
                                
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li><a href="#">Accounting/Finance (140)</a></li>
                                    <li><a href="#">Bank/ Non-Bank Fin. Institution (36)</a></li>
                                    <li><a href="#">Commercial/Supply Chain (105)</a></li>
                                    <li><a href="#">Education/Training (88)</a></li>
                                    <li><a href="#">Engineer/Architects (161)</a></li>
                                    <li><a href="#">Garments/Textile (304)</a></li>
                                    <li><a href="#"> HR/Org. Development (70)</a></li>
                                    <li><a href="#">Gen Mgt/Admin (126)</a></li>
                                    <li><a href="#">Design/Creative (38)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="browse_head">
                            <i class="fab fa-accusoft"></i>
                            <h3> স্পেশাল স্কিল্‌ড জব্‌স</h3>
                        </div>
                        <div class="row">
                        @foreach($datas as $data)
                            <div class="col-4">
                            
                                <ul>
                                    <li><a href="#"> {{$data->JPname}}
                                        </a></li>
                                    

                                </ul>
                            </div>
                            @endforeach
                            <div class="col-4">
                                <ul>
                                    
                                    

                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    
                                    

                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="add">
                        <img src="{{asset('frontend')}}/dist/img/add.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- browse catogary start -->

    <!-- govement jobs  section start -->
    <section class="gov_jobs">
        <div class="gov-job-h">
            <h2>Latest Govment Job</h2>
            <p>Find all information about Govement jobs</p>
        </div>
        <div class="owl-carousel">
            <div><img src="{{asset('frontend')}}/dist/img/carousel-1.jpg" alt=""></div>
            <div><img src="{{asset('frontend')}}/dist/img/carousel-2.jpg" alt=""></div>
            <div><img src="{{asset('frontend')}}/dist/img/carousel-3.jpg" alt=""></div>
            <div><img src="{{asset('frontend')}}/dist/img/carousel-1.jpg" alt=""></div>
            <div><img src="{{asset('frontend')}}/dist/img/carousel-2.jpg" alt=""></div>
            <div><img src="{{asset('frontend')}}/dist/img/carousel-3.jpg" alt=""></div>
            <div><img src="{{asset('frontend')}}/dist/img/carousel-1.jpg" alt=""></div>
        </div>

        <div class="button">
            <a href="{{route('user.govjob')}}">All Govs Job</a>
        </div>
    </section>
    <!-- govement jobs  section end -->

    <!-- hot job section  -->
    <section class="hot_job">
        <div class="hot_job_heading">
            <i class="fab fa-gripfire"></i>
            <h2> <span>HOT</span> JOBS</h2>
        </div>
        
        <div class="jobs">
            <div class="row">
            @foreach($datas as $data)
                <div class="col-3">
               

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="{{route('user.jobdetails',$data->id)}}"><h5 class="card-title">{{$data->JPname}}</h5></a>
                                    <p class="card-text">{{$data->Cname}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endforeach
                
                
            </div>


            
        </div>
    </section>
    <!-- hot job section end -->

    <!-- tender Section section  -->
    <section class="tender hot_job">
        <div class=" hot_job_heading">
            <i class="fas fa-briefcase tender_job"></i>
            <h2> TENDER/ EOI</h2>
        </div>
        <div class="jobs">
            <div class="row">
                <div class="col-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img style="height:100px; width:100px;" src="{{asset('image/logo/'.$data->logo)}}" alt="">
                           
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            

           

            

            
        </div>
    </section>
    <!-- Tender section end -->

    <section class="career">
        <div class="career_solution">
            <h2>CAREER SOLUTION</h2>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('frontend')}}/dist/img/intern.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Internship</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('frontend')}}/dist/img/online-course.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">E-Learnign</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('frontend')}}/dist/img/intern.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Internship</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('frontend')}}/dist/img/intern.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Internship</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-contact">
                        <h2>Office Contact</h2>
                        <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope"></i>info@example.com</p>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h2>Services Areas</h2>
                        <a href="">Building Construction</a>
                        <a href="">House Renovation</a>
                        <a href="">Architecture Design</a>
                        <a href="">Interior Design</a>
                        <a href="">Painting</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-link">
                        <h2>Useful Pages</h2>
                        <a href="">About Us</a>
                        <a href="">Contact Us</a>
                        <a href="">Our Team</a>
                        <a href="">Projects</a>
                        <a href="">Testimonial</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="newsletter">
                        <h2>Newsletter</h2>
                        <p>
                            Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare
                            velit non vulpu
                        </p>
                        <div class="form">
                            <input class="form-control" placeholder="Email here">
                            <button class="btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-menu">
            <div class="f-menu">
                <a href="">Terms of use</a>
                <a href="">Privacy policy</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript {{asset('frontend')}}/libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('frontend')}}/lib/wow/wow.min.js"></script>
<script src="{{asset('frontend')}}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('frontend')}}/lib/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('frontend')}}/lib/lightbox/js/lightbox.min.js"></script>
<script src="{{asset('frontend')}}/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('frontend')}}/lib/counterup/counterup.min.js"></script>
<script src="{{asset('frontend')}}/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
