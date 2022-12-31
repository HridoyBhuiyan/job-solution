@extends('user.master')

@section ('content')
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

                    <div class="scarch">
                        <div class="keyword">
                            <i class="fas fa-tag"></i>
                            <p style="display: inline;">serch by keyword</p>
                        </div>
                        <div class="dropdown">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">Action</button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button class="dropdown-item" type="button">Something else here</button>
                                </div>
                            </div>
                        </div>

                        <div class="scarce">
                            <a href="#">search</a>
                        </div>
                    </div>

                    <a class="btn animated fadeInUp"
                       href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend')}}/dist/img/carousel-2.jpg" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">Dream Job</p>
                    <h1 class="animated fadeInLeft">Build your career</h1>
                    <a class="btn animated fadeInUp"
                       href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('frontend')}}/dist/img/carousel-3.jpg" alt="Carousel Image">
                <div class="carousel-caption">
                    <p class="animated fadeInRight">We Are Trusted</p>
                    <h1 class="animated fadeInLeft">For Your Dream Home</h1>
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
            <p>Find all information about Government jobs</p>
        </div>
        

        <div class="button">
            <a href="">All Govs Job</a>
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
            @foreach($hotjobs as $data)
                <div class="col-3">
               

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="{{asset('image/logo/'.$data->logo)}}" style="height:100px; width:100px;m-4px;"> 
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
                
                <div class="col-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <i class="fas fa-user-md"></i>
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
                <div class="col-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <i class="fas fa-user-md"></i>
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
                <div class="col-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <i class="fas fa-user-md"></i>
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

            <section class="gov_jobs">
        
        

        <div class="gov-job-h button">
            <a href="">All Hot Job</a>
        </div>
    </section>


            
        </div>
    </section>
    <!-- hot job section end -->

    <!-- tender Section section  -->
    <section class="tender hot_job">
        <div class=" hot_job_heading">
            <i class="fas fa-briefcase tender_job"></i>
            <h2> TENDER</h2>
        </div>
        <div class="jobs">
            <div class="row">
                @foreach($tender as $data)
                
                <div class="col-3">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="{{asset('frontend')}}/dist/img/intern.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$data->JPname}}</h5>
                                    <p class="card-text">Some test text</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
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
                            <h5 class="card-title"><a href="{{route('user.intern')}}"> Internship </a></h5>
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
                            <h5 class="card-title">Training</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('frontend')}}/dist/img/intern.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Courses</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection