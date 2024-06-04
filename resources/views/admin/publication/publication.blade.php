@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="overflow-y: auto; width: auto;">

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
                    <div class="card" style="overflow-y: auto; width: auto;">
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif

                            @if(Session::has('error'))
                            <div class="alert alert-danger">{{Session::get('error')}}</div>
                            @endif

                            <div class="float-right mb-3">
                                <a href="{{ route('publication.create') }}" class="btn btn-success">Add Publication</a>
                            </div>

                            <table id="publicationtable" name="publicationtable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Publication Type</th>
                                        <th>Title</th>
                                        <th>Language</th>
                                        <th>Image</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Publisher</th>
                                        <th>ISBN</th>
                                        <th>Pages</th>
                                        <th>Country</th>
                                        <th>Buy Now Link</th>
                                        <th>Description</th>
                                        <th>Cover Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($publications) > 0)
                                    @php
                                    $count = 1;
                                    @endphp
                                    @foreach($publications as $publication)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>
                                            @foreach($SelectTypes as $id => $title)
                                            @if($id == $publication->publication_type)
                                            {{ $title }}
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>{{$publication->title }} </td>
                                        <td>
                                            @foreach($SelectLanguages as $id => $language)
                                            @if($id == $publication->language)
                                            {{ $language }}
                                            @endif
                                            @endforeach
                                        </td>
                                        <td> @if(!empty($publication->image))
                                            <a href="{{ URL::asset('/admin/upload/Publication/'.$publication->image) }}" target="_blank">
                                                <img src="{{ URL::asset('/admin/upload/Publication/'.$publication->image)}}" style="width:50px;height:50px;border-radius:50%;border:1px solid#ddd;">
                                            </a>
                                            @endif
                                        </td>
                                        <td>{{$publication->author }}</td>
                                        <td>{{$publication->category }}</td>
                                        <td>{{$publication->publisher }}</td>
                                        <td>{{$publication->isbn }}</td>
                                        <td>{{$publication->pages }}</td>
                                        <td>{{$publication->country }}</td>
                                        <td>{{$publication->buynow_link }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($publication->description)), 50) }}</td>
                                        <td>{{$publication->cover_type }}</td>
                                        <td>
                                            <a href="{{ route('publication.edit', $publication->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('publication.destroy',$publication->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this publication?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                    $count++;
                                    @endphp
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

<script>
    $(document).ready(function() {
        new DataTable('#publicationtable');
    });
</script>
@endsection