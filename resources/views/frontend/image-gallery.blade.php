@extends('frontend.layouts.main')
@section('content')
<body>
    <section class="internal-banner">
        <h1>{{$title}}</h1>
    </section>

    <section class="craft">
        <div class="container mx-auto">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery"><a href="{{url('celebration')}}">
                            <img src="{{URL::asset('frontend/assets/img/gallery/dikshant-samaroh.jpg')}}" class="img-fluid" alt="">
                        </a>
                        <h5><a style="color:white" href="{{url('celebration')}}">
                                Celebrations
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery"><a href="#">
                            <img src="https://acharyakulamranchi.com/public/admin/upload/photoGallery/thumbnail/Republic_Day_thumbnail.jpg"
                                class="img-fluid" alt="" data-pagespeed-url-hash="815452250"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </a>
                        <h5><a style="color:white" href="#">
                                Republic Day
                            </a>

                        </h5>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="gallery"><a href="#">
                            <img src="{{URL::asset('frontend/assets/img/gallery/Acharyaji-Event.jpg')}}" class="img-fluid" alt=""
                                data-pagespeed-url-hash="1112825695"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </a>
                        <h5><a style="color:white" href="#">Jadi Buti Divas</a></h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="gallery"><a href="#">
                            <img src="{{URL::asset('frontend/assets/img/gallery/jadi-buti.jpg')}}" class="img-fluid" alt=""
                                data-pagespeed-url-hash="3562910481"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </a>
                        <h5><a href="#">
                            </a><a style="color:white" href="#">
                                World Environment
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery"><a href="#">
                            <img src="{{URL::asset('frontend/assets/img/gallery/Event.jpg')}}" class="img-fluid" alt=""
                                data-pagespeed-url-hash="3337958027"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </a>
                        <h5><a href="#">
                            </a><a style="color:white" href="#">
                                Event
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="gallery"><a href="#">
                            <img src="{{URL::asset('frontend/assets/img/gallery/hall.jpg')}}" class="img-fluid" alt=""
                                data-pagespeed-url-hash="1202537967"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </a>
                        <h5><a href="#">
                            </a><a style="color:white" href="#">
                                Conference Hall
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
  @endsection