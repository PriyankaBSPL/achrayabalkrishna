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
                        <form action="{{URL::to('/admin/photoGallery')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <span style="color: red;" class="star">*</span>
                                    <!-- <input type="text" class="form-control" name="title" placeholder="Enter Title"> -->
                                    <input name="title" maxlength="100" minlength="2"
                                        onkeypress="return onlyAlphabets(event,this);" autocomplete="off" type="text"
                                        class="input_class form-control" id="title" value="{{old('title')}}" />
                                    @if($errors->has('title'))
                                        <p class="text-danger">{{ $errors->first('title') }}</p>
                                    @endif                                  </div>
                                <div class="form-group">
                                    <label for="description">Category Description</label>
                                    <!-- <span style="color: red;" class="star">*</span> -->
                                    <textarea name="cat_descriptions" class="summernote"
                                        onkeypress="return onlyAlphabets(event,this);"
                                        id="summernote"><?php echo old('cat_descriptions'); ?></textarea>
                                    @if($errors->has('cat_descriptions'))
                                        <p class="text-danger">{{ $errors->first('cat_descriptions') }}</p>
                                    @endif                                 
                                </div>
                                <div class="form-group">
                                    <label for="description">Main Catgory</label>
                                    <span style="color: red;" class="star">*</span>
                                    <?php if(!isset($cat_id)){ $cat_id=''; ?>
										<?php echo primary_category($cat_id) ?>
									<?php } ?>
                                    @if($errors->has('parent_id'))
                                          <p class="text-danger">{{ $errors->first('parent_id') }}</p>
                                    @endif                             
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Image</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="file"   name="thumbnail"
                                            class="input_class inline-block" id="txtimg"   />
                                 
                                    <span class="txtimg_error" style="color:red;"></span>
                                </div>
                                <div class="form-group">
                                <h6>Maximum 15 image upload at a time</h6>
                                    <label for="exampleInputEmail1">Gallery Image:</label>
                                    <!-- <span style="color: red;" class="star">*</span> -->
                                    <input type="file"   name="image[]"
                                            class="input_class inline-block" id="txtimg" multiple />
                                            <span class="txtimg_error" style="color:red;"></span>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                            <input name="cmdsubmit" type="submit" class="btn btn-success" id="cmdsubmit"
                                        value="Submit" />&nbsp;
                                    <a href="{{ url('/admin/photoGallery')}}" class="btn btn-primary">Back</a>
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