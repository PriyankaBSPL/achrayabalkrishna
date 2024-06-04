@extends('frontend.layouts.main')
@section('content')

<body>
    <section class="internal-banner">
    <h1>{{$title}}</h1>
    </section>


    <section class="ayurveda">
        <div class="container">

            <header class="section-header">
                <h2>Yoga</h2>
            </header>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{URL::asset('frontend/assets/img/yog.webp')}}" class="img-fluid" alt="">
                </div>

                <div class="col-md-6">
                    <ul>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 512.156 512.156" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M479.993 327.169h-17.172a17.149 17.149 0 0 1-13.868-7.06l-96.208-132.234a40.642 40.642 0 0 0-32.29-15.962h-21.153a8.274 8.274 0 0 1-8.274-8.274v-19.601c0-3.87 1.979-7.449 5.213-9.574 20.114-13.213 33.318-36.084 33.015-62.018C328.789 32.508 295.755.034 255.814.217c-40.216.185-72.761 32.843-72.761 73.103 0 25.562 13.12 48.06 32.994 61.127 3.243 2.132 5.239 5.712 5.239 9.594v19.598a8.274 8.274 0 0 1-8.274 8.274h-26.764a40.642 40.642 0 0 0-32.29 15.962L57.903 321.169a17.15 17.15 0 0 1-13.914 7.124H32.162C14.4 328.292 0 342.692 0 360.455c0 17.763 14.399 32.162 32.162 32.162h31.595c-19.493 10.89-32.682 31.715-32.682 55.63 0 35.176 28.516 63.692 63.692 63.692h269.827L152.624 394.49a146.48 146.48 0 0 0-52.967-9.935h-1.249a36.801 36.801 0 0 0 6.678-6.924l61.073-90.942v80.16c.296.14.594.272.885.433l89.753 49.745 83.748-50.241v-80.097l61.229 89.818a36.8 36.8 0 0 0 7.017 7.194c-23.155.346-47.608 6.708-68.246 18.171v-.102l-53.436 32.057 137.145 76.011c29.28-5.739 51.375-31.53 51.375-62.49v-.306c0-24.024-13.306-44.791-32.945-55.548h37.31c17.763 0 32.162-14.399 32.162-32.162 0-17.764-14.4-32.163-32.163-32.163z"
                                        fill="#560505" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg><strong>Free Yoga Classes in Patanjali Yogpeeth</strong><br /> Free Yoga classes are
                            conducted in
                            the premises of
                            Patanjali Yogpeeth by trained Yoga Instructors at one-hour interval.
                        </li>

                        <li> <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 512.156 512.156" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M479.993 327.169h-17.172a17.149 17.149 0 0 1-13.868-7.06l-96.208-132.234a40.642 40.642 0 0 0-32.29-15.962h-21.153a8.274 8.274 0 0 1-8.274-8.274v-19.601c0-3.87 1.979-7.449 5.213-9.574 20.114-13.213 33.318-36.084 33.015-62.018C328.789 32.508 295.755.034 255.814.217c-40.216.185-72.761 32.843-72.761 73.103 0 25.562 13.12 48.06 32.994 61.127 3.243 2.132 5.239 5.712 5.239 9.594v19.598a8.274 8.274 0 0 1-8.274 8.274h-26.764a40.642 40.642 0 0 0-32.29 15.962L57.903 321.169a17.15 17.15 0 0 1-13.914 7.124H32.162C14.4 328.292 0 342.692 0 360.455c0 17.763 14.399 32.162 32.162 32.162h31.595c-19.493 10.89-32.682 31.715-32.682 55.63 0 35.176 28.516 63.692 63.692 63.692h269.827L152.624 394.49a146.48 146.48 0 0 0-52.967-9.935h-1.249a36.801 36.801 0 0 0 6.678-6.924l61.073-90.942v80.16c.296.14.594.272.885.433l89.753 49.745 83.748-50.241v-80.097l61.229 89.818a36.8 36.8 0 0 0 7.017 7.194c-23.155.346-47.608 6.708-68.246 18.171v-.102l-53.436 32.057 137.145 76.011c29.28-5.739 51.375-31.53 51.375-62.49v-.306c0-24.024-13.306-44.791-32.945-55.548h37.31c17.763 0 32.162-14.399 32.162-32.162 0-17.764-14.4-32.163-32.163-32.163z"
                                        fill="#560505" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg><strong>Yoga Science Camps </strong> <br />People below poverty line are permitted to
                            participate
                            in the Residential and Non-Residential Yoga Science Camps held in towns and cities of India
                            from
                            time to time in the benign presence of Yogrishi Swami Ramdev ji Maharaj.
                        </li>

                        <li> <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 512.156 512.156" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M479.993 327.169h-17.172a17.149 17.149 0 0 1-13.868-7.06l-96.208-132.234a40.642 40.642 0 0 0-32.29-15.962h-21.153a8.274 8.274 0 0 1-8.274-8.274v-19.601c0-3.87 1.979-7.449 5.213-9.574 20.114-13.213 33.318-36.084 33.015-62.018C328.789 32.508 295.755.034 255.814.217c-40.216.185-72.761 32.843-72.761 73.103 0 25.562 13.12 48.06 32.994 61.127 3.243 2.132 5.239 5.712 5.239 9.594v19.598a8.274 8.274 0 0 1-8.274 8.274h-26.764a40.642 40.642 0 0 0-32.29 15.962L57.903 321.169a17.15 17.15 0 0 1-13.914 7.124H32.162C14.4 328.292 0 342.692 0 360.455c0 17.763 14.399 32.162 32.162 32.162h31.595c-19.493 10.89-32.682 31.715-32.682 55.63 0 35.176 28.516 63.692 63.692 63.692h269.827L152.624 394.49a146.48 146.48 0 0 0-52.967-9.935h-1.249a36.801 36.801 0 0 0 6.678-6.924l61.073-90.942v80.16c.296.14.594.272.885.433l89.753 49.745 83.748-50.241v-80.097l61.229 89.818a36.8 36.8 0 0 0 7.017 7.194c-23.155.346-47.608 6.708-68.246 18.171v-.102l-53.436 32.057 137.145 76.011c29.28-5.739 51.375-31.53 51.375-62.49v-.306c0-24.024-13.306-44.791-32.945-55.548h37.31c17.763 0 32.162-14.399 32.162-32.162 0-17.764-14.4-32.163-32.163-32.163z"
                                        fill="#560505" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg><strong>Free Yoga Classes Through Patanjali Yog Samiti</strong> <br /> Fifty
                            thousand free Yoga
                            classes by about twenty million dedicated and trained Yoga teachers take place every day in
                            each
                            nook and corner of India. About two million Yoga teachers have been engaged in training &
                            teaching yoga to people in East Africa, South Africa, U.S.A., Canada, U.K., Nepal &
                            Mauritius.
                        </li>
                </div>
            </div>
        </div>
    </section>

    <section class="ayuved-bg">

        <header class="section-header">
            <h2 class="text-white">Ayurveda</h2>
        </header>

        <div class="container">
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