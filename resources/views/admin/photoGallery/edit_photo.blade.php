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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
                            <form  action="{{ route('photoGallery.update' , $data->id) }}" name="form1" id="form1" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                            @csrf
                            @method('PUT') 
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <span style="color: red;" class="star">*</span>
                                    <!-- <input type="text" class="form-control" name="title" placeholder="Enter Title"> -->
                                    <input name="title" maxlength="100" minlength="2"
                                        onkeypress="return onlyAlphabets(event,this);" autocomplete="off" type="text"
                                        class="input_class form-control" id="title" value="{{ !empty($data->title)?$data->title:old('title')}}" />
                                    @if($errors->has('title'))
                                        <p class="text-danger">{{ $errors->first('title') }}</p>
                                    @endif                                  </div>
                                <div class="form-group">
                                    <label for="description">Category Description</label>
                                    <!-- <span style="color: red;" class="star">*</span> -->
                                    <textarea name="cat_descriptions" class="summernote"
                                        onkeypress="return onlyAlphabets(event,this);"
                                        id="summernote"><?php echo old('cat_descriptions'); ?><?php echo !empty($data->cat_descriptions)?$data->cat_descriptions:old('cat_descriptions'); ?></textarea>
                                    @if($errors->has('cat_descriptions'))
                                        <p class="text-danger">{{ $errors->first('cat_descriptions') }}</p>
                                    @endif                                 
                                </div>
                                <div class="form-group">
                                    <label for="description">Main Catgory</label>
                                    <span style="color: red;" class="star">*</span>
										<?php echo primary_category($data->parent_id) ?>
                                    @if($errors->has('parent_id'))
                                    <p class="text-danger">{{ $errors->first('parent_id') }}</p>
                                    @endif
                                    @if($errors->has('parent_id'))
                                          <p class="text-danger">{{ $errors->first('parent_id') }}</p>
                                    @endif                             
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Image</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="file" value="{{old('thumbnail')}}" accept="image/png, image/gif, image/jpeg, image/jpg" name="thumbnail" ="onlytxtuplodeimage(this);"  class="input_class w-50 inline-block" id="txtimage" />
                                    @if($data->thumbnail)
                                    <a href="{{ URL::asset('/admin/upload/photoGallery/thumbnail/'.$data->thumbnail)}}">
                                    <img src="{{ URL::asset('/admin/upload/photoGallery/thumbnail/'.$data->thumbnail)}}"
                                                    style="width:50px;height:50px;border-radius:50%;border:1px solid#ddd;"></a>
                                    @endif
                                <input type="hidden" name="olduplode" class="input_class w-50 inline-block" value="<?php echo !empty($data->thumbnail)?$data->thumbnail:''; ?>" />
                                 <span class="txtimage_error" style="color:red;"></span>
                                 @if($errors->has('thumbnail'))
                                    <p class="text-danger">{{ $errors->first('title') }}</p>
                                    @endif
                                    
                                </div>


                                <div id="txtPDF" >
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label>Gallery Image:</label>
                                        <span class="star">*</span>
                                    </div>
                                </div>
                                
                            </div>
                        <table class="table table-striped">
                            <thead>
                                <tr class="warning">
                                    <!-- <th>Title</th> -->
                                    <th>Sr.No.</th>
                                    <th>Images</th>
                                    <!-- <th>Order</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                                <tbody id="tbl_row">
                                <?php 
                                
                                if($gimg)
                                {
                                    $i=1;
                                   foreach($gimg as $val)
                                {

                                ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <!-- <td><?php echo $val->title; ?></td> -->
                                        <td> 
                                            <img src="{{ URL::asset('/admin/upload/photoGallery/photo/'.$val->img)}}"
                                                    style="width:50px;height:50px;border-radius:50%;border:1px solid#ddd;">
                                                    <input class="form-control" name="oldid[]" value="{{$val->id}} " type="hidden">
                                                    <input class="form-control" name="oldimag[]" value="{{$val->img}} " type="hidden">
                                        </td>
                                   
                                         <td>
                                            <a class="btn btn-danger delete-row"  onclick="removeImg('{{$val->img}}, <?php echo $val->id; ?>')" href="javascript:void(0);"><i class="fa fa-trash"></i>
                                            <meta name="csrf-token" content="{{ csrf_token() }}">
                                                                </a>
                                                            </td> 
                                    </tr>
                                   <?php 
                                }
                                }?>
                                </tbody>
                            </table>
                            {!! $gimg->withQueryString()->links('pagination::bootstrap-5') !!}
                            </div>
                            <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <h6>Maximum 15 image upload at a time</h6>
                                <a class="btn btn-success add-row" href="javascript:void(0);"> <i class="bi bi-plus-square-fill"></i>add
                                                                </a>
                                
                                </div>
                             </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                <input type="file" value="" style="display: none;" multiple name="image[]"  onchange="onlytxtuplodeimage(this);"  class="input_class w-50 imagesnew inline-block" id="txtimage" />
                                   </div>
                                </div>
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
<script>

$(document).ready(function () {
    $(".add-row").click(function(){
        $('.imagesnew').toggle();
    });
      
    $('.table-striped').on('click', '.delete-row', function () {
            $(this).closest('tr').remove();
    })


});
function removeImg(img, id){
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    var linkurl = "{{ url('/admin/delete_images')}}";
    var imgname=img;

	$('span.img-removed').remove();
	$.ajax({
		'url' : linkurl,
		'type' : 'POST',
		'data' : { 'rowid' : imgname},
         beforeSend:function(){
                return confirm("Are you sure want to delete photo?");
        },
		'success' : function(data){
			var obj = data;
			if(obj){
                var imagename = img.split(",")[0];
                $('#thumbImg-'+imagename).remove();
				$('#remBTN-'+imagename).remove();
                // alert('#thumbImg-'+imagename);
				$('#valImg-'+imagename).after('<span class="img-removed" style="color:green;">Image successfully removed.</span>');
                //location.reload();
			}else{
				$('#valImg-'+imagename).after('<span class="img-removed" style="color:red;">Image not removed. Please try again.</span>');
			}
		}
		
	});
	
}
</script>
<script>
     function editimgpos(data) {
        $("#img_postion_"+data.id).toggle();
     }
     function savedata(data) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var img_postion =  data.value;
        var id =  data.id;
       
        var linkurl = "{{ url('/admin/update_galleryimg_orders')}}";
        
        jQuery.ajax({
            url: linkurl,
            type: "POST",
            data: {id: id,img_postion:img_postion ,update_galleryimg_orders:'update_galleryimg_orders'},
            cache: false,
            success: function (html) {
               // window.location.reload();
                setTimeout(function(){
                    location.reload();
                }, 1000); 
                $("#img_postion_"+data.id).hide();
                $("#success_"+data.id).html('This Postion is Updated');
            },
        });
       
        
     }
</script>
@endsection