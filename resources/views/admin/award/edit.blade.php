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
            <form action="{{route('award.update',$data->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <span>*</span>
                  <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{  old('title', $data->title)  }}">
                  <!-- <textarea id="summernote" class="summernote" name="title">{{  old('title', $data->title)  }}</textarea> -->
                  <span class="text-danger"> @error('title'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <span style="color: red;" class="star">*</span>
                  <textarea id="summernote" class="summernote" name="description">{{  old('description', $data->description) }}</textarea>
                  <span class="text-danger"> @error('description'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Image</label>
                  <!-- <input type="file" class="form-control" name="banner_image"> -->
                  <input type="file" value="{{old('image')}}" accept="image/png, image/gif, image/jpeg, image/jpg" name="image" onchange="maxfilesize(this);" class="input_class w-50 inline-block" id="image" />
                  @if($data->image)
                  <img src="{{ URL::asset('/admin/uploads/award/'.$data->image)}}" style="width:50px;height:50px;border-radius:50%;border:1px solid#ddd;">
                  @endif
                  <input type="hidden" name="olduplode" class="input_class w-50 inline-block" value="<?php echo !empty($data->image) ? $data->image : ''; ?>" />
                  <span class="txtimage_error" style="color:red;"></span>
                  @if($errors->has('image'))
                  <p class="text-danger">{{ $errors->first('image') }}</p>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <span style="color: red;" class="star">*</span>
                  <input type="text" class="form-control" name="date"  value="{{$data->date}}">
                  <span class="text-danger"> @error('date'){{$message}} @enderror</span>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Select Status</label>
                  <select name="status" class="input_class form-control" id="status" autocomplete="off">
                    <option value=""> Select </option>
                    <?php
                    $statusArray = get_status();
                    foreach ($statusArray as $key => $value) {
                    ?>
                      <option value="<?php echo $key; ?>" <?php if ((!empty($data->status) ? $data->status : old('status')) == $key) echo "selected"; ?>>
                        <?php echo $value; ?></option>
                    <?php  } ?>
                  </select>
                  @error('status')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                
               

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
                <a onclick="history.back()" class="btn btn-primary">Back</a>
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
  @endsection