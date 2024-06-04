@extends('frontend.layouts.main')
@section('content')
<body>
    <section class="internal-banner">
        <h1>{{$title}}</h1>
    </section>


    <section class="ayurveda">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h2>Nepal Earthquake, 2015</h2>
                    <p>Patanjali Yogpeeth yoga institute organized a blood donation camp and donated medicines worth Rs.
                        1 Crore during the Nepal earthquake of 2015. Patanjali contributed more than Rs. 5 crore in the
                        relief work. More than 30,000 volunteers organized 30 relief camps in all the affected areas.
                    </p>
                </div>

                <div class="col-md-6">
                    <img src="{{URL::asset('frontend/assets/img/nepal_earth.webp')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    </body>
  @endsection