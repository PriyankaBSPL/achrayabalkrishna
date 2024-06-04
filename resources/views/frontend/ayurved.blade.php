@extends('frontend.layouts.main')
@section('content')



<body>
   <section class="internal-banner">
      <h1>{{$title}}</h1>
   </section>
   <section>
      <div class="container">
         <div class="row achrji-ayur">
            <h6>Vedas are considered as a message from God and Ayurveda has also generated form the Vedas. Ayurveda is
               as old as the Vedas. The <strong><i>“Rig Veda”</i></strong>, which is the oldest repository of human
               knowledge, has described about 67 plants. Other Vedas, namely, Sam, Yajur and Atharv are also replete
               with references to various aspects of Ayurveda, including the description of drugs and their therapeutic
               properties. Medicinal plants are also described in the Samhita, Upanishads and Purana texts.</h6>
            <div class="col-md-6 ayurved-text">

               <p>Ayurveda is an all-embracing system of medical teachings which includes a number of different
                  historical layers and interpretations. This makes hard to pick one simple set of ideas and call it as
                  <strong>“Ayurveda”.</strong></p>
               <p>The main aim of Ayurveda is to promote health, prevention and treatment of chronic and dreadful
                  diseases. For protection, various sages focused on formula derived from various herbs that can give
                  immediate relief to the human being. According to Ayurveda no ailment can be exclusively physical or
                  psychological. Physical illness affects psychologically and psychological diseases impact living
                  beings physically. For this reason, Ayurveda considers all diseases as psycho-somatic and treat is
                  articulated accordingly.</p>
            </div>
            <div class="col-md-6">
               <img src="{{URL::asset('frontend/assets/img/keshri-ayurved.webp')}}" class="img-fluid" alt="">
            </div>

         </div>
      </div>
   </section>

   <section class="ayuved-bg">
      <div class="container">
         <div class="row">

            <h6>An Ayurveda practitioner not only treats a person, based on physical symptoms but he also treats them
               keeping in consideration the condition of spiritual, psychological and physiological tendencies. In
               addition, energetic forces, body tissues, and waste products are also considered for treatment of a
               patient. Hence, Ayurveda is not only a symptomatic treatment but also a systemic one that leads human to
               attainment of complete health. Each medicine in Ayurveda acts as a rejuvenator. Immunity enhancing
               medicines and dietary regimen is a gift of Ayurveda to Mankind.</h6>
            <h6>Along with medicinal treatment, a detailed description of a healthy daily regimen like waking up early,
               drinking water on an empty stomach, bowel movements, cleaning the teeth; body massage,yoga, pranayam,
               selection of clothes and importance of wearing ornaments all are described in Ayurveda. Similarly, the
               detailed description of night regimen including sleeping early, diet, time of dinner and conduct are also
               given in Ayurveda. Ayurveda also elaborates behavior, diet, lifestyle and clothing during different
               seasons. Adapting seasonal regimen helps to keep the health better and prevent disease. To achieve
               complete healthy and happy life, Ayurveda also emphasize religious and moral duties, the moderate pursuit
               of wealth, avoiding unnecessary desire and striving for liberation.</h6>

         </div>
      </div>
      </div>
   </section>
   <section class="">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <img src="{{URL::asset('frontend/assets/img/ayurved-stock.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 ayurved-right">
               <p>Ayurveda not only includes ways of life, good conduct, moral values, and behaviour, but also gives
                  precautions for breaking the code of conduct, attitude and behaviour. Concept like socialism,
                  nationalism, spiritualism and globalism makes Ayurveda a comprehensive science. Ayurveda guides a
                  person to lead a disciplined and bountiful life with prescribed activities like prevention from
                  immoral conduct. Ayurveda also covers the general behaviour in the life, whom to befriend, whom to
                  avoid, how to speak and how much to speak, and how to lead a natural life. Ayurveda teaches us to lead
                  a life free of ego, helps the people in their suffering, and sharing joy and sorrow with others. Thus,
                  Ayurveda is a way of life, and a complete science and philosophy.</p>
            </div>
         </div>
         <div class="row" style="padding-top:10px;">
            <p>New texts were continually being composed, new paradigms were explored, and influences from many other
               areas of Indian discourse were introduced into Ayurveda. Indeed, the practice of Ayurveda has been
               criticized unjustly by certain historians and members of competing medical systems for its rigorous
               adherence to antiquated prescriptions and paradigms. These critics are not aware of the vitality in the
               history of Ayurveda, largely because nearly all the textually of ancient Ayurveda scriptures remains
               unknown and unstudied by the larger public.</p>

            <p>Since there are developments within Ayurveda during its long and varied history, the addition of new
               theories and practices of established ones, their interrelations and the interweaving of medical thought
               with constantly mutating religious, political, and cultural climates, form a rich and complicated pattern
               of medical and social history. But all the development does not mean that Ayurveda has lost its relevance
               in the present times.</p>
            <p>In the present scenario, with increasing complexity of life, new and dreadful diseases, we need to
               explore more the ancient scriptures. We still find the persons who are refused treatment with the modern
               system due to non-availability of a cure. Iyt is often seen that these prople then they move to the
               traditional methods. The research and developmental actives in the field of medical science are still
               proving the established facts and knowledge described in the Ayurveda. They are not proving Ayurveda but
               they are re-establishing Ayurveda. With all these efforts we are sure that Indian tradition of medicine
               will soon recognized all over the world.</p>
            <img src="{{URL::asset('frontend/assets/img/Acharya_balkrishna_signatur.png')}}" alt="" style="float:right;width:180px;">
         </div>
      </div>
   </section>
   </body>
    @endsection