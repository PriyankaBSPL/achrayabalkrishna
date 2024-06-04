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
                        <form method="POST" action="{{ route('publication.update',$publications->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="publication_type">Publication_type</label>
                                    <span style="color: red;" class="star">*</span>
                                    <select name="publication_type" class="input_class form-control" id="publication_type" autocomplete="off">
                                        <option value="" selected="" disabled=""> Select </option>
                                        @foreach ($SelectTypes as $id => $title)
                                        <option value="{{ $id }}" @if($id==old('publication_type', $publications->publication_type)) selected @endif>{{ $title }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('publication_type'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $publications->title) }}" id="title">
                                    <span class="text-danger">@error('title'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="language">Language</label>
                                    <span style="color: red;" class="star">*</span>
                                    <select name="language" class="input_class form-control" id="language" autocomplete="off">
                                        <option value="" selected="" disabled=""> Select </option>
                                        @foreach ($SelectLanguages as $id => $language)
                                        <option value="{{ $id }}" @if($id==old('language', $publications->language)) selected @endif>{{ $language }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('language'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                                    @if($publications->image)
                                    <a href="{{ URL::asset('/admin/upload/Publication/'.$publications->image)}}" target="_blank"><img src="{{ URL::asset('/admin/upload/Publication/'.$publications->image)}}" style="width:50px;height:50px;border-radius:50%;border:1px solid#ddd;"></a>
                                    @endif
                                    <input type="hidden" name="oldimage" class="input_class w-50 inline-block" value="{{ !empty($publications->image)?$publications->image:old('image')}}" />
                                    <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="author">Author</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value="{{ old('author', $publications->author) }}" id="author">
                                        <span class="text-danger">@error('author'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="category">Category</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category', $publications->category) }}" id="category">
                                        <span class="text-danger">@error('category'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="publisher">Publisher</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="publisher" class="form-control @error('publisher') is-invalid @enderror" value="{{ old('publisher', $publications->publisher) }}" id="publisher">
                                        <span class="text-danger">@error('publisher'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="isbn">ISBN</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="isbn" class="form-control @error('isbn') is-invalid @enderror" value="{{ old('isbn', $publications->isbn) }}" id="isbn">
                                        <span class="text-danger">@error('isbn'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="pages">Pages</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="pages" class="form-control @error('pages') is-invalid @enderror" value="{{ old('pages', $publications->pages) }}" id="pages">
                                        <span class="text-danger">@error('pages'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="country">Country</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ old('country', $publications->country) }}" id="country">
                                        <span class="text-danger">@error('country'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="buynow_link">Buy Now Link</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="text" name="buynow_link" class="form-control @error('buynow_link') is-invalid @enderror" value="{{ old('buynow_link', $publications->buynow_link) }}" id="buynow_link">
                                    <span class="text-danger">@error('buynow_link'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <span style="color: red;" class="star">*</span>
                                    <textarea id="summernote" class="summernote" name="description">{{ old('description', $publications->description) }}</textarea>
                                    <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="cover_type">Cover Type</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="text" name="cover_type" class="form-control @error('cover_type') is-invalid @enderror" value="{{ old('cover_type', $publications->cover_type) }}" id="cover_type">
                                    <span class="text-danger">@error('cover_type'){{$message}}@enderror</span>
                                </div>

                                <button type="submit" class="btn btn-primary">Edit</button>
                                <a href="{{route('publication.index')}}" class="btn btn-primary">Back</a>

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