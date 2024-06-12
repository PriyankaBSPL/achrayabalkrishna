@extends('frontend.layouts.main')
@section('content')

<body>
    <section class="internal-banner">
        <h1>{{$title}}</h1>
    </section>

    <section class="craft">
        <div class="container mx-auto">
            <div class="row align-items-center justify-content-center">

            @foreach($photoGallery as $p)
                        @php
                        $check_photo_category=check_photo_category($p->id);
                        @endphp

                        <div class="col-lg-4  col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ URL::asset('/admin/upload/photoGallery/photo/'.$p->img)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <div class="portfolio-links">
                                        @if($check_photo_category>0)
                                        <h5><a style="color:white" href="{{url('/frontend/photo_gallery_details/'.$p->id)}}">{{$p->title}}</a></h5>
                                        @else
                                        <h5><a style="color:white" href="#">{{$p->title}}</a></h5>
                                        @endif
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
            </div>
        </div>
    </section>

</body>
@endsection