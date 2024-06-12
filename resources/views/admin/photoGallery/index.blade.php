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
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif

                            @if(Session::has('error'))
                            <div class="alert alert-danger">{{Session::get('error')}}</div>
                            @endif

                            <div class="float-right mb-3">
                                <a href="{{ route('photoGallery.create') }}" class="btn btn-success">Add Category</a>
                            </div>
              <!-- /.card-header -->
              
              <table id="gallerytable" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>View</th>
                                            <th>Order</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody id="list">
                                    @if(count($list) > 0)
                                        @php $count = 1; @endphp
                                        @foreach($list as $row)
                                        <tr>
                                            <td>{{$count++}}</td>
                                           
                                            <td>{{$row->title}}</td>
                                                <td>
                                                @if(check_gallery($row->id) > 0)
                                                <strong><a href="{{route('photoGallery.show', $row->id)}}">View</a></strong><br/>
                                                @else
                                                _____
                                                @endif
                                                </td> 
                                                <td>

                                                    <?php echo $row->cat_postion??0; ?> <i id="{{$row->id}}" onclick="editcatpos(this);"  class="far editbut fa-edit"></i>
                                                    <span  id="gallery_postion_{{$row->id}}" style="display:none" >
                                                    <input class="w-30" type="number"
                                                    onchange="savedata(this);" id="{{$row->id}}" name="gallery_postion" value="" /></span>
                                                    <p class="text-success" id="success_{{$row->id}}"></p>
                                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                               </td>
                                            <td>
                                                @if(!empty($row->thumbnail))
                                                <a href="{{ URL::asset('/admin/upload/photoGallery/thumbnail/'.$row->thumbnail) }}" target="_blank">
                                                <img src="{{ URL::asset('/admin/upload/photoGallery/thumbnail/'.$row->thumbnail)}}"
                                                    style="width:50px;height:50px;border-radius:50%;border:1px solid#ddd;"></a>
                                                @else
                                                _____
                                                @endif
                                            </td>

                                            <form action="{{ route('photoGallery.destroy',$row->id) }}" method="POST">
                                                <td>
                                                    
                                                <a class="btn btn-primary" style='margin-right:5px;' href="{{ route('photoGallery.edit',$row->id) }}">
                                                    <i class="fas fa-edit" style="font-size: 15px;"></i>
                                                </a>
                                                    @csrf
                                                    @method('DELETE')
                 
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure want to delete photo?')"><i class="fas fa-trash-alt" style="font-size: 15px;"></i></button>
                                                </td>
                                            </form>
                                        </tr>
                                       
                                        @endforeach
                                        @endif
                                      
                                    </tbody>
                                </table>
                               
              </div>
              <!-- /.card-body -->
            </div>
           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
    <script>
    $(document).ready(function() {
        new DataTable('#gallerytable');
    });
</script>

<script src="{{ URL::asset('/public/assets/modules/jquery.min.js')}}"></script>
<script>
     function editcatpos(data) {
       // alert(data);
        $("#gallery_postion_"+data.id).toggle();
     }
     function savedata(data) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var gallery_postion =  data.value;
        var id =  data.id;
        var linkurl = "{{ url('/admin/update_gallery_orders')}}";
        jQuery.ajax({
            url: linkurl,
            type: "POST",
            data: {id: id,gallery_postion:gallery_postion,update_gallery_orders:'update_gallery_orders'},
            cache: false,
            success: function (html) {
               // location.reload();
                setTimeout(function(){
                    location.reload();
                },); 
                $("#gallery_postion_"+data.id).hide();
                $("#success_"+data.id).html('This Postion is Updated');
            },
        });
       
        
     }
</script>
@endsection