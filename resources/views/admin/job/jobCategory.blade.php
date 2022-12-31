

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

        <form action="{{route('categorySave')}}" method="post" enctype="multipart/form-data">
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
                                    <label for="inputName">Category Name</label>
                                    <input type="text" id="Category_name" name="Category_name" class="form-control">

                            </div>
                                
                                

                                <a href="#" class="btn btn-secondary">Cancel</a>


                                <input type="submit" value="Create new category" class="btn btn-success float-right">

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
            </form>





            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    
@endsection
