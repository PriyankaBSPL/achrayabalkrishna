@extends('frontend.layouts.main')
@section('content')
<body>
    <!-- <section class="banner">
        <img src="assets/img/Awards-banner.jpg" alt="banner" class="img-fluid">
    </section> -->

    <section id="news-updates" class="news-updates">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row gy-4 aos-init aos-animate mt-2" data-aos="fade-left">

@foreach($data as $row)

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="{{URL::asset('admin/uploads/news_image/'.$row->image)}}" class="img-fluid" alt="">
                        <div class="box-content">
                            <h4> <a href="{{$row->read_more_link}}">{!!$row->title!!}</a></h4>
                            <es>{!!$row->description!!}</p>
                            <a href="{{$row->read_more_link}}" class="btn-buy">Read More</a>

                        </div>
                        <div class="news-date">
                            <P>|{{date('M d,Y',strtotime($row->date))}}</P>
                        </div>
                    </div>
                </div>
              @endforeach

                <!-- <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="{{URL::asset('frontend/assets/img/updates/2.jpg')}}" class="img-fluid" alt="">
                        <div class="box-content">
                            <h4> <a href="#">Patanjali inks MoU with SRM Centre</a></h4>
                            <p>On this occasion Acharya Balkrishan, general secretary of Patanjali Yogpeeth along with
                                chief scientist of Patanjali Research Foundation, Dr. Anurag Varshney and Dr. Nitin M
                                Nagarkar, Dr. Satyajit Mahapatra and Dr. Sarasvati Tripathi from SRM Centre for Clinical
                                Trials and…</p>
                            <a href="#" class="btn-buy">Read More</a>

                        </div>
                        <div class="news-date">
                            <P>| May 6, 2024</P>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="{{URL::asset('frontend/assets/img/updates/1.jpg')}}" class="img-fluid" alt="">
                        <div class="box-content">
                            <h4> <a href="#">Patanjali Research Foundation signs MoU with SSRM
                                    CCTR for clinical trial studies on Ayurvedic medicines</a></h4>
                            <p>A memorandum of understanding (MoU) has been signed between two prominent institutions in
                                the country, Patanjali Research Foundation and SRM Center for Clinical Trials and
                                Research, Chennai.</p>
                            <a href="#" class="btn-buy">Read More</a>

                        </div>
                        <div class="news-date">
                            <P>| May 6, 2024</P>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="{{URL::asset('frontend/assets/img/updates/4.png')}}" class="img-fluid" alt="">
                        <div class="box-content">
                            <h4> <a href="#">देश में ऋषि कार्य एवं कृषि कार्य ही प्रगति का आधार: आचार्य बालकृष्ण</a>
                            </h4>
                            <p>पतंजलि संसथान के सह-संस्थापक आचार्य बालकृष्ण ने शुक्रवार को कहा कि ऋषि कार्य और कृषि
                                कार्य से ही देश में समृद्धि और आत्मनिर्भरता लाई जा सकती है।</p>
                            <a href="#" class="btn-buy">Read More</a>

                        </div>
                        <div class="news-date">
                            <P>| May 6, 2024</P>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="{{URL::asset('frontend/assets/img/updates/3.jpg')}}" class="img-fluid" alt="">
                        <div class="box-content">
                            <h4> <a href="#">आयुर्वेद के इतिहास में मील का पत्थर साबित होगा यह समझौता: आचार्य
                                    बालकृष्ण</a></h4>
                            <p>पतंजलि रिसर्च फाउंडेशन और एसआरएम सेंटर फॉर क्लिनिकल ट्रायल्स एंड रिसर्च (सीसीटीआर),
                                चेन्नई के बीच शुक्रवार को आयुर्वेदिक औषधियों के लिए क्लीनिकल ट्रायल अध्ययन के लिए करार
                                पर हस्ताक्षर किए गए।</p>
                            <a href="#" class="btn-buy">Read More</a>

                        </div>
                        <div class="news-date">
                            <P>| May 6, 2024</P>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="{{URL::asset('frontend/assets/img/updates/5.jpg')}}" class="img-fluid" alt="">
                        <div class="box-content">
                            <h4> <a href="#">Patanjali Yogpeeth organises yoga and agriculture training camp</a></h4>
                            <p>Baba Ramdev’s Patanjali Yogpeeth, in collaboration with Patanjali Organic Research
                                Institute organised a two-day ‘Yogahar’ training camp at the ‘Samriddha Gram’ Patanjali
                                Training Center’ in Haridwar.
                            </p>
                            <a href="#" class="btn-buy">Read More</a>

                        </div>
                        <div class="news-date">
                            <P>| May 6, 2024</P>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
    </body>
  @endsection