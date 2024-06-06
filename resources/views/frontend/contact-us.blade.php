@extends('frontend.layouts.main')
@section('content')

<body>

    <section class="banner">
        <?php
        if (!empty($banner_image)) {
        ?>
            <img src="{{ URL::asset('/admin/uploads/banner_image/'.$banner_image)}}" alt="banner" class="img-fluid">
        <?php } ?>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h1>Contact</h1>
                <h2>Reach Us</h2>
            </header>

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Divya Yog Mandir (Trust)
                                    and
                                    Patanjali Yogpeeth (Trust)</h3>
                                <p>Patanjali Yogpeeth, Maharshi Dayanand Gram,
                                    Delhi-Haridwar National Highway,<br>
                                    Near Bahadarbad, Haridwar-249405
                                    Uttarakhand,India<br>New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Helpline No.</h3>
                                <p>+91-1334-240008, <br>244107, 246737</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-device-ssd"></i>
                                <h3>Fax No.</h3>
                                <p>+91-1334-244805</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>divyayoga@divyayoga.com</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    @if ($errorMessage = Session::get('error'))
                    <div class="alert alert-danger">
                        <strong>Error!</strong> {{ $errorMessage }}
                    </div>
                    @endif

                    @if ($successMessage = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $successMessage }}
                    </div>
                    @endif
                    <!-- <form action="{{ route('contactsave') }}" method="post" class="php-email-form" id="frmContact" name="frmContact" role="form"> -->
                    <form novalidate="" action="{{ route('contactsave') }}" id="frmContact" name="frmContact" method="post" role="form">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" value="{{ old('name') }}">
                                <span class="text-danger">@error('name'){{$message}} @enderror</span>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}">
                                <span class="text-danger">@error('email'){{$message}} @enderror</span>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="sub" id="sub" placeholder="Subject" value="{{ old('sub') }}">
                                <span class="text-danger">@error('sub'){{$message}} @enderror</span>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="msg" id="msg" rows="6" placeholder="Message">{{ old('msg') }}</textarea>
                                <span class="text-danger">@error('msg'){{$message}} @enderror</span>
                            </div>

                            <div class="col-md-12 text-center">
                                <!-- <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div> -->
                                <button type="submit" name="submit">Send Message</button>
                            </div> 

                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>


</body>
@endsection