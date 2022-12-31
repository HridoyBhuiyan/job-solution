@extends('admin.master')

@section('content')
    <div class="content-wrapper ">

    <section class="first">
        <div class="container">
            <div class="row">
                <div class="col-7 ">
                    <div class="row ptjwrap">

                        <div class="col-sm-9">
                        

                            <h2 class="job-title">{{$data->id}}</h2>

                            <!-- <h3 class="company-name " id="com_name">Bangladesh Honda Pvt. Ltd.<span style="font-weight: normal;"> </span></h3> -->

                            <h3 class="company-name " id="com_name"> {{$data->Cname}} <span style="font-weight: normal;"> </span></h3>

                            <!-- IsPWDUserLogin: 0-->

                            {{$data->category}}




                        </div>

                        <div class="col-sm-3">
                            <div class="com-logo"><img class="img-responsive" alt="" title="company logo" src="images/53357_0.jpg"></div>
                            <div class="view-all-jobs">
                                <a href="javascript:void(5)" id="ViewAllJob" class="sub_window_new_update" data-path="//jobs.bdjobs.com/companyofferedjobs.asp?id=36522&amp;alias=0&amp;companyname=Bangladesh+Honda+Pvt%2E+Ltd%2E" onclick="ga('send', 'event', '/jobdetails.asp', 'click', 'View all jobs of this company from Top', 1);">View all jobs of this company</a>
                            </div>
                        </div>


                    </div>


                    <h5><b>Vacancy</b></h5>
                    <p>{{$data->vacancy}}</p>

                    <p><b>Job Context</b></p>
                    <ul>
                        Manager Accounts will be responsible for the day-to-day aspects of the business`s accounts, Finance and reporting functions of the company. As the Manager Accounts, this position is responsible to maintain all aspects of Finance & Accounts of the concerned Business Unit (BU) as per the requirements of the organization.


                    </ul>
                    <p><b>Job Responsibilities</b></p>
                    <ul>
                        <li> Providing leadership, direction and advice to top management regarding finance and accounting requirements of concerned Business Unit of the company.</li>
                        <li>
                            Managing the processes for financial forecasting and budgets, and overseeing the preparation of all financial reporting. Prepare regular analysis of income and expenditure to assist management in the budget monitoring process.
                        </li>
                        <li>
                            Formulate and administer financial policy to ensure that financial discipline is observed in the concerned BU's effectively and efficiently.
                        </li>
                        <li>
                            Prepare, present and interpret financial reports to the management to direct and supervise the preparation of all fiscal reporting, such as cost accounting, budgets, regulatory authorities and government reports.
                        </li>
                        <li>Review financial reports for ways to reduce costs. Providing strategic recommendations to the Chairman/Managing Director and members of the executive management team regarding the financial decision of concerned BU.</li>
                        <li>Perform any other related duty as directed by the Management.</li>
                        <li>Any other tasks assigned by the management time to time</li>

                    </ul>
                    <p> <b>Employment statue</b> </p>
                    <ul>
                        {{$data->Estatus}}
                    </ul>
                    <p> <b>Work space</b> </p>
                    <ul>
                        {{$data->workplace}}
                    </ul>
                    <p> <b>Educational requirements</b> </p>
                    <ul>
                        {{$data->Erequirements}}
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


                    <a class="btn btn-danger btn-sm m-2" href="{{route('jobList')}}">
                                        
                                        Back
                                    </a>


                </div>



                <div class="card text-white bg-dark mb-3" style="height: 350px; max-width: 18rem;">

                    <div class="job">
                        <div class="card-header">Job Summary</div>
                        <div class="card-body bg-light">
                            <h6 class="card-title text-dark"><b>Published on:</b> {{$data->Pdate}}</h6>
                            <h6 class="card-title text-dark"><b>Vacancy:</b> {{$data->vacancy}}</h6>
                            <h6 class="card-title text-dark"><b>Employment Status: </b> {{$data->Estatus}}</h6>
                            <h6 class="card-title text-dark"><b>Experience: </b>{{$data->Experience}}</h6>
                            <h6 class="card-title text-dark"><b>Gender:  </b> Only males are allowed to apply</h6>
                            <h6 class="card-title text-dark"><b>Age:  </b> Age 20 to 40 years</h6>
                            <h6 class="card-title text-dark"><b>Job Location:   </b> {{$data->Jlocation}}</h6>
                            <h6 class="card-title text-dark"><b>Application Deadline:  </b> {{$data->Ldate}} </h6>



                        </div>

                    </div>
                    
                    <div class="add">


                    </div>



                </div>





                




                
            </div>


           



    </section>
    </div>

@endsection
