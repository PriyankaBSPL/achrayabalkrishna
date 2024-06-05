@extends('frontend.layouts.main')
@section('content')

<body>
    <section class="internal-banner">
    <h1>{{$title}}</h1>
    </section>
    <section class="local-slide">
        <div class="container">

      
                <h2>Yoga</h2>
      

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{URL::asset('frontend/assets/img/yoga-clases.webp')}}" class="img-fluid" alt="">
                </div>

                <div class="col-md-6">
                   
                       
                           <h6>Free Yoga Classes in Patanjali Yogpeeth</h6>
                        
                            <p>Free Yoga classes are
                            conducted in
                            the premises of
                            Patanjali Yogpeeth by trained Yoga Instructors at one-hour interval.
                        </p>

                      <h6>Yoga Science Camps</h6>
                      <p>People below poverty line are permitted to
                            participate
                            in the Residential and Non-Residential Yoga Science Camps held in towns and cities of India
                            from
                            time to time in the benign presence of Yogrishi Swami Ramdev ji Maharaj.
                     </p>
<h6>Free Yoga Classes Through Patanjali Yog Samiti</h6>
<p>Fifty
                            thousand free Yoga
                            classes by about twenty million dedicated and trained Yoga teachers take place every day in
                            each
                            nook and corner of India. About two million Yoga teachers have been engaged in training &
                            teaching yoga to people in East Africa, South Africa, U.S.A., Canada, U.K., Nepal &
                            Mauritius.
                       </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ayuved-bg">

        <header class="section-header">
            <h2 class="text-white">Ayurveda</h2>
        </header>

        <div class="container ayubrved-list">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>
                            <strong>Free Ayurvedic Consultancy in Patanjali Yogpeeth</strong><br /> Free
                            consultancy in
                            Ayurveda is provided in
                            Patanjali Yogpeeth. Over fifty well educated Ayurvedacharya (Vaidya) having B.A.M.S./ M.D./
                            M.S.
                            degree, render their valuable services to about two thousand patients suffering from various
                            chronicle diseases daily, free of cost. This team of Vaidyas is also engaged in giving Free
                            Ayurvedic consultancy through letters, fax, e-mails & phone also.
                        </li>
                        <li><strong>Free Ayurvedic Consultancy At Patanjali Chikitsalayas</strong><br /> Divya Yog
                            Mandir
                            (Trust) manages to run
                            over two thousand Patanjali Chikitsalayas and Patanjali Arogya Kendras in India and abroad,
                            where about one thousand able Ayurvedacharya (Vaidya) having B.A.M.S./ M.D. degrees, examine
                            and
                            prescribe treatment, free of cost to about fifty thousand patients daily.</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <ul>
                        <li><strong> Yoga Science Camps </strong><br /> A team of Vaidyas also provide free Ayurvedic
                            consultancy to the participants of Yoga Science Camps held in different towns and cities of
                            India from time to time in the benign presence of Yogrishi Swami Ramdevji Maharaj.</li>
                        <li><strong> Free Distribution Of Medicines </strong><br /> Medicines and food supplements are
                            provided
                            on appropriate/ hundred percent discount to the economically weaker people.</li>

                        <li><strong> Free Investigation Facility</strong> <br /> Appropriate discount is given to the
                            people
                            below poverty line on all type of investigations in Pathology Lab and Imaging & research
                            centre
                            of Patanjali Yogpeeth.</li>
                    </ul>
                </div>


            </div>
        </div>

    </section>

    <section class="ayurveda">
        <div class="container">

            <header class="section-header">
                <h2>Ashram for Orphans (Children)</h2>
            </header>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{URL::asset('frontend/assets/img/local/ashram.webp')}}" class="" alt="" width="100%">
                </div>

                <div class="col-md-6">
                    <p>
                        Hundred orphan children have been adopted by Patanjali after Uttarakhand disaster 2014.
                        Their basic needs like Accommodation, Health and Education are provided at Patanjali
                        Sevashram, Mulya, Devprayag.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="ayurveda" style="background: #fbf6ea;">
        <div class="container">

            <header class="section-header">
                <h2>Other Services</h2>
            </header>

            <div class="row">
                <div class="col-md-6">
                    <p><strong>Free Residential Facilities at Mahrishi Balmiki Dharamshala</strong> <br />Haridwar
                        is the religious
                        capital of the country, where lacks of pilgrims come from all across the globe daily. Some
                        of them belong to poor section of the society who can’t even arrange food and lodging on
                        their own. Keeping this fact in mind, a four story huge hospice of 86,000 sq. ft. covered
                        area has been built in Patanjali Yogpeeth-2 by Patanjali Yogpeeth (Trust). Here lodging
                        facilities for about 1000 persons are available. On ground floor 53, on first floor 90, on
                        second floor 87 and on third floor 84 spacious rooms with modern facilities have been built.
                        This hospice has been named after Mahrishi Balmiki, the author of the great epic ‘Ramayana.’
                    </p>

                    <p>Yajna is performed daily within the premises to enable persons staying in this hospice to
                        come closer to Indian values and traditions. Visitors can also seek free Ayurvedic
                        consultancy in O.P.D. of Patanjali Yogpeeth. They can also gain the practical knowledge of
                        Yoga and Pranayama by participating in Yoga Classes which are conducted at one-hour
                        intervals.</p>

                </div>

                <div class="col-md-6">
                    <img src="{{URL::asset('frontend/assets/img/local/valmiki.webp')}}" class="" alt="" width="100%">
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <img src="{{URL::asset('frontend/assets/img/local/santravidash.jpg')}}" class="" alt="" width="100%">
                </div>

                <div class="col-md-6">
                    <p><strong>Free food arrangements at Sant Ravidas Langar</strong> <br />Adjacent to Mahrishi
                        Balmiki Dharamshala, a two story Langar hall of 23,600 sq. ft. covered area, has been built in
                        Patanjali Yogpeeth-2, by the Trust, in which nearly about 5000 persons can have free meals
                        daily. The Langar is in operation from early in the morning to till night, everyday. This Langar
                        has been named after the great saint Ravidas.
                    </p>

                    <p><strong>Yajna (Agnihotra) </strong> <br />as a means of purifying the atmosphere, attainment
                        of worldly pleasures, prosperity, inner
                        tranquillity & relief from miseries and diseases is performed daily in the Yajnashala situated
                        in Patanjali Yogpeeth ’s premises as well as other premises owned by Divya Yog Mandir (Trust) &
                        Patanjali Yogpeeth (Trust).</p>

                </div>
            </div>


            <div class="row mt-4">
                <div class="col-md-6">
                    <p><strong>Transportation facility</strong> <br /> A free
                        transportation facility is available for patients as well as visitors visiting Patanjali
                        Yogpeeth, from Kankhal to Patanjali Yogpeeth & vice versa.
                    </p>

                    <p><strong> Library </strong> <br /> A world class Library is available for free usage for
                        visitors to Patanjali Yogpeeth.</p>

                    <p><strong>Education & Training </strong> <br />Free Education and training is regularly provided
                        in Medicinal Plant Agriculture & Panchgavya to peasants.</p>

                </div>

                <div class="col-md-6">
                    <img src="{{URL::asset('frontend/assets/img/local/yag.webp')}}" class="" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    </body>
  @endsection