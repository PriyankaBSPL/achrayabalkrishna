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

                    <ul>
                        <h3>Uttarakhand Disaster 2013</h3>
                        <li>
                            Patanjali Yogpeeth (Trust) of H.H. Swami Ramdevji Maharaj is engaged in the relief work for
                            Uttarakhand disaster affected persons at large scale. Trust’s Secretary General rev. Acharya
                            Balkrishnaji himself with his team of volunteers has spearheaded the relief work from
                            Guptkanshi near Kedarnath valley. Big camps to distribute cooked food, medicines and water
                            have been established in badly affected areas of Uttarakhand like Guptkashi, Rudraprayag and
                            Joshimath etc.
                        </li>

                        <li> So far, the trust with the help of its volunteers has distributed tons of food material
                            like biscuits, wheat-flour, salt, spices, mustard oil, water etc. to the people living
                            distant away from road networks.
                        </li>
                </div>

                <div class="col-md-6">
                    <img src="{{URL::asset('frontend/assets/img/global/flood_relief_uttrakhand.jpg')}}" class="img-fluid" alt="">
                </div>


            </div>
        </div>
    </section>

    <section class="ayuved-bg">

        <header class="section-header">
            <h2 class="text-white">Jadi Buti Diwas</h2>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h6>
                        Every year on 4th August, Jadi Buti Diwas is celebrated by the institution since 2009. On
                        this occasion the personalities who had made a remarkable contribution in the field of
                        Ayurveda and Organic Agriculture are being awarded with ‘Patanjali Ayurved Gaurav’ and
                        ‘Patanjali Krishi Gaurav’ award. A shawl, certificate and Rs. One 1 Lack is given to every
                        awardee.
                    </h6>
                </div>

            </div>
        </div>

    </section>

    <section class="ayurveda">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{URL::asset('frontend/assets/img/global/bihar.webp')}}" class="" alt="" width="100%">
                </div>

                <div class="col-md-6">
                    <h3>Bihar Flood 2008</h3>
                    <p>
                        Patanjali Yogpeeth emerged as the biggest NGO in the world to provide aid and relief to the
                        victims of the most calamitous floods of the century in Bihar in 2008.
                    </p>
                    <p>Over four million people of about sixteen hundred villages of sixteen districts of Bihar were
                        badly affected due to the horrible flood situation. More than two million people in isolated
                        villages in the second-most populous state of the country had been displaced and about a quarter
                        of a million houses destroyed in the worst flood to have hit the nation in the last 50 years.
                    </p>

                    <p>Flood relief and assistance work was undertaken at more than 50 places in the flood ravaged
                        districts where free food and clothing were distributed to lakhs of people daily.</p>

                </div>
                <div class="col-md-12 mt-4">
                    <P>More than 15,000 Volunteers of Patanjali Yogpeeth under the guidance of H.H. Swami Ramdevji
                        Maharaj and Revered Acharya Balkrishna were engaged in the relief work. H.H. Swamiji Maharaj &
                        Revered Acharyaji Maharaj went to the flood affected areas to help the affected people in
                        dealing with the catastrophe.</P>
                </div>
            </div>
        </div>
    </section>

    <section class="ayurveda" style="background: #fbf6ea;">
        <div class="container">
            <h3>Kedarnath Disaster 2013</h3>
            <div class="row">
                <div class="col-md-12">
                    <p>Patanjali Yogpeeth (Trust) of H.H. Swami Ramdevji Maharaj was engaged in the relief work for the
                        effected persons of the Uttarakhand disaster at large scale. Trust’s Secretary General rev.
                        Acharya Balkrishna himself with his team of volunteers had spearheaded the relief work from
                        Guptkanshi near Kedarnath valley. Big camps to distribute cooked food, medicines and water had
                        been established in badly affected areas of Uttarakhand like Guptkashi, Rudraprayag and
                        Joshimath etc.
                    </p>

                    <p>The trust with the help of its volunteers had distributed tons of food material like biscuits,
                        wheat-flour, salt, spices, mustard oil, water etc. to the people living in distant localities,
                        cut off from the road networks.</p>

                    <P><strong>Ashram for Orphans (Children) at Narayankoti, Near Guptkashi (Uttarakhand)</strong></P>
                    <P>The Trust has initiated the adoption of children, who became orphans & helpless in the natural
                        calamity of Uttarakhand. The management of the Trust has taken a hotel on rent to shelter these
                        orphans. 101 orphans (children) have been giving free education in Dr. Jacques Vigne National
                        School and job oriented training of medicinal herbs, carpentry & other traditional work, in
                        addition to lodging & boarding.</P>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <H3>Tsunami 2004</H3>
                    <p>Patanjali Yogpeeth provided out and out assistance to persons affected by the Tsunami disaster of
                        December 2004, and an aid of 50 Lakh rupees was given to help the victims as a contribution from
                        the institution.
                    </p>

                    <p>Flood relief and assistance work was undertaken at more than 50 places in the flood ravaged
                        districts where free food and clothing were distributed to lakhs of people daily.</p>

                    <p>More than 15,000 Volunteers of Patanjali Yogpeeth under the guidance of H.H. Swami Ramdevji
                        Maharaj and Revered Acharya Balkrishnaji were engaged in the relief work for Bihar disaster
                        affected persons. H.H. Swamiji Maharaj & Revered Acharyaji Maharaj went to the flood affected
                        areas to help the affected people in dealing with the catastrophe.</p>

                </div>
            </div>
        </div>
    </section>

    </body>
  @endsection