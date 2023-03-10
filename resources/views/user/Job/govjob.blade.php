@extends('User.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center activity">
                
                <div><span class="activity-done">Government Job List</span></div>
                <div class="icons"><i class="fa fa-search"></i><i class="fa fa-ellipsis-h"></i></div>
            </div>
            <div class="mt-3">
                <ul class="list list-inline">
                    @foreach($govt as $data)

                    <li class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center"><i class="fa fa-check-circle checkicon"></i>
                            <div class="ml-2">
                                <h6 class="mb-0">{{$data->JPname}}</h6>
                                <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                    <div><i class="fa fa-calendar-o"></i><span class="ml-2">22 May 2020 11:30 PM</span></div>
                                    <div class="ml-3"><i class="fa fa-clock-o"></i><span class="ml-2">6h</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-column mr-2">
                                <div class="profile-image"><a href="{{route('user.jobdetails',$data->id)}}" class="btn btn-primary btn-sm" >
                                        <i class="fas fa-folder">
                                        </i>
                                        View job details
                                    </a>
                        </div>
                    </li>

                    @endforeach






                    <!-- <li class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center"><i class="fa fa-check-circle checkicon"></i>
                            <div class="ml-2">
                                <h6 class="mb-0">User Interview</h6>
                                <div class="d-flex flex-row mt-1 text-black-50 date-time">
                                    <div><i class="fa fa-calendar-o"></i><span class="ml-2">25 May 2020 12:34 AM</span></div>
                                    <div class="ml-3"><i class="fa fa-clock-o"></i><span class="ml-2">4h</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-column mr-2">
                                <div class="profile-image"><img class="rounded-circle" src="https://i.imgur.com/xbxOs06.jpg" width="30"><img class="rounded-circle" src="https://i.imgur.com/wwd9uNI.jpg" width="30"></div><span class="date-time">12/5/2020 12:55</span>
                            </div><i class="fa fa-ellipsis-h"></i>
                        </div>
                    </li> -->
                   
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection