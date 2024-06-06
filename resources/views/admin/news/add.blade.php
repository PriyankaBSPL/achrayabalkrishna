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
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">

            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{URL::to('/admin/news')}}" method="post" enctype="multipart/form-data">
              @csrf

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <span style="color: red;" class="star">*</span>
                  <!-- <input type="text" class="form-control" name="title" placeholder="Enter Title"> -->
                  <textarea id="summernote" class="summernote" name="title">{{ old('title') }}</textarea>
                  <span class="text-danger"> @error('title'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                                    <label for="description">Description</label>
                                    <span style="color: red;" class="star">*</span>
                                    <textarea id="summernote" class="summernote" name="description">{{ old('description') }}</textarea>
                                    <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Image</label>
                  <span style="color: red;" class="star">*</span>
                  <input type="file" class="form-control" id="thumbnail_img" name="image" onchange="maxfilesize(this)">
                  <span class="thumbnail_img_error" style="color:red;"></span>
                  <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <span style="color: red;" class="star">*</span>
                  <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                  <span class="text-danger"> @error('date'){{$message}} @enderror</span>
                </div>
                
                                <div class="form-group">
                  <label for="exampleInputEmail1">Read More Link</label>
        
                  <input type="text" class="form-control" name="read_more_link" placeholder="Enter Link" value="{{ old('read_more_link') }}">
                  <span class="text-danger"> @error('read_more_link'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Select Status</label>
                  <span style="color: red;" class="star">*</span>
                  <select name="status" class="input_class form-control" id="status" autocomplete="off">
                    <option value=""> Select </option>
                    <?php
                    $statusArray = get_status();
                    foreach ($statusArray as $key => $value) {
                    ?>
                      <option value="<?php echo $key; ?>" <?php if (old('status') == $key) echo "selected"; ?>><?php echo $value; ?></option>
                    <?php  } ?>
                  </select>
                  @if($errors->has('status'))
                  <span class="text-danger">{{ $errors->first('status') }}</span>
                  @endif
                </div>

              



              </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
                <a onclick="history.back()" class="btn btn-primary">Back</a>
              </div>
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