@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="overflow-y: auto;">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{$title}}</li>
                    </ol>
                </div>
            </div>
        </div> <!--/.container-fluid  -->
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="get" action="{{route('exportToExcel')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="year">Select Year:</label>
                                    <select name="year" class="input_class form-control" id="year" autocomplete="off">
                                        <option value="" selected="" disabled=""> Select </option>
                                        @foreach ($SelectYears as $id => $year)
                                        <option value="{{ $id }}" @if(old('year')==$id) selected @endif>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('year'){{$message}}@enderror</span>
                                </div>

                                <button type="submit" class="btn btn-primary">Export to Excel</button>
                                <a href="{{route('research-paper.index')}}" class="btn btn-primary">Back</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
@endsection

