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
                        <form method="POST" action="{{ route('publication.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="publication_type">Publication Type</label>
                                    <span style="color: red;" class="star">*</span>
                                    <select name="publication_type" class="input_class form-control" id="publication_type" autocomplete="off">
                                        <option value="" selected="" disabled=""> Select </option>
                                        @foreach ($SelectTypes as $id => $title)
                                        <option value="{{ $id }}" @if(old('publication_type')==$id) selected @endif>{{ $title }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('publication_type'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                                    <span class="text-danger">@error('title'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="language">Language</label>
                                    <span style="color: red;" class="star">*</span>
                                    <select name="language" class="input_class form-control" id="language" autocomplete="off">
                                        <option value="" selected="" disabled=""> Select </option>
                                        @foreach ($SelectLanguages as $id => $language)
                                        <option value="{{ $id }}" @if(old('language')==$id) selected @endif>{{ $language }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('language'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                                    <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="author">Author</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="author" class="form-control" id="author" value="{{old('author')}}">
                                        <span class="text-danger">@error('author'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="category">Category</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="category" class="form-control" id="category" value="{{old('category')}}">
                                        <span class="text-danger">@error('category'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="publisher">Publisher</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="publisher" class="form-control" id="publisher" value="{{old('publisher')}}">
                                        <span class="text-danger">@error('publisher'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="isbn">ISBN</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="isbn" class="form-control" id="isbn" value="{{old('isbn')}}">
                                        <span class="text-danger">@error('isbn'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="pages">Pages</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="pages" class="form-control" id="pages" value="{{old('pages')}}">
                                        <span class="text-danger">@error('pages'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="country">Country</label>
                                        <span style="color: red;" class="star">*</span>
                                        <input type="text" name="country" class="form-control" id="country" value="{{old('country')}}">
                                        <span class="text-danger">@error('country'){{$message}}@enderror</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="buynow_link">Buy Now Link</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="text" name="buynow_link" class="form-control" id="buynow_link" value="{{old('buynow_link')}}">
                                    <span class="text-danger">@error('buynow_link'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <span style="color: red;" class="star">*</span>
                                    <textarea id="summernote" class="summernote" name="description">{{ old('description') }}</textarea>
                                    <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="cover_type">Cover Type</label>
                                    <span style="color: red;" class="star">*</span>
                                    <input type="text" name="cover_type" class="form-control" id="cover_type" value="{{old('cover_type')}}">
                                    <span class="text-danger">@error('cover_type'){{$message}}@enderror</span>
                                </div>

                                <button type="submit" class="btn btn-primary">Create</button>
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