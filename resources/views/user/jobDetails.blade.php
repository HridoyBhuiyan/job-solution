@extends('user.layout.master')
@section('content')
    <section class="first p-4">
        <div class="container">
            <div class="row">
                <div class="col-7 ">
                    <div class="row ptjwrap">

                        <div class="col-sm-9">
                            

                            <h2 class="job-title">{{$data->JPname}}</h2>

                            <!-- <h3 class="company-name " id="com_name">Bangladesh Honda Pvt. Ltd.<span style="font-weight: normal;"> </span></h3> -->

                            <h3 class="company-name " id="com_name">{{$data->Cname}}<span style="font-weight: normal;"> </span></h3>

                            <!-- IsPWDUserLogin: 0-->




                        </div>

                        <div class="col-sm-3">
                            <div class="com-logo"><img class="img-responsive" alt="" title="company logo" src="images/53357_0.jpg"></div>
                            <div class="view-all-jobs">
                                <a href="javascript:void(5)" id="ViewAllJob" class="sub_window_new_update" data-path="//jobs.bdjobs.com/companyofferedjobs.asp?id=36522&amp;alias=0&amp;companyname=Bangladesh+Honda+Pvt%2E+Ltd%2E" onclick="ga('send', 'event', '/jobdetails.asp', 'click', 'View all jobs of this company from Top', 1);">View all jobs of this company</a>
                            </div>
                        </div>


                    </div>


                    <h5><b>Vacancy : </b></h5> 
                    <ul>
                    {{$data->vacancy}}

                    </ul>
                    
                    <p><b>Job Context</b></p>
                    <ul>
                        Manager Accounts will be responsible for the day-to-day aspects of the business`s accounts, Finance and reporting functions of the company. As the Manager Accounts, this position is responsible to maintain all aspects of Finance & Accounts of the concerned Business Unit (BU) as per the requirements of the organization.


                    </ul>
                    <p><b>Job Responsibilities</b></p>
                    <ul>
                    {{$data->Jdescription}}

                    </ul>
                    <p> <b>Employment statue</b> </p>
                    <ul>
                    {{$data->Estatus}}
                    </ul>
                    <p> <b>Work space</b> </p>
                    <ul>
                    {{$data->vacancy}}
                    </ul>
                    <p> <b>Educational requirements</b> </p>
                    <ul>
                    {{$data->Erequirements}}
                    </ul>
                    <p> <b>Additional Requirements</b> </p>
                    <ul>
                        <li>
                            Age 30 to 35 years
                        </li>
                        <li>
                            Only males are allowed to apply
                        </li>
                    </ul>











                    <ul>
                        <li>Master of Business Studies (MBS) in Accounting</li>
                        <li>Masters in Accounts & Finance with professional Qualification .</li>
                        <li>At least C.A. course completed. Part qualified are preferred</li>
                        <li>Skills Required: Able to work under pressure,Energetic and self-motivated,Enthusiastic,Hard Working</li>
                    </ul>
                    <p> <b>Additional Requirements</b> </p>
                    <ul>
                        <li>
                            Age 30 to 35 years
                        </li>
                        <li>
                            Only males are allowed to apply
                        </li>
                    </ul>


                </div>

                <div class="card text-white bg-dark mb-3" style="height: 350px; max-width: 18rem;">

                    <div class="job">
                        <div class="card-header">Job Summary</div>
                        <div class="card-body bg-light">
                            <h6 class="card-title text-dark"><b>Published on:</b> 25th may 2021</h6>
                            <h6 class="card-title text-dark"><b>Vacancy:</b> 4</h6>
                            <h6 class="card-title text-dark"><b>Employment Status: </b> Full-time</h6>
                            <h6 class="card-title text-dark"><b>Experience: </b> At least 5 years</h6>
                            <h6 class="card-title text-dark"><b>Gender:  </b> Only males are allowed to apply</h6>
                            <h6 class="card-title text-dark"><b>Age:  </b> Age 20 to 40 years</h6>
                            <h6 class="card-title text-dark"><b>Job Location:   </b> Dhaka</h6>
                            <h6 class="card-title text-dark"><b>Application Deadline:  </b> 30 Jun 2021 </h6>


                        </div>

                    </div>

                   
                    <div class="cardPanel border border-secondary" style="width: 17rem;">


                        <div class="list">
                            <ul class="list-group list-group-flush bg-dark">




                                <li class="list-group-item">Email Share</li>
                                <li class="list-group-item">Print </li>
                                <li class="list-group-item">Another job</li>
                            </ul>

                        </div>
                        <div class="card-body bg-success">

                            <p class="card-title text-dark ">এই চাকরির জন্য বিজ্ঞাপন দাতা প্রতিষ্ঠান আপনার কাছ থেকে কোন অর্থ চাইলে অথবা কোন ধরনের ভুল বা বিভ্রান্তিকর তথ্য দিলে অতি সত্ত্বর আমাদেরকে জানান অথবা জবটি রিপোর্ট করুন ।</p>

                        </div>

                        <div class="card-body">
                            <a href="#" class="card-link"><i class="fab fa-facebook-square"></i></a>
                            <a href="#" class="card-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="card-link"> <i class="fab fa-linkedin "></i></a>

                            <a href="#" class="card-link">Another link</a>

                        </div>
                    </div>

                    <div class="add">


                    </div>



                </div>





                <div class="col">
                    <div class="add" style="max-width: 4rem;">
                        <img src="images/long.png" alt="">
                        <img src="images/long.png" alt="">


                    </div>
                </div>
                <img src="images/add5.png" alt="">



                <div class="last">
                    <div class="card text-center">

                        <div class="card-body">
                            <h5 class="card-title">Read Before Apply</h5>
                            <h3 class="card-text"> {{$data->Cname}}</h3>
                            <a href="#" class="btn btn-success">Apply </a>
                        </div>
                        <div class="card-footer text-muted">
                            <p>Application Deadline : <b> 28 May 2021</b></p>
                        </div>
                        <div class="company-info">
                            
                                <h5>Company Information</h5>

                                <!-- <span>উপায় (UCB Fintech Company Limited)</span> -->

                                <!-- <span>Priyanka Group</span> -->

                                <span>Priyanka Group</span>

                                <span>ঠিকানা: Priyanka City, Sector # 12, Road # 3, Uttara, Dhaka.</span>

                                <span>ওয়েব: <a href="http://www.priyanka.com.bd" target="_blank">www.priyanka.com.bd</a></span>

                                

                            </div>

                        </div>

                    </div>
                </div>




                <h6>BdJobs</h6>
            </div>




    </section>
@endsection
