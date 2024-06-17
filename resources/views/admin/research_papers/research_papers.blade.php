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
                                <a href="{{ route('research-paper.create') }}" class="btn btn-success">Add Research Paper</a>
                            </div>

                            <!-- Export data to excel -->
                            <form method="get" action="{{route('exportToExcel')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="year">Select Year:</label>
                                        <select name="year" class="input_class form-control" id="year" autocomplete="off">
                                            <option value="" selected="" disabled=""> Select </option>
                                            @foreach ($SelectYears as $id => $year)
                                            <option value="{{ $id }}" @if(old('year')==$id) selected @endif>{{ $year }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">@error('year'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="category">Select Category:</label>
                                        <select name="category" class="input_class form-control" id="category" autocomplete="off">
                                            <option value="" selected="" disabled=""> Select </option>
                                            @foreach ($SelectCategories as $id => $category)
                                            <option value="{{ $id }}" @if(old('category')==$id) selected @endif>{{ $category }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">@error('category'){{$message}}@enderror</span>
                                    </div>

                                    <div class="form-group col-md-3" style="margin-top:32px;">
                                        <button type="submit" class="btn btn-primary">Export to Excel</button>
                                    </div>
                                </div>
                            </form>


                            <table id="researchtable" name="researchtable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Year</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($researchs) > 0)
                                    @php
                                    $count = 1;
                                    @endphp
                                    @foreach($researchs as $research)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>
                                            @foreach($SelectYears as $id => $year)
                                            @if($id == $research->year)
                                            {{ $year }}
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($SelectCategories as $id => $category)
                                            @if($id == $research->category)
                                            {{ $category }}
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>{{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($research->description)), 50) }}</td>
                                        <td>{{$research->link }}</td>
                                        <td>
                                            <a href="{{ route('research-paper.edit', $research->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('research-paper.destroy',$research->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this research paper?')">Delete</button>
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
        new DataTable('#researchtable');
    });
</script>
@endsection