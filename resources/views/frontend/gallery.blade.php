@extends('frontend.layouts.main')
@section('content')

<body>
    <section class="internal-banner">
        <h1>{{$title}}</h1>
    </section>

    <section class="craft">
        <div class="container mx-auto">
            <div class="row align-items-center justify-content-center">

                @foreach($photocategory_data as $photo_cat)
                                @php
                                    $rowcount11 = '';
                                    $check_photo_category = check_photo_category($photo_cat->id);
                                    $rowcount11 = get_parent_photocat($photo_cat->id);
                                @endphp
                                <div class="col-lg-4 col-md-6">
                                    @if($rowcount11 > 0 ) 
                                        <a href="{{url('sub_photo_gallery/' . $photo_cat->id)}}">
                                   
                                    @elseif($check_photo_category!=0)
                                    <a href="{{url('photo_gallery_details/' . $photo_cat->id)}}">
                                    @elseif($check_photo_category==0 )
                                    <a href="#">
                                    @endif
                                                <div class="gallery">
                                                    <img src="{{ URL::asset('/admin/upload/photoGallery/thumbnail/' . $photo_cat->thumbnail)}}"
                                                        class="img-fluid" alt="">
                                                    <h5>{{$photo_cat->title}} </h5>
                                                </div>
                                            </a>
                                        </div>
                        @endforeach
            </div>
        </div>
    </section>

</body>
@endsection