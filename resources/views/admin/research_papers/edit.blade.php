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
                        <form method="POST" action="{{ route('research-paper.update',$researchs->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="year">Year</label>
                                    <span style="color: red;" class="star">*</span>
                                    <select name="year" class="input_class form-control" id="year" autocomplete="off">
                                        <option value="" selected="" disabled=""> Select </option>
                                        @foreach ($SelectYears as $id => $year)
                                        <option value="{{ $id }}" @if($id==old('year', $researchs->year)) selected @endif>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('year'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <span style="color: red;" class="star">*</span>
                                    <select name="category" class="input_class form-control" id="category" autocomplete="off">
                                        <option value="" selected disabled> Select </option>
                                        @foreach ($SelectCategories as $id => $category)
                                        <option value="{{ $id }}" {{ $id == old('category', $researchs->category) ? 'selected' : '' }}>
                                            {{ $category }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('category'){{ $message }}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <span style="color: red;" class="star">*</span>
                                    <textarea id="summernote" class="summernote" name="description">{{ old('description', $researchs->description) }}</textarea>
                                    <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link', $researchs->link) }}" id="buynow_link">
                                    <span class="text-danger">@error('link'){{$message}}@enderror</span>
                                </div>

                                <button type="submit" class="btn btn-primary">Edit</button>
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