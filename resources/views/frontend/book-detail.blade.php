@extends('frontend.layouts.main')
@section('content')

<body>
    <section class="secret-herb">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">
                    <!-- <img src="{{URL::asset('/admin/upload/Publication/' .$publications->image)}}"> -->
                    @if(!empty($publications->image))
                    <img src="{{URL::asset('/admin/upload/Publication/' .$publications->image)}}" class="img-fluid" alt="">
                    @else
                    <img src="{{URL::asset('frontend/assets/img/noimage.jpg')}}" class="img-fluid" alt="">
                    @endif
                </div>

                <div class="col-lg-8">
                    <div class="jadi-buti-rhasya">
                        <h5>{{$publications->title}}</h5>
                        <div class="book-info">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i><span>Author : {{$publications->author}}</span>
                        </div>
                        <div class="book-info">
                            <i class="fa fa-list-ul" aria-hidden="true"></i><span>Category : {{$publications->category}}</span>
                        </div>
                        <div class="book-info ">
                            <i class="fa fa-building-o" aria-hidden="true"></i><span>Publisher : {{$publications->publisher}} </span>
                        </div>
                        <div class="book-info">
                            <i class="fa fa-barcode" aria-hidden="true"></i><span>ISBN : {{$publications->isbn}}</span>
                        </div>
                        <div class="book-info ">
                            <i class="fa fa-file-text-o" aria-hidden="true"></i><span>Pages : {{$publications->pages}}</span>
                        </div>
                        <div class="book-info ">
                            <i class="fa fa-globe" aria-hidden="true"></i><span> Country : {{$publications->country}}</span>
                        </div>
                        <div class="book-info ">
                            <i class="fa fa-globe" aria-hidden="true"></i><span> Language :
                                @foreach($SelectLanguages as $id => $language)
                                @if($id == $publications->language)
                                {{ $language }}
                                @endif
                                @endforeach
                            </span>
                        </div>
                        <a href="{{$publications->buynow_link}}" class="btn-buy">Buy Now</a>
                    </div>
                </div>

                <div class="col-lg-12 book-disc">
                    <h5>Description</h5>

                    <p>{!! $publications->description!!}</p>
                    <p><strong>Publisher :-</strong> {{$publications->publisher}}</p>
                    <p><strong>Author :-</strong> {{$publications->author}}</p>
                    <p><strong>Cover Type :-</strong> {{$publications->cover_type}}</p>

                    <a href=" {{ url('publication/'.$publications->menu->slug.'/'.$publications->menu->id) }}" class="btn-buy"><i class="fa fa-angle-double-left px-1" aria-hidden="true"></i>Back</a>
                </div>
            </div>
        </div>

    </section>
</body>
@endsection