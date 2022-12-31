

@extends('Admin.master')



@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Information</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

        <form action="{{route('jobSave')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">General</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="form-group">
                                    <label for="inputName">Company Name</label>
                                    <input type="text" id="Cname" name="Cname" class="form-control">

                                    @error('Cname')
                                        <span class='text_success'>{{$message}}</span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Job_Post Name</label>
                                    <input type="text" id="JPname" name="JPname" class="form-control">

                                </div>
                                
                                <div class="form-group">
                                    <label for="inputName">Category Name</label>
                                    
                                   
                                     <select id="category" name="category" class="form-control">

                                     @foreach($categories as $category)

                                     <option >{{$category->Category_name}}</option>

                                     @endforeach

                                     </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputName">Vacancy</label>
                                    <input type="integer" id="vacancy" name="vacancy" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Job Responsibilities</label>
                                    <textarea id="Jdescription" name="Jdescription" class="form-control" rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputName">Employment Status</label>
                                    <input type="text" id="Estatus" name="Estatus" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Workplace</label>
                                    <input type="text" id="workplace" name="workplace" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Educational Requirements</label>
                                    <textarea id="Erequirements" name="Erequirements" class="form-control" rows="4"></textarea>
                                </div>


                                <div class="form-group">
                                    <label for="inputDescription">Experience Requirements</label>
                                    <textarea id="Experience" name="Experience" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Job Location</label>
                                    <input type="text" id="Jlocation" name="Jlocation" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Salary</label>
                                    <input type="integer" id="Salary" name="Salary" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Other Benefits</label>
                                    <textarea id="Obenefits" name="Obenefits" class="form-control" rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="inputClientCompany">Post date </label>
                                    <input type="date" id="Pdate" name="Pdate" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="inputClientCompany">Last date to apply </label>
                                    <input type="date" id="Ldate" name="Ldate" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputName">Company logo</label>
                                    <input type="file" name="logo" class="form-control">

                                </div>

                                <a href="#" class="btn btn-secondary">Cancel</a>


                                <input type="submit" value="Create new Porject" class="btn btn-success float-right">

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
            </form>





            <div class="row">
                <div class="col-12">
                    <a href="{{route('jobList')}}"> <input type="submit" value="Back to list" class="btn btn-success float-right"></a>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    
@endsection
