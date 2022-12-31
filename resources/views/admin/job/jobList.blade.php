@extends('Admin.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Projects</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Projects</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0 text-white bg-dark">
                    <table class="table table-striped projects">
                        <thead>
                            
                            <th class="text-white bg-dark"   >
                              ID
                            </th>
                            <th class="text-white bg-dark" style="width: 20%">
                                Company Name
                            </th>

                            <th>
                                Job Responsibilities
                            </th>
                            <th style="width: 8%" class="text-center">
                                Last date
                            </th>
                            <th style="width: 8%" class="text-center">
                                logo
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 50%" class="text-center">
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $job)
                        <tr>
                        
                            <tr>
                                <td>
                                    {{$job->id}}

                                </td>

                                <td>
                                    
                                    <br/>
                                    <small>
                                    {{$job->Cname}}
                                    </small>
                                </td>


                                <td>
                                {{$job->Jdescription}}
                                   


                                </td>

                                <td>
                                {{$job->Ldate}}
                                    


                                </td>
                                <td>
                                
                                   <!-- image -->
                                   <img src="{{asset('image/logo/'.$job->logo)}}" style="height:40px; width:70px;"> 


                                </td>

                                <td>
                                {{$job->Estatus}}
                                    


                                </td>

                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{route('jobDetails', $job->id)}}">

                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-success btn-sm" href="{{route('jobEdit',$job->id)}}">
                                    
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{route('jobdelete',$job->id)}}">
                                    
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                    <a class="btn btn-warning btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Approve
                                    </a>
                                </td>
                            </tr>
                       @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->

                
            </div>
            <!-- /.card -->
       
            <div class="row">
                <div class="col-12">
                    <a href="{{route('jobAdd')}}"> <input type="submit" value="Add new job" class="btn btn-success float-right"></a>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>


@endsection

