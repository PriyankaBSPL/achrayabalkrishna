@extends('frontend.layouts.main')
@section('content')
<body>
    <section class="internal-banner">
        <h1>{{$title}}</h1>
    </section>
    <section class="world-record">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-4">
                    <div class="record-content">
                        <img src="{{URL::asset('frontend/assets/img/world-record/book-published.webp')}}" class="img-fluid" alt="">
                        <h5>Most Books of an Author Published by a Publication</h5>
                        <p>The World Record of <strong>‘Most Books of an Author Published by a
                                Publication’</strong>
                            has
                            been achieved by
                            Acharya Balkrishna.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="record-content">
                        <img src="{{URL::asset('frontend/assets/img/world-record/menuscript.webp')}}" class="img-fluid" alt="">
                        <h5>Most Manuscripts Published by an Individual</h5>
                        <p>The World Record of <strong> ‘Most Manuscripts Published by an Individual’ </strong> has been
                            achieved by Acharya Balkrishna.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="record-content">
                        <img src="{{URL::asset('frontend/assets/img/world-record/facebook-like.webp')}}" class="img-fluid" alt="">
                        <h5>Most Facebook Likes on a Page of Ayurveda & Herbs</h5>
                        <p>The World Record of <strong>‘Most Facebook Likes on a Page of Ayurveda & Herbs’</strong> has
                            been achieved by Acharya Balkrishna.</p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="record-content">
                        <img src="{{URL::asset('frontend/assets/img/world-record/largest-telecast.webp')}}" class="img-fluid" alt="">
                        <h5>Longest Telecasted daily show on Medicinal Use of Herbs</h5>
                        <p>The World Record of <strong>‘Longest Telecasted daily show on Medicinal Use of
                                Herbs’</strong> has been achieved by Acharya Balkrishna.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="record-content">
                        <img src="{{URL::asset('frontend/assets/img/world-record/word-record.webp')}}" class="img-fluid" alt="">
                        <h5>A Book published in most languages</h5>
                        <p>The World Record of <strong>‘A Book published in most languages’</strong> has been achieved
                            by Ayurved Siddhant Rahasya published by Divya Prakashan, India.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="record-content">
                        <img src="{{URL::asset('frontend/assets/img/world-record/word-record-B.webp')}}" class="img-fluid" alt="">
                        <h5>Concurrent Launching of a book written in Most Languages</h5>
                        <p>The World Record of <strong>‘Concurrent Launching of a book written in Most
                                Languages’</strong> has been achieved by Acharya Balkrishna.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="record-content">
                        <img src="{{URL::asset('frontend/assets/img/world-record/glory.webp')}}" class="img-fluid" alt="">
                        <h5>Largest Printed Glossary of Plants</h5>
                        <p>The World Record of <strong>‘Largest Selling Book On Ayurveda’</strong> has been achieved by
                            Aushadh Darshan.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="record-content">
                        <img src="{{URL::asset('frontend/assets/img/world-record/museam.webp')}}" class="img-fluid" alt="">
                        <h5>First Ayurvedic Museum</h5>
                        <p>The World Record of <strong>‘First Ayurvedic Museum’</strong> has been achieved by Patanjali
                            Yogpeeth Trust.</p>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="record-content">
                        <img src="{{URL::asset('frontend/assets/img/world-record/plant.webp')}}" class="img-fluid" alt="">
                        <h5>Largest Collection of Medicinal Plant Paintings</h5>
                        <p>The World Record of <strong>‘Largest Collection of Medicinal Plant Paintings’</strong>has
                            been achieved by Patanjali Yogpeeth Trust.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </body>
    @endsection