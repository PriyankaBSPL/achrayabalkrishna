
@extends('frontend.layouts.main')
@section('content')

<body>
    <section class="internal-banner">
        <h1>{{$title}}</h1>
    </section>
    <section id="faq" class="faq reasrch-list">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <h6>Acharya Balkrishna has several research papers published in his name in several
                National and International journals and magazines as an author and co-author.</h6>

            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="accordion accordion-flush" id="faqlist1">
                        @foreach($SelectYears as $id => $year)
                        @php
                        $papers = $researchs->where('year', $id); // Filter papers for current year
                        $collapseClass = ($loop->first) ? 'show' : ''; // Add 'show' class to last year's content
                        @endphp

                        @if($papers->isNotEmpty()) 
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-{{ $id }}" aria-expanded="false">
                                    {{ $year }}
                                </button>
                            </h2>

                            <div id="faq-content-{{ $id }}" class="accordion-collapse collapse {{ $collapseClass }}" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            @foreach($papers as $research)
                                            <li>{!! $research->description !!}
                                                <a href="{{ $research->link }}" target="_blank" rel="noopener noreferrer">
                                                    {{ $research->link }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        
                    </div>

                </div>
            </div>

        </div>

    </section>
</body>
@endsection

<!-- <body>

    <section class="internal-banner">
        <h1>{{$title}}</h1>
    </section>
    <section id="faq" class="faq reasrch-list">
        <div class="container aos-init aos-animate" data-aos="fade-up">


            <h6>Acharya Balkrishna has several research papers published in his name in several
                National and International journals and magazines as an author and co-author.</h6>


            <div class="row mt-5">
                <div class="col-lg-12">
              
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1" aria-expanded="false">
                                    2024
                                </button>
                            </h2>
                            <div id="faq-content-1" class="accordion-collapse collapse show" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><b>Acharya Balkrishna</b>, Shalini Mishra, Maneesha Rana, Vedpriya Arya,
                                                Shalini Singh&nbsp;<b>(2024)</b>

                                                <div>Effect of Coliform Bacteria on Various Environmental Factors: A
                                                    Review.&nbsp;<i>International Journal of Health Sciences and
                                                        Research</i></div>

                                                <a id="LPlnk820680" href="https://www.ijhsr.org/IJHSR_Vol.14_Issue.5_May2024/IJHSR37.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.ijhsr.org/IJHSR_Vol.14_Issue.5_May2024/IJHSR37.pdf</a>
                                            </li>
                                            <li>
                                                <div><b><span lang="UK">Acharya Balkrishna,</span></b><span lang="UK">&nbsp;Ajay Kumar Gautam, Nidhi Sharma, Vedpriya Arya,
                                                        Vikram Khelwade, Deepika Arya&nbsp;<b>(2024)</b></span></div>
                                                <div><span lang="UK">Effects of organic fertilizers on growth and yield
                                                        of field crop cowpea.&nbsp;<i>Asian Journal of
                                                            Agriculture.</i></span></div>
                                                <span lang="UK"><a id="LPlnk310783" href="https://smujo.id/aja/article/view/17882" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://smujo.id/aja/article/view/17882</a></span>

                                                <b><span lang="UK">&nbsp;</span></b>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Amita Singh, Priyanka Tyagi, Dr. Rajesh
                                                Kumar Mishra, Dr. Bhaskar Joshi, Dr. Anupam
                                                Srivastava&nbsp;<b>(2024)</b>
                                                <div>Medicinal Uses, Preservation, Promotion and Critical Study of
                                                    Dashmoola: An Important Component Described in Ayurveda
                                                    Scripture.&nbsp;<i>Journal of Ayurvedic Herbal and Integrative
                                                        Medicine</i></div>
                                                <a href="https://journals.indexcopernicus.com/api/file/viewByFileId/1922068" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://journals.indexcopernicus.com/api/file/viewByFileId/1922068</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sandeep Sinha, Kunal Bhattacharya,
                                                Anurag Varshney&nbsp;<b>(2024)</b>
                                                <div>Twenty-eight days of repeated dose sub-acute toxicological
                                                    evaluation of polyherbal Ayurvedic medicine BPGrit in Sprague–Dawley
                                                    rats.&nbsp;<i>Journal of Applied Toxicology.</i></div>
                                                <a href="https://analyticalsciencejournals.onlinelibrary.wiley.com/doi/abs/10.1002/jat.4625" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://analyticalsciencejournals.onlinelibrary.wiley.com/doi/abs/10.1002/jat.4625</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;&nbsp;Shalini Mishra, Shalini Singh,
                                                &nbsp;Satyendra Kumar Rajput, Maneesha Rana, &nbsp;Vedpriya
                                                Arya<b>&nbsp;(2024)</b>
                                                <div>Hazardous Consequences and Management of Heavy Metals in Sewage
                                                    Sludge: An Overview.&nbsp;<i>International Journal of Science and
                                                        Research (IJSR)</i></div>
                                                <a href="https://www.ijsr.net/archive/v13i5/SR24426153350.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="2">https://www.ijsr.net/archive/v13i5/SR24426153350.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Priyanka Rai, Rashmi Verma, Akansha
                                                Rohela, Ashwani Kumar, Vedpriya Arya, Nazam Khan, Ryszard Amarowicz,
                                                Dinesh Kumar &amp; Rachna Verma&nbsp;<b>(2024)</b>
                                                <div>Mechanistic insight into anti-inflammatory potential,
                                                    phytochemistry and ethnomedicinal status of Ilex species: a review.
                                                    &nbsp;<b>Springer Link</b></div>
                                                <a id="LPlnk735729" href="https://link.springer.com/article/10.1007/s11101-024-09968-2" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s11101-024-09968-2</a>
                                            </li>
                                            <li><b>Acharya Balkrishna;</b>&nbsp;Sumit Kumar Singh; Sourav Ghosh;
                                                Srimoyee Banerjee; Sonam Verma; Vedpriya Arya&nbsp;<b>(2024)</b>
                                                <div>An analytical review on the integrated management of river
                                                    resources through Namami Gange.&nbsp;<i>Official Journal of World
                                                        Water Council, Water Policy</i></div>
                                                <a href="https://iwaponline.com/wp/article/doi/10.2166/wp.2024.209/102095" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://iwaponline.com/wp/article/doi/10.2166/wp.2024.209/102095</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Prashant Katiyar, Muskan Chauhan, Jaya
                                                Upreti, Shubhangi Srivastava, Upasana Aggrawal&nbsp;<b>(2024)</b>
                                                <div>Elevating the Inner-Consciousness “Third Eye” Through “Vedic Manas
                                                    Yoga” Practice.&nbsp;<i>International Journal of Ayurveda and Pharma
                                                        Research.</i></div>
                                                <i><a href="https://ijapr.in/index.php/ijapr/article/view/3158#:~:text=The%20maximum%20improvement%20was%20recorded,of%20body%2C%20mind%20and%20spirit" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://ijapr.in/index.php/ijapr/article/view/3158#:~:text=The%20maximum%20improvement%20was%20recorded,of%20body%2C%20mind%20and%20spirit</a>
                                                </i>
                                            </li>
                                            <li><b>Balkrishna, Acharya;</b>&nbsp;Mishra, Shalini; Singh, Shalini; Rana,
                                                Maneesha; Arya, Vedpriya; Mishra, Rajesh; Rajput, Satyendra Kumar;
                                                Kumar, Ashwani&nbsp;<strong>(2024)</strong>
                                                <div>Withania coagulansDunal.: A Narrative Review of an Anti-diabetic
                                                    Shrub of the Desert Biome.&nbsp;<i>The Natural Products Journal,
                                                        Publisher: Bentham Science Publishers</i></div>
                                                <a href="https://www.ingentaconnect.com/content/ben/npj/2024/00000014/00000006/art00006" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.ingentaconnect.com/content/ben/npj/2024/00000014/00000006/art00006</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sandeep Sinha, Moumita Manik, Anupam
                                                Pandey, Madhulina Maity, Rishabh Dev, Anurag Varshney
                                                &nbsp;<b>(2024)</b>
                                                <div>Herbo-Mineral Medicine, Lithom Exhibits Anti-Nephrolithiasis
                                                    Activity in Rat Model of Hyperoxaluria by Attenuating Calcium
                                                    Oxalate Crystal Formation and Oxidative Stress.&nbsp;<i>National
                                                        Library of Medicine</i>.</div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/38665028/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://pubmed.ncbi.nlm.nih.gov/38665028/</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sandeep Sinha, Shadrakbabu Karumuri,
                                                Madhulina Maity, Rishabh Dev Anurag Varshney&nbsp;<b>(2024)</b>
                                                <div>Bronchom Assuages Airway Hyperresponsiveness in House Dust
                                                    Mite-induced Mouse Model of Allergic Asthma and Moderates Goblet
                                                    Cell Metaplasia, Subepithelial Fibrosis along with changes in Th2
                                                    cytokines and chemokines.&nbsp;<b>Frontiers</b></div>
                                                <a id="LPlnk175938" href="https://www.frontiersin.org/journals/immunology/articles/10.3389/fimmu.2024.1384697/abstract" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.frontiersin.org/journals/immunology/articles/10.3389/fimmu.2024.1384697/abstract</a>
                                            </li>
                                            <li>
                                                <div><b><span lang="UK">Acharya Balkrishna,</span></b><span lang="UK">&nbsp;Nidhi Sharma, Deepika Srivastava, Ankita
                                                        Kukreti, Stuti Srivastava and Vedpriya
                                                        Arya&nbsp;<b>(2024)</b></span></div>
                                                <span lang="UK">Exploring the Safety, Efficacy, and Bioactivity of
                                                    Herbal Medicines: Bridging Traditional Wisdom and Modern Science in
                                                    Healthcare. Future Integrative Medicine. Xiah e publishing</span>

                                                <span lang="UK"><a id="LPlnk918607" href="https://www.xiahepublishing.com/2835-6357/FIM-2023-00086" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.xiahepublishing.com/2835-6357/FIM-2023-00086</a></span>
                                            </li>
                                            <li><b>Acharya Balkrishna</b>, Rama Shankar, Vedpriya Arya, Inam Mohammad,
                                                Swami Narsingh Dev, Aashish Kumar, Hemant Sharma, Seema Bisht, Priya
                                                Tripathi, Vikram Singh and Keerti<b>(2024)</b>
                                                <div>Medicinal plants from Gangetic plains of West Bengal and yoga for
                                                    the management of lifestyle diseases. Plants Journal</div>
                                                <a id="LPlnk386008" href="https://www.plantsjournal.com/archives/?year=2024&amp;vol=12&amp;issue=2&amp;part=A&amp;ArticleId=1648" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.plantsjournal.com/archives/?year=2024&amp;vol=12&amp;issue=2&amp;part=A&amp;ArticleId=1648</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Prashant Katiyar, Sourav Ghosh, Sumit
                                                Kumar Singh &amp; Vedpriya Arya&nbsp;<b>(2024)</b>
                                                <div>Impact assessment of integrated-pathy on cancer-related fatigue in
                                                    cancer patients: an observational study.&nbsp;<i>Journal of Health,
                                                        Population and Nutrition</i></div>
                                                <a id="LPlnk431806" href="https://jhpn.biomedcentral.com/articles/10.1186/s41043-024-00537-z?fbclid=IwAR2p5PynUDXeeXZK2LJLt2a0sOBbjmGnn4VemRXTIdQodujeGvIaU3f5Kdw_aem_AaMsjJBtrRjrb9rurJ5P8JgcvtTI6bw8b9Hahq64kM0KIsLnTI3jSnUp2RDOn4UXrN2JSPGag_dvAD_S--8WJF7L#:~:text=After%20a%20month%20of%20their,3" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://jhpn.biomedcentral.com/articles/10.1186/s41043-024-00537-z?fbclid=IwAR2p5PynUDXeeXZK2LJLt2a0sOBbjmGnn4VemRXTIdQodujeGvIaU3f5Kdw_aem_AaMsjJBtrRjrb9rurJ5P8JgcvtTI6bw8b9Hahq64kM0KIsLnTI3jSnUp2RDOn4UXrN2JSPGag_dvAD_S–8WJF7L#:~:text=After%20a%20month%20of%20their,3</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Rama Shankar, Vedpriya Arya, Uday Bhan
                                                Prajapati, Darshika Lathwal, &nbsp;Priya Pathak, Rashmi Atul
                                                Joshi&nbsp;<b>(2024)</b>
                                                <div>Some plants utilized in the preparation of traditional Indian
                                                    sweets. IJFANS INTERNATIONAL JOURNAL OF FOOD AND NUTRITIONAL
                                                    SCIENCES</div>
                                                <a id="LPlnk811053" href="https://www.researchgate.net/profile/Rama-Shankar-3/publication/379036953_IJFANS_INTERNATIONAL_JOURNAL_OF_FOOD_AND_NUTRITIONAL_SCIENCES_Some_plants_utilized_in_the_preparation_of_traditional_Indian_sweets/links/65f7c5961f0aec67e2a2e9a8/IJFANS-INTERNATIONAL-JOURNAL-OF-FOOD-AND-NUTRITIONAL-SCIENCES-Some-plants-utilized-in-the-preparation-of-traditional-Indian-sweets.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.researchgate.net/profile/Rama-Shankar-3/publication/379036953_IJFANS_INTERNATIONAL_JOURNAL_OF_FOOD_AND_NUTRITIONAL_SCIENCES_Some_plants_utilized_in_the_preparation_of_traditional_Indian_sweets/links/65f7c5961f0aec67e2a2e9a8/IJFANS-INTERNATIONAL-JOURNAL-OF-FOOD-AND-NUTRITIONAL-SCIENCES-Some-plants-utilized-in-the-preparation-of-traditional-Indian-sweets.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Ajay Kumar Gautam, Nidhi Sharma,
                                                Vedpriya Arya, Vikram Khelwade&nbsp;<b>(2024)</b>
                                                <div>Growth and yield potential of sludge-based organic fertilizers on
                                                    bell pepper Capsicum annum.&nbsp;<i>Asian Journal of
                                                        Agriculture.</i></div>
                                                <a href="https://www.researchgate.net/publication/379236982_Growth_and_yield_potential_of_sludge-based_organic_fertilizers_on_bell_pepper_Capsicum_annum" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.researchgate.net/publication/379236982_Growth_and_yield_potential_of_sludge-based_organic_fertilizers_on_bell_pepper_Capsicum_annum</a>
                                            </li>
                                            <li><b>Acharya Balkrishna</b>, Swami Yagyadev, Deepika Arya, Ajay Kumar
                                                Gautam and Vedpriya Arya&nbsp;<b>(2024)</b>
                                                <div>Yagya Therapy: An Innovative Approach to Alleviate Aggravated
                                                    Vataborne Musculoskeletal Conditions.&nbsp;<i>International Journal
                                                        on Emerging Technologies</i></div>
                                                <a href="https://www.researchgate.net/profile/Deepika-Arya-4/publication/379118598_Yagya_Therapy_An_Innovative_Approach_to_Alleviate_Aggravated_Vata-_borne_Musculoskeletal_Conditions/links/65fbdbf4f3b56b5b2d17406d/Yagya-Therapy-An-Innovative-Approach-to-Alleviate-Aggravated-Vata-borne-Musculoskeletal-Conditions.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://www.researchgate.net/profile/Deepika-Arya-4/publication/379118598_Yagya_Therapy_An_Innovative_Approach_to_Alleviate_Aggravated_Vata-_borne_Musculoskeletal_Conditions/links/65fbdbf4f3b56b5b2d17406d/Yagya-Therapy-An-Innovative-Approach-to-Alleviate-Aggravated-Vata-borne-Musculoskeletal-Conditions.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sourav Ghosh, Vedpriya Arya, Srimoyee
                                                Banerjee&nbsp;<b>(2024)</b>
                                                <div>Exploring Soil Quality Variations across Upper, Middle, And Lower
                                                    Ganga Regions: Leveraging GIS &amp; Multivariate Statistical Methods
                                                    to assess Organic Farming Viability. Research Square.</div>
                                                <a href="https://www.researchsquare.com/article/rs-4134202/v1" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.researchsquare.com/article/rs-4134202/v1</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Swami Yagyadev, Deepika Arya, Ajay Kumar
                                                Gautam and Vedpriya Arya&nbsp;<b>(2024)</b>
                                                <div>Efficacy of Yagya Therapy in Paralysis Treatment: Some Case
                                                    Studies. International Journal of Theoretical &amp; Applied Sciences
                                                </div>
                                                <a href="https://www.researchgate.net/profile/Deepika-Arya-4/publication/379037325_Efficacy_of_Yagya_Therapy_in_Paralysis_Treatment_Some_Case_Studies/links/65f7c578286738732d59f588/Efficacy-of-Yagya-Therapy-in-Paralysis-Treatment-Some-Case-Studies.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://www.researchgate.net/profile/Deepika-Arya-4/publication/379037325_Efficacy_of_Yagya_Therapy_in_Paralysis_Treatment_Some_Case_Studies/links/65f7c578286738732d59f588/Efficacy-of-Yagya-Therapy-in-Paralysis-Treatment-Some-Case-Studies.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Swami Yagyadev, Deepika Arya, Ajay Kumar
                                                Gautam and Vedpriya Arya&nbsp;<b>(2024)</b>
                                                <div>Sacred Flames of Healing: Yagya Therapy in the Holistic Treatment
                                                    of Cancer, Diabetes and Heart Diseases. International Journal on
                                                    Emerging Technologies</div>
                                                <a href="https://www.researchgate.net/profile/Deepika-Arya-4/publication/378967862_Sacred_Flames_of_Healing_Yagya_Therapy_in_the_Holistic_Treatment_of_Cancer_Diabetes_and_Heart_Diseases/links/65f3d04c32321b2cff7b3cf9/Sacred-Flames-of-Healing-Yagya-Therapy-in-the-Holistic-Treatment-of-Cancer-Diabetes-and-Heart-Diseases.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="2">https://www.researchgate.net/profile/Deepika-Arya-4/publication/378967862_Sacred_Flames_of_Healing_Yagya_Therapy_in_the_Holistic_Treatment_of_Cancer_Diabetes_and_Heart_Diseases/links/65f3d04c32321b2cff7b3cf9/Sacred-Flames-of-Healing-Yagya-Therapy-in-the-Holistic-Treatment-of-Cancer-Diabetes-and-Heart-Diseases.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Hemant Sharma, Ankita Kukreti, Amita
                                                Kumari, Priyanka Saini, &nbsp;Vedpriya Arya, Ashwani
                                                Kumar&nbsp;<b>(2024)</b>
                                                <div>Traditional uses and phytopharmacology of Cirsium arvense:
                                                    Bioprospecting potential of a weed from temperate biome. Journal of
                                                    Applied Pharmaceutical Science</div>
                                                <a href="https://japsonline.com/admin/php/uploads/4205_pdf.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://japsonline.com/admin/php/uploads/4205_pdf.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Monika Payal, Neelam Rawat Dabhade,
                                                Ashwini Singh &amp; Vedpriya Arya&nbsp;<b>(2024)</b>
                                                <div>Ethnomedicine, Phytochemistry, and Anti-microbial Proficiency of
                                                    Tamarindus indica L. and Its Mediated Nanoparticles. SpringerLink
                                                </div>
                                                <a href="https://link.springer.com/article/10.1007/s12668-024-01302-6" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://link.springer.com/article/10.1007/s12668-024-01302-6</a>
                                            </li>
                                            <li><b>Balkrishna Acharya,</b>&nbsp;Arya Vedpriya, Kumar Sandeep, Singh
                                                Netrapal, Sharma Dushyant, Kumar Brijesh, Katiyar Prashant, Singh
                                                H.B.&nbsp;<b>(2024)</b>
                                                <div>Harnessing Ganoderma lucidum for medicine Food and Biowaste
                                                    Management. Indian Journals</div>
                                                <a href="https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=16&amp;issue=1&amp;article=005" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="2">https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=16&amp;issue=1&amp;article=005</a>
                                            </li>
                                            <li><b><span lang="EN-US">Acharya Balkrishna,</span></b><span lang="EN-US">&nbsp;Prashant Katiyar, Jaya Upreti, Muskan Chauhan,
                                                    Dushyant Sharma, Sandeep Kumar, Vedpriya
                                                    Arya&nbsp;<b>(2024)</b></span>
                                                <div>Investigating Ayurvedic Strategies: An In-Depth Examination of
                                                    Managing Diabetes across Different Types. Pubmed.</div>
                                                <span lang="EN-US"><a id="LPlnk719783" href="https://pubmed.ncbi.nlm.nih.gov/38468519/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://pubmed.ncbi.nlm.nih.gov/38468519/</a></span>
                                            </li>
                                            <li><b>Acharya&nbsp;Balkrishna,</b>&nbsp;Sourav&nbsp;Ghosh,&nbsp;Vedpriya&nbsp;Arya&nbsp;<b>(2024)</b>
                                                <div>
                                                    The&nbsp;role&nbsp;of&nbsp;digital&nbsp;intervention&nbsp;in&nbsp;the&nbsp;success&nbsp;of&nbsp;Micro-finance&nbsp;through&nbsp;SIDBI-PRAYAAS&nbsp;scheme:&nbsp;A&nbsp;case&nbsp;study.&nbsp;TechRxiv
                                                </div>
                                                <a id="LPlnk221468" href="https://www.techrxiv.org/doi/full/10.36227/techrxiv.170956382.27783456" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.techrxiv.org/doi/full/10.36227/techrxiv.170956382.27783456</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>Sachin Kumar Sharma, Shirley Telles, Ankur Kumar,<b>(2024)</b>
                                                <div> Muscle strength and body composition in obese adults following nine months of yoga or nutrition advice: A comparative controlled trial.Elsevier</div>
                                                <a href="https://www.sciencedirect.com/science/article/abs/pii/S1360859224001141" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">
                                                    https://www.sciencedirect.com/science/article/abs/pii/S1360859224001141</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sourav Ghosh, Ashwani Nagose, Divya
                                                Joshi, Shelly Singh, Kumud, Aditi Saxena, Sanyam Taneja, Vedpriya
                                                Arya.&nbsp;<b>(2024)</b>
                                                <div>Evaluation Of Suitability Analysis of Gangetic Water from Upper,
                                                    Middle, And Lower Ganga Rivers.</div>
                                                <a id="LPlnk408293" href="https://www.biorxiv.org/content/10.1101/2024.02.28.582642v1.full.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.biorxiv.org/content/10.1101/2024.02.28.582642v1.full.pdf</a>
                                            </li>
                                            <li><b><span lang="EN-US">Acharya Balkrishna,</span></b><span lang="EN-US">&nbsp;Vivek Gohel, Nishit Pathak, Kunal Bhattacharya,
                                                    Rishabh Dev &amp; Anurag Varshney&nbsp;<b>(2024)</b></span>
                                                <div>Livogrit prevents Amiodarone-induced toxicity in experimental model
                                                    of human liver (HepG2) cells and Caenorhabditis elegans by
                                                    regulating redox homeostasis. Drug and Chemical Toxicology. Taylor
                                                    and Francis Online</div>
                                                <a id="LPlnk695134" href="https://doi.org/10.1080/01480545.2024.2320189" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1080/01480545.2024.2320189</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b> Priya Kaushik, Sourav Ghosh, Vedpriya Arya
                                                <strong>(2024)</strong>
                                                <div>Unraveling the Interplay between Phytochemicals and Rhizosphere
                                                    Bacteria in Ficus racemose. bioRxiv</div>
                                                <a href="https://doi.org/10.1101/2024.02.27.582418" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1101/2024.02.27.582418</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sudeep Verma, M. Priya Rani, Pardeep
                                                Nain, Anurag Varshney&nbsp;<b>(2024)</b>
                                                <div>Exploring the potential of Mustard (Brassica spp.) seeds through
                                                    ‘Kolhu’ traditional method of extraction and novel identification of
                                                    an anti-cancer dipeptide, Aurantiamide acetate (Asperglaucide) on
                                                    ultra-performance liquid chromatography-mass spectrometry coupled
                                                    with quadrupole time-of-flight (UPLC/MS-QToF) analytical platform.
                                                    Elsevier</div>
                                                <a href="https://doi.org/10.1016/j.foodchem.2024.138870" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://doi.org/10.1016/j.foodchem.2024.138870</a>
                                            </li>
                                            <li><strong>Acharya Balkrishna,&nbsp;</strong>Srimoyee Banerjee, Sourav
                                                Ghosh, Divya Chauhan, Ilika Kaushik, Vedpriya Arya, and Sumit Kumar
                                                Singh&nbsp;<strong>(2024)</strong>
                                                <div><i>Reuse of Sewage Sludge as Organic Agricultural Products: An
                                                        Efficient Technology-Based Initiative. Hindawi.</i></div>
                                                <a id="LPlnk176275" href="https://doi.org/10.1155/2024/1433973" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1155/2024/1433973</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sumit Kumar Singh, Rakshit Pathak &amp;
                                                Vedpriya Arya.&nbsp;<b>(2024)</b>
                                                <div><i>E-governance paradigm in the Indian agricultural
                                                        sector.</i>&nbsp;<i>SpringerLink</i></div>
                                                <a href="https://link.springer.com/article/10.1007/s44279-024-00012-7" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s44279-024-00012-7</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Ashwani Kumar, Akansha Rohela, Vedpriya
                                                Arya, Ajay Kumar Gautam, Hemant Sharma, Priyanka Rai, Amita Kumari,
                                                Ryszard Amarowicz&nbsp;<b>(2024)</b>
                                                <div><i>Traditional uses, hepatoprotective potential, and
                                                        phytopharmacology of Tinospora cordifolia: a narrative review.
                                                        Journal of Pharmacy and Pharmacology, rgae013,</i></div>
                                                <a href="https://doi.org/10.1093/jpp/rgae013" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://doi.org/10.1093/jpp/rgae013</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;and Katiyar, Prashant and Chauhan,
                                                Muskan and Upreti, Jaya and Arya, Vedpriya&nbsp;<b>(2024)</b>
                                                <div>Integrated Reiki Therapy for the Treatment and Management of
                                                    Psychosomatic Disorders: A Pilot Study. Journal of Complementary and
                                                    Alternative Medical Research, 25 (1). pp. 10-17. ISSN 2456-6276
                                                </div>
                                                <a href="https://doi.org/10.9734/jocamr/2024/v25i1510" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="2">https://doi.org/10.9734/jocamr/2024/v25i1510</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Nidhi Sharma, Ajay Gautam, Vedpriya
                                                Arya, Vikram Khelwade&nbsp;<b>(2024)</b>
                                                <div>Enhancement of Wheat (Triticum aestivum L.) Growth and Yield
                                                    Attributes in a Subtropical Humid Climate through Treated Ganga
                                                    Sludge-based Organic Fertilizers. pubmed</div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/38288818/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="3">https://pubmed.ncbi.nlm.nih.gov/38288818/</a>
                                            </li>
                                            <li><b>Acharya Balkrishna</b>; Savita Lochab; Sudeep Verma; Jyotish
                                                Srivastava; Rishabh Dev; Anurag Varshney&nbsp;<b>(2024)</b>
                                                <div>Melanogrit potentiates melanogenesis by escalating cellular
                                                    tyrosinase activity and MITF levels via pERK inhibition. Bioscience
                                                    Reports.</div>
                                                <a href="https://doi.org/10.1042/BSR20231324" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="4">https://doi.org/10.1042/BSR20231324</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sharma, Nidhi; Arya,
                                                Vedpriya<b>&nbsp;(2024)</b>
                                                <div><i>Revving India’s Economic Engine: Unleashing MSMEs’ Potential
                                                        Amidst Challenges and Charting a Path to Prosperity. IAHRW
                                                        International Journal of Social Sciences.</i></div>
                                                <i><a href="https://www.proquest.com/openview/a6ce9b938fa3af2a2b2b2ffb9ea495a0/1?pq-origsite=gscholar&amp;cbl=5347679" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="5">https://www.proquest.com/openview/a6ce9b938fa3af2a2b2b2ffb9ea495a0/1?pq-origsite=gscholar&amp;cbl=5347679</a></i>
                                            </li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2" aria-expanded="false">
                                    2023
                                </button>
                            </h2>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Ishwar Prakash Sharma &amp; Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div>Ethno-Medicinal Study of Traditional Medicinal Plants Used by
                                                    Tribal Communities of Uttarakhand, India. Springer link</div>
                                                <a id="LPlnk628891" href="https://link.springer.com/article/10.1007/s40011-023-01519-7" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s40011-023-01519-7</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Stuti Srivastava, Deepika Srivastava,
                                                Nidhi Sharma, Vedpriya Arya, Ajay K. Gautam.&nbsp;<b>(2023)</b>

                                                <div><i>Unleashing the potential of medicinal and aromatic plant wastes
                                                        with particular consideration of vermicomposting: a
                                                        comprehensive review of
                                                        literature.&nbsp;<b>Elsevier</b>&nbsp;Journal of Applied
                                                        Research on Medicinal and Aromatic Plants</i></div>

                                                <a href="https://doi.org/10.1016/j.jarmap.2023.100527" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1016/j.jarmap.2023.100527</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Swami Narsingh, C. Dev, Bhasker Joshi,
                                                Rajesh Kumar Mishra&nbsp;<b>(2023)</b>
                                                <div><i>Spirulina: A Miraculous alga with Pharmaco-nutraceutical
                                                        Potential as Future Food. International Journal of Food,
                                                        Nutrition and Dietetics</i></div>
                                                <a href="https://www.researchgate.net/profile/Swami-Narsingh-Dev-2/publication/376455555_Spirulina_A_Miraculous_alga_with_Pharmaco-nutraceutical_Potential_as_Future_Food/links/6579502a6610947889c2d04d/Spirulina-A-Miraculous-alga-with-Pharmaco-nutraceutical-Potential-as-Future-Food.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://www.researchgate.net/profile/Swami-Narsingh-Dev-2/publication/376455555_Spirulina_A_Miraculous_alga_with_Pharmaco-nutraceutical_Potential_as_Future_Food/links/6579502a6610947889c2d04d/Spirulina-A-Miraculous-alga-with-Pharmaco-nutraceutical-Potential-as-Future-Food.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Priyanka Chaudhary, Hemant Sharma,
                                                Deepika Srivastava, Nidhi Sharma, Stuti Srivastava, and Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div><i>Roscoea purpurea (Kakoli): Exploring the imperative for
                                                        conservation of an endangered Ashtawarga plant through
                                                        comprehensive review. International Journal of Minor Fruits,
                                                        Medicinal and Aromatic Plants.</i></div>
                                                <i><a href="https://www.researchgate.net/profile/Hemant-Sharma-25/publication/376618666_Roscoea_purpurea_Kakoli_Exploring_the_imperative_for_conservation_of_an_endangered_Ashtawarga_plant_through_comprehensive_review/links/65816c2a6f6e450f1986efef/Roscoea-purpurea-Kakoli-Exploring-the-imperative-for-conservation-of-an-endangered-Ashtawarga-plant-through-comprehensive-review.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="2">https://www.researchgate.net/profile/Hemant-Sharma-25/publication/376618666_Roscoea_purpurea_Kakoli_Exploring_the_imperative_for_conservation_of_an_endangered_Ashtawarga_plant_through_comprehensive_review/links/65816c2a6f6e450f1986efef/Roscoea-purpurea-Kakoli-Exploring-the-imperative-for-conservation-of-an-endangered-Ashtawarga-plant-through-comprehensive-review.pdf</a></i>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Savita Lochab, Sudeep Verma, Jyotish
                                                Srivastava, Rishabh Dev, Anurag Varshney&nbsp;<b>(2023)</b>
                                                <div><i>Melanogrit potentiates melanogenesis by escalating cellular
                                                        tyrosinase activity and MITF levels via pERK inhibition.
                                                        PubMed</i></div>
                                                <a id="LPlnk194341" href="https://pubmed.ncbi.nlm.nih.gov/38054639/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://pubmed.ncbi.nlm.nih.gov/38054639/</a>
                                            </li>
                                            <li><b>Balkrishna Acharya,</b>&nbsp;Arya Vedpriya, Singh Sumit
                                                Kumar&nbsp;<b>(2023)</b>
                                                <div><i>Minimum support price under the aegis of universal basic income:
                                                        Understanding the implications and way forward: A review.
                                                        Bhartiya Krishi Anusandhan Patrika</i></div>
                                                <a href="https://arccjournals.com/journal/bhartiya-krishi-anusandhan-patrika/BKAP640" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://arccjournals.com/journal/bhartiya-krishi-anusandhan-patrika/BKAP640</a>
                                            </li>
                                            <li><b>Balkrishna A,</b>&nbsp;Mittal R, Arya V&nbsp;<b>(2023)</b>
                                                <div>

                                                    <i>Tumor Suppressive Role of MicroRNAs in Triple Negative Breast
                                                        Cancer. Current Pharmaceutical Design. Bentham Science. Europe
                                                        PMC</i>

                                                    <a href="https://europepmc.org/article/med/38037837" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://europepmc.org/article/med/38037837</a>

                                                </div>
                                            </li>
                                            <li><b>Acharya Balkrishna</b>, Uday Bhan Prajapati, , Rama Shankar, Rashmi
                                                Atul Joshi&nbsp;<b>(2023)</b>
                                                <div><i>Nutraceutical Aspects of Rhododendron (Burans): Certainly, a
                                                        Need to Include Some Other Species for Food and Beverage
                                                        Production. International Journal of Science and Research
                                                        (IJSR), ISSN: 2319-7064, SJIF (2022): 7.942</i></div>
                                                <a id="LPlnk442323" href="https://www.ijsr.net/archive/v11i12/SR221202091537.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.ijsr.net/archive/v11i12/SR221202091537.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Ishwar Prakash Sharma, Arun Kumar
                                                Kushwaha, Vedpriya Arya&nbsp;<b>(2023)</b>
                                                <div>Effect of altitudinal variation on soil nutrient properties at
                                                    various sites in Garhwal Himalaya, Uttarakhand. Elsevier</div>
                                                <a id="LPlnk862660" href="https://doi.org/10.1016/j.chnaes.2023.11.003" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1016/j.chnaes.2023.11.003</a>
                                            </li>
                                            <li>Rudra B. Bhandari,&nbsp;<b>Acharya Balkrishna,</b>&nbsp;Kuppusamy
                                                Maheshkumar, and Velan A. Arumugam&nbsp;<b>(2023)</b>
                                                <div><i>Traditional Formulations for Managing COVID-19: A Systematic
                                                        Review. Journal of Integrative and Complementary Medicine.</i>
                                                </div>
                                                <a id="LPlnk789346" href="https://doi.org/10.1089/jicm.2023.0177" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1089/jicm.2023.0177</a>
                                            </li>
                                            <li><b>Balkrishna, Acharya;</b>&nbsp;Shankar, Rama; Prajapati, Uday Bhan;
                                                Joshi, Rashmi Atul; Srivastava, Anupam; Awasthi,
                                                Chetan&nbsp;<b>(2023)</b>
                                                <div>Exploring the common millets of India: A comprehensive
                                                    review.<b>&nbsp;</b><i>Journal of Drug Research in Ayurvedic
                                                        Sciences</i></div>
                                                <a id="LPlnk483401" href="https://journals.lww.com/jdra/fulltext/2023/08001/exploring_the_common_millets_of_india__a.7.aspx" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://journals.lww.com/jdra/fulltext/2023/08001/exploring_the_common_millets_of_india__a.7.aspx</a>
                                            </li>
                                            <li>
                                                <div><b><span lang="UK">Acharya Balkrishna,</span></b><span lang="UK">&nbsp;Sonam Sharma, Vivek Gohel, Ankita Kumari, Malini
                                                        Rawat, Madhulina Maity, Sandeep Sinha, Rishabh Dev, Anurag
                                                        Varshney.<b>&nbsp;(2023)</b></span></div>
                                                <div><i><span lang="UK">Renogrit attenuates Vancomycin-induced
                                                            nephrotoxicity in human renal spheroids and in
                                                            Sprague-Dawley rats by regulating kidney injury biomarkers
                                                            and creatinine/urea clearance. PLOS ONE.</span></i></div>
                                                <span lang="UK"><a id="LPlnk872174" href="https://doi.org/10.1371/journal.pone.0293605" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1371/journal.pone.0293605</a></span>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Kunal Bhattacharya, Sunil Shukla &amp;
                                                Anurag Varshney&nbsp;<b>(2023)</b>
                                                <div><i>Neuroprotection by Polyherbal Medicine Divya-Medha-Vati Against
                                                        Scopolamine-Induced Cognitive Impairment Through Modulation of
                                                        Oxidative Stress, Acetylcholine Activity, and Cell Signaling.
                                                        Molecular Neurobiology</i></div>
                                                <a id="LPlnk256140" href="https://link.springer.com/article/10.1007/s12035-023-03601-7" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s12035-023-03601-7</a>
                                            </li>
                                            <li><b>Acharya Balkrishna</b>, Sonam Verma, Sumit Kumar Singh, Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div>Alzheimer’s disease: A role of biomarkers in early diagnosis and
                                                    evidences from African ethnomedicinal knowledge. European Journal of
                                                    Neuroscience</div>
                                                <a id="LPlnk282490" href="https://onlinelibrary.wiley.com/doi/abs/10.1111/ejn.16050" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://onlinelibrary.wiley.com/doi/abs/10.1111/ejn.16050</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Vedpriya Arya, Rohini Bhat, Priyanka
                                                Chaudhary, Shalini Mishra, Ashwani Kumar, Vani Sharma, Vijay Sharma,
                                                Nidhi Sharma &amp; Ajay Kumar Gautam&nbsp;<b>(2023)</b>
                                                <div>Organic farming for sustainable agriculture and public health:
                                                    Patanjali’s perspective. SpringerLink</div>
                                                <a id="LPlnk185741" href="https://link.springer.com/article/10.1007/s42535-023-00717-y" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s42535-023-00717-y</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Rakshit Pathak, Sandeep Kumar, Vedpriya
                                                Arya, Sumit Kumar Singh&nbsp;<b>(2023)</b>
                                                <div>A comprehensive analysis of the advances in Indian Digital
                                                    Agricultural architecture. Agriculture Technology (Elsevier, USA)
                                                </div>
                                                <a id="LPlnk982504" href="https://doi.org/10.1016/j.atech.2023.100318" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1016/j.atech.2023.100318</a>
                                            </li>
                                            <li>Swati Haldar, Snehal R Jadhav, Vandana Gulati, David J
                                                Beale,&nbsp;<b>Acharya Balkrishna</b>, Anurag Varshney, Enzo A Palombo,
                                                Avinash V Karpe, Rohan M Shah.&nbsp;<b>(2023)</b>
                                                <div>Unravelling the gut-lung axis: insights into microbiome
                                                    interactions and Traditional Indian Medicine’s perspective on
                                                    optimal health.&nbsp;<i>FEMS Microbiology Ecology,
                                                        fiad103.</i><b></b></div>
                                                <a id="LPlnk456080" href="https://doi.org/10.1093/femsec/fiad103" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1093/femsec/fiad103</a>
                                            </li>
                                            <li><strong>Acharya Balkrishna,&nbsp;</strong>Sumit Singh, Sonam Verma,
                                                Pratha Bora, Vidhi Dobhal, Vedpriya Arya&nbsp;<strong>(2023)</strong>
                                                <div>Integrative perspective on pathophysiology of Schizophrenia and its
                                                    management through African traditional medicinal plants. Authorea.
                                                </div>
                                                <a id="LPlnk770420" href="https://www.authorea.com/users/656257/articles/661714-integrative-perspective-on-pathophysiology-of-schizophrenia-and-its-management-through-african-traditional-medicinal-plants" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.authorea.com/users/656257/articles/661714-integrative-perspective-on-pathophysiology-of-schizophrenia-and-its-management-through-african-traditional-medicinal-plants</a>
                                            </li>
                                            <li><b><span lang="uk">Acharya Balkrishna,</span></b><span lang="uk">&nbsp;Seema Bisht, Bhasker Joshi, Anupam Srivastava and
                                                    Rajesh Kumar Mishra&nbsp;<b>(2023)</b></span>
                                                <div>Study of essential oil bearing plants, their composition and
                                                    Ayurvedic herbalism. JEOPC, 2(1), 01-19, 2024</div>
                                                <span lang="uk"><a id="LPlnk436817" href="https://doi.org/10.58985/jeopc.2024.v02i01.32" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.58985/jeopc.2024.v02i01.32</a></span>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Prashant Katiyar, Sumit Kumar Singh,
                                                Sourav Ghosh, Vedpriya Arya&nbsp;<b>(2023)</b>
                                                <div>Impact Assessment of Integrated-pathy on Cancer-Related Fatigue in
                                                    Cancer Patients: An Observational study. Research Square.</div>
                                                <a id="LPlnk406827" href="https://www.researchsquare.com/article/rs-3201641/v1" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.researchsquare.com/article/rs-3201641/v1</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sugandh Sinha, Ashwani Kumar, Vedpriya
                                                Arya, Ajay Kumar Gautam, Martin Valis, Kamil Kuca, Dinesh Kumar, Ryszard
                                                Amarowicz&nbsp;<b>(2023)</b>
                                                <div>Sepsis-mediated renal dysfunction: Pathophysiology, biomarkers and
                                                    role of phytoconstituents in its management.&nbsp;<i>Biomedicine and
                                                        Pharmacotherapy</i></div>
                                                <a id="LPlnk645529" href="https://doi.org/10.1016/j.biopha.2023.115183" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1016/j.biopha.2023.115183</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Mohini Chaudhary, Hemant Sharma, Deepika
                                                Srivastava, Ankita Kukreti, Ashwani Kumar, Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div>Phytochemistry, pharmacology, and medicinal aspects of Allium
                                                    fistulosum L.: A narrative review. Journal of Applied Pharmaceutical
                                                    Science Vol. 0(00), pp 001-012, June, 2023.</div>
                                                <a id="LPlnk795632" href="https://japsonline.com/admin/php/uploads/3983_pdf.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://japsonline.com/admin/php/uploads/3983_pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna</b>, Bhadoria Kamal, Mishra Shalini, Kumar
                                                Ashwani, Singh Shalini, Srivastava Deepika, Arya Vedpriya (2023)
                                                <div>Ethnomedicinal plants used by Juang and Munda Tribals of Eastern
                                                    India against gastrointestinal disorders: A narrative
                                                    review.&nbsp;<i>International Journal of Phytomedicines and Related
                                                        Industries.</i></div>
                                                <a href="https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=15&amp;issue=2&amp;article=003" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=15&amp;issue=2&amp;article=003</a>
                                            </li>
                                            <li>A. Gupta, S. Ghosh, R. Om, V. Arya,&nbsp;<b>A.
                                                    Balkrishna</b>&nbsp;<b>(2023)</b>
                                                <div>Effects of a yoga protocol in managing depression, anxiety and
                                                    stress among office workers during the COVID-19 pandemic: A
                                                    cross-sectional study. Sri Lanka Journal of Psychiatry</div>
                                                <a href="https://sljpsyc.sljol.info/articles/10.4038/sljpsyc.v14i1.8390" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://sljpsyc.sljol.info/articles/10.4038/sljpsyc.v14i1.8390</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Maneesha Rana, Shalini Mishra, Deepika
                                                Srivastava, Rohit Bhardwaj, Shalini Singh, Satyendra Kumar Rajput, and
                                                Vedpriya Arya&nbsp;<b>(2023)</b>
                                                <div>Incredible Combination of Lifestyle Modification and Herbal
                                                    Remedies for Polycystic Ovarian Syndrome Management. Hindawi
                                                    Evidence-Based Complementary and Alternative Medicine Volume 2023,
                                                    Article ID 3705508, 20 pages</div>
                                                <a id="LPlnk555133" href="https://doi.org/10.1155/2023/3705508" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1155/2023/3705508</a>
                                            </li>
                                            <li><b><span lang="EN-US">Acharya Balkrishna,</span></b><span lang="EN-US">&nbsp;Ishwar Prakash Sharma, Arun Kumar Kushwaha,
                                                    Shashi Kumar &amp; Vedpriya Arya&nbsp;<b>(2023)</b></span>
                                                <div>A study on multi-ranged medicinal plants and soil temperature in
                                                    various sites of Garhwal Himalaya, Uttarakhand. Springer Link</div>
                                                <a id="LPlnk424618" href="https://link.springer.com/article/10.1007/s44274-023-00003-3" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s44274-023-00003-3</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Swati Haldar, Anurag
                                                Varshney&nbsp;<b>(2023)</b>
                                                <div><i>OECD-407 Driven 28-day-repeated-dose non-clinical safety
                                                        evaluation of Tinospora cordifolia (Giloy) stem aqueous extract
                                                        in Sprague-Dawley rats under GLP compliance. Frontiers in
                                                        Pharmacology.</i></div>
                                                <a id="LPlnk889107" href="https://www.frontiersin.org/articles/10.3389/fphar.2023.1095083/full" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.frontiersin.org/articles/10.3389/fphar.2023.1095083/full</a>
                                            </li>
                                            <li><b><span lang="UK">Acharya Balkrishna (2023)</span></b>
                                                <div><span lang="UK">World Herbal Encyclopedia. MANN KI BAAT – SPL.
                                                        ISSUE – SECTION 7: GLOBALIZATION &amp; INTERNATIONAL
                                                        COOPERATION. Journal of Research in Ayurvedic Sciences.</span>
                                                </div>
                                                <a id="LPlnk163012" href="https://www.jrasccras.com/temp/JResAyurvedicSci7592-1914833_051908.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.jrasccras.com/temp/JResAyurvedicSci7592-1914833_051908.pdf</a>
                                            </li>
                                            <li><strong>Acharya Balkrishna (2023)</strong>
                                                <i>Plant Museum: A Global Collection of &gt;</i><i>60,000 Plant Arts in
                                                    Patanjali Research Institute, Haridwar (India). National Academy
                                                    Science Letters (2023).</i>
                                                <a href="https://link.springer.com/article/10.1007/s40009-023-01263-6" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s40009-023-01263-6</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Naveen Thakur, Bhavana Patial , Saurabh
                                                Sharma, Ashwani Kumar, Vedpriya Arya and Ryszard
                                                Amarowicz&nbsp;<b>(2023)</b>
                                                <div><i>Synthesis, Characterization and Antibacterial Efficacy of
                                                        Catharanthus roseus and Ocimum tenuiflorum-Mediated Silver
                                                        Nanoparticles: Phytonanotechnology in Disease Management.
                                                        &nbsp;Processes 2023, 11(5), 1479</i></div>
                                                <a href="https://www.mdpi.com/2227-9717/11/5/1479" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://www.mdpi.com/2227-9717/11/5/1479</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sonam Sharma, Madhulina Maity, Meenu
                                                Tomer, Rani Singh, Vivek Gohel, Rishabh Dev, Sandeep Sinha, Anurag
                                                Varshney&nbsp;<b>(2023)</b>
                                                <div><em>Divya-WeightGo combined with moderate aerobic exercise
                                                        remediates adiposopathy, insulin resistance, serum biomarkers,
                                                        and hepatic lipid accumulation in high-fat diet-induced obese
                                                        mice.</em></div>
                                                <a id="LPlnk236165" href="https://doi.org/10.1016/j.biopha.2023.114785" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-safelink="true" data-linkindex="0">https://doi.org/10.1016/j.biopha.2023.114785</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Ankita Semwal, Nidhi Sharma and Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div><em>Phytochemical and Pharmacological Profile of Desmodium
                                                        styracifolium (Osbeck) Merr: Updated Review.&nbsp;<a title="link to all titles by this publisher" href="https://www.ingentaconnect.com/content/ben;jsessionid=5dml774ffhqnc.x-ic-live-03" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-safelink="true" data-linkindex="0">Bentham Science Publishers</a></em></div>
                                                <a href="https://doi.org/10.2174/2215083809666221209085439" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-safelink="true" data-linkindex="1">https://doi.org/10.2174/2215083809666221209085439</a>
                                            </li>
                                            <li><strong>Acharya Balkrishna,</strong> Bhawana Kharayat, Shubhangi
                                                Rastogi, Manisha Kabdwal, Swati Haldar, Anurag Varshney
                                                <strong>(2023)</strong>
                                                <div><em>Withania somnifera Seed Oil Exhibits Anti-biofilm Properties
                                                        Against Drug-resistant Candida auris Clinical Isolate through
                                                        Modulation in Cell Permeability. Journal of Applied
                                                        Microbiology, lxad087.</em></div>
                                                <a href="https://doi.org/10.1093/jambio/lxad087" target="_blank" rel="noopener">https://doi.org/10.1093/jambio/lxad087</a>
                                            </li>
                                            <li><strong>Balkrishna, Acharya;</strong> Bhatt, Shalini; Sharma, Nidhi;
                                                Srivastava, Deepika; Arya, Vedpriya <strong>(2023)</strong>
                                                <div><em>An Impact Assessment of Government-Initiated Programs and
                                                        Schemes for the Socio-economic Development of Gujarat Tribes in
                                                        India.</em></div>
                                                <a href="https://www.proquest.com/openview/80d09967a6d91979ec2af44ffb8ef400/1?pq-origsite=gscholar&amp;cbl=5347679" target="_blank" rel="noopener">
                                                    https://www.proquest.com/openview/80d09967a6d91979ec2af44ffb8ef400/1?pq-origsite=gscholar&amp;cbl=5347679</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> S Ghosh, S Banerjee, V Arya
                                                <strong>(2023)</strong>
                                                <div><em>An inquest analysis of Mission Antyodaya: A novel convergence
                                                        approach for Rural Development in India.</em></div>
                                                <a href="https://www.researchgate.net/publication/368334230" target="_blank" rel="noopener">https://www.researchgate.net/publication/368334230</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Rashmi Mittal, Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div><i>Stumbling Blocks in Reinvigorating the Health of Diseased
                                                        Individuals Through Herbal Medicine. Bentham Science
                                                        Publishers.</i></div>
                                                <a href="https://10th.groupalerts.benthamscience.com/chapter/18462" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://10th.groupalerts.benthamscience.com/chapter/18462</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Usman Umar Zango, Saima Kauser Nasir,
                                                Vedpriya Arya&nbsp;<b>(2023)</b>
                                                <div><i>A Clinical Cognizance of Molecular and Pathological Diagnostic
                                                        Approach of TNBC. Bentham Science Publishers.</i></div>
                                                <a href="https://www.eurekaselect.com/chapter/18454" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://www.eurekaselect.com/chapter/18454</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> B Joshi, A Srivastava, S Bisht
                                                <strong>(2023)</strong>
                                                <div><em>An Insight on Nutraceutical Influences of Spice and Condiments:
                                                        Serve as a Flavor and Immunity Enhancer from Ages.</em></div>
                                                <a href="https://www.intechopen.com/chapters/84941" target="_blank" rel="noopener">https://www.intechopen.com/chapters/84941</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> NR Dabhade, A Singh, V Arya
                                                <strong>(2023)</strong>
                                                <div><em>Anticancer acumens of three Annona species: a proportional
                                                        review.</em></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/36670184/" target="_blank" rel="noopener">https://pubmed.ncbi.nlm.nih.gov/36670184/</a>
                                            </li>
                                            <li><strong>Balkrishna, A.</strong>; Gohek, V.; Pathak, V.; Singh, R.;
                                                Tomer, M.; Rawat, M.; Dev, R.; Varshney, A. <strong>(2023)</strong>
                                                <div><em>Anti-oxidant response of lipidom modulates lipid metabolism in
                                                        Caenorhabditis elegans and in OxLDL-induced human macrophages by
                                                        tuning inflammatory mediators. Biomedicine &amp;
                                                        Pharmacotherapy, 2023, 160,114309</em></div>
                                                <a href="https://www.sciencedirect.com/science/article/pii/S0753332223000975" target="_blank" rel="noopener">https://www.sciencedirect.com/science/article/pii/S0753332223000975</a>
                                            </li>
                                            <li><strong>Balkrishna, A.</strong>; Sengupta, S.; Kumari, P.; Dev, R.;
                                                Haldar, S.; Varshney, A. <strong>(2023)</strong>
                                                <div><em>Anu Taila, an herbal nasal-drop, delays spore germination in
                                                        Cunninghamella bertholletiae by reducing cAMP-PKA dependent ROS
                                                        in mucorale pathogen and extrinsic ROS in human host cells.
                                                        Letters in Applied Microbiology 2023, 76, 2, ovad014</em></div>
                                                <a href="https://academic.oup.com/lambio/article/76/2/ovad014/7008501" target="_blank" rel="noopener">https://academic.oup.com/lambio/article/76/2/ovad014/7008501</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> A Singh, B Joshi, RK Mishra, A Srivastava
                                                <strong>(2023)</strong>
                                                <div><em>Highly useful medicinal plants of Patanjali Herbal Garden,
                                                        Haridwar, Uttarakhand and special emphasis on their
                                                        conservation.</em></div>
                                                <a href="https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=15&amp;issue=1&amp;article=005" target="_blank" rel="noopener">https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=15&amp;issue=1&amp;article=005</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Sharma, D.; Sharma, R.K.; Bhattacharya,
                                                K.; Varshney, A. <strong>(2023)</strong>
                                                <div><em>Investigating the Role of Classical Ayurveda-Based Incineration
                                                        Process on the Synthesis of Zinc Oxide Based Jasada Bhasma
                                                        Nanoparticles and Zn2+ Bioavailability. ACS Omega, 2023.</em>
                                                </div>
                                                <a href="https://pubs.acs.org/doi/full/10.1021/acsomega.2c05391" target="_blank" rel="noopener">https://pubs.acs.org/doi/full/10.1021/acsomega.2c05391</a>
                                            </li>
                                            <li>Kala, N., Telles, S., Sharma S. K., &amp; <strong>Balkrishna, A.
                                                    (2023)</strong>
                                                <div><em>P300 following four voluntarily regulated yoga breathing
                                                        practices and breath awareness. Clinical EEG &amp;
                                                        Neurosciensce.</em></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/35317637/" target="_blank" rel="noopener">https://pubmed.ncbi.nlm.nih.gov/35317637/</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> R Mittal, V Arya <strong>(2023)</strong>
                                                <div><em>Unveiling Role of MicroRNAs in Metastasizing Triple Negative
                                                        Breast Cancer: From Therapeutics to Delivery.</em></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/36892021/" target="_blank" rel="noopener">https://pubmed.ncbi.nlm.nih.gov/36892021/</a>
                                            </li>
                                            <li><strong> Balkrishna, A.;</strong> Tomar, M.; Bhattacharya, K.; Varshney,
                                                A. <strong>(2023)</strong>
                                                <div><em>Withania somnifera-derived Carbon Dots Protect Human Epidermal
                                                        Cells Against UVB-Induced Cell Death and Support Growth
                                                        Factor-Mediated Wound Healing. Nanoscale Advances, 2023.</em>
                                                </div>
                                                <a href="https://pubs.rsc.org/en/content/articlehtml/2023/na/d2na00545j" target="_blank" rel="noopener">https://pubs.rsc.org/en/content/articlehtml/2023/na/d2na00545j</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3" aria-expanded="false">
                                    2022
                                </button>
                            </h2>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><strong>Balkrishna, A.;</strong> Sinha, S.; Varshney, A.
                                                <strong>(2022)</strong>
                                                <div><em>28-day repeated dose toxicological evaluation of Coronil in
                                                        Sprague Dawley rats: Behavioral, hematological, biochemical and
                                                        histopathological assessments under GLP compliance. Drug and
                                                        Chemical Toxicology 2023, 46,2 343-356.</em></div>
                                                <a href="https://pesquisa.bvsalud.org/global-literature-on-novel-coronavirus-2019-ncov/resource/fr/covidwho-1684266" target="_blank">https://pesquisa.bvsalud.org/global-literature-on-novel-coronavirus-2019-ncov/resource/fr/covidwho-1684266</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> R Shankar, RA Joshi
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>A Comparative Nutraceutical Analysis of Edible Solanum L.
                                                        Species Reported in India. Food Science and Nutrition Research,
                                                        2022, 5(1), 1-6.</em>
                                                </div>
                                                <a href="https://www.scivisionpub.com/pdfs/a-comparative-nutraceutical-analysis-of-edible-solanum-l-species-reported-in-india-2504.pdf" target="_blank">https://www.scivisionpub.com/pdfs/a-comparative-nutraceutical-analysis-of-edible-solanum-l-species-reported-in-india-2504.pdf</a>
                                            </li>

                                            <li>Chetry, D., Telles, S., Mahadevanc, J., Prasoon, K., Gandharva, K.,
                                                Agrawal, M., &amp; <strong>Balkrishna, A. (2022).</strong>
                                                <div><em>A Comparison of Practice Guidelines for Yoga Breathing from the
                                                        Traditional Texts and PubMed-Indexed Research.</em></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/36669770/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/36669770/</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> AK Gautam, S Avasthi, M Niranjan, RK
                                                Verma, V Arya <strong>(2022)</strong>
                                                <div><em>A Comprehensive Account of the Rust Genus Skierka
                                                        (Skierkaceae). </em></div>
                                                <a href="https://www.mdpi.com/2309-608X/8/12/1243" target="_blank">https://www.mdpi.com/2309-608X/8/12/1243</a>
                                            </li>
                                            <li>
                                                <strong>A Balkrishna,</strong> M Chauhan, A Dabas, V Arya
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>A Comprehensive Insight into the Phytochemical, Pharmacological
                                                        Potential, and Traditional Medicinal Uses of Albizia lebbeck
                                                        (L.) Benth. </em>
                                                </div>
                                                <a href="https://www.hindawi.com/journals/ecam/2022/5359669/" target="_blank">https://www.hindawi.com/journals/ecam/2022/5359669/</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> S Singh, D Srivastava, S Mishra, S
                                                Sharma, R Mishra <strong>(2022)</strong>
                                                <div>
                                                    <em>A systematic review on traditional, ayurvedic, and herbal
                                                        approaches to treat solar erythema. International Journal of
                                                        Dermatology 2022.</em>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/35643834/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/35643834/</a>
                                            </li>
                                            <li>
                                                <strong>Acharya Balkrishna,</strong> Vedpriya Arya, Ritika Joshi,
                                                Ashwani Kumar, Gunjan Sharma and Ashish Dhyani <strong>(2022)</strong>
                                                <div>
                                                    <em>Doubling Farmers’ Income in India: Progress, Gaps and Futuristic
                                                        Approaches. Indian Journal of Ecology 2022, 49.</em>
                                                </div>
                                                <a href="http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765447.pdf" target="_blank">http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765447.pdf</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> B Joshi, A Srivastava, S Bisht
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Agriculture Food Crops Diversity of India: A Scenario. </em>
                                                </div>
                                                <a href="http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765346.pdf" target="_blank">http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765346.pdf</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> S Verma, S Singh, V Arya
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Alzheimer’s Disease: A Role of Biomarkers in Early Diagnosis and
                                                        Evidences from African Ethnomedicinal Knowledge. </em>
                                                </div>
                                                <a href="https://europepmc.org/article/ppr/ppr578064" target="_blank">https://europepmc.org/article/ppr/ppr578064</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> S Nag, A Dabas, V Arya
                                                <strong>(2022)</strong>
                                                <div><em>Analgesic potential of medicinal plants used by the tribes of
                                                        Western Himalayan region of India: A systematic review. </em>
                                                </div>
                                                <a href="https://pubag.nal.usda.gov/catalog/7914867" target="_blank">https://pubag.nal.usda.gov/catalog/7914867</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Gupta, A.K.; Gupta, A.; Singh, P.;
                                                Singh, K.; Tomar, M.; Rajagopal, D. <strong>(2022)</strong>
                                                <div>
                                                    <em>Antibacterial activity and mechanism of action of an ayurvedic
                                                        formulation Khadirarishta. Journal of Herbal Medicine 2022,
                                                        32,100509.</em>
                                                </div>
                                                <a href="https://www.sciencedirect.com/science/article/abs/pii/S2210803321000890" target="_blank">https://www.sciencedirect.com/science/article/abs/pii/S2210803321000890</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> V Arya, IP Sharma <strong>(2022)</strong>
                                                <div>
                                                    <em>Anti-Cancer and Anti-Inflammatory Potential of Furanocoumarins
                                                        from Ammi majus L. </em>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/34431469/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/34431469/</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Gohel, V.; Pathak, N.; Tomer, M.;
                                                Rawat, M.; Dev, R.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Anti-hyperglycemic contours of Madhugrit are robustly translated
                                                        in the Caenorhabditis elegans model of lipid accumulation by
                                                        regulating oxidative stress and inflammatory response. Frontiers
                                                        in Endocrinology, 2022, 13, 3156.</em>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/36545334/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/36545334/</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Singh, A.; Singh, J.; Pokhrel, S.;
                                                Bhattacharya, K.; Varshney, A. <em><strong>(2022</strong>)</em>
                                                <div>
                                                    <em>Anti-obesity activity of polyherbal formulation
                                                        Divya-Medohar-Vati by inhibition of pancreatic lipase activity
                                                        and triglyceride translocation through enterocytes.
                                                        Phytomedicine Plus 2 2022, 2, 1, 100194.</em>
                                                </div>
                                                <a href="https://www.sciencedirect.com/science/article/pii/S2667031321001767" target="_blank">https://www.sciencedirect.com/science/article/pii/S2667031321001767</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Karumuri, S.; Sakat, S.S.; Haldar, S.;
                                                Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Anti-oxidant Profile of Divya- Peedantak-Vati Abates
                                                        Paclitaxel-Induced Hyperalgesia and Allodynia in CD-1 Mice Model
                                                        of Neuropathic Pain. Phytomedicine Plus 2022, 100229</em>
                                                </div>
                                                <a href="https://www.sciencedirect.com/science/article/pii/S266703132200015X" target="_blank">https://www.sciencedirect.com/science/article/pii/S266703132200015X</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Rastogi, S.; Kharayat, B.; Tomer, M,;
                                                Varshney, Y.; Singh, K.; Kumari, P.; Dev, R.; Srivastava, J.; Haldar,
                                                S.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Anu taila, an herbal nasal drop, suppresses mucormycosis by
                                                        regulating host TNF</em><em>‐</em><em>α</em><em> response and
                                                        fungal ergosterol biosynthesis. Journal of Applied Microbiology
                                                        2022.</em>
                                                </div>
                                                <a href="https://sfamjournals.onlinelibrary.wiley.com/doi/abs/10.1111/jam.15451" target="_blank">https://sfamjournals.onlinelibrary.wiley.com/doi/abs/10.1111/jam.15451</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Bhattacharya, K.; Sinha, S.; Dev, R,;
                                                Srivastava, J.; Singh, P.; Haldar, S.; Varshney, A.
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Apparent hepatotoxicity of Giloy (Tinospora cordifolia): far
                                                        from what meets the eyes. Journal of Clinical and Experimental
                                                        Hepatology 2022, 12, 1, 239-240.</em>
                                                </div>
                                                <a href="https://www.jcehepatology.com/article/S0973-6883(21)00245-0/fulltext" target="_blank">https://www.jcehepatology.com/article/S0973-6883(21)00245-0/fulltext</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> V Dobhal, S Verma, D Srivastava, S Singh,
                                                V Arya <strong>(2022)</strong>
                                                <div>
                                                    <em>Arctigenin: A Potential Component with Multifaceted Therapeutic
                                                        Properties. </em>
                                                </div>
                                                <a href="https://phytopharmajournal.com/assets/pdf_files/Vol11_Issue6_07.pdf" target="_blank">https://phytopharmajournal.com/assets/pdf_files/Vol11_Issue6_07.pdf</a>
                                            </li>
                                            <li><strong>A Balkrishna</strong>, IP Sharma, V Arya, AK Sharma
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Biologicals and their plant stress tolerance ability. Symbiosis
                                                        (2022).</em>
                                                </div>
                                                <a href="https://pubag.nal.usda.gov/catalog/7819875" target="_blank">https://pubag.nal.usda.gov/catalog/7819875</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> A Singh, N Rawat Dabhade, H Sharma, V
                                                Arya <strong>(2022)</strong>
                                                <div>
                                                    <em>Ceiba Pentandra: An Updated Review on Ethno-Medicinal Customs,
                                                        Phyto-Bioactive Configuration and Pharmacological Facets. </em>
                                                </div>
                                                <a href="https://papers.ssrn.com/sol3/papers.cfm?abstract_id=4227600" target="_blank">https://papers.ssrn.com/sol3/papers.cfm?abstract_id=4227600</a>
                                            </li>

                                            <li>S Pal, S Telles, <strong>A Balkrishna (2022)</strong>
                                                <div>
                                                    <em>Changes in Brain Waves During Silent Repetition of OM: A
                                                        Crossover Study from India. </em>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/36374401/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/36374401/</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Verma, S.; Sakat, S.; Joshi, K.;
                                                Solleti, S.L.; Bhattacharya, K.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Comprehensive Phytochemical Profiling of Polyherbal
                                                        Divya-Kayakalp-Vati and Divya-Kayakalp-Oil and Their Combined
                                                        Efficacy in Mouse Model of Atopic Dermatitis-Like Inflammation
                                                        Through Regulation of Cytokines. Clinical, Cosmetic and
                                                        Investigational Dermatology 2022, 15, 293</em>
                                                </div>
                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8882669/" target="_blank">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8882669/</a>
                                            </li>
                                            <li><strong>A Balkrishna</strong>, S Mishra, A Kumar, V Arya, AK Gautam, G
                                                Sharma, I Abel <strong>(2022)</strong>
                                                <div>
                                                    <em>Conservation-omics of medicinal plants: From botanical gardens
                                                        to herbarium and&nbsp;museum of plant illustrations. </em>
                                                </div>
                                                <a href="https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=14&amp;issue=4&amp;article=002" target="_blank">https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=14&amp;issue=4&amp;article=002</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> B Kumar, V Arya <strong>(2022)</strong>
                                                <div>
                                                    <em>Ecological Risk Assessment of Heavy Metals in the Fortified
                                                        Organic Fertilizers produced from Ganga Sewage Sludge (SS) in
                                                        Haridwar. </em>
                                                </div>
                                                <a href="https://www.authorea.com/users/467734" target="_blank">https://www.authorea.com/users/467734</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> DRS BANERJEE, S Ghosh, V Arya
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>E-Governance Model for Ganga Rejuvenation: A Retrospective
                                                        Analysis with Solutions. </em>
                                                </div>
                                                <a href="https://www.authorea.com/users/467734/articles/563734-e-governance-model-for-ganga-rejuvenation-a-retrospective-analysis-with-solutions" target="_blank">https://www.authorea.com/users/467734/articles/563734-e-governance-model-for-ganga-rejuvenation-a-retrospective-analysis-with-solutions</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Singh, R.; Gohel, V.; Arora, S.; Dev,
                                                R.;&nbsp; Bhattacharya, K.;&nbsp; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Enteric-Coated Cologrit Tablet Exhibit Robust Anti-Inflammatory
                                                        Response in Ulcerative Colitis-like In-Vitro Models by Attuning
                                                        NFκB-Centric Signaling Axis. Pharmaceuticals, 2023, 16, 1, 63.
                                                    </em>
                                                </div>
                                                <a href="https://www.mdpi.com/1424-8247/16/1/63" target="_blank">https://www.mdpi.com/1424-8247/16/1/63</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> J Sharma, D Srivastava, B Joshi, R
                                                Shankar, N Rawat (2022)
                                                <div>
                                                    <em>Ethnobotanical Study on Medicinal Plants Used Against Chronic
                                                        Obstructive Pulmonary Disease by Tribal Healers of Uttarakhand,
                                                        India. </em>
                                                </div>
                                                <a href="http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765594.pdf" target="_blank">http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765594.pdf</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Singh, K.; Haldar, S.; Varshney, A.
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Germi-X herbal-based spray disinfects smartphone surfaces:
                                                        implication on fomite-mediated infection spread . AMB Express
                                                        2022, 12, 1, 1-10</em>
                                                </div>
                                                <a href="https://link.springer.com/article/10.1186/s13568-022-01369-y" target="_blank">https://link.springer.com/article/10.1186/s13568-022-01369-y</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Solleti, S.K; Singh, H.; Singh, R.;
                                                Bhattacharya, K.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Herbo-metallic ethnomedicine ‘Malla Sindoor’ameliorates lung
                                                        inflammation in murine model of allergic asthma by modulating
                                                        cytokines status and oxidative stress</em><em>.</em><em>&nbsp;
                                                        Journal of Ethnopharmacology 2022, 292, 115120</em>
                                                </div>
                                                <a href="https://www.sciencedirect.com/science/article/abs/pii/S0378874122001581" target="_blank">https://www.sciencedirect.com/science/article/abs/pii/S0378874122001581</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Goswami, S.; Singh, H.; Gohel, V.; Dev,
                                                R.; Haldar, S.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Herbo-mineral formulation, Divya-Swasari-Vati averts SARS-CoV-2
                                                        pseudovirus entry into human alveolar epithelial cells by
                                                        interfering with spike protein-ACE 2 interaction and
                                                        IL-6/TNF-α/NF-κB signaling. Frontiers in Pharmacology 2022,
                                                        13.</em>
                                                </div>
                                                <a href="https://europepmc.org/article/med/36386162" target="_blank">https://europepmc.org/article/med/36386162</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> S Mishra, A Singh, D Srivastava, S Singh,
                                                V Arya <strong>(2022)</strong>
                                                <div>
                                                    <em>Hibiscus syriacus L.: A Critical Review of Medicinal Utility
                                                        &amp; Phytopharmacology with Mechanistic Approach. </em>
                                                </div>
                                                <a href="http://www.phytopharmajournal.com/Vol11_Issue3_12.pdf" target="_blank">http://www.phytopharmajournal.com/Vol11_Issue3_12.pdf</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Joshi, M.; Tomer, M.; Verma, S.;
                                                Gujral, S.; Mullay, VP.; Srivastava, J.; Varshney, A.
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Identification, Validation and Standardization of Bioactive
                                                        Molecules Using UPLC/MS-QToF, UHPLC and HPTLC in
                                                        Divya-Denguenil-Vati: A Penta-Herbal Formulation for Dengue
                                                        Fever. Chromatographia 2022, 1-20.</em>
                                                </div>
                                                <a href="https://link.springer.com/article/10.1007/s10337-022-04183-7" target="_blank">https://link.springer.com/article/10.1007/s10337-022-04183-7</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> A Rana, RS Sharma, G Sharma, V Arya
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Indian Farmer and Government Initiatives: Policies, Gaps and Way
                                                        Forward. </em>
                                                </div>
                                                <a href="http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765409.pdf" target="_blank">http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765409.pdf</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> B Joshi, A Srivastava, BK Shukla, R
                                                Shankar, A Kumar <strong>(2022)</strong>
                                                <div>
                                                    <em>Indigenous uses of plants among forest-dependent communities of
                                                        Seijosa, Arunachal Pradesh. International Journal of Economic
                                                        Plants 2022, 9(1):064-080. NAAS Rating 4.37 India.</em>
                                                </div>
                                                <a href="https://www.pphouse.org/ijep-article-details.php?art=315" target="_blank">https://www.pphouse.org/ijep-article-details.php?art=315</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> D Srivastava, M Chauhan, G Sharma, A
                                                Kumar, V Arya <strong>(2022)</strong>
                                                <div>
                                                    <em>Insights of Agri-food in India: Present Trends, Challenges and
                                                        Proposed Solutions. </em><em>Indian Journal of Ecology 2022, 49,
                                                        983-993</em>
                                                </div>
                                                <a href="http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765259.pdf" target="_blank">http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765259.pdf</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Gohel, V.; Kumari, P.; Manik, M.;
                                                Bhattacharya, K.; Dev, R.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Livogrit Prevents Methionine-Cystine Deficiency Induced
                                                        Nonalcoholic Steatohepatitis by Modulation of Steatosis and
                                                        Oxidative Stress in Human Hepatocyte-Derived Spheroid and in
                                                        Primary Rat Hepatocytes. Bioengineered 2022, 13, 4,
                                                        10811-10826</em>
                                                </div>
                                                <a href="https://www.tandfonline.com/doi/full/10.1080/21655979.2022.2065789" target="_blank">https://www.tandfonline.com/doi/full/10.1080/21655979.2022.2065789</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Lochab, S.; Varshney, A.
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Livogrit, a herbal formulation of Boerhavia diffusa, Phyllanthus
                                                        niruri and Solanum nigrum reverses the thioacetamide induced
                                                        hepatocellular toxicity in zebrafish model. Toxicology Reports
                                                        2022, 9, 1056-1064.</em>
                                                </div>
                                                <a href="https://www.sciencedirect.com/science/article/pii/S2214750022000828" target="_blank">https://www.sciencedirect.com/science/article/pii/S2214750022000828</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Sakat, S.; Josji, K.; Singh, R.; Verma,
                                                S.; Nain, P. ; Bhattacharya, K.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Modulation of psoriatic-like skin inflammation by traditional
                                                        Indian medicine Divya-Kayakalp-Vati and Oil through attenuation
                                                        of pro-inflammatory cytokines . Journal of traditional and
                                                        complementary medicine 2022, 12, 4, 355-344.</em>
                                                </div>
                                                <a href="https://www.sciencedirect.com/science/article/pii/S222541102100119X" target="_blank">https://www.sciencedirect.com/science/article/pii/S222541102100119X</a>
                                            </li>

                                            <li><strong>A Balkrishna</strong>, R Pathak, S Bhatt, V Arya
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Molecular Insights of Plant Phytochemicals Against Diabetic
                                                        Neuropathy. </em>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/36028963/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/36028963/</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> SK Singh, R Pathak, V Arya
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Namami Gange: An Opinion based framework and possible
                                                        resolution. </em>
                                                </div>
                                                <a href="https://www.authorea.com/users/467734/articles/564338-namami-gange-an-opinion-based-framework-and-possible-resolution?commit=15fd7d7f442f8e56287f0d7aef8697a944079e7b" target="_blank">https://www.authorea.com/users/467734/articles/564338-namami-gange-an-opinion-based-framework-and-possible-resolution?commit=15fd7d7f442f8e56287f0d7aef8697a944079e7b</a>
                                            </li>

                                            <li><strong>A BALKRISHNA,</strong> B JOSHI, A SRIVASTAVA, A KUMAR, RK MISHRA
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Note on Brassaiopsis ficifolia (Araliaceae) for the Flora of
                                                        India from Arunachal Pradesh. </em>
                                                </div>

                                                <a href="https://jglobal.jst.go.jp/en/detail?JGLOBAL_ID=202202262053747125" target="_blank">https://jglobal.jst.go.jp/en/detail?JGLOBAL_ID=202202262053747125</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> K Singh, A Sharma, SM Parkar, G Oberoi
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Oral health among prisoners of District Jail, Haridwar,
                                                        Uttarakhand, India-A cross-sectional study. </em>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/36256555/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/36256555/</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Sinha, S.; Karumuri, S.; Srivastava,
                                                J.; Haldar, S.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Peedanil Gold, Herbo- Mineral Formulation, Moderates Cytokine
                                                        Levels and Attenuates Pathophysiology in Monosodium Iodoacetate
                                                        Induced Osteoarthritis in SD Rat Model. Frontiers in
                                                        pharmacology 2022, 13, 883475.</em>
                                                </div>
                                                <a href="https://europepmc.org/article/med/35600853" target="_blank">https://europepmc.org/article/med/35600853</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Mullay, VP.; Verma, S.; Srivastava, J.;
                                                Lochab, S.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    Penta-O-Galloyl-β-D-Glucose in Pistacia integerrima Targets
                                                    AMPK-ULK1 and ERK/STAT3 Signaling Axes to Induce ROS-Independent
                                                    Autophagic Cell Death in Human Lung Cancer Cells. Frontiers in
                                                    Pharmacology 2022, 2492</div>

                                                <a href="https://static.frontiersin.org/articles/10.3389/fphar.2022.889335/full" target="_blank">https://static.frontiersin.org/articles/10.3389/fphar.2022.889335/full</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Pokhrel, S.; Varshney, A<strong>.
                                                    (2022)</strong>
                                                <div>
                                                    <em>Phyto-Compounds from a Rather Poisonous Plant Strychnos
                                                        nuxvomica, Show High Potency Against SARS-CoV-2 RNA-Dependent
                                                        RNA Polymerase. Current Molecular Medicine 2022.</em>
                                                </div>
                                                <a href="https://europepmc.org/article/med/33602083" target="_blank">https://europepmc.org/article/med/33602083</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> NR Dabhade, N Sharma, J Sharma, S Mishra,
                                                V Arya <strong>(2022)</strong>
                                                <div>
                                                    <em>Phytoremediation: Current Techniques and Futuristic
                                                        Opportunities. Journal of Ecology 2022, 49, 1157-1167</em>
                                                </div>
                                                <a href="http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765522.pdf" target="_blank">http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765522.pdf</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> M Chauhan, D Srivastava, N Sharma, V Arya
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Promoting and Backing Tribal Entrepreneurship in North-East
                                                        India by the Virtue of Pradhan Mantri Van Dhan Vikas Yojna.
                                                    </em>
                                                </div>
                                                <a href="https://www.proquest.com/openview/ecf80944ffb1261f291c87c1791030f7/1.pdf?pq-origsite=gscholar&amp;cbl=2032157" target="_blank">https://www.proquest.com/openview/ecf80944ffb1261f291c87c1791030f7/1.pdf?pq-origsite=gscholar&amp;cbl=2032157</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Singh, K.; Oberoi, G.; Singh, P.; Raj,
                                                P.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Psychological Impacts of COVID-19 in Dental Patients are
                                                        Moderated and Mediated by Hospital-Infection-Control-Policy and
                                                        Satisfaction-with- Life: A Prospective Observational
                                                        Dental-COVID Study. Psychology Research and Behavior Management
                                                        2022, 15, 913</em>
                                                </div>
                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC9020577/" target="_blank">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC9020577/</a>
                                            </li>
                                            <li>BS Kholia, <strong>A Balkrishna (2022)</strong>
                                                <div>
                                                    <em>Pteridophytes Used by Peoples of Indian Himalayan Region and
                                                        Northern India: An Overview. </em>
                                                </div>

                                                <a href="https://link.springer.com/chapter/10.1007/978-981-16-6170-9_17#auth-Acharya-Balkrishna" target="_blank">https://link.springer.com/chapter/10.1007/978-981-16-6170-9_17#auth-Acharya-Balkrishna</a>
                                            </li>
                                            <li>DRS BANERJEE, <strong>A Balkrishna</strong>, V Arya, S Ghosh, SK Singh
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Reuse of sewage sludge as organic agricultural products: An
                                                        efficient technology-based initiative. </em>
                                                </div>
                                                <a href="https://www.authorea.com/users/473470/articles/563673-reuse-of-sewage-sludge-as-organic-agricultural-products-an-efficient-technology-based-initiative" target="_blank">https://www.authorea.com/users/473470/articles/563673-reuse-of-sewage-sludge-as-organic-agricultural-products-an-efficient-technology-based-initiative</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> K Singh, A Sharma, SM Parkar, G Oberoi
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Salud bucodental de los reclusos del Centro Penitenciario del
                                                        Distrito de Haridwar, Uttarakhand, India. Un estudio
                                                        transversal. </em>
                                                </div>
                                                <a href="https://scielo.isciii.es/pdf/sanipe/v24n2/2013-6463-sanipe-24-02-41-es.pdf" target="_blank">https://scielo.isciii.es/pdf/sanipe/v24n2/2013-6463-sanipe-24-02-41-es.pdf</a>
                                            </li>
                                            <li><strong>Acharya Balkrishna</strong>, Ashwani Kumar , Vedpriya Arya,
                                                Gunjan Sharma , Deepika Srivastava, Ajit Sharma and Nazam Khan
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Situational Analysis of Government Initiatives for the Welfare
                                                        of Farmers in India: Impact and Futuristic Insights. </em>
                                                </div>
                                                <a href="http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765385.pdf" target="_blank">http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765385.pdf</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> SK Singh, R Pathak, V Arya
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Sludge Management: Current Scenario, Available Solutions and Way
                                                        Forward. </em>
                                                </div>
                                                <a href="https://d197for5662m48.cloudfront.net/documents/publicationstatus/80655/preprint_pdf/45cbf354204ef40573e63110811113b1.pdf" target="_blank">https://d197for5662m48.cloudfront.net/documents/publicationstatus/80655/preprint_pdf/45cbf354204ef40573e63110811113b1.pdf</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> M Tomer, M Joshi, S Gujral, R Kumar
                                                Mishra, J Srivastava <strong>(2022)</strong>
                                                <div>
                                                    <em>Standardization and validation of phytometabolites by UHPLC and
                                                        high</em><em>‐</em><em>performance thin layer chromatography for
                                                        rapid quality assessment of ancient ayurvedic medicine,
                                                        Mahayograj Guggul. Journal of Separation Science </em>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/35152549/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/35152549/</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> B Joshi, A Srivastava, BK Shukla, KA Aqib
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Sterculia euosma (Malvaceae), an addition to the flora of India
                                                        from Arunachal Pradesh. </em>
                                                </div>
                                                <a href="https://rheedea.in/storages/submission/file/1093551865.pdf" target="_blank">https://rheedea.in/storages/submission/file/1093551865.pdf</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Nain, P.; Joshi, M.; Kumar, B.;
                                                Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Super-critical fluid extract of Bryonopsis laciniosa (Shivlingi)
                                                        seeds restores fertility in zebrafish models through revival of
                                                        cytological and anatomical features . Journal of Ovarian
                                                        Research 2022, 15, 1, 1-19</em>
                                                </div>

                                                <a href="https://ovarianresearch.biomedcentral.com/articles/10.1186/s13048-022-00982-6" target="_blank">https://ovarianresearch.biomedcentral.com/articles/10.1186/s13048-022-00982-6</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Bhattacharya, K.; Sinha, S.; Dev, R.;
                                                Srivastava, J.; Haldar, S.; Varshney, A. <strong>(2022)</strong>
                                                <div><em>Tinospora cordifolia- associated hepatotoxicity has been
                                                        scientifically misconstrued, in haste. Hepatology Communications
                                                        2022.</em></div>
                                                <a href="https://aasldpubs.onlinelibrary.wiley.com/doi/full/10.1002/hep4.2050" target="_blank">https://aasldpubs.onlinelibrary.wiley.com/doi/full/10.1002/hep4.2050</a>

                                            </li>

                                            <li><strong>A Balkrishna,</strong> G Sharma, N Sharma, N Rawat, A Kumar, V
                                                Arya <strong>(2022)</strong>
                                                <div>
                                                    <em>Transition of Indian Agriculture from Glorious Past to
                                                        Challenging Future: A Serious Concern.</em><em> Indian Journal
                                                        of Ecology 2022, 49, 977-986.</em>
                                                </div>
                                                <a href="http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765234.pdf" target="_blank">http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765234.pdf</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Joshi, M.; Verma, S.; Tiwari, D.;
                                                Srivastava, J.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>UPLC</em><em>‐</em><em>QToF</em><em>‐</em><em>MS based
                                                        fingerprinting of polyphenolic metabolites in the bark extract
                                                        of Boehmeria rugulosa Wedd. Journal of Mass Spectrometry, 2022,
                                                        57, 11, e4890.</em>
                                                </div>
                                                <a href="https://europepmc.org/article/med/36353856/" target="_blank">https://europepmc.org/article/med/36353856/</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> A Rohela, A Kumar, V Arya, N Khan
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Variations from SARS-CoV-2 to Omicron: A new threat knocking at
                                                        world’s door. </em>
                                                </div>

                                                <a href="https://japsonline.com/abstract.php?article_id=3567&amp;sts=2" target="_blank">https://japsonline.com/abstract.php?article_id=3567&amp;sts=2</a>
                                            </li>

                                            <li><strong>A Balkrishna,</strong> B Joshi, A Srivastava, RK Mishra, AK
                                                Aqib, A Kumar (2022)
                                                <div>
                                                    <em>Vascular Plants Diversity of Rashtrapati Bhavan Estate, New
                                                        Delhi, India.</em>
                                                </div>
                                                <a href="http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765550.pdf" target="_blank">http://indianecologicalsociety.com/society/wp-content/themes/ecology/volume_pdfs/1657765550.pdf</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Yagyadev, S.; Vipradev, S.; Singh, K.;
                                                Varshney, Y.; Rastogi, S,; Haldar, S.; Varshney, A.
                                                <strong>(2022)</strong>
                                                <div><em>Vishaghn Dhoop, Nano-Scale Particles with Detoxifying Medicinal
                                                        Fume, Exhibits Robust Anti-Microbial Activities: Implications of
                                                        Disinfection Potentials of a Traditional Ayurvedic Air
                                                        Sterilization Technique. Journal of Evidence-Based Integrative
                                                        Medicine 2022, 27, 2515690X211068832.</em></div>
                                                <a href="https://journals.sagepub.com/doi/full/10.1177/2515690X211068832" target="_blank">https://journals.sagepub.com/doi/full/10.1177/2515690X211068832</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Sinha, S.; Varshney, A.
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Withania Somnifera (L) Dunal whole-plant extracts demonstrates
                                                        acceptable non-clinical safety in rat 28-days subacute toxicity
                                                        evaluation under GLP-compliance. Scientific Reports 2022,
                                                        12.</em>
                                                </div>
                                                <a href="https://www.nature.com/articles/s41598-022-14944-x">https://www.nature.com/articles/s41598-022-14944-x</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Verma, S.; Mulay, VP.; Gupta, AK.;
                                                Haldar, S.; Varshney, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Withania somnifera (L.) Dunal whole-plant extracts exhibited
                                                        anti-sporotrichotic effects by destabilizing peripheral
                                                        integrity of Sporothrix globosa yeast cells. PLoS neglected
                                                        tropical diseases 2022, 16, 6, e0010484</em>
                                                </div>
                                                <a href="https://journals.plos.org/plosntds/article?id=10.1371/journal.pntd.0010484" target="_blank">https://journals.plos.org/plosntds/article?id=10.1371/journal.pntd.0010484</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Solleti, S.K.; Singh, H.; Sharma, N.;
                                                Varshney, A<strong>. (2022)</strong>
                                                <div>
                                                    <em>Withanolides from Withania somnifera ameliorate neutrophil
                                                        infiltration in endotoxin-induced peritonitis by regulating
                                                        oxidative stress and inflammatory cytokines. planta Medica 2022,
                                                        88, 06, 466-478.</em>
                                                </div>
                                                <a href="https://www.thieme-connect.com/products/ejournals/abstract/10.1055/a-1438-2816" target="_blank">https://www.thieme-connect.com/products/ejournals/abstract/10.1055/a-1438-2816</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Joshi, R.; Arya, A. D. V.
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>Endophytic Fungi: A Comprehensive Review on Their Secondary
                                                        Metabolites, Pharmacological Interventions and Host Plant
                                                        Interactions. In, Qiang-Sheng Wu, Ying-Ning Zou and Yong-Jie Xu.
                                                        (Eds.), Endophytic Fungi, 2022.</em>
                                                </div>
                                                <a href="https://www.novapublishers.com/wp-content/uploads/2022/02/Sample-Book-01.27.2022.pdf#page=11" target="_blank">https://www.novapublishers.com/wp-content/uploads/2022/02/Sample-Book-01.27.2022.pdf#page=11</a>
                                            </li>
                                            <li><strong>Balkrishna, A,;</strong> Mishra, S.; Dabhade, N. R.; Arya, V.
                                                <strong>(2022)</strong>
                                                <div>
                                                    <em>MSME contribution to the entrepreneurship, employment and
                                                        sustainable societal development in Kamrup, Assam, India. IOSR
                                                        Journal Of Humanities And Social Science, 2022, 27, 44-50.</em>
                                                </div>
                                                <a href="https://www.iosrjournals.org/iosr-jhss/papers/Vol.27-Issue8/Ser-8/E2708084450.pdf" target="_blank">https://www.iosrjournals.org/iosr-jhss/papers/Vol.27-Issue8/Ser-8/E2708084450.pdf</a>
                                            </li>
                                            <li><strong>Acharya Balkrishna,</strong> S., Srivastava, D., Mishra, S.,
                                                Rajput, S. K., &amp; Arya, V. <strong>(2022)</strong>
                                                <div>
                                                    <em>Quassia amara L.: A Comprehensive Review of its Ethnomedicinal
                                                        Uses, Phytochemistry, Pharmacology and Toxicity. The Journal of
                                                        Phytopharmacology, 2022, 11, 194-199.</em>
                                                </div>
                                                <a href="http://www.phytopharmajournal.com/Vol11_Issue3_10.pdf" target="_blank">http://www.phytopharmajournal.com/Vol11_Issue3_10.pdf</a>

                                            </li>
                                            <li><strong>Acharya Balkrishna,</strong>; Shankar, R.; Joshi, R. A.; Uday
                                                Bhan Prajapati, U. B.; Srivastava, A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Nutraceutical Studies of the Rhizome of the Genus Nelumbo Adans.
                                                        – A review. Amer. J. Pharm Tech. Res., 2022, 12(5), 39-48.</em>
                                                </div>

                                                <a href="https://zenodo.org/record/7270146#.ZEIjr3ZBw2w" target="_blank">https://zenodo.org/record/7270146#.ZEIjr3ZBw2w</a>
                                            </li>

                                            <li><strong>Balkrishna, A.;</strong> Uday Bhan Prajapati, U. B.; Shankar,
                                                R.; Joshi, R. A. <strong>(2022)</strong>
                                                <div>
                                                    <em>Nutraceutical Aspects of Rhododendron (Burans): Certainly a Need
                                                        to Include Some Other Species for Food and Beverage Production.
                                                        International Journal of Science and Research (IJSR), 2022,
                                                        11(12), 312-321</em>
                                                </div>
                                                <a href="https://www.ijsr.net/archive/v11i12/SR221202091537.pdf" target="_blank">https://www.ijsr.net/archive/v11i12/SR221202091537.pdf</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4" aria-expanded="false">
                                    2021
                                </button>
                            </h2>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li>Chetry, D., Telles, S., &amp; <b>Balkrishna, A. (2021)</b>
                                                <div><em>A PubMed-based exploration of the course of yoga research from
                                                        1948 to 2020. International Journal of Yoga Therapy,
                                                        31(1).&nbsp;</em></div>
                                                <a href="https://doi.org/10.17761/2021-D-21-00017" target="_blank">https://doi.org/10.17761/2021-D-21-00017</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> K Singh, A Sharma, VK Sharma, SN Chandra,
                                                G Oberoi <b>(2021)</b>
                                                <div><em>ABO blood group phenotypes and dental disorders-Is there any
                                                        relation? A cross sectional study in Haridwar, Uttarakhand,
                                                        India.</em>&nbsp;</div>

                                                <a href="https://johoe.kmu.ac.ir/article_91688.html" target="_blank">https://johoe.kmu.ac.ir/article_91688.html</a>
                                            </li>
                                            <li><strong>A Balkrishna</strong>, J Sharma, H Sharma, S Mishra, S Singh, S
                                                Verma, V Arya <strong>(2021)</strong>
                                                <div><i>Agricultural mobile apps used in India: Current status and gap
                                                        analysis. Agricultural Science Digest.</i></div>
                                                <a href="https://arccjournals.com/journal/agricultural-science-digest/D-5140" target="_blank">https://arccjournals.com/journal/agricultural-science-digest/D-5140</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Soletti, S.K.; Singh, H.; Singh, R.;
                                                Sharma, N.; Varshney, A. <strong>(2021)</strong>

                                                <div><i>Biotite-Calx Based Traditional Indian Medicine
                                                        Sahastraputi-Abhrak-Bhasma Prophylactically Mitigates Allergic
                                                        Airway Inflammation in a Mouse Model of Asthma by Amending
                                                        Cytokine Responses. Journal of Inflammation Research 2021, 14,
                                                        4743-4760</i></div>
                                                <a href="https://www.dovepress.com/biotite-calx-based-traditional-indian-medicine-sahastraputi-abhrak-bha-peer-reviewed-fulltext-article-JIR" target="_blank">https://www.dovepress.com/biotite-calx-based-traditional-indian-medicine-sahastraputi-abhrak-bha-peer-reviewed-fulltext-article-JIR</a>
                                            </li>

                                            <li>
                                                <strong>A Balkrishna,</strong> JK Pandey, PK Tripathi, R Joshi, V Arya
                                                <strong>(2021)</strong>
                                                <div><strong>Chemical fertilizers and pesticides in Indian Agriculture:
                                                        Effect on human health and environment.</strong>&nbsp;</div>
                                                <a href="https://www.researchgate.net/publication/354495039" target="_blank">https://www.researchgate.net/publication/354495039</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Tomer, M; Manik, M.; Srivastava, J.;
                                                Dev, R; Haldar, S.; Varshney, A. <b>(2021)</b>
                                                <div><i>Chyawanprash, An Ancient Indian Ayurvedic Medicinal Food,
                                                        Regulates Immune Response in Zebrafish Model of Inflammation by
                                                        Moderating Inflammatory Biomarkers. Frontiers in Pharmacology
                                                        2021.</i></div>
                                                <a href="https://www.frontiersin.org/articles/10.3389/fphar.2021.751576/full" target="_blank">https://www.frontiersin.org/articles/10.3389/fphar.2021.751576/full</a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> A Gupta, RK Mishra, A Srivastava, B Joshi
                                                    (2021)</span>
                                                <div><em>Classical Significance and Various Aspects Of Bhojana (Meal)
                                                        And Bhājana (Utensil) As Per Āyurveda-A Classical Analysis.
                                                        Ayushdhara</em></div>

                                                <a href="https://ayushdhara.in/index.php/ayushdhara/article/view/661" target="_blank">https://ayushdhara.in/index.php/ayushdhara/article/view/661</a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Pokhrel, S.; Varshney, A. </span><b><span data-contrast="auto">(2021)</span></b>

                                                <div><i><span data-contrast="auto">Comparative COX I Molecular Docking
                                                            of Phyto-chemicals (Flavonoids, Alkaloids, Lignans and
                                                            Terpenoids) for Anti-platelet Aggregation Dynamics. Current
                                                            Computer-Aided Drug Design 2020, 16</span></i></div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/32603282/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/32603282/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> AB Bhatt, P Singh, S Haldar, A Varshney
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div><em>Comparative retrospective open-label study of ayurvedic
                                                        medicines and their combination with allopathic drugs on
                                                        asymptomatic and mildly-symptomatic COVID-19
                                                        patients.</em>&nbsp;</div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/34055580/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/34055580/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Verma, S.; Sharma, P.; Tomer, S.; Srivastava,
                                                    J.; Varshney, A</span><b><span data-contrast="auto">,
                                                        (2021)</span></b>

                                                <div><i><span data-contrast="auto">Comprehensive and rapid quality
                                                            evaluation method for the Ayurvedic Medicine
                                                            Divya-Swasari-Vati using two analytical techniques:
                                                            UPLC/QToF MS and HPLC–DAD. Pharmaceuticals 2021, 14,
                                                            4,297</span></i></div>

                                                <a href="https://www.mdpi.com/1424-8247/14/4/297" target="_blank"><span data-contrast="none">https://www.mdpi.com/1424-8247/14/4/297</span></a>
                                            </li>

                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> R Mittal, V Arya </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <em>Computational evidences of phytochemical mediated disruption of
                                                        PLpro driven replication of SARS-CoV-2: a therapeutic approach
                                                        against COVID-19. Current Pharmaceutical Biotechnology.</em>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33176643/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33176643/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> R Mittal, G Sharma, V Arya </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Computational insights of
                                                            phytochemical-driven disruption of RNA-dependent RNA
                                                            polymerase-mediated replication of coronavirus: a strategic
                                                            treatment plan against coronavirus 2019. New Microbes and
                                                            New Infections.</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33815808/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33815808/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, B Joshi, A Srivastava, R Shankar, Aqib, RK
                                                    Mishra, A Kumar, S Sharma, A Kumar, UB Prajapati </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Premna micrantha Schauer: A New
                                                            Distributional Record for India. Indian Forester</span></i>
                                                </div>
                                                <a href="https://www.indianforester.co.in/index.php/indianforester/article/view/151042" target="_blank">https://www.indianforester.co.in/index.php/indianforester/article/view/151042</a>
                                            </li>

                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> B Joshi, A Srivastava, R Shankar, RK Mishra, A
                                                    Kumar </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Corchorus pseudo-olitorius: An
                                                            Addition to Flora of Uttarakhand, India.&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.bsmpsbooks.com/journal/1000/article/UkY3VTgx" target="_blank"><span data-contrast="none">https://www.bsmpsbooks.com/journal/1000/article/UkY3VTgx</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> S Haldar, H Singh, P Roy, A Varshney
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div><i><span data-contrast="auto">Coronil, a tri-herbal formulation,
                                                            attenuates spike-protein-mediated SARS-CoV-2 viral entry
                                                            into human alveolar epithelial cells and pro-inflammatory
                                                            cytokines production by Inhibiting Spike Protein-ACE-2
                                                            Interaction. Journal of Inflammation Research.</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33758527/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33758527/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> R Mittal, V Arya </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div><i><span data-contrast="auto">COVID-19 Pandemic: A Comprehensive
                                                            Overview of Epidemiological, Pathogenesis, Diagnostic
                                                            Aspects and Therapeutic Interventions to Tackle Current
                                                            Outbreak.&nbsp;</span></i></div>

                                                <a href="https://www.eurekaselect.com/chapter/15767" target="_blank"><span data-contrast="none">https://www.eurekaselect.com/chapter/15767</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> M Phour, M Thapliyal, V Arya </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Current Status of Indian Agriculture:
                                                            Problems, Challenges and Solution.</span></i>
                                                </div>

                                                <a href="https://www.researchgate.net/publication/355107311" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/355107311</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> A Srivastava, R Shankar, UB Prajapati, RK
                                                    Mishra, A Kumar <strong>(2021)</strong></span>
                                                <div>
                                                    <i><span data-contrast="auto">Cynanchum corymbosum Wight: A New
                                                            Plant Record For Arunachal Pradesh, India.&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.bsmpsbooks.com/journal/1000/article/NVdDSTRJ" target="_blank"><span data-contrast="none">https://www.bsmpsbooks.com/journal/1000/article/NVdDSTRJ</span></a>
                                            </li>
                                            <li>
                                                <b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> P Sharma, M Joshi, J Srivastava, A Varshney
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Development and validation of a rapid
                                                            high</span></i><i><span data-contrast="auto">‐</span></i><i><span data-contrast="auto">performance thin</span></i><i><span data-contrast="auto">‐</span></i><i><span data-contrast="auto">layer chromatographic method for
                                                            quantification of gallic acid, cinnamic acid, piperine,
                                                            eugenol, and glycyrrhizin in Divya-Swasari-Vati, an
                                                            ayurvedic. Journal of Separation Science.&nbsp;</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/34101986/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/34101986/</span></a>
                                            </li>

                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> K Singh, A Sharma, N Karthikeyan, P Gowda
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div><i><span data-contrast="auto">Development and validation of
                                                            perceived oral health benefits on yoga scale
                                                            (Pobys).</span></i></div>

                                                <a href="https://bds.ict.unesp.br/index.php/cob/article/view/2607" target="_blank"><span data-contrast="none">https://bds.ict.unesp.br/index.php/cob/article/view/2607</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Rustagi, Y.; Tomar, M.; Pokhrel, S.;
                                                    Bhattacharya, K.; Varshney, A. </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Divya-Arjuna-Kwath (Terminalia arjuna)
                                                            and Divya-Hridy Amrit-Vati ameliorate isoproterenol-induced
                                                            hypertrophy in murine cardiomyocytes through modulation of
                                                            oxidative stress. Phytomedicine Plus 2021,100074.</span></i>
                                                </div>

                                                <a href="https://www.sciencedirect.com/science/article/pii/S2667031321000567" target="_blank"><span data-contrast="none">https://www.sciencedirect.com/science/article/pii/S2667031321000567</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Lochab, S.; Joshi, M.; Srivastava, J.;
                                                    Varshney, A. </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Divya-Herbal-Peya Decoction Harmonizes
                                                            the Inflammatory Response in Lipopolysaccharide-Induced
                                                            Zebrafish Model. Journal of Experimental Pharmacology 2021,
                                                            13, 937.</span></i>
                                                </div>

                                                <a href="https://www.dovepress.com/divya-herbal-peya-decoction-harmonizes-the-inflammatory-response-in-li-peer-reviewed-fulltext-article-JEP" target="_blank"><span data-contrast="none">https://www.dovepress.com/divya-herbal-peya-decoction-harmonizes-the-inflammatory-response-in-li-peer-reviewed-fulltext-article-JEP#</span></a>
                                            </li>

                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> P Kumar, A Arya, A Kumar, G Sharma, A Dhyani,
                                                    R Joshi </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of Organic Farming on Input and
                                                            Income in Eastern States of India.&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.researchgate.net/publication/354494861" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/354494861</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Gupta, A.K.; Singh, K.; Haldar, S.; Varshney,
                                                    A. </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effects of fatty acids in super
                                                            critical fluid extracted fixed oil from Withania somnifera
                                                            seeds on Gram-negative Salmonella enterica biofilms.
                                                            Phytomedicine Plus 2021, 100047.</span></i>
                                                </div>

                                                <a href="https://www.sciencedirect.com/science/article/pii/S2667031321000294" target="_blank"><span data-contrast="none">https://www.sciencedirect.com/science/article/pii/S2667031321000294</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> A Singh, R Shankar, R Kumar, AS Mishra, B
                                                    Joshi, A Chauhan </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Establishing the correct botanical
                                                            identity of Śivaliñgī plant in India: A critical analysis
                                                            based on various literatures. Journal of Medicinal
                                                            Plants</span></i>
                                                </div>

                                                <a href="https://www.academia.edu/50315740" target="_blank"><span data-contrast="none">https://www.academia.edu/50315740</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> K Singh, R Arya, P Thakur, S Singh, G Ahuja
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Financial solution for balancing
                                                            global economy, poverty and hunger differences through
                                                            blockchain secured real time traceability system.&nbsp;
                                                            Research Square.</span></i>
                                                </div>
                                                <a href="https://assets.researchsquare.com/files/rs-436957/v1/3ef24c53-af4c-40fc-adc8-4911047f4b58.pdf?c=1631881322" target="_blank"><span data-contrast="none">https://assets.researchsquare.com/files/rs-436957/v1/3ef24c53-af4c-40fc-adc8-4911047f4b58.pdf?c=1631881322</span></a>
                                            </li>

                                            <li><b><span data-contrast="auto">Balkrishna A,</span></b><span data-contrast="auto"> Tomer M, Verma S, Joshi M, Sharma P,
                                                    Srivastava J, Varshney A </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Phytometabolite profiling of Coronil,
                                                            a herbal medicine for COVID</span></i><i><span data-contrast="auto">‐</span></i><i><span data-contrast="auto">19, its identification by
                                                            mass</span></i><i><span data-contrast="auto">‐</span></i><i><span data-contrast="auto">spectroscopy and quality validation on
                                                            liquid chromatographic. A Balkrishna, M Tomer, S Verma, M
                                                            Joshi, P Sharma, J Srivastava.</span></i>
                                                </div>

                                                <a href="https://europepmc.org/article/med/34510772" target="_blank"><span data-contrast="none">https://europepmc.org/article/med/34510772</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> L Khandrika, A Varshney </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Giloy Ghanvati (Tinospora cordifolia
                                                            (Willd.) Hook. f. and Thomson) reversed SARS-CoV-2 viral
                                                            spike-protein induced disease phenotype in the
                                                            xenotransplant model of humanized.&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.frontiersin.org/articles/10.3389/fphar.2021.635510/full" target="_blank"><span data-contrast="none">https://www.frontiersin.org/articles/10.3389/fphar.2021.635510/full</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> P Rupala, D Jyoti, V Arya </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Global food traceability: current
                                                            status and future prospects.&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.taylorfrancis.com/chapters/edit/10.1201/9781003242543-12" target="_blank"><span data-contrast="none">https://www.taylorfrancis.com/chapters/edit/10.1201/9781003242543-12</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> G Sharma, N Sharma, P Kumar, R Mittal, R
                                                    Parveen </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Global perspective of agriculture
                                                            systems: from ancient times to the modern
                                                            era.&nbsp;</span></i>
                                                </div>
                                                <a href="https://www.taylorfrancis.com/chapters/edit/10.1201/9781003242543-2" target="_blank"><span data-contrast="none">https://www.taylorfrancis.com/chapters/edit/10.1201/9781003242543-2</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> P Thakur, S Singh, N Singh, A Tanwar, RK
                                                    Sharma </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">In silico screening for investigating
                                                            the potential activity of phytoligands against
                                                            SARS-CoV-2.&nbsp; Journal of Life Sciences</span></i>
                                                </div>

                                                <a href="https://www.journaloflifesciences.org/archives/1541/in-silico-screening-for-investigating-the-potential-activity-of-phytoligands-against-sarscov2.htm" target="_blank"><span data-contrast="none">https://www.journaloflifesciences.org/archives/1541/in-silico-screening-for-investigating-the-potential-activity-of-phytoligands-against-sarscov2.htm</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> P Raj, P Singh, A Varshney </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Influence of patient-reported
                                                            treatment satisfaction on psychological health and quality
                                                            of life Among patients receiving Divya-Swasari-Coronil-Kit
                                                            against COVID-19: Findings from a Cross-Sectional. Journal
                                                            of Medicinal Plants.</span></i>
                                                </div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8096451/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8096451/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Gohel, V.; Singh, R.; Bhattacharya, K.;
                                                    Varshney, A. </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Livogrit ameliorates
                                                            acetaldehyde-induced steatosis in HepG2 cells through
                                                            modulation of lipogenesis and β-oxidation pathways.
                                                            oxidation pathways. Phytomedicine Plus 2021,
                                                            100067</span></i>
                                                </div>

                                                <a href="https://www.sciencedirect.com/science/article/pii/S266703132100049X" target="_blank"><span data-contrast="none">https://www.sciencedirect.com/science/article/pii/S266703132100049X</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> A Rohela, A Kumar, A Kumar, V Arya, P Thakur,
                                                    P Oleksak, O Krejcar, R Verma, D Kumar, K Kuca (2021)</span>
                                                <div>
                                                    <i><span data-contrast="auto">Mechanistic Insight into Antimicrobial
                                                            and Antioxidant Potential of Jasminum Species: A Herbal
                                                            Approach for Disease Management. Plants</span></i>
                                                </div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8227019/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8227019/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Acharya Balkrishan,</span></b><span data-contrast="auto"> Samriti Tanwar and Uday Bhan Prajapati
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Medicinal and Nutritional Aspect of
                                                            Genus Prunus L. with Phytoetymology. International Journal
                                                            of Unani and Integrative Medicine 2021.&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.unanijournal.com/articles/165/5-1-10-561.pdf" target="_blank"><span data-contrast="none">https://www.unanijournal.com/articles/165/5-1-10-561.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> B Joshi, A Srivastava, R Shankar, RK
                                                    Vashistha, A Kumar, RK Mishra </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Medicinal plants of Seijosa circle,
                                                            Pakke-Kessang district, Arunachal Pradesh, India. Indian
                                                            Journal of Natural Products and Resources.</span></i>
                                                </div>

                                                <a href="https://nopr.niscpr.res.in/handle/123456789/56757" target="_blank"><span data-contrast="none">https://nopr.niscpr.res.in/handle/123456789/56757</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Kala, N., Pal, S., Sharma S.K., Telles, S.,
                                                    &amp; </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2021).</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Mirror tracing task in yoga
                                                            practitioners and non-yoga practitioners: A cross-sectional
                                                            comparative study. Indian Journal of Physiology and
                                                            Pharmacology; 65(2):127.</span></i>
                                                </div>

                                                <a href="https://ijpp.com/mirror-tracing-task-in-yoga-practitioners-and-non-yoga-practitioners-a-cross-sectional-comparative-study/" target="_blank"><span data-contrast="none">https://ijpp.com/mirror-tracing-task-in-yoga-practitioners-and-non-yoga-practitioners-a-cross-sectional-comparative-study/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> V Arya, A Rohela, A Kumar, R Verma, D Kumar
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Nanotechnology interventions in the
                                                            management of COVID-19: prevention, diagnosis and virus-like
                                                            particle vaccines.&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.mdpi.com/2076-393X/9/10/1129" target="_blank"><span data-contrast="none">https://www.mdpi.com/2076-393X/9/10/1129</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Acharya Balkrishna,</span></b><span data-contrast="auto"> Anupam Srivastava, Bhasker Joshi, Aqib, Amita
                                                    Singh, Aashish Kumar, Priyanka Tyagi (2021)</span>
                                                <div>
                                                    <i><span data-contrast="auto">Torenia crustacea (L.) Cham. &amp;
                                                            Schltdl.: New Addition to Flora of Morni Hills.
                                                            (2019)</span></i>
                                                </div>

                                                <a href="http://www.sciencepub.net/nature/nsj181120/01_35167nsj181120_1_2.pdf" target="_blank"><span data-contrast="none">http://www.sciencepub.net/nature/nsj181120/01_35167nsj181120_1_2.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> A Kumar, V Arya, A Rohela, R Verma, E
                                                    Nepovimova </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Phytoantioxidant functionalized
                                                            nanoparticles: A green approach to combat
                                                            nanoparticle-induced oxidative stress.&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.hindawi.com/journals/omcl/2021/3155962/" target="_blank"><span data-contrast="none">https://www.hindawi.com/journals/omcl/2021/3155962/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> R Mittal, V Arya </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div><i><span data-contrast="auto">Potential Role of miRNA in Metastatic
                                                            Cascade of Triple-Negative Breast Cancer. Current Cancer
                                                            Drug Targets&nbsp;</span></i></div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33155912/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33155912/</span></a>
                                            </li>

                                            <li><span data-contrast="auto">Ganpat Devpura, Balvir S Tomar, Deepak
                                                    Nathiya, Abhishek Sharma, Deepak Bhandari, Swati Haldar,
                                                </span><b><span data-contrast="auto">Acharya Balkrishna</span></b><span data-contrast="auto">, Anurag Varshney </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div><i><span data-contrast="auto">Randomized placebo-controlled pilot
                                                            clinical trial on the efficacy of ayurvedic treatment regime
                                                            on COVID-19 positive patients.
                                                            Phytomedicine&nbsp;</span></i></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33596494/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33596494/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> AK Chauhan, RK Mishra, A Srivastava, B Joshi
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Study of Medicinal Plants Described in
                                                            Durga Saptsati (An Holistic Ancient Treatise)-A Critical
                                                            Study.&nbsp; Ayushdhara</span></i>
                                                </div>

                                                <a href="https://ayushdhara.in/index.php/ayushdhara/article/view/693" target="_blank"><span data-contrast="none">https://ayushdhara.in/index.php/ayushdhara/article/view/693</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Nain, P.; Joshi, M.; Khandrika, L.; Varshney,
                                                    A. </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div><i><span data-contrast="auto">Supercritical Fluid Extract of
                                                            Putranjiva roxburghii Wall. Seeds Mitigates Fertility
                                                            Impairment in a Zebrafish Model. Molecules 2021, 26, 4,
                                                            1020.</span></i></div>

                                                <a href="https://www.mdpi.com/1420-3049/26/4/1020" target="_blank"><span data-contrast="none">https://www.mdpi.com/1420-3049/26/4/1020</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, S Pokhrel, A Varshney </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Tinocordiside from Tinospora
                                                            cordifolia (Giloy) may curb SARS-CoV-2 contagion by
                                                            disrupting the electrostatic interactions between host ACE2
                                                            and viral S-protein receptor Binding Domain. Combinatorial
                                                            Chemistry &amp; High Throughput Screening.</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33172372/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33172372/</span></a>
                                            </li>

                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> R Mittal, V Arya </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Unveiling Novel Therapeutic Drug
                                                            Targets and Prognostic Markers of Triple Negative Breast
                                                            Cancer.&nbsp;</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/34503412/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/34503412/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> K Choudhary, A Dhyani, V Arya </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Virtual Farmers’ Market: A Single-Step
                                                            Solution to Sustainable Agriculture and Food
                                                            Security.&nbsp;</span></i>
                                                </div>
                                                <a href="https://www.taylorfrancis.com/chapters/edit/10.1201/9781003242543-13" target="_blank"><span data-contrast="none">https://www.taylorfrancis.com/chapters/edit/10.1201/9781003242543-13</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> S Pokhrel, H Singh, M Joshi, VP Mulay, S
                                                    Haldar, A Varshney </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Withanone from Withania somnifera
                                                            attenuates SARS-CoV-2 RBD and host ACE2 interactions to
                                                            rescue spike protein induced pathologies in humanized
                                                            zebrafish model.&nbsp;</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33737804/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33737804/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Sharma, S. K., Telles, S., Gandharva, K.,
                                                    &amp; </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2021)</span></b>
                                                <div><i><span data-contrast="auto">Yoga instructors’ reported benefits
                                                            and disadvantages associated with functioning online: A
                                                            convenience sampling survey. Complementary Therapies in
                                                            Clinical Practice, 46, 101509.</span></i></div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/34753084/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/34753084/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Acharya Balkrishna,</span></b><span data-contrast="auto"> Pawan Kumar, Ved Arya, Ashwani Kumar
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of Organic Farming on Input and
                                                            Income in Eastern States of India.</span></i>
                                                </div>

                                                <a href="https://www.researchgate.net/publication/354494861" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/354494861</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Srivastava, D.; Sharma, J.,; Chauhan, M.;
                                                    Sharma, G.; Arya, V. A</span> <b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Situational Analysis of Pradhan Mantri
                                                            Krishi Sichai Yojna: A Boon for Farmers. Biological
                                                            Forum</span></i><i><span data-contrast="auto">.
                                                        </span></i><i><span data-contrast="auto">An International
                                                            Journal 2021, 13, 3, 381-386.</span></i>
                                                </div>

                                                <a href="https://researchtrend.net/bfij/pdf/67%20A%20Situational%20Analysis%20of%20Pradhan%20Mantri%20Krishi%20Sichai%20Yojna%20A%20Boon%20for%20Farmers%20Vedpriya%20Arya.pdf" target="_blank"><span data-contrast="none">https://researchtrend.net/bfij/pdf/67%20A%20Situational%20Analysis%20of%20Pradhan%20Mantri%20Krishi%20Sichai%20Yojna%20A%20Boon%20for%20Farmers%20Vedpriya%20Arya.pdf</span></a>
                                            </li>

                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Monika.; Raperia, P.; Dabas, A.; Arya, V.
                                                </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Anti-venom Potential of Traditionally
                                                            used Medicinal Plants of East Africa: A Perspective on the
                                                            Phytotherapeutics. Biological Forum</span></i><i><span data-contrast="auto">. </span></i><i><span data-contrast="auto">An International Journal 2021, 13, 3,
                                                            339-347.</span></i>
                                                </div>

                                                <a href="https://researchtrend.net/bfij/pdf/62%20Anti-venom%20Potential%20of%20Traditionally%20used%20Medicinal%20Plants%20of%20East%20Africa%20A%20Perspective%20on%20the%20Phytotherapeutics%20Dr.%20Dabas%20Anti-venom.pdf" target="_blank"><span data-contrast="none">https://researchtrend.net/bfij/pdf/62%20Anti-venom%20Potential%20of%20Traditionally%20used%20Medicinal%20Plants%20of%20East%20Africa%20A%20Perspective%20on%20the%20Phytotherapeutics%20Dr.%20Dabas%20Anti-venom.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Mittal, R.; Mohini.; Srivastava, D.; Arora,
                                                    A.; Arya, V. </span><b><span data-contrast="auto">(2021).</span></b>
                                                <div><i><span data-contrast="auto">Biofortified Seeds in the
                                                            Amelioration of Hidden Hunger: Current Status and
                                                            Challenges. Biological Forum</span></i><i><span data-contrast="auto">. </span></i><i><span data-contrast="auto">An International Journal 2021, 13, 3,
                                                            321-326.</span></i></div>

                                                <a href="https://researchtrend.net/bfij/pdf/59%20Biofortified%20Seeds%20in%20the%20Amelioration%20of%20Hidden%20Hunger%20Current%20Status%20and%20Challenges%20Vedpriya%20Arya.pdf" target="_blank"><span data-contrast="none">https://researchtrend.net/bfij/pdf/59%20Biofortified%20Seeds%20in%20the%20Amelioration%20of%20Hidden%20Hunger%20Current%20Status%20and%20Challenges%20Vedpriya%20Arya.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Sharma, H.; Sharma, N.; Sakshi.; Arya,
                                                    V.</span> <b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Pradhan Mantri Kisan Samman Nidhi
                                                            (PM-KISAN): A Golden Initiative by Indian Government.
                                                            Biological Forum</span></i><i><span data-contrast="auto">.
                                                        </span></i><i><span data-contrast="auto">An International Journa
                                                            2021,l 13(2), 708-710.</span></i>
                                                </div>
                                                <a href="https://researchtrend.net/bfij/pdf/102%20Pradhan%20Mantri%20Kisan%20Samman%20Nidhi%20(PM-KISAN)%20A%20Golden%20Initiative%20by%20Indian%20Government%20Vedpriya%20Arya.pdf" target="_blank"><span data-contrast="none">https://researchtrend.net/bfij/pdf/102%20Pradhan%20Mantri%20Kisan%20Samman%20Nidhi%20(PM-KISAN)%20A%20Golden%20Initiative%20by%20Indian%20Government%20Vedpriya%20Arya.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Sakshi.; Arya, V.; Sharma, N.; Sharma,
                                                    G</span><b><span data-contrast="auto">. </span></b><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Unveiling Role of Agricultural
                                                            Mechanization in Improving Production and Yield. Biological
                                                            Forum</span></i><i><span data-contrast="auto">.</span></i><i><span data-contrast="auto"> An International Journal 2021, 13,3,
                                                            438-443.</span></i>
                                                </div>
                                                <a href="https://researchtrend.net/bfij/pdf/75%20Unveiling%20Role%20of%20Agricultural%20Mechanization%20in%20Improving%20Production%20and%20Yield%20Gunjan%20Sharma.pdf" target="_blank"><span data-contrast="none">https://researchtrend.net/bfij/pdf/75%20Unveiling%20Role%20of%20Agricultural%20Mechanization%20in%20Improving%20Production%20and%20Yield%20Gunjan%20Sharma.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A</span></b><span data-contrast="auto">; Anupam Srivastava, B.K. Shukla, Bhasker
                                                    Joshi, Aqib, Aashish Kumar, Rajesh Kumar Mishra, Amit Kumar and
                                                    Sangam Sharma</span><b><span data-contrast="auto">.
                                                    </span></b><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Note on extended distribution of
                                                            Archidendron ellipticum (Blume) I.C. Nielsen for North-East,
                                                            India. Indian Forester 2021, 147 (7): 694-695. NAAS Rating
                                                            5.10 India.</span></i>
                                                </div>

                                                <a href="https://www.indianforester.co.in/index.php/indianforester/article/view/154750" target="_blank"><span data-contrast="none">https://www.indianforester.co.in/index.php/indianforester/article/view/154750</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A;</span></b><span data-contrast="auto"> Anupam Srivastava, Bhasker Joshi, B.K. Shukla,
                                                    Rama Shankar, Shambhu Patel, Sidharth Tiwari, Uday Bhan Prajapati
                                                    and Rajesh Kumar Mishra. </span><b><span data-contrast="auto">(2021).</span></b><span data-contrast="auto">&nbsp;</span>
                                                <div><i><span data-contrast="auto">Some primitive and rare plant species
                                                            from Seijosa, Arunachal Pradesh with species emphasis on
                                                            their economic importance and conservation. In book: New
                                                            Vistas in Indian Flora II (Eds. Singh, L. &amp; Ranjan, V.).
                                                            Bishen Singh Mahendra Pal Singh, Dehradun, India. ISBN 13:
                                                            9788194332350</span></i>
                                                </div>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A;</span></b><span data-contrast="auto"> Joshi, B; Srivastava, A; Mishra, R. M; Singh,
                                                    A. </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Conservation of Fritillaria cirrhosa
                                                            D.Don: An important medicinal plants of Indian Himalayan
                                                            Region. Me &amp; My Earth 2021, 20(3): 17-19.</span></i>
                                                </div>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A;</span></b><span data-contrast="auto"> Joshi, B; Srivastava, A; Mishra, R. M; Singh,
                                                    A. </span><b><span data-contrast="auto">(2021)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Conservation of Fritillaria cirrhosa
                                                            D.Don: An important medicinal plants of Indian Himalayan
                                                            Region. Me &amp; My Earth 2021, 20(3): 17-19.</span></i>
                                                </div>

                                                <a href="https://www.researchgate.net/publication/355789834_Conservation_of_Fritillaria_cirrhosa_/" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/355789834_Conservation_of_Fritillaria_cirrhosa_</span><span data-contrast="none">\</span></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5" aria-expanded="false">
                                    2020
                                </button>
                            </h2>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> R Mittal, A Kumar, D Singh, V Arya
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Analysis of policy interventions in
                                                            agriculture and ICT based mechanistic approach towards
                                                            sustainability: An Indian perspective. Asian Journal of
                                                            Agriculture and Rural Development.</span></i></div>
                                                <a href="https://archive.aessweb.com/index.php/5005/article/view/1972" target="_blank"><span data-contrast="none">https://archive.aessweb.com/index.php/5005/article/view/1972</span></a>

                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> SK Solleti, S Verma, A Varshney
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Application of humanized zebrafish
                                                            model in the suppression of SARS-CoV-2 spike protein induced
                                                            pathology by tri-herbal medicine coronil via cytokine
                                                            modulation. Molecules.</span></i></div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33147850/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33147850/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Rustagi, Y.; Bhattacharya, K.; Varshney, A.
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Application of Zebrafish Model in the
                                                            Suppression of Drug-Induced Cardiac Hypertrophy by
                                                            Traditional Indian Medicine Yogendra Ras. Biomolecules 2020,
                                                            10, 600.</span></i></div>

                                                <a href="https://mdpi.com/2218-273X/10/4/600" target="_blank"><span data-contrast="none">https://mdpi.com/2218-273X/10/4/600</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Gandharva, K., Sharma, S. K.,
                                                    Gupta, R. K., &amp; </span><b><span data-contrast="auto">Balkrishna,
                                                        A. (2020).</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Body Temperature and Energy
                                                            Expenditure During and After Yoga Breathing Practices
                                                            Traditionally Described as Cooling. Medical Science Monitor
                                                            Basic Research. 26, e920107.</span></i>
                                                </div>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Gandharva, K., Gupta, R. K.,
                                                    Sharma, S. K., &amp; </span><b><span data-contrast="auto">Balkrishna, A. (2020).</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Body Temperature in Practitioners of a
                                                            Yoga Breathing Technique Considered to be Heat Generating.
                                                            Int J Yoga, 13(2), 168-172.</span></i>
                                                </div>
                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7336938/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7336938/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Solleti, S.K.; Singh, H.; Tomer, M.; Sharma,
                                                    N.; Varshney, A. </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Calcio-herbal formulation,
                                                            Divya-Swasari-Ras, alleviates chronic inflammation and
                                                            suppresses airway remodelling in mouse model of allergic
                                                            asthma by modulating pro-inflammatory cytokine response.
                                                            Biomedicine &amp; Pharmacotherapy 2020, 126,
                                                            110063</span></i></div>

                                                <a href="https://sciencedirect.com/science/article/pii/S0753332220302547" target="_blank"><span data-contrast="none">https://sciencedirect.com/science/article/pii/S0753332220302547</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> S Verma, SK Solleti, L Khandrika, A Varshney
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Calcio-herbal medicine
                                                            Divya-Swasari-Vati ameliorates SARS-CoV-2 spike
                                                            protein-induced pathological features and inflammation in
                                                            humanized zebrafish model by moderating IL-6 and TNF-α
                                                            Cytokines. Journal of Inflammation Research.</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33414643/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33414643/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A</span></b><span data-contrast="auto">.; Das, S.K.; Joshi, A.; Sharma, V.; Bisht, L.;
                                                    Das, N.; Sharma, N.; Shukla, S.; Mehra, D.; Joshi, K.; Dhara, S.
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Cellular internalization of Godanti
                                                            Bhasma (anhydrous CaSO4) induces massive cytoplasmic
                                                            reversible vacuolation and survival response of mammalian
                                                            cells. bioRxiv 2020.</span></i>
                                                </div>
                                                <a href="https://biorxiv.org/content/10.1101/2020.02.01.930594v2.abstract" target="_blank"><span data-contrast="none">https://biorxiv.org/content/10.1101/2020.02.01.930594v2.abstract</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A</span></b><span data-contrast="auto">.; Sharma, V.K.; Das, SK.; Mishra, N.; Bisht,
                                                    L.; Joshi, A.; Sharma, N. (2020)</span>
                                                <div><i><span data-contrast="auto">Characterization and Anti-Cancerous
                                                            Effect of Putranjiva roxburghii Seed Extract Mediated Silver
                                                            Nanoparticles on Human Colon (HCT-116), Pancreatic (PANC-1)
                                                            and Breast (MDA-MB 231) Cancer Cell Lines: A Comparative
                                                            Study. International Journal of Nanomedicine 2020, 15,
                                                            573</span></i>
                                                </div>
                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6986406/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6986406/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> P Thakur, S Singh, S Narsingh, N Singh, RK
                                                    Sharma </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i>Computational screening approaches for investigating potential
                                                        activity of phytoligands against SARS-CoV-2. Research
                                                        Square.</i></div>
                                                <a href="https://assets.researchsquare.com/files/rs-23206/v1/3f735f5c-8870-4cb8-886d-f3f3acfa9e81.pdf?c=1631833218" target="_blank"><span data-contrast="none">https://assets.researchsquare.com/files/rs-23206/v1/3f735f5c-8870-4cb8-886d-f3f3acfa9e81.pdf?c=1631833218</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, P Saxena, S Patel, RK Vashistha, DK Gond, JS
                                                    Butola, B Rawat </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Diversity, ethnomedicinal knowledge
                                                            and conservation status of plant species in a part of North
                                                            West Himalaya. Medicinal Plants-International Journal of
                                                            Phytomedicines and Related Industries</span></i></div>
                                                <a href="https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=12&amp;issue=3&amp;article=004"><span data-contrast="none" target="_blank">https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=12&amp;issue=3&amp;article=004</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> R Juyal, R Devi, J Kumar, A Prakash, P Pathak,
                                                    VP Arya, A Kumar </span><b><span data-contrast="auto">(2020)</span></b>

                                                <div><em>&gt;Ethnomedicinal status and pharmacological profile of some
                                                        important orchids of Uttarakhand (North Western Himalayas),
                                                        India. THE JOURNAL OF THE ORCHID SOCIETY OF INDIA</em></div>

                                                <a href="https://www.researchgate.net/publication/352329597_" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/352329597_</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Singh. K.; Singh, H.; Haldar, S.; Varshney, A.
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">GermiX: A skin friendly hand
                                                            sanitizer with prolonged effectivity against pathogenic
                                                            bacteria. AMB Express 2020, 10, 210.</span></i></div>

                                                <a href="https://amb-express.springeropen.com/articles/10.1186/s13568-020-01151-y" target="_blank"><span data-contrast="none">https://amb-express.springeropen.com/articles/10.1186/s13568-020-01151-y</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> P Thakur, S Singh, S Dev, V Jain, A Varshney,
                                                    R Sharma </span><b><span data-contrast="auto">(2020)</span></b>

                                                <div><em>&gt;Glucose antimetabolite 2-Deoxy-D-Glucose and its derivative
                                                        as promising candidates for tackling COVID-19: Insights derived
                                                        from in silico docking and molecular simulations.&nbsp;</em>
                                                </div>

                                                <a href="https://www.authorea.com/users/307420/articles/438392-glucose-antimetabolite-2-deoxy-d-glucose-and-its-derivative-as-promising-candidates-for-tackling-covid-19-insights-derived-from-in-silico-docking-and-molecular-simulations" target="_blank"><span data-contrast="none">https://www.authorea.com/users/307420/articles/438392-glucose-antimetabolite-2-deoxy-d-glucose-and-its-derivative-as-promising-candidates-for-tackling-covid-19-insights-derived-from-in-silico-docking-and-molecular-simulations</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Sakat, S.S.; Karumuri, S.; Singh, H.; Tomer,
                                                    M.; Kumar, A.; Sharma, N.; Nain, P.; Haldar, S.; Varshney, A.
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Herbal Decoction
                                                            Divya-Peedantak-Kwath Alleviates Allodynia and Hyperalgesia
                                                            in Mice Model of Chemotherapy-Induced Peripheral Neuropathy
                                                            via Modulation in Cytokine Response. Frontiers in
                                                            Pharmacology 2020, 11, 1664</span></i></div>

                                                <a href="https://scholar.google.com/scholar?oi=bibs&amp;cluster=1330618317711019192&amp;btnI=1&amp;hl=en" target="_blank"><span data-contrast="none">https://scholar.google.com/scholar?oi=bibs&amp;cluster=1330618317711019192&amp;btnI=1&amp;hl=en</span></a>

                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Solleti, S.K.; Singh, H.; Verma, S.; Sharma,
                                                    N.; Nain, P.; Varshney, A.</span><b><span data-contrast="auto">
                                                        (2020)</span></b>
                                                <div><i><span data-contrast="auto">Herbal decoction Divya-Swasari-Kwath
                                                            attenuates airway inflammation and remodeling through Nrf-2
                                                            mediated antioxidant lung defence in mouse model of allergic
                                                            asthma. Phytomedicine 2020, 78, 153925</span></i></div>

                                                <a href="https://sciencedirect.com/science/article/abs/pii/S0944711320301276" target="_blank"><span data-contrast="none">https://sciencedirect.com/science/article/abs/pii/S0944711320301276</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Das, S.K.; Joshi, A.; Bisht, L.; Sakat, S.S.;
                                                    Sharma, V.; Sharma, N.; Joshi, K.; Verma, S.; Sharma, V.K.; Joshi,
                                                    CS. </span><b><span data-contrast="auto">(2020)</span></b><span data-contrast="auto">&nbsp;</span>
                                                <div><i><span data-contrast="auto">LC/MS-QToF Profiling, Anti-Diabetic
                                                            and Anti-Adipogenic potential of Divya MadhuKalp: A Novel
                                                            Herbo-mineral Formulation. bioRxiv 2020.</span></i></div>

                                                <a href="https://biorxiv.org/content/10.1101/2020.02.15.950865v2.abstract" target="_blank"><span data-contrast="none">https://biorxiv.org/content/10.1101/2020.02.15.950865v2.abstract</span></a>

                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Thakur, P.; Singh, S.; Chandra Dev, SN.;
                                                    Varshney, A. </span><b><span data-contrast="auto">(2020)</span></b>

                                                <div><i><span data-contrast="auto">Mechanistic Paradigms of Natural
                                                            Plant Metabolites as Remedial Candidates for Systemic Lupus
                                                            Erythromatosus. Cells 2020, 9, 1049.</span></i></div>

                                                <a href="https://mdpi.com/2073-4409/9/4/1049/htm" target="_blank"><span data-contrast="none">https://mdpi.com/2073-4409/9/4/1049/htm</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Thakur, P.; Varshney, A. </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Phytochemical Profile,
                                                            Pharmacological Attributes and Medicinal Properties
                                                            of Convolvulus prostratus – A Cognitive Enhancer Herb for
                                                            the Management of Neurodegenerative Etiologies. Frontiers in
                                                            Pharmacology 2020, 11</span></i></div>

                                                <a href="https://ncbi.nlm.nih.gov/pmc/articles/PMC7063970/" target="_blank"><span data-contrast="none">https://ncbi.nlm.nih.gov/pmc/articles/PMC7063970/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> A Srivastava, B Joshi, R Shankar, RK Mishra, S
                                                    Patel, S Tiwari </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Note on Extended Distribution of
                                                            Ficus geocarpa Teijsm. ex Miq. (Moraceae) from East Kameng
                                                            district, Arunachal Pradesh, India. Indian
                                                            Forester</span></i></div>

                                                <a href="https://www.indianforester.co.in/index.php/indianforester/article/view/151210" target="_blank"><span data-contrast="none">https://www.indianforester.co.in/index.php/indianforester/article/view/151210</span></a>

                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A;</span></b><span data-contrast="auto"> Joshi, B; Srivastava, A; B.K. Shukla; Shankar,
                                                    R; Prajapati, U. B; Rajesh Mishra, R. K</span><b><span data-contrast="auto">. (2020)&nbsp;</span></b>

                                                <div><i><span data-contrast="auto">Phytodiversity of Morni Hills,
                                                            Panchkula, Haryana with special reference to World Herbal
                                                            Forest.</span></i></div>

                                                <a href="https://www.researchgate.net/publication/343934379" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/343934379</span></a>

                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Sakat, S.S.; Ranjan, R.; Joshi, K.; Shukla,
                                                    S.; Joshi, K.; Verma, S.; Gupta, A.; Bhattacharya, K.; Varshney, A.
                                                </span><b><span data-contrast="auto">(2020)</span></b><span data-contrast="auto">&nbsp;</span>
                                                <div><i><span data-contrast="auto">Polyherbal Medicine Divya
                                                            Sarva-Kalp-Kwath Ameliorates Persistent Carbon Tetrachloride
                                                            Induced Biochemical and Pathological Liver Impairments in
                                                            Wistar Rats and in HepG2 Cells. Frontiers in Pharmacology
                                                            2020, 11.288</span></i></div>

                                                <a href="https://ncbi.nlm.nih.gov/pmc/articles/PMC7109321/" target="_blank"><span data-contrast="none">https://ncbi.nlm.nih.gov/pmc/articles/PMC7109321/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">P Pathak, J Novak, V Naumovich, M Grishina,
                                                </span><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, N Sharma, V Sharma, V Potemkin, A Verma
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Polyphenolic rich extract of Oroxylum
                                                            indicum alleviate β-glucuronidase activity via down-regulate
                                                            oxidative stress: Experimental and computational studies.
                                                            Biocatalysis and Agricultural Biotechnology.</span></i>
                                                </div>

                                                <a href="https://www.sciencedirect.com/science/article/abs/pii/S1878818120312093" target="_blank"><span data-contrast="none">https://www.sciencedirect.com/science/article/abs/pii/S1878818120312093</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> V Arya, AK Kushwaha </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Population structure, regeneration
                                                            status and conservation measures of threatened Cyathea spp.
                                                            Journal of Tropical Forest Science&nbsp;</span></i></div>

                                                <a href="https://info.frim.gov.my/infocenter_applications/jtfsonline/jtfs/v32n4/414-421.pdf" target="_blank"><span data-contrast="none">https://info.frim.gov.my/infocenter_applications/jtfsonline/jtfs/v32n4/414-421.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> R Shankar, A Srivastava, B Joshi, RK Mishra
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Role of traditional medicines as a
                                                            challenge for Coronavirus (Covid-19).&nbsp; Indian Journal
                                                            of Traditional Knowledge</span></i></div>
                                                <a href="https://nopr.niscpr.res.in/bitstream/123456789/56237/1/IJTK%2019%28Supl%29%20118-123.pdf" target="_blank"><span data-contrast="none">https://nopr.niscpr.res.in/bitstream/123456789/56237/1/IJTK%2019%28Supl%29%20118-123.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Nain, P.; Chauhan, A.; Sharma, N.; Gupta, A.;
                                                    Ranjan, R.; Varshney, A. </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Super Critical Fluid Extracted Fatty
                                                            Acids from Withania somnifera Seeds Repair Psoriasis-Like
                                                            Skin Lesions and Attenuate Pro-Inflammatory Cytokines (TNF-?
                                                            and IL-6) Release. Biomolecules 2020, 10, 185</span></i>
                                                </div>

                                                <a href="https://mdpi.com/2218-273X/10/2/185" target="_blank"><span data-contrast="none">https://mdpi.com/2218-273X/10/2/185</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> S POKHREL, A Varshney </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Tinospora cordifolia (Giloy) may curb
                                                            COVID-19 contagion: tinocordiside disrupts the electrostatic
                                                            interactions between ACE2 and RBD. Authorea
                                                            Preprints</span></i></div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33172372/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33172372/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Gohel, V.; Singh, R.; Joshi, M.; Varshney, Y.;
                                                    Jyotish, S.; Bhattacharya, K.; Varshney, A. </span><b><span data-contrast="auto">(2020)</span></b>

                                                <div><i><span data-contrast="auto">Tri-Herbal Medicine Divya
                                                            Sarva-Kalp-Kwath (Livogrit) Regulates Fatty Acid-Induced
                                                            Steatosis in Human HepG2 Cells through Inhibition of
                                                            Intracellular Triglycerides and Extracellular Glycerol
                                                            Levels Molecules 2020, 25, 4849</span></i></div>

                                                <a href="https://mdpi.com/1420-3049/25/20/4849" target="_blank"><span data-contrast="none">https://mdpi.com/1420-3049/25/20/4849</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> R Mittal, V Arya </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Unveiling Role of MicroRNAs as
                                                            Treatment Strategy and Prognostic Markers in Triple Negative
                                                            Breast Cancer. Current Pharmaceutical
                                                            Biotechnology</span></i></div>

                                                <a href="https://www.ingentaconnect.com/content/ben/cpb/2020/00000021/00000015/art00003" target="_blank"><span data-contrast="none">https://www.ingentaconnect.com/content/ben/cpb/2020/00000021/00000015/art00003</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Solleti, S.K.; Verma, S.; Varshney, A.
                                                </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Validation of a novel zebrafish model
                                                            of dengue virus (DENV-3) pathology using the pentaherbal
                                                            medicine Denguenil Vati. Biomolecules 2020, 10,
                                                            971</span></i></div>

                                                <a href="https://mdpi.com/2218-273X/10/7/971" target="_blank"><span data-contrast="none">https://mdpi.com/2218-273X/10/7/971</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> S POKHREL, J Singh, A Varshney </span><b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Withanone from Withania somnifera May
                                                            Inhibit Novel Coronavirus (COVID-19) Entry by Disrupting
                                                            Interactions between Viral S-Protein Receptor Binding Domain
                                                            and Host ACE2 Receptor. Research Square</span></i></div>

                                                <a href="https://www.researchsquare.com/article/rs-17806/v1" target="_blank"><span data-contrast="none">https://www.researchsquare.com/article/rs-17806/v1</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Sharma, S. K., Singh, A., Telles, S., &amp;
                                                </span><b><span data-contrast="auto">Balkrishna, A.</span></b> <b><span data-contrast="auto">(2020)</span></b>
                                                <div><i><span data-contrast="auto">Yoga as an add on Therapy in the
                                                            Management of Migraine. Indian J Community Medicine, 45(2),
                                                            244-245.</span></i></div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7467181/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC7467181/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S. K., Chetry D., &amp;
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2020).</span></b>
                                                <div><i><span data-contrast="auto">Benefits and Adverse Effects
                                                            Associated with Yoga Practice: A Cross-Sectional Survey from
                                                            India. Complement Ther Med, 15(57), 102644.</span></i></div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/33338582/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/33338582/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A;</span></b><span data-contrast="auto"> Anupam Srivastava, Bhasker Joshi, Rama Shankar
                                                    and Rajesh Kumar Mishra. </span><span data-contrast="auto">(2020)</span>
                                                <div><i><span data-contrast="auto">Pseudo-viviperous propogation in
                                                            Asplenium finlaysonianum Wall. Ex Hook. from Seijosa Forest
                                                            Area of Pakke-Kessang district of Arunachal Pradesh. MFP
                                                            NEWS 2020, 30(4): 5-6.</span></i></div>
                                                <a href="https://www.researchgate.net/publication/349396324" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/349396324</span></a>
                                            </li>

                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6" aria-expanded="false">
                                    2019
                                </button>
                            </h2>
                            <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> B Joshi, A Srivastava, R Shankar, BK Shukla
                                                </span><b><span data-contrast="auto">(2019)</span></b>

                                                <div><i><span data-contrast="auto">A Comparison of The Angiosperm
                                                            Phylogeny Group Classification And Other Prominent
                                                            Classifications Of Angiosperms. Indian Journal of Plant
                                                            Sciences</span></i></div>

                                                <a href="https://www.cibtech.org/J-Plant-Sciences/PUBLICATIONS/2019/JPS-VOL-8-NO-3/JPS-003-BHASKER-COMPARISON-ANGIOSPERMS.pdf" target="_blank"><span data-contrast="none">https://www.cibtech.org/J-Plant-Sciences/PUBLICATIONS/2019/JPS-VOL-8-NO-3/JPS-003-BHASKER-COMPARISON-ANGIOSPERMS.pdf</span></a>

                                            </li>
                                            <li><span data-contrast="auto">K Nagarajan, </span><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, P Gowda </span><b><span data-contrast="auto">(2019)</span></b>

                                                <div><i><span data-contrast="auto">Alternative and supplementary health
                                                            model on traditional sugars. Journal of Nutrition &amp;
                                                            Weight Loss</span></i>
                                                </div>
                                                <a href="https://www.walshmedicalmedia.com/open-access/alternative-and-supplementary-health-model-on-traditional-sugars.pdf" target="_blank"><span data-contrast="none">https://www.walshmedicalmedia.com/open-access/alternative-and-supplementary-health-model-on-traditional-sugars.pdf</span></a>

                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> RK Mishra, A Srivastava, B Joshi, R Marde, UB
                                                    Prajapati </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div><i><span data-contrast="auto">Ancient Indian rishi’s (Sages)
                                                            knowledge of botany and medicinal plants since Vedic period
                                                            was much older than the period of Theophrastus, A case
                                                            study—Who was the actua lfather of botany. International
                                                            Journal of Unani and Integrative Medicine</span></i></div>
                                                <a href="https://www.unanijournal.com/articles/94/3-1-11-206.pdf" target="_blank"><span data-contrast="none">https://www.unanijournal.com/articles/94/3-1-11-206.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> A Upadhyay, R Upadhyay (</span><b><span data-contrast="auto">2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of Pranayama &amp; Yogasana on
                                                            HIV/AIDS -1 ayurveda-foryou</span></i>
                                                </div>
                                                <a href="https://ayurveda-foryou.com/yoga/yoga_aids.html" target="_blank"><span data-contrast="none">https://ayurveda-foryou.com/yoga/yoga_aids.html</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Pokhrel, S.; Tomer, M.; Verma, S.; Kumar, A.;
                                                    Nain, P.; Gupta, A.; Varshney, A</span><b><span data-contrast="auto">. (2019)</span></b>
                                                <div><i><span data-contrast="auto">Anti-Acetylcholinesterase activities
                                                            of mono-herbal extracts and exhibited synergistic effects of
                                                            the phytoconstituents: a biochemical and computational
                                                            study. Molecules 2019, 24, 4175</span></i></div>

                                                <a href="https://mdpi.com/1420-3049/24/22/4175" target="_blank"><span data-contrast="none">https://mdpi.com/1420-3049/24/22/4175</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna,</span></b><span data-contrast="auto"> A.; Varshney, A.; Paudel, S.; Joshi, K.;
                                                    Sakat, S.S.; Joshi, D.; Joshi, K.; Ranjan, R Gupta, A.;
                                                    Bhattacharya, K </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div><i><span data-contrast="auto">Anti-inflammatory and anti-arthritic
                                                            efficacies of an Indian traditional herbo-mineral medicine
                                                            “Divya Amvatari Ras” in collagen antibody-induced arthritis
                                                            (CAIA) mouse model. Through Modulation of
                                                            IL-6/IL-1?/TNF-?/NF?B Signaling. Frontiers in Pharmacology
                                                            2019, 10, 659</span></i></div>
                                                <a href="https://frontiersin.org/articles/10.3389/fphar.2019.00659/full" target="_blank"><span data-contrast="none">https://frontiersin.org/articles/10.3389/fphar.2019.00659/full</span></a>
                                            </li>
                                            <li>Telles, S., Vishwakarma, B., Gupta, R. K., &amp; <b><span data-contrast="auto">Balkrishna, A. (2019)</span></b>
                                                <div><i><span data-contrast="auto">Changes in Shape and Size
                                                            Discrimination and State Anxiety after Alternate-Nostril
                                                            Yoga Breathing and Breath Awareness in One Session Each.
                                                            Medical Science Monitor Basic Research, 25,
                                                            121–127.</span></i></div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/31006767/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/31006767/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, B Joshi, A Srivastava, R Shankar, Bk Shukla
                                                    (</span><b><span data-contrast="auto">2019)</span></b>
                                                <div><em>Classification Of Extant Pteridophytes: A New
                                                        Approach.</em>&nbsp;</div>

                                                <a href="https://www.academia.edu/42626963/" target="_blank"><span data-contrast="none">https://www.academia.edu/42626963/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Das, S.K.; Pokhrel, S.; Joshi, A.; Verma, S.;
                                                    Sharma, V.K.; Sharma, V.; Sharma, N.; Joshi, C.S </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div>
                                                    <span data-contrast="auto">Colchicine: Isolation, LC–MS QT of
                                                        Screening, and Anticancer Activity Study of Gloriosa
                                                        superba Seeds. Molecules 2019, 24, 2772</span>
                                                </div>

                                                <a href="https://mdpi.com/1420-3049/24/15/2772/htm" target="_blank"><span data-contrast="none">https://mdpi.com/1420-3049/24/15/2772/htm</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> SS Sakat, K Joshi, K Joshi, V Sharma, R
                                                    Ranjan, K Bhattacharya, A Varshney </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Cytokines Driven Anti-Inflammatory and
                                                            Anti-Psoriasis Like Efficacies of Nutraceutical Sea
                                                            Buckthorn (Hippophae rhamnoides) Oil.&nbsp; Frontiers in
                                                            pharmacology</span></i>
                                                </div>
                                                <a href="https://www.frontiersin.org/articles/10.3389/fphar.2019.01186/full" target="_blank"><span data-contrast="none">https://www.frontiersin.org/articles/10.3389/fphar.2019.01186/full</span></a>
                                            </li>
                                            <li>Telles, S., Kala, N., Gupta, R. K., Verma, S., Vishwakarma, B.,
                                                Agnihotri, S., Gandharva, K. &amp; Balkrishna, A. <b><span data-contrast="auto">(2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of yoga on vigilance, self
                                                            rated sleep and state anxiety in Border Security Force
                                                            personnel in India. Work, 63(2):243-251.</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/31156205/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/31156205/</span></a>
                                            </li>

                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Ranjan, R.; Sakat, S.S.; Sharma, V.K; Shukla,
                                                    R; Joshi, K.; Devkar, R.; Sharma, N.; Saklani, A; Pathak, P.;
                                                    Kumari, P.; Agarwal, V.R. </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Evaluation of polyherbal ayurvedic
                                                            formulation ‘Peedantak Vati’ for anti-inflammatory and
                                                            analgesic properties. A Balkrishna, R Ranjan, SS Sakat, VK
                                                            Sharma, R Shukla, K Joshi ournal of ethnopharmacology 2019,
                                                            235, 361-374</span></i>
                                                </div>
                                                <a href="https://sciencedirect.com/science/article/abs/pii/S037887411733550X" target="_blank"><span data-contrast="none">https://sciencedirect.com/science/article/abs/pii/S037887411733550X</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Sakat, S.S.; Joshi, K.; Paudel, S.; Joshi, D.;
                                                    Joshi, K.; Ranjan, R.; Gupta, A.; Varshney, A </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Herbo-mineral formulation ‘Ashwashila’
                                                            attenuates rheumatoid arthritis symptoms in
                                                            collagen-antibody-induced arthritis (CAIA) mice model.
                                                            Scientific reports 2019, 9, 1-17</span></i>
                                                </div>

                                                <a href="https://nature.com/articles/s41598-019-44485-9" target="_blank"><span data-contrast="none">https://nature.com/articles/s41598-019-44485-9</span></a>
                                            </li>
                                            <li><span>Telles, S., Gupta, R. K., Gandharva, K., Vishwakarma, B., Kala,
                                                    N., &amp; </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Immediate Effect of a Yoga Breathing
                                                            Practice on Attention and Anxiety in Pre-Teen Children.
                                                            Children (Basel, Switzerland), 6(7), 84.</span></i>
                                                </div>
                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6678429/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6678429/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Gupta, R. K., Kumar, A., Pal, D.
                                                    K., Tyagi, D., &amp; </span><b><span data-contrast="auto">Balkrishna, A. (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Mental Wellbeing, Quality of Life, and
                                                            Perception of Chronic Illness in Yoga-Experienced Compared
                                                            with Yoga-Naïve Patients. Medical Science Monitor Basic
                                                            Research, 25, 153–163.</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/31105261/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/31105261/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Gupta, R. K., Agnihotri, S., Telles, S.,
                                                    &amp; </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Performance in a Corsi Block-tapping
                                                            Task following High-frequency Yoga Breathing or Breath
                                                            Awareness. Int J Yoga, 12(3), 247–251.</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/31543634/" target="_blank">https://pubmed.ncbi.nlm.nih.gov/31543634/”</a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> K Singh, N Karthikeyan </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Prevalence of dental disorders based
                                                            on Tridosa concept of Ayurveda: a clinical study. Journal of
                                                            Dental Science, Oral and Maxillofacial Research</span></i>
                                                </div>
                                                <a href="https://ologyjournals.com/jdsomr/jdsomr_00035.pdf" target="_blank"><span data-contrast="none">https://ologyjournals.com/jdsomr/jdsomr_00035.pdf</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S. K., Singh, A., Kala,
                                                    N., Upadhyay, V., Arya, J., &amp; </span><b><span data-contrast="auto">Balkrishna, A. (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Quality of Life in Yoga Experienced
                                                            and Yoga Naïve Asian Indian Adults with Obesity. Journal of
                                                            obesity, 2019, 9895074.</span></i>
                                                </div>
                                                <a href="https://www.hindawi.com/journals/jobe/2019/9895074/" target="_blank"><span data-contrast="none">https://www.hindawi.com/journals/jobe/2019/9895074/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Gulati, K., Sharma SK., Telles S. &amp;
                                                </span><b><span data-contrast="auto">Balkrishna A. (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Self Esteem and Performance in
                                                            Attentional Tasks in School Children after 4½ Months of
                                                            Yoga. International Journal of Yoga,
                                                            12(2):158-161.</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/31143025/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/31143025/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">IP Sharma, P Saxena, D Gond, SP
                                                    Patel</span><b><span data-contrast="auto">, A Balkrishna
                                                        (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Solanum diphyllum L. (Solanaceae): A
                                                            new addition to the Flora of Uttarakhand, India. Indian
                                                            Forester</span></i>
                                                </div>
                                                <a href="https://www.indianforester.co.in/index.php/indianforester/article/view/142736" target="_blank"><span data-contrast="none">https://www.indianforester.co.in/index.php/indianforester/article/view/142736</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> B Joshi, A Srivastava, R Shankar, S Tiwari, UB
                                                    Prajapati, A Singh, P Punetha, A Kumar, Aqib, P Tyagi, S Sharma, RK
                                                    Mishra </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Some economic aspects of ferns and
                                                            fern-allies of Seijosa forest area of Pakke-Kessang
                                                            district, Arunachal Pradesh. International Journal of
                                                            Advanced Research in Botany</span></i>
                                                </div>

                                                <a href="https://www.arcjournals.org/pdfs/ijarb/v5-i3/3.pdf" target="_blank"><span data-contrast="none">https://www.arcjournals.org/pdfs/ijarb/v5-i3/3.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> S Sharma, A Kumar, A Srivastava, R Shankar, B
                                                    Joshi </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Study of medicinal weeds occurring
                                                            around the Patanjali Yogpeeth, Haridwar, Uttarakhand, India.
                                                            Journal of Non Timber Forest Products.</span></i>
                                                </div>
                                                <a href="https://www.bsmpsbooks.com/journal/2000/article/NlVFVzI4" target="_blank"><span data-contrast="none">https://www.bsmpsbooks.com/journal/2000/article/NlVFVzI4</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S. K., Gupta, R. K., Pal,
                                                    D. K., Gandharva, K., &amp; </span><b><span data-contrast="auto">Balkrishna, A. (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">The Impact of Yoga on Teachers’
                                                            Self-Rated Emotions. BMC Research Notes, 12(1),
                                                            680.</span></i>
                                                </div>
                                                <a href="https://bmcresnotes.biomedcentral.com/articles/10.1186/s13104-019-4737-7" target="_blank"><span data-contrast="none">https://bmcresnotes.biomedcentral.com/articles/10.1186/s13104-019-4737-7</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Rajesh Kumar, Bhaskar Joshi, </span><b><span data-contrast="auto">Acharya Balkrishna (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Traditional and classical medicinal
                                                            uses, pharmacological activities and identification of rare
                                                            and endangered Astavarga Plants (group of eight medicinal
                                                            herbs).&nbsp;</span></i>
                                                </div>
                                                <a href="https://www.researchgate.net/publication/333673091"><span data-contrast="none">https://www.researchgate.net/publication/333673091</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S.K. Kala, N.
                                                </span><b><span data-contrast="auto">&amp; Balkrishna, A.
                                                        (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Yoga as a Holistic Treatment for
                                                            Chronic Illnesses: Minimizing adverse events and safety
                                                            concerns. Frontiers in Psychology, 10:661.</span></i>
                                                </div>
                                                <a href="https://www.frontiersin.org/articles/10.3389/fpsyg.2019.00661/full" target="_blank"><span data-contrast="none">https://www.frontiersin.org/articles/10.3389/fpsyg.2019.00661/full</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> K Singh, VK Sharma, S Narsingh, C Dev, P
                                                    Gowda</span><b><span data-contrast="auto"> (2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Yoga as a Tool for promotion of Mental
                                                            and Physical Health Leading to Better Performance of School
                                                            Children.&nbsp;</span></i>
                                                </div>
                                                <a href="https://juniperpublishers.com/jyp/JYP.MS.ID.555720.php" target="_blank"><span data-contrast="none">https://juniperpublishers.com/jyp/JYP.MS.ID.555720.php</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.;</span></b><span data-contrast="auto"> Sakat, S.S.; Joshi, K.; Joshi,K.; Sharma, VK.;
                                                    Ranjan, R.; Bhattacharya, K.; Varshney, A. </span><b><span data-contrast="auto">(2019)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Cytokines Driven Anti-Inflammatory and
                                                            Anti-Psoriasis Like Efficacies of Nutraceutical Seabuck
                                                            Thorn (Hippophae rhamnoides) Oil. Frontiers in Pharmacology
                                                            2019, 10, 1186</span></i>
                                                </div>

                                                <a href="https://frontiersin.org/articles/10.3389/fphar.2019.01186/full" target="_blank"><span data-contrast="none">https://frontiersin.org/articles/10.3389/fphar.2019.01186/full</span></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7" aria-expanded="false">
                                    2018
                                </button>
                            </h2>
                            <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Ishwar Prakash Sharma &amp; Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div>Ethno-Medicinal Study of Traditional Medicinal Plants Used by
                                                    Tribal Communities of Uttarakhand, India. Springer link</div>
                                                <a id="LPlnk628891" href="https://link.springer.com/article/10.1007/s40011-023-01519-7" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s40011-023-01519-7</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Stuti Srivastava, Deepika Srivastava,
                                                Nidhi Sharma, Vedpriya Arya, Ajay K. Gautam.&nbsp;<b>(2023)</b>

                                                <div><i>Unleashing the potential of medicinal and aromatic plant wastes
                                                        with particular consideration of vermicomposting: a
                                                        comprehensive review of
                                                        literature.&nbsp;<b>Elsevier</b>&nbsp;Journal of Applied
                                                        Research on Medicinal and Aromatic Plants</i></div>

                                                <a href="https://doi.org/10.1016/j.jarmap.2023.100527" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1016/j.jarmap.2023.100527</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Swami Narsingh, C. Dev, Bhasker Joshi,
                                                Rajesh Kumar Mishra&nbsp;<b>(2023)</b>
                                                <div><i>Spirulina: A Miraculous alga with Pharmaco-nutraceutical
                                                        Potential as Future Food. International Journal of Food,
                                                        Nutrition and Dietetics</i></div>
                                                <a href="https://www.researchgate.net/profile/Swami-Narsingh-Dev-2/publication/376455555_Spirulina_A_Miraculous_alga_with_Pharmaco-nutraceutical_Potential_as_Future_Food/links/6579502a6610947889c2d04d/Spirulina-A-Miraculous-alga-with-Pharmaco-nutraceutical-Potential-as-Future-Food.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://www.researchgate.net/profile/Swami-Narsingh-Dev-2/publication/376455555_Spirulina_A_Miraculous_alga_with_Pharmaco-nutraceutical_Potential_as_Future_Food/links/6579502a6610947889c2d04d/Spirulina-A-Miraculous-alga-with-Pharmaco-nutraceutical-Potential-as-Future-Food.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Priyanka Chaudhary, Hemant Sharma,
                                                Deepika Srivastava, Nidhi Sharma, Stuti Srivastava, and Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div><i>Roscoea purpurea (Kakoli): Exploring the imperative for
                                                        conservation of an endangered Ashtawarga plant through
                                                        comprehensive review. International Journal of Minor Fruits,
                                                        Medicinal and Aromatic Plants.</i></div>
                                                <i><a href="https://www.researchgate.net/profile/Hemant-Sharma-25/publication/376618666_Roscoea_purpurea_Kakoli_Exploring_the_imperative_for_conservation_of_an_endangered_Ashtawarga_plant_through_comprehensive_review/links/65816c2a6f6e450f1986efef/Roscoea-purpurea-Kakoli-Exploring-the-imperative-for-conservation-of-an-endangered-Ashtawarga-plant-through-comprehensive-review.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="2">https://www.researchgate.net/profile/Hemant-Sharma-25/publication/376618666_Roscoea_purpurea_Kakoli_Exploring_the_imperative_for_conservation_of_an_endangered_Ashtawarga_plant_through_comprehensive_review/links/65816c2a6f6e450f1986efef/Roscoea-purpurea-Kakoli-Exploring-the-imperative-for-conservation-of-an-endangered-Ashtawarga-plant-through-comprehensive-review.pdf</a></i>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Savita Lochab, Sudeep Verma, Jyotish
                                                Srivastava, Rishabh Dev, Anurag Varshney&nbsp;<b>(2023)</b>
                                                <div><i>Melanogrit potentiates melanogenesis by escalating cellular
                                                        tyrosinase activity and MITF levels via pERK inhibition.
                                                        PubMed</i></div>
                                                <a id="LPlnk194341" href="https://pubmed.ncbi.nlm.nih.gov/38054639/" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://pubmed.ncbi.nlm.nih.gov/38054639/</a>
                                            </li>
                                            <li><b>Balkrishna Acharya,</b>&nbsp;Arya Vedpriya, Singh Sumit
                                                Kumar&nbsp;<b>(2023)</b>
                                                <div><i>Minimum support price under the aegis of universal basic income:
                                                        Understanding the implications and way forward: A review.
                                                        Bhartiya Krishi Anusandhan Patrika</i></div>
                                                <a href="https://arccjournals.com/journal/bhartiya-krishi-anusandhan-patrika/BKAP640" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://arccjournals.com/journal/bhartiya-krishi-anusandhan-patrika/BKAP640</a>
                                            </li>
                                            <li><b>Balkrishna A,</b>&nbsp;Mittal R, Arya V&nbsp;<b>(2023)</b>
                                                <div>

                                                    <i>Tumor Suppressive Role of MicroRNAs in Triple Negative Breast
                                                        Cancer. Current Pharmaceutical Design. Bentham Science. Europe
                                                        PMC</i>

                                                    <a href="https://europepmc.org/article/med/38037837" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://europepmc.org/article/med/38037837</a>

                                                </div>
                                            </li>
                                            <li><b>Acharya Balkrishna</b>, Uday Bhan Prajapati, , Rama Shankar, Rashmi
                                                Atul Joshi&nbsp;<b>(2023)</b>
                                                <div><i>Nutraceutical Aspects of Rhododendron (Burans): Certainly, a
                                                        Need to Include Some Other Species for Food and Beverage
                                                        Production. International Journal of Science and Research
                                                        (IJSR), ISSN: 2319-7064, SJIF (2022): 7.942</i></div>
                                                <a id="LPlnk442323" href="https://www.ijsr.net/archive/v11i12/SR221202091537.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.ijsr.net/archive/v11i12/SR221202091537.pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Ishwar Prakash Sharma, Arun Kumar
                                                Kushwaha, Vedpriya Arya&nbsp;<b>(2023)</b>
                                                <div>Effect of altitudinal variation on soil nutrient properties at
                                                    various sites in Garhwal Himalaya, Uttarakhand. Elsevier</div>
                                                <a id="LPlnk862660" href="https://doi.org/10.1016/j.chnaes.2023.11.003" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1016/j.chnaes.2023.11.003</a>
                                            </li>
                                            <li>Rudra B. Bhandari,&nbsp;<b>Acharya Balkrishna,</b>&nbsp;Kuppusamy
                                                Maheshkumar, and Velan A. Arumugam&nbsp;<b>(2023)</b>
                                                <div><i>Traditional Formulations for Managing COVID-19: A Systematic
                                                        Review. Journal of Integrative and Complementary Medicine.</i>
                                                </div>
                                                <a id="LPlnk789346" href="https://doi.org/10.1089/jicm.2023.0177" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1089/jicm.2023.0177</a>
                                            </li>
                                            <li><b>Balkrishna, Acharya;</b>&nbsp;Shankar, Rama; Prajapati, Uday Bhan;
                                                Joshi, Rashmi Atul; Srivastava, Anupam; Awasthi,
                                                Chetan&nbsp;<b>(2023)</b>
                                                <div>Exploring the common millets of India: A comprehensive
                                                    review.<b>&nbsp;</b><i>Journal of Drug Research in Ayurvedic
                                                        Sciences</i></div>
                                                <a id="LPlnk483401" href="https://journals.lww.com/jdra/fulltext/2023/08001/exploring_the_common_millets_of_india__a.7.aspx" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://journals.lww.com/jdra/fulltext/2023/08001/exploring_the_common_millets_of_india__a.7.aspx</a>
                                            </li>
                                            <li>
                                                <div><b><span lang="UK">Acharya Balkrishna,</span></b><span lang="UK">&nbsp;Sonam Sharma, Vivek Gohel, Ankita Kumari, Malini
                                                        Rawat, Madhulina Maity, Sandeep Sinha, Rishabh Dev, Anurag
                                                        Varshney.<b>&nbsp;(2023)</b></span></div>
                                                <div><i><span lang="UK">Renogrit attenuates Vancomycin-induced
                                                            nephrotoxicity in human renal spheroids and in
                                                            Sprague-Dawley rats by regulating kidney injury biomarkers
                                                            and creatinine/urea clearance. PLOS ONE.</span></i></div>
                                                <span lang="UK"><a id="LPlnk872174" href="https://doi.org/10.1371/journal.pone.0293605" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1371/journal.pone.0293605</a></span>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Kunal Bhattacharya, Sunil Shukla &amp;
                                                Anurag Varshney&nbsp;<b>(2023)</b>
                                                <div><i>Neuroprotection by Polyherbal Medicine Divya-Medha-Vati Against
                                                        Scopolamine-Induced Cognitive Impairment Through Modulation of
                                                        Oxidative Stress, Acetylcholine Activity, and Cell Signaling.
                                                        Molecular Neurobiology</i></div>
                                                <a id="LPlnk256140" href="https://link.springer.com/article/10.1007/s12035-023-03601-7" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s12035-023-03601-7</a>
                                            </li>
                                            <li><b>Acharya Balkrishna</b>, Sonam Verma, Sumit Kumar Singh, Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div>Alzheimer’s disease: A role of biomarkers in early diagnosis and
                                                    evidences from African ethnomedicinal knowledge. European Journal of
                                                    Neuroscience</div>
                                                <a id="LPlnk282490" href="https://onlinelibrary.wiley.com/doi/abs/10.1111/ejn.16050" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://onlinelibrary.wiley.com/doi/abs/10.1111/ejn.16050</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Vedpriya Arya, Rohini Bhat, Priyanka
                                                Chaudhary, Shalini Mishra, Ashwani Kumar, Vani Sharma, Vijay Sharma,
                                                Nidhi Sharma &amp; Ajay Kumar Gautam&nbsp;<b>(2023)</b>
                                                <div>Organic farming for sustainable agriculture and public health:
                                                    Patanjali’s perspective. SpringerLink</div>
                                                <a id="LPlnk185741" href="https://link.springer.com/article/10.1007/s42535-023-00717-y" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s42535-023-00717-y</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Rakshit Pathak, Sandeep Kumar, Vedpriya
                                                Arya, Sumit Kumar Singh&nbsp;<b>(2023)</b>
                                                <div>A comprehensive analysis of the advances in Indian Digital
                                                    Agricultural architecture. Agriculture Technology (Elsevier, USA)
                                                </div>
                                                <a id="LPlnk982504" href="https://doi.org/10.1016/j.atech.2023.100318" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1016/j.atech.2023.100318</a>
                                            </li>
                                            <li>Swati Haldar, Snehal R Jadhav, Vandana Gulati, David J
                                                Beale,&nbsp;<b>Acharya Balkrishna</b>, Anurag Varshney, Enzo A Palombo,
                                                Avinash V Karpe, Rohan M Shah.&nbsp;<b>(2023)</b>
                                                <div>Unravelling the gut-lung axis: insights into microbiome
                                                    interactions and Traditional Indian Medicine’s perspective on
                                                    optimal health.&nbsp;<i>FEMS Microbiology Ecology,
                                                        fiad103.</i><b></b></div>
                                                <a id="LPlnk456080" href="https://doi.org/10.1093/femsec/fiad103" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1093/femsec/fiad103</a>
                                            </li>
                                            <li><strong>Acharya Balkrishna,&nbsp;</strong>Sumit Singh, Sonam Verma,
                                                Pratha Bora, Vidhi Dobhal, Vedpriya Arya&nbsp;<strong>(2023)</strong>
                                                <div>Integrative perspective on pathophysiology of Schizophrenia and its
                                                    management through African traditional medicinal plants. Authorea.
                                                </div>
                                                <a id="LPlnk770420" href="https://www.authorea.com/users/656257/articles/661714-integrative-perspective-on-pathophysiology-of-schizophrenia-and-its-management-through-african-traditional-medicinal-plants" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.authorea.com/users/656257/articles/661714-integrative-perspective-on-pathophysiology-of-schizophrenia-and-its-management-through-african-traditional-medicinal-plants</a>
                                            </li>
                                            <li><b><span lang="uk">Acharya Balkrishna,</span></b><span lang="uk">&nbsp;Seema Bisht, Bhasker Joshi, Anupam Srivastava and
                                                    Rajesh Kumar Mishra&nbsp;<b>(2023)</b></span>
                                                <div>Study of essential oil bearing plants, their composition and
                                                    Ayurvedic herbalism. JEOPC, 2(1), 01-19, 2024</div>
                                                <span lang="uk"><a id="LPlnk436817" href="https://doi.org/10.58985/jeopc.2024.v02i01.32" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.58985/jeopc.2024.v02i01.32</a></span>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Prashant Katiyar, Sumit Kumar Singh,
                                                Sourav Ghosh, Vedpriya Arya&nbsp;<b>(2023)</b>
                                                <div>Impact Assessment of Integrated-pathy on Cancer-Related Fatigue in
                                                    Cancer Patients: An Observational study. Research Square.</div>
                                                <a id="LPlnk406827" href="https://www.researchsquare.com/article/rs-3201641/v1" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.researchsquare.com/article/rs-3201641/v1</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sugandh Sinha, Ashwani Kumar, Vedpriya
                                                Arya, Ajay Kumar Gautam, Martin Valis, Kamil Kuca, Dinesh Kumar, Ryszard
                                                Amarowicz&nbsp;<b>(2023)</b>
                                                <div>Sepsis-mediated renal dysfunction: Pathophysiology, biomarkers and
                                                    role of phytoconstituents in its management.&nbsp;<i>Biomedicine and
                                                        Pharmacotherapy</i></div>
                                                <a id="LPlnk645529" href="https://doi.org/10.1016/j.biopha.2023.115183" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1016/j.biopha.2023.115183</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Mohini Chaudhary, Hemant Sharma, Deepika
                                                Srivastava, Ankita Kukreti, Ashwani Kumar, Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div>Phytochemistry, pharmacology, and medicinal aspects of Allium
                                                    fistulosum L.: A narrative review. Journal of Applied Pharmaceutical
                                                    Science Vol. 0(00), pp 001-012, June, 2023.</div>
                                                <a id="LPlnk795632" href="https://japsonline.com/admin/php/uploads/3983_pdf.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://japsonline.com/admin/php/uploads/3983_pdf</a>
                                            </li>
                                            <li><b>Acharya Balkrishna</b>, Bhadoria Kamal, Mishra Shalini, Kumar
                                                Ashwani, Singh Shalini, Srivastava Deepika, Arya Vedpriya (2023)
                                                <div>Ethnomedicinal plants used by Juang and Munda Tribals of Eastern
                                                    India against gastrointestinal disorders: A narrative
                                                    review.&nbsp;<i>International Journal of Phytomedicines and Related
                                                        Industries.</i></div>
                                                <a href="https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=15&amp;issue=2&amp;article=003" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=15&amp;issue=2&amp;article=003</a>
                                            </li>
                                            <li>A. Gupta, S. Ghosh, R. Om, V. Arya,&nbsp;<b>A.
                                                    Balkrishna</b>&nbsp;<b>(2023)</b>
                                                <div>Effects of a yoga protocol in managing depression, anxiety and
                                                    stress among office workers during the COVID-19 pandemic: A
                                                    cross-sectional study. Sri Lanka Journal of Psychiatry</div>
                                                <a href="https://sljpsyc.sljol.info/articles/10.4038/sljpsyc.v14i1.8390" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://sljpsyc.sljol.info/articles/10.4038/sljpsyc.v14i1.8390</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Maneesha Rana, Shalini Mishra, Deepika
                                                Srivastava, Rohit Bhardwaj, Shalini Singh, Satyendra Kumar Rajput, and
                                                Vedpriya Arya&nbsp;<b>(2023)</b>
                                                <div>Incredible Combination of Lifestyle Modification and Herbal
                                                    Remedies for Polycystic Ovarian Syndrome Management. Hindawi
                                                    Evidence-Based Complementary and Alternative Medicine Volume 2023,
                                                    Article ID 3705508, 20 pages</div>
                                                <a id="LPlnk555133" href="https://doi.org/10.1155/2023/3705508" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://doi.org/10.1155/2023/3705508</a>
                                            </li>
                                            <li><b><span lang="EN-US">Acharya Balkrishna,</span></b><span lang="EN-US">&nbsp;Ishwar Prakash Sharma, Arun Kumar Kushwaha,
                                                    Shashi Kumar &amp; Vedpriya Arya&nbsp;<b>(2023)</b></span>
                                                <div>A study on multi-ranged medicinal plants and soil temperature in
                                                    various sites of Garhwal Himalaya, Uttarakhand. Springer Link</div>
                                                <a id="LPlnk424618" href="https://link.springer.com/article/10.1007/s44274-023-00003-3" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s44274-023-00003-3</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Swati Haldar, Anurag
                                                Varshney&nbsp;<b>(2023)</b>
                                                <div><i>OECD-407 Driven 28-day-repeated-dose non-clinical safety
                                                        evaluation of Tinospora cordifolia (Giloy) stem aqueous extract
                                                        in Sprague-Dawley rats under GLP compliance. Frontiers in
                                                        Pharmacology.</i></div>
                                                <a id="LPlnk889107" href="https://www.frontiersin.org/articles/10.3389/fphar.2023.1095083/full" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.frontiersin.org/articles/10.3389/fphar.2023.1095083/full</a>
                                            </li>
                                            <li><b><span lang="UK">Acharya Balkrishna (2023)</span></b>
                                                <div><span lang="UK">World Herbal Encyclopedia. MANN KI BAAT – SPL.
                                                        ISSUE – SECTION 7: GLOBALIZATION &amp; INTERNATIONAL
                                                        COOPERATION. Journal of Research in Ayurvedic Sciences.</span>
                                                </div>
                                                <a id="LPlnk163012" href="https://www.jrasccras.com/temp/JResAyurvedicSci7592-1914833_051908.pdf" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://www.jrasccras.com/temp/JResAyurvedicSci7592-1914833_051908.pdf</a>
                                            </li>
                                            <li><strong>Acharya Balkrishna (2023)</strong>
                                                <i>Plant Museum: A Global Collection of &gt;</i><i>60,000 Plant Arts in
                                                    Patanjali Research Institute, Haridwar (India). National Academy
                                                    Science Letters (2023).</i>
                                                <a href="https://link.springer.com/article/10.1007/s40009-023-01263-6" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://link.springer.com/article/10.1007/s40009-023-01263-6</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Naveen Thakur, Bhavana Patial , Saurabh
                                                Sharma, Ashwani Kumar, Vedpriya Arya and Ryszard
                                                Amarowicz&nbsp;<b>(2023)</b>
                                                <div><i>Synthesis, Characterization and Antibacterial Efficacy of
                                                        Catharanthus roseus and Ocimum tenuiflorum-Mediated Silver
                                                        Nanoparticles: Phytonanotechnology in Disease Management.
                                                        &nbsp;Processes 2023, 11(5), 1479</i></div>
                                                <a href="https://www.mdpi.com/2227-9717/11/5/1479" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://www.mdpi.com/2227-9717/11/5/1479</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Sonam Sharma, Madhulina Maity, Meenu
                                                Tomer, Rani Singh, Vivek Gohel, Rishabh Dev, Sandeep Sinha, Anurag
                                                Varshney&nbsp;<b>(2023)</b>
                                                <div><em>Divya-WeightGo combined with moderate aerobic exercise
                                                        remediates adiposopathy, insulin resistance, serum biomarkers,
                                                        and hepatic lipid accumulation in high-fat diet-induced obese
                                                        mice.</em></div>
                                                <a id="LPlnk236165" href="https://doi.org/10.1016/j.biopha.2023.114785" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-safelink="true" data-linkindex="0">https://doi.org/10.1016/j.biopha.2023.114785</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Ankita Semwal, Nidhi Sharma and Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div><em>Phytochemical and Pharmacological Profile of Desmodium
                                                        styracifolium (Osbeck) Merr: Updated Review.&nbsp;<a title="link to all titles by this publisher" href="https://www.ingentaconnect.com/content/ben;jsessionid=5dml774ffhqnc.x-ic-live-03" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-safelink="true" data-linkindex="0">Bentham Science Publishers</a></em></div>
                                                <a href="https://doi.org/10.2174/2215083809666221209085439" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-safelink="true" data-linkindex="1">https://doi.org/10.2174/2215083809666221209085439</a>
                                            </li>
                                            <li><strong>Acharya Balkrishna,</strong> Bhawana Kharayat, Shubhangi
                                                Rastogi, Manisha Kabdwal, Swati Haldar, Anurag Varshney
                                                <strong>(2023)</strong>
                                                <div><em>Withania somnifera Seed Oil Exhibits Anti-biofilm Properties
                                                        Against Drug-resistant Candida auris Clinical Isolate through
                                                        Modulation in Cell Permeability. Journal of Applied
                                                        Microbiology, lxad087.</em></div>
                                                <a href="https://doi.org/10.1093/jambio/lxad087" target="_blank" rel="noopener">https://doi.org/10.1093/jambio/lxad087</a>
                                            </li>
                                            <li><strong>Balkrishna, Acharya;</strong> Bhatt, Shalini; Sharma, Nidhi;
                                                Srivastava, Deepika; Arya, Vedpriya <strong>(2023)</strong>
                                                <div><em>An Impact Assessment of Government-Initiated Programs and
                                                        Schemes for the Socio-economic Development of Gujarat Tribes in
                                                        India.</em></div>
                                                <a href="https://www.proquest.com/openview/80d09967a6d91979ec2af44ffb8ef400/1?pq-origsite=gscholar&amp;cbl=5347679" target="_blank" rel="noopener">
                                                    https://www.proquest.com/openview/80d09967a6d91979ec2af44ffb8ef400/1?pq-origsite=gscholar&amp;cbl=5347679</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> S Ghosh, S Banerjee, V Arya
                                                <strong>(2023)</strong>
                                                <div><em>An inquest analysis of Mission Antyodaya: A novel convergence
                                                        approach for Rural Development in India.</em></div>
                                                <a href="https://www.researchgate.net/publication/368334230" target="_blank" rel="noopener">https://www.researchgate.net/publication/368334230</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Rashmi Mittal, Vedpriya
                                                Arya&nbsp;<b>(2023)</b>
                                                <div><i>Stumbling Blocks in Reinvigorating the Health of Diseased
                                                        Individuals Through Herbal Medicine. Bentham Science
                                                        Publishers.</i></div>
                                                <a href="https://10th.groupalerts.benthamscience.com/chapter/18462" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://10th.groupalerts.benthamscience.com/chapter/18462</a>
                                            </li>
                                            <li><b>Acharya Balkrishna,</b>&nbsp;Usman Umar Zango, Saima Kauser Nasir,
                                                Vedpriya Arya&nbsp;<b>(2023)</b>
                                                <div><i>A Clinical Cognizance of Molecular and Pathological Diagnostic
                                                        Approach of TNBC. Bentham Science Publishers.</i></div>
                                                <a href="https://www.eurekaselect.com/chapter/18454" target="_blank" rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://www.eurekaselect.com/chapter/18454</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> B Joshi, A Srivastava, S Bisht
                                                <strong>(2023)</strong>
                                                <div><em>An Insight on Nutraceutical Influences of Spice and Condiments:
                                                        Serve as a Flavor and Immunity Enhancer from Ages.</em></div>
                                                <a href="https://www.intechopen.com/chapters/84941" target="_blank" rel="noopener">https://www.intechopen.com/chapters/84941</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> NR Dabhade, A Singh, V Arya
                                                <strong>(2023)</strong>
                                                <div><em>Anticancer acumens of three Annona species: a proportional
                                                        review.</em></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/36670184/" target="_blank" rel="noopener">https://pubmed.ncbi.nlm.nih.gov/36670184/</a>
                                            </li>
                                            <li><strong>Balkrishna, A.</strong>; Gohek, V.; Pathak, V.; Singh, R.;
                                                Tomer, M.; Rawat, M.; Dev, R.; Varshney, A. <strong>(2023)</strong>
                                                <div><em>Anti-oxidant response of lipidom modulates lipid metabolism in
                                                        Caenorhabditis elegans and in OxLDL-induced human macrophages by
                                                        tuning inflammatory mediators. Biomedicine &amp;
                                                        Pharmacotherapy, 2023, 160,114309</em></div>
                                                <a href="https://www.sciencedirect.com/science/article/pii/S0753332223000975" target="_blank" rel="noopener">https://www.sciencedirect.com/science/article/pii/S0753332223000975</a>
                                            </li>
                                            <li><strong>Balkrishna, A.</strong>; Sengupta, S.; Kumari, P.; Dev, R.;
                                                Haldar, S.; Varshney, A. <strong>(2023)</strong>
                                                <div><em>Anu Taila, an herbal nasal-drop, delays spore germination in
                                                        Cunninghamella bertholletiae by reducing cAMP-PKA dependent ROS
                                                        in mucorale pathogen and extrinsic ROS in human host cells.
                                                        Letters in Applied Microbiology 2023, 76, 2, ovad014</em></div>
                                                <a href="https://academic.oup.com/lambio/article/76/2/ovad014/7008501" target="_blank" rel="noopener">https://academic.oup.com/lambio/article/76/2/ovad014/7008501</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> A Singh, B Joshi, RK Mishra, A Srivastava
                                                <strong>(2023)</strong>
                                                <div><em>Highly useful medicinal plants of Patanjali Herbal Garden,
                                                        Haridwar, Uttarakhand and special emphasis on their
                                                        conservation.</em></div>
                                                <a href="https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=15&amp;issue=1&amp;article=005" target="_blank" rel="noopener">https://www.indianjournals.com/ijor.aspx?target=ijor:mpijpri&amp;volume=15&amp;issue=1&amp;article=005</a>
                                            </li>
                                            <li><strong>Balkrishna, A.;</strong> Sharma, D.; Sharma, R.K.; Bhattacharya,
                                                K.; Varshney, A. <strong>(2023)</strong>
                                                <div><em>Investigating the Role of Classical Ayurveda-Based Incineration
                                                        Process on the Synthesis of Zinc Oxide Based Jasada Bhasma
                                                        Nanoparticles and Zn2+ Bioavailability. ACS Omega, 2023.</em>
                                                </div>
                                                <a href="https://pubs.acs.org/doi/full/10.1021/acsomega.2c05391" target="_blank" rel="noopener">https://pubs.acs.org/doi/full/10.1021/acsomega.2c05391</a>
                                            </li>
                                            <li>Kala, N., Telles, S., Sharma S. K., &amp; <strong>Balkrishna, A.
                                                    (2023)</strong>
                                                <div><em>P300 following four voluntarily regulated yoga breathing
                                                        practices and breath awareness. Clinical EEG &amp;
                                                        Neurosciensce.</em></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/35317637/" target="_blank" rel="noopener">https://pubmed.ncbi.nlm.nih.gov/35317637/</a>
                                            </li>
                                            <li><strong>A Balkrishna,</strong> R Mittal, V Arya <strong>(2023)</strong>
                                                <div><em>Unveiling Role of MicroRNAs in Metastasizing Triple Negative
                                                        Breast Cancer: From Therapeutics to Delivery.</em></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/36892021/" target="_blank" rel="noopener">https://pubmed.ncbi.nlm.nih.gov/36892021/</a>
                                            </li>
                                            <li><strong> Balkrishna, A.;</strong> Tomar, M.; Bhattacharya, K.; Varshney,
                                                A. <strong>(2023)</strong>
                                                <div><em>Withania somnifera-derived Carbon Dots Protect Human Epidermal
                                                        Cells Against UVB-Induced Cell Death and Support Growth
                                                        Factor-Mediated Wound Healing. Nanoscale Advances, 2023.</em>
                                                </div>
                                                <a href="https://pubs.rsc.org/en/content/articlehtml/2023/na/d2na00545j" target="_blank" rel="noopener">https://pubs.rsc.org/en/content/articlehtml/2023/na/d2na00545j</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-8" aria-expanded="false">
                                    2017
                                </button>
                            </h2>
                            <div id="faq-content-8" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><span data-contrast="auto">P Pathak, </span><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, PK Shukla, V Kumar, A Kumar, AK Singh.
                                                </span><b><span data-contrast="auto">(2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">1, 3, 5 s-triazine containing
                                                            analogues a prime Src family inhibitor: Design synthesis
                                                            docking, anticarcinoma and angiogenic inhibition efficacy on
                                                            cancer grafted CAM. Annals of Oncology</span></i>
                                                </div>

                                                <a href="https://www.annalsofoncology.org/article/S0923-7534(20)37508-6/fulltext" target="_blank"><span data-contrast="none">https://www.annalsofoncology.org/article/S0923-7534(20)37508-6/fulltext</span></a>
                                            </li>
                                            <li><span data-contrast="auto">SK Sharma, N Kala, S Telles, J Arya,
                                                </span><b><span data-contrast="auto">A Balkrishna (2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">A comparison of the quality of life in
                                                            obese persons based on experience of yoga practice. Indian
                                                            Journal of Traditional Knowledge</span></i>
                                                </div>

                                                <a href="https://nopr.niscpr.res.in/bitstream/123456789/42287/1/IJTK%2016%28Suppl%29%2017-20.pdf" target="_blank"><span data-contrast="none">https://nopr.niscpr.res.in/bitstream/123456789/42287/1/IJTK%2016%28Suppl%29%2017-20.pdf</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S.K., Agnihotri, S.,
                                                </span><b><span data-contrast="auto">Balkrishna A. (2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">A critical evaluation of Dead Sea
                                                            Therapy in the management of psoriasis. Journal of
                                                            Alternative, Complementary and Integrative medicine, 3,
                                                            33.</span></i>
                                                </div>

                                                <a href="https://www.heraldopenaccess.us/openaccess/a-critical-evaluation-of-dead-sea-therapy-in-the-management-of-psoriasis" target="_blank"><span data-contrast="none">https://www.heraldopenaccess.us/openaccess/a-critical-evaluation-of-dead-sea-therapy-in-the-management-of-psoriasis</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Shirley Telles, Sachin Kumar Sharma, Savita
                                                    Agnihotri and </span><b><span data-contrast="auto">Acharya
                                                        Balkrishna (2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">A Critical Evaluation of Dead Sea
                                                            Therapy in the Management of Psoriasis.</span></i>
                                                </div>
                                                <a href="https://www.heraldopenaccess.us/openaccess/a-critical-evaluation-of-dead-sea-therapy-in-the-management-of-psoriasis" target="_blank"><span data-contrast="none">https://www.heraldopenaccess.us/openaccess/a-critical-evaluation-of-dead-sea-therapy-in-the-management-of-psoriasis</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Verma, S., Sharma, S.K., Gupta,
                                                    R.K., and </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Alternate-Nostril Yoga Breathing
                                                            Reduced Blood Pressure While Increasing Performance in a
                                                            Vigilance Test. Medical Science Monitor Basic Research,
                                                            23:392-398.</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/29284770/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/29284770/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> LN Misra </span><b><span data-contrast="auto">(2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Ayurvedic plants in brain disorders:
                                                            the herbal hope. Journal of Traditional Medicine &amp;
                                                            Clinical Naturopathy</span></i>
                                                </div>

                                                <a href="https://www.omicsonline.org/open-access/ayurvedic-plants-in-brain-disorders-the-herbal-hope.php?aid=89160" target="_blank"><span data-contrast="none">https://www.omicsonline.org/open-access/ayurvedic-plants-in-brain-disorders-the-herbal-hope.php?aid=89160</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S.K., Singh N., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Characteristics of Yoga Practitioners,
                                                            Motivators and Yoga Techniques of Choice: A Cross-sectional
                                                            Study. Frontiers in Public Health, 5, 184.</span></i>
                                                </div>
                                                <a href="https://www.frontiersin.org/articles/10.3389/fpubh.2017.00184/full" target="_blank"><span data-contrast="none">https://www.frontiersin.org/articles/10.3389/fpubh.2017.00184/full</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> A Verma, R Bhattarai, GP Gowda </span><b><span data-contrast="auto">(2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of Yoga on general health: food
                                                            habits versus blood groups. International Journal of
                                                            Community Medicine and Public Health</span></i>
                                                </div>

                                                <a href="https://www.ijcmph.com/index.php/ijcmph/article/view/1151" target="_blank"><span data-contrast="none">https://www.ijcmph.com/index.php/ijcmph/article/view/1151</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Verma, S., Singh, N., and Telles, S., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Evaluation of the Protective Effects
                                                            of Constituents of an Ayurveda Herbal Eye Drop Preparation
                                                            in Albino Rabbits. International Journal of Medical Research
                                                            Professionals, 3(1): 155-158.</span></i>
                                                </div>

                                                <a href="http://ijmrp.com/Admin_Portal/Upload/Vol3Issue1/32%20IJMRP%203(1)%20167-69.pdf" target="_blank"><span data-contrast="none">http://ijmrp.com/Admin_Portal/Upload/Vol3Issue1/32%20IJMRP%203(1)%20167-69.pdf</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Sharma, S.K., Kala, N. Telles, S., Arya J,
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">A comparision of the quality of life
                                                            in obese persons based on experience of yoga practice.
                                                            Indian Journal of Traditional Knowledge, 16 (suppl),
                                                            17-20.</span></i>
                                                </div>
                                                <a target="_blank" href="https://www.researchgate.net/publication/339352506"><span data-contrast="none">https://www.researchgate.net/publication/339352506</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Gupta, R.K., Yadav, A., Pathak,
                                                    S., </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Hemisphere specific EEG related to
                                                            alternate nostril yoga breathing. BMC Research Notes, 10
                                                            (1), 306</span></i>
                                                </div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5525313/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5525313/</span></a>

                                            </li>
                                            <li><span data-contrast="auto">R Dobhal, N Singh, P Sexna, </span><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, PP Upadhyaya </span><b><span data-contrast="auto">(2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Review on Different Kinds of
                                                            Vegetables with Reference of Nephroprotective Activity.
                                                            Annual Research &amp; Review in Biology</span></i>
                                                </div>
                                                <a href="https://journalarrb.com/index.php/ARRB/article/view/25998" target="_blank"><span data-contrast="none">https://journalarrb.com/index.php/ARRB/article/view/25998</span></a>
                                            </li>
                                            <li><span data-contrast="auto">AK Bhardwaj, N Singh, </span><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, S Telles </span><b><span data-contrast="auto">(2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Sustained improvement in self-esteem
                                                            in children after 13 months of unsupervised yoga practice.
                                                            International Journal of Complementary and Alternative
                                                            Medicine. International Journal of Complementary and
                                                            Alternative Medicine</span></i>
                                                </div>
                                                <a href="https://medcraveonline.com/IJCAM/sustained-improvement-in-self-esteem-in-children-after-13-months-of-unsupervised-yoga-practice.html" target="_blank"><span data-contrast="none">https://medcraveonline.com/IJCAM/sustained-improvement-in-self-esteem-in-children-after-13-months-of-unsupervised-yoga-practice.html</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Bharadwaj, A.K., Tyagi, D., Telles, S., Singh
                                                    N., </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2017)</span></b>
                                                <div>
                                                    <span data-contrast="auto">The inter-dependence between beliefs and
                                                        feelings about a yagna: a correlational study. Indian Journal of
                                                        Traditional Knowledge, 16 (suppl), 25-29.</span>
                                                </div>

                                                <a href="https://nopr.niscpr.res.in/handle/123456789/42285" target="_blank"><span data-contrast="none">https://nopr.niscpr.res.in/handle/123456789/42285</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Gupta, R.K., and </span><b><span data-contrast="auto">Balkrishna, A (2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Yoga and Physiotherapy: Therapies
                                                            Which Complement Each Other. Journal of Yoga and
                                                            Phisiotherapy, 1(3).</span></i>
                                                </div>
                                                <a href="https://juniperpublishers.com/jyp/JYP.MS.ID.555565.php" target="_blank"><span data-contrast="none">https://juniperpublishers.com/jyp/JYP.MS.ID.555565.php</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> P Gowda, R Bhattarai, RB Bhandari, K Singh, A
                                                    Verma </span><b><span data-contrast="auto">(2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Yoga practices for different blood
                                                            types based on occidental–oriental food habits.
                                                            International journal of health</span></i>
                                                </div>

                                                <a href="https://www.sciencepubco.com/index.php/IJH/article/view/8331" target="_blank"><span data-contrast="none">https://www.sciencepubco.com/index.php/IJH/article/view/8331</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Balkrishna, A.,</span></b><span data-contrast="auto"> Telles, S., and Gupta, R.K. </span><b><span data-contrast="auto">(2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">The anatomy of the skin: concepts from
                                                            ayurveda and computational modelling. Indian Journal of
                                                            Clinical Anatomy and Physiology, 5(1).</span></i>
                                                </div>

                                                <a href="https://www.ijcap.org/article-details/6042" target="_blank"><span data-contrast="none">https://www.ijcap.org/article-details/6042</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">AB Krishna,</span></b><span data-contrast="auto"> N Sharma, VK Sharma, AK Gupta </span><b><span data-contrast="auto">(2017)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Cytochrome p450 inhibition study of
                                                            Picrorhiza kurroa evaluation of herb-drug interaction. WORLD
                                                            JOURNAL OF PHARMACY AND PHARMACEUTICAL SCIENCES</span></i>
                                                </div>

                                                <a href="https://www.wjpps.com/wjpps_controller/abstract_id/6644" target="_blank"><span data-contrast="none">https://www.wjpps.com/wjpps_controller/abstract_id/6644</span></a>

                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-9" aria-expanded="false">
                                    2016
                                </button>
                            </h2>
                            <div id="faq-content-9" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><span data-contrast="auto">K Chaudhary, RK Gupta, S Telles,
                                                </span><b><span data-contrast="auto">A Balkrishna (2016)</span></b>
                                                <div>
                                                    <span data-contrast="auto"><em>A Correlation between Heart Rate
                                                            Variability (HRV) and somatization of stress. Indian Journal
                                                            of Physiology and Pharmacology</em></span>
                                                </div>

                                                <a href="https://www.researchgate.net/publication/309721612_" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/309721612_</span></a>
                                            </li>
                                            <li><span data-contrast="auto">A Gupta, RK Gupta, S Telles, </span><b><span data-contrast="auto">A Balkrishna (2016)</span></b>
                                                <div><i><span data-contrast="auto">Correlation between state anxiety and
                                                            fine motor skills in computer users. Indian Journal of
                                                            Physiology and Pharmacology</span></i></div>

                                                <a href="https://www.researchgate.net/publication/309721499_Correlation_between_state_anxiety_and_fine_motor_skills_in_computer_users" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/309721499_Correlation_between_state_anxiety_and_fine_motor_skills_in_computer_users</span></a>
                                            </li>
                                            <li><span data-contrast="auto">S Agnihotri, RK Gupta, S Telles,
                                                </span><b><span data-contrast="auto">A Balkrishna (2016)</span></b>
                                                <div><i><span data-contrast="auto">Correlation study between heart rate
                                                            variability with state anxiety and hyperventilation in
                                                            outpatients. Indian Journal of Physiology and
                                                            Pharmacology</span></i></div>

                                                <a href="https://www.researchgate.net/publication/309721815_" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/309721815_</span></a>
                                            </li>
                                            <li><span data-contrast="auto">S Telles, RK Gupta, N Singh, </span><b><span data-contrast="auto">A Balkrishna (2016)</span></b>
                                                <div><span data-contrast="auto"><em>A functional near-infrared
                                                            spectroscopy study of high-frequency yoga breathing compared
                                                            to breath awareness. Medical science monitor basic
                                                            research</em></span></div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4946388/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4946388/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Bhardwaj, A. K., Gupta, R. K.,
                                                    Sharma, S. K., Monro, R., and </span><b><span data-contrast="auto">Balkrishna, A. (2016)</span></b>
                                                <div><i><span data-contrast="auto">A randomized controlled trial to
                                                            assess pain and MRI based structural spine changes in low
                                                            back pain patients after yoga practice. Medical Science
                                                            Monitor Clinical Research, 22:3228-47.</span></i></div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/27619104/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/27619104/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., Gupta, R.K., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">A selective review of dharana and
                                                            dhyana in healthy participants. Journal of Ayurveda and
                                                            Integrative Medicine, 7(4): 255-260.</span></i>
                                                </div>
                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5192286/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5192286/</span></a>
                                            </li>

                                            <li><span data-contrast="auto">Telles, S., Gupta, R. K., Singh, N., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">A functional near-infrared
                                                            spectroscopy study of high-frequency yoga breathing compared
                                                            to breath awareness. Medical Science Monitor Basic Research,
                                                            22: 58-66.</span></i>
                                                </div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4946388/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4946388/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Acharya Bal Krishna,</span></b><span data-contrast="auto"> Hemanth Kumar Manikyam , Vinay K. Sharma, Niti
                                                    Sharma </span><b><span data-contrast="auto">(2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Acute oral toxicity study in rats with
                                                            Mucuna pruriens seed extract.</span></i>
                                                </div>

                                                <a href="https://www.imedpub.com/articles/acute-oral-toxicity-study-in-rats-with-mucuna-pruriens-seed-extract.pdf" target="_blank"><span data-contrast="none">https://www.imedpub.com/articles/acute-oral-toxicity-study-in-rats-with-mucuna-pruriens-seed-extract.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> HK Manikyam, VK Sharma, N Sharma
                                                </span><b><span data-contrast="auto">(2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Clastogenic effect of Picrorhiza
                                                            kurroa rhizome extract on cultured human peripheral blood
                                                            lymphocytes. Journal of HerbMed Pharmacology</span></i>
                                                </div>

                                                <a href="https://www.semanticscholar.org/paper/Clastogenic-effect-of-Picrorhiza-kurroa-rhizome-on-Balkrishna-Manikyam/387d93765d2d3681db039e66aaa110cbf15ede32" target="_blank"><span data-contrast="none">https://www.semanticscholar.org/paper/Clastogenic-effect-of-Picrorhiza-kurroa-rhizome-on-Balkrishna-Manikyam/387d93765d2d3681db039e66aaa110cbf15ede32</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> MH Kumar, AK Gupta </span><b><span data-contrast="auto">(2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Comparative analysis of HPTLC,
                                                            secondary metabolites and antioxidant activities of
                                                            Tinospora cordifolia stem powders. International Journal of
                                                            Pharmaceutical Sciences and Research</span></i>
                                                </div>

                                                <a href="https://ijpsr.com/bft-article/comparative-analysis-of-hptlc-secondary-metabolites-and-antioxidant-activities-of-tinospora-cordifolia-stem-powders/" target="_blank"><span data-contrast="none">https://ijpsr.com/bft-article/comparative-analysis-of-hptlc-secondary-metabolites-and-antioxidant-activities-of-tinospora-cordifolia-stem-powders/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">RK Gupta, A Bharadwaj, S Telles,
                                                </span><b><span data-contrast="auto">A Balkrishna (2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Correlation between anthropometric
                                                            measures and quality of life in obese persons. International
                                                            Congress on Obesity and Metabolic Syndrome</span></i>
                                                </div>
                                                <a href="https://www.researchgate.net/publication/307906254_" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/307906254_</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">AB Krishna,</span></b><span data-contrast="auto"> N Sharma, VK Sharma, AK Gupta </span><b><span data-contrast="auto">(2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Cytochrome P450 Inhibition Study Of
                                                            Picrorhiza Kurroa: Evaluation Of Herb-Drug
                                                            Interaction.&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.wjpps.com/wjpps_controller/abstract_id/6644" target="_blank"><span data-contrast="none">https://www.wjpps.com/wjpps_controller/abstract_id/6644</span></a>
                                            </li>
                                            <li><span data-contrast="auto">S Telles, AK Bhardwaj, RK Gupta, A Kumar,
                                                </span><b><span data-contrast="auto">A Balkrishna (2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Development of a food frequency
                                                            questionnaire to assess dietary intake for the residents of
                                                            the Northern Region of India. International Journal of
                                                            Pharmaceutical Sciences and Research</span></i>
                                                </div>

                                                <a href="https://rfppl.co.in/view_abstract.php?jid=1&amp;art_id=4365" target="_blank"><span data-contrast="none">https://rfppl.co.in/view_abstract.php?jid=1&amp;art_id=4365</span></a>
                                            </li>
                                            <li><span data-contrast="auto">N Sharma, VK Sharma, HK Manikyam,
                                                </span><b><span data-contrast="auto">AB Krishna (2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Ergot Alkaloids A Review on
                                                            Therapeutic Applications. European Journal of Medicinal
                                                            Plants.</span></i>
                                                </div>

                                                <a href="https://journalejmp.com/index.php/EJMP/article/view/213" target="_blank"><span data-contrast="none">https://journalejmp.com/index.php/EJMP/article/view/213</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S. K., Gupta, R. K.,
                                                    Bhardwaj, A. K., and </span><b><span data-contrast="auto">Balkrishna, A. (2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Heart rate variability in chronic low
                                                            back pain patients randomized to yoga or standard care. BMC
                                                            Complimentary and Alternative Medicine, 16(1):
                                                            279.</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/27514611/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/27514611/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">B Acharya,</span></b><span data-contrast="auto"> S Ghosh, HK Manikyam </span><b><span data-contrast="auto">(2016)</span></b>
                                                <div>
                                                    <span data-contrast="auto"><em>Nature`s Response to Influenza A High
                                                            Throughput Screening Strategy of Ayurvedic Medicinal
                                                            Phytochemicals. International Journal of Pharmaceutical
                                                            Sciences and Research</em>/span&gt;</span>
                                                </div>

                                                <a href="https://ijpsr.com/bft-article/natures-response-to-influenza-a-high-throughput-screening-strategy-of-ayurvedic-medicinal-phytochemicals/" target="_blank"><span data-contrast="none">https://ijpsr.com/bft-article/natures-response-to-influenza-a-high-throughput-screening-strategy-of-ayurvedic-medicinal-phytochemicals/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> HK Manikyam, VK Sharma, N Sharma
                                                </span><b><span data-contrast="auto">(2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Safety Evaluation of Picrorhiza Kurroa
                                                            Rhizome Extract by Bacterial Reverse Mutation Test. Advanced
                                                            Studies in Biology</span></i>
                                                </div>

                                                <a href="http://www.m-hikari.com/asb/asb2016/asb1-4-2016/p/sharmaASB1-4-2016.pdf" target="_blank"><span data-contrast="none">http://www.m-hikari.com/asb/asb2016/asb1-4-2016/p/sharmaASB1-4-2016.pdf</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">AB Krishna,</span></b><span data-contrast="auto">&nbsp; HK Manikyam ,&nbsp; VK Sharma,&nbsp; N
                                                    Sharma </span><b><span data-contrast="auto">(2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Single dose oral toxicity study of
                                                            Picrorhiza kurroa rhizome extract in Wistar rats.
                                                            Fundamental Toxicological Sciences</span></i>
                                                </div>
                                                <a href="https://www.jstage.jst.go.jp/article/fts/3/1/3_9/_article" target="_blank"><span data-contrast="none">https://www.jstage.jst.go.jp/article/fts/3/1/3_9/_article</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Acharya Bal Krishna,</span></b><span data-contrast="auto"> Hemanth Kumar Manikyam , Vinay K. Sharma, Niti
                                                    Sharma </span><b><span data-contrast="auto">(2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Spirituality and Science of Yogic
                                                            Chakra A Correlation.</span></i>
                                                </div>
                                                <a href="https://www.researchgate.net/publication/301634988_" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/301634988_</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">B Acharya,</span></b><span data-contrast="auto"> M Nayan, HN Kaur, Y Shailendra, MH Kumar, C
                                                    Ritu </span><b><span data-contrast="auto">(2016)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Structural and Optical studies of
                                                            Traditional Indian Medicine: Kajjali &amp; Narikela Lavan.
                                                            BMC complementary and alternative medicine</span></i>
                                                </div>

                                                <a href="https://jyoungpharm.org/article/914" target="_blank"><span data-contrast="none">https://jyoungpharm.org/article/914</span></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-10" aria-expanded="false">
                                    2015
                                </button>
                            </h2>
                            <div id="faq-content-10" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><span data-contrast="auto">RK Gupta, S Telles, </span><b><span data-contrast="auto">A Balkrishna (2015)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">A Review Article on Kapalabhati
                                                            Pranayama.(Pages 51-53)&nbsp;</span></i>
                                                </div>

                                                <a href="https://www.researchgate.net/publication/297714501_" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/297714501_</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Acharya BalKrishna,</span></b><span data-contrast="auto"> Hemanth Kumar Manikyam, Vinay K Sharma, Niti
                                                    Sharma </span><b><span data-contrast="auto">(2015)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Acute Oral Toxicity Study of Paris
                                                            polyphylla extract in Rats.</span></i>
                                                </div>

                                                <a href="https://ijp.arjournals.org/index.php/ijp/article/view/425" target="_blank"><span data-contrast="none">https://ijp.arjournals.org/index.php/ijp/article/view/425</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., and </span><b><span data-contrast="auto">Balkrishna, A. (2015)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Augmenting brain function with
                                                            meditation: can detachment coincide with empathy? Frontiers
                                                            in Systems Neuroscience, 9: 141.</span></i>
                                                </div>
                                                <a href="https://www.frontiersin.org/articles/10.3389/fnsys.2015.00141/full" target="_blank"><span data-contrast="none">https://www.frontiersin.org/articles/10.3389/fnsys.2015.00141/full</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Pathak, S., Kumar, A., Mishra,
                                                    P., and </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2015)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Ayurvedic doshas as predictors of
                                                            sleep quality. Medical Science Monitor,
                                                            21:1421-1427.</span></i>
                                                </div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4448595/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4448595/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Acharya Bal Krishna,</span></b><span data-contrast="auto"> Hemanth Kumar Manikyam , Vinay K. Sharma, Niti
                                                    Sharma </span><b><span data-contrast="auto">(2015)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Cytotoxicity Study in Non-Malignant
                                                            Fibroblast L929 Cell Line with Mucuna pruriens Seed
                                                            Extract.</span></i>
                                                </div>

                                                <a href="https://xjournals.com/collections/articles/Article?qt=yKtmgYPcUMSsz3DaBzzxkZjXnd3f4VQI+TYXEmu6PxY="><span data-contrast="none" target="_blank">https://xjournals.com/collections/articles/Article?qt=yKtmgYPcUMSsz3DaBzzxkZjXnd3f4VQI+TYXEmu6PxY=</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">A Balakrishna</span></b><span data-contrast="auto">, MH Kumar </span><b><span data-contrast="auto">(2015)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Evaluation of synergetic anticancer
                                                            activity of berberine and curcumin on different models of
                                                            A549, Hep-G2, MCF-7, Jurkat, and K562 cell
                                                            lines&nbsp;</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/26247019/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/26247019/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Pathak, S., Kumar, A., Mishra,
                                                    P., and </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2015)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Intensity and duration of yoga
                                                            practice predict anxiety and depression scores associated
                                                            with chronic illness. Annals of Medical and Health Sciences
                                                            Research, 5(4):260-265.</span></i>
                                                </div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4512118/"><span data-contrast="none" target="_blank">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4512118/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., and </span><b><span data-contrast="auto">Balkrishna, A. (2015)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Metabolic and ventilatory changes
                                                            during and after high-frequency yoga breathing. Medical
                                                            Science Monitor Basic Research, 21:161-171.</span></i>
                                                </div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4547545/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4547545/</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">Acharya Bal Krishna,</span></b><span data-contrast="auto"> Hemanth Kumar Manikyam , Vinay K. Sharma, Niti
                                                    Sharma </span><b><span data-contrast="auto">(2015)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Plant Cardenolides in
                                                            Therapeutics.</span></i>
                                                </div>
                                                <a href="https://www.researchgate.net/publication/282148235_Plant_Cardenolides_in_Therapeutics/link/5604db5a08ae8e08c08ac276/download" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/282148235_Plant_Cardenolides_in_Therapeutics/link/5604db5a08ae8e08c08ac276/download</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Pathak., S., and </span><b><span data-contrast="auto">Balkrishna, A. (2015).</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Risks of the headstand related to
                                                            ophthalmology. Indian Journal of Physiology and
                                                            Pharmacology, 59(3): 355-356.</span></i>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-11" aria-expanded="false">
                                    2014
                                </button>
                            </h2>
                            <div id="faq-content-11" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S. K., Yadav, A., Singh,
                                                    N., and </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2014)</span></b>
                                                <div>
                                                    <span data-contrast="auto"><em>A comparative controlled trial
                                                            comparing the effects of yoga and walking for overweight and
                                                            obese adults. Medical Science Monitor,
                                                            20:894-904.</em></span>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/24878827/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/24878827/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Shirley Telles, Nilkamal Singh, K.V. Naveen,
                                                    Singh Deepeshwar, Subramanya Pailoor, N.K. Manjunath, Lija George,
                                                    Rose Dawn and </span><b><span data-contrast="auto">Acharya
                                                        Balkrishna (2014)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">A fMRI Study of Stages of Yoga
                                                            Meditation Described in Traditional Texts</span></i>
                                                </div>
                                                <a href="https://www.longdom.org/open-access/a-fmri-study-of-stages-of-yoga-meditation-described-in-traditional-texts-11569.html" target="_blank"><span data-contrast="none">https://www.longdom.org/open-access/a-fmri-study-of-stages-of-yoga-meditation-described-in-traditional-texts-11569.html</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S. K., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2014)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Blood pressure and heart rate
                                                            variability during a yoga based alternate nostril breathing
                                                            practice and breath awareness. Medical Science Monitor, 20:
                                                            184-193.</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/25408140/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/25408140/</span></a>

                                            </li>
                                            <li><span data-contrast="auto">Alamandha Madhan Kumar, </span><b><span data-contrast="auto">Acharya Bal Krishna</span></b><span data-contrast="auto">, Sadhana Singh, Gowdara Paran Gowda
                                                </span><b><span data-contrast="auto">(2014)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Consciousness–Brain Gene Behavioral
                                                            Psychology by Using Quantum Dots for DNA Sequences and for a
                                                            Single DNA Sequence.&nbsp;</span></i>
                                                </div>
                                                <a href="https://www.neuroquantology.com/article.php?id=1228" target="_blank"><span data-contrast="none">https://www.neuroquantology.com/article.php?id=1228</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Sharma, S. K., Yadav, A., Singh,
                                                    N., and </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2014)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Immediate changes in muscle strength
                                                            and motor speed following yoga breathing. Indian Journal of
                                                            Physiology and Pharmacology, 58(1):22-29.</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/25464673/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/25464673/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Pathak, S., Singh, N., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2014)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Research on Traditional Medicine: What
                                                            Has Been Done, the Difficulties, and Possible Solutions.
                                                            Evidence-Based Complementary and Alternative Medicine.
                                                            Article ID 495635, 5 pages.</span></i>
                                                </div>
                                                <a href="https://www.hindawi.com/journals/ecam/2014/495635/" target="_blank"><span data-contrast="none">https://www.hindawi.com/journals/ecam/2014/495635/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., and </span><b><span data-contrast="auto">Balkrishna, A. (2014)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Role of respiration in mind-body
                                                            practices: concepts from contemporary science and
                                                            traditional yoga texts. Frontiers in Psychiatry, Section
                                                            Affective Disorders and Psychosomatic Research,
                                                            5:167.</span></i>
                                                </div>

                                                <a href="https://www.frontiersin.org/articles/10.3389/fpsyt.2014.00167/full" target="_blank"><span data-contrast="none">https://www.frontiersin.org/articles/10.3389/fpsyt.2014.00167/full</span></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-12" aria-expanded="false">
                                    2013
                                </button>
                            </h2>
                            <div id="faq-content-12" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><span data-contrast="auto">Telles, S., Yadav, A., Kumar, N., Sharma, S.,
                                                    Naveen, K. V., and </span><b><span data-contrast="auto">Balkrishna,
                                                        A. (2013)</span></b>
                                                <div>
                                                    <span data-contrast="auto"><em>Blood pressure and Purdue pegboard
                                                            scores in hypertensives after alternate nostril breathing,
                                                            breath awareness, and no intervention. Medical Science
                                                            Monitor, 19(1):61-66.</em></span>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/23334063/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/23334063/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Yadav, A., Sharma, S., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2013)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Body fat, cholesterol, triglycerides,
                                                            and adipokines as predictors of waist circumference in
                                                            overweight and obese adults. Medical Science Monitor,
                                                            19:571-578.</span></i>
                                                </div>
                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3775620/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3775620/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., Bhardwaj, A. K.,
                                                    Kumar, A., and </span><b><span data-contrast="auto">Balkrishna, A.
                                                        (2013)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of yoga or physical exercise on
                                                            physical, cognitive and emotional measures in children: a
                                                            randomized controlled trial. Child and Adolescent Psychiatry
                                                            and Mental Health, 7(1):37.</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/24199742/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/24199742/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Yadav, A., Gupta, R. K., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2013)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Reaction time following yoga bellows
                                                            type breathing and breath awareness, Perceptual and Motor
                                                            Skills, 117(4):1-10.</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/24422341/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/24422341/</span></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-13" aria-expanded="false">
                                    2012
                                </button>
                            </h2>
                            <div id="faq-content-13" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> A Srivastava, RK Mishra, SP Patel, RK
                                                    Vashistha, A Singh </span><b><span data-contrast="auto">(2012)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Astavarga plants-threatened medicinal
                                                            herbs of the North-West Himalaya&nbsp;</span></i>
                                                </div>
                                                <a href="https://www.cabdirect.org/cabdirect/abstract/20133041634" target="_blank"><span data-contrast="none">https://www.cabdirect.org/cabdirect/abstract/20133041634</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles. S., Singh. N., Yadav. A., and
                                                </span><b><span data-contrast="auto">Balkrishna. A.
                                                        (2012)&nbsp;</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of yoga on different aspects of
                                                            mental health. Indian Journal of Physiology and
                                                            Pharmacology, 56(3): 245-254</span></i><span data-contrast="auto">.</span>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/23734439/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/23734439/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., and </span><b><span data-contrast="auto">Balkrishna, A. (2012)</span></b>
                                                <div>
                                                    <span data-contrast="auto"><em>Finger dexterity and visual
                                                            discrimination following two yoga breathing practices.
                                                            International Journal of Yoga, 5(1): 37- 4.</em></span>
                                                </div>

                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3276931/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3276931/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Rudra B. Bhandari, Churna B. Bhandari,
                                                </span><b><span data-contrast="auto">Balkrishna Acharya,</span></b><span data-contrast="auto"> Pranav Pandya, Kartar Singh, Vinod K. Katiyar
                                                    and Ganesh D. Sharma </span><b><span data-contrast="auto">(2012)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Implications of Corporate Yoga A
                                                            Review</span></i>
                                                </div>

                                                <a href="https://www.intechopen.com/chapters/33848"><span data-contrast="none" target="_blank">https://www.intechopen.com/chapters/33848</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., Gupta, R. K., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2012)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Optical topography recording of
                                                            cortical activity during high frequency yoga breathing and
                                                            breath awareness. Medical Science Monitor,
                                                            18(1):LE3-4.</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/22207124/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/22207124/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., and </span><b><span data-contrast="auto">Balkrishna, A. (2012)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Managing mental health disorders
                                                            resulting from trauma through yoga: a review. Depression
                                                            Research and Treatment, 2012:401513.</span></i>
                                                </div>

                                                <a href="https://www.hindawi.com/journals/drt/2012/401513/" target="_blank"><span data-contrast="none">https://www.hindawi.com/journals/drt/2012/401513/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Bhardwaj, A. K., Kumar, S.,
                                                    Kumar, N., and </span><b><span data-contrast="auto">Balkrishna, A.,
                                                        (2012)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Performance in a substitution task and
                                                            state anxiety following yoga in army recruits. Psychological
                                                            Reports, 110(3): 963-976.</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/22897098/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/22897098/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Naveen, K.V., Kumar, N., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2012)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">The effect of yoga on neuroticism in
                                                            an Indian population varies with sociodemographic factors.
                                                            Journal of Cultural Diversity, 19(4):118-123.</span></i>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/23362692/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/23362692/</span></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-14" aria-expanded="false">
                                    2011
                                </button>
                            </h2>
                            <div id="faq-content-14" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><span data-contrast="auto">Telles, S., Gaur, V., Sharma, S. and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2011)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Attitude of conventional and CAM
                                                            physicians towards CAM in India. Journal of Alternative and
                                                            Complementary Medicine, 17(11):1069-73.</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/22070443/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/22070443/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">SK Sharma, S Telles, </span><b><span data-contrast="auto">A Balkrishna (2011)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of Alternate Nostril Yoga
                                                            Breathing on Autonomic and Respiratory Variables.</span></i>
                                                </div>
                                                <a href="https://www.ijpp.com/IJPP%20archives/2011_55_5/Supplement%201%20Pages%2041-78_Complementary%20and%20Alternative%20Medicine.pdf" target="_blank"><span data-contrast="none">https://www.ijpp.com/IJPP%20archives/2011_55_5/Supplement%201%20Pages%2041-78_Complementary%20and%20Alternative%20Medicine.pdf</span></a>
                                            </li>

                                            <li><span data-contrast="auto">Telles, S., Naveen, K. V., Gaur. V., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2011)</span></b>
                                                <div>
                                                    <span data-contrast="auto"><em>Effect of one week of yoga on
                                                            function and severity in rheumatoid arthritis. Biomed
                                                            Central Research Notes, 4:118.</em></span>
                                                </div>
                                                <a href="https://bmcresnotes.biomedcentral.com/articles/10.1186/1756-0500-4-118" target="_blank"><span data-contrast="none">https://bmcresnotes.biomedcentral.com/articles/10.1186/1756-0500-4-118</span></a>
                                            </li>
                                            <li><span data-contrast="auto">S Telles, </span><b><span data-contrast="auto">A Balkrishna,</span></b><span data-contrast="auto"> K Maharana </span><b><span data-contrast="auto">(2011)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of yoga and ayurveda on
                                                            duchenne muscular dystrophy&nbsp;</span></i>
                                                </div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/21976863/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/21976863/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Maharana, K., Balrana, B. and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2011).</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effects of high frequency yoga
                                                            breathing called kapalabhati compared with breath awareness
                                                            on the degree of optical illusion perceived. Psychological
                                                            Reports, 112(3): 981-990.</span></i>
                                                </div>
                                                <a href="https://journals.sagepub.com/doi/10.2466/02.20.22.PMS.112.3.981-990" target="_blank"><span data-contrast="none">https://journals.sagepub.com/doi/10.2466/02.20.22.PMS.112.3.981-990</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., and </span><b><span data-contrast="auto">Balkrishna, A. (2011)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Heart rate variability changes during
                                                            high frequency yoga breathing and breath awareness.
                                                            Biopsychosocial Medicine, 5: 4.</span></i>
                                                </div>
                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3088536/" target="_blank"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3088536/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">RB Bhandari, </span><b><span data-contrast="auto">A Balkrishna</span></b><span data-contrast="auto">, S Datt </span><b><span data-contrast="auto">(2011)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Yogic Prescription for Corporate
                                                            Wellness and Excellence.&nbsp;</span></i>
                                                </div>
                                                <a href="https://www.davidpublisher.com/Public/uploads/Contribute/5514f97bae8b1.pdf" target="_blank"><span data-contrast="none">https://www.davidpublisher.com/Public/uploads/Contribute/5514f97bae8b1.pdf</span></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-15" aria-expanded="false">
                                    2010
                                </button>
                            </h2>
                            <div id="faq-content-15" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><span data-contrast="auto">Telles, S., Naveen, K.V.,</span><b><span data-contrast="auto"> Balkrishna, A.,</span></b><span data-contrast="auto"> and Kumar, S. </span><b><span data-contrast="auto">(2010)</span></b>
                                                <div><span data-contrast="auto"><em>Short term health impact of a yoga
                                                            and diet change program on obesity. Medical Science Monitor,
                                                            16(1):CR35-40.</em></span></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/20037492/" target="_blank" rel="noopener"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/20037492/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">R Bhandari</span><b><span data-contrast="auto">, B Acharya</span></b><span data-contrast="auto">, VK Katiyar </span><b><span data-contrast="auto">(2010)</span></b>
                                                <div><i><span data-contrast="auto">Corporate yoga and its
                                                            implications.&nbsp;</span></i></div>
                                                <a href="https://link.springer.com/chapter/10.1007/978-3-642-14515-5_75" target="_blank" rel="noopener"><span data-contrast="none">https://link.springer.com/chapter/10.1007/978-3-642-14515-5_75</span></a>
                                            </li>
                                            <li><b><span data-contrast="auto">B Acharya,</span></b><span data-contrast="auto"> AK Upadhyay, Ruchita T Upadhyay, and A Kumar
                                                </span><b><span data-contrast="auto">(2010)</span></b>
                                                <div><i><span data-contrast="auto">Effect of Pranayama (voluntary
                                                            regulated breathing) and Yogasana (yoga postures) on lipid
                                                            profile in normal healthy junior footballers</span></i>
                                                </div>
                                                <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2997235/" target="_blank" rel="noopener"><span data-contrast="none">https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2997235/</span></a>
                                            </li>

                                            <li><span data-contrast="auto">Telles, S., Naveen, K.V., and </span><b><span data-contrast="auto">Balkrishna, A. (2010)</span></b>
                                                <div><i><span data-contrast="auto">Meditation and attention: a comment
                                                            on a recent article. Perceptual and Motor Skills, 111(3):
                                                            918-920.</span></i></div>
                                                <a href="https://journals.sagepub.com/doi/10.2466/02.04.20.22.PMS.111.6.918-920" target="_blank" rel="noopener"><i><span data-contrast="none">https://journals.sagepub.com/doi/10.2466/02.04.20.22.PMS.111.6.918-920</span></i></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Singh, N., Joshi, M, and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2010)</span></b>
                                                <div><i><span data-contrast="auto">Post traumatic stress symptoms and
                                                            heart rate variability in Bihar flood survivors following
                                                            yoga: a randomized controlled study. Biomed Central
                                                            Psychiatry, 10:18.</span></i></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/20193089/" target="_blank" rel="noopener"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/20193089/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Naveen, V. K., and
                                                </span><b><span data-contrast="auto">Balkrishna, A. (2010)</span></b>
                                                <div><i><span data-contrast="auto">Serum leptin, cholesterol and blood
                                                            glucose levels in diabetics following a yoga and diet change
                                                            program. Medical Science Monitor, 16(3):LE4-5.</span></i>
                                                </div>
                                                <a href="https://www.researchgate.net/publication/296773578"><span data-contrast="none">https://www.researchgate.net/publication/296773578</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., and </span><b><span data-contrast="auto">Balkrishna, A. (2010)</span></b>
                                                <div><i><span data-contrast="auto">Yoga and diet change influence renal
                                                            functions in the obese. Medical Science Monitor,
                                                            16(10):LE15.</span></i></div>
                                                <a href="https://pubmed.ncbi.nlm.nih.gov/20885359/"><span data-="">https://pubmed.ncbi.nlm.nih.gov/20885359/</span></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-16" aria-expanded="false">
                                    2009
                                </button>
                            </h2>
                            <div id="faq-content-16" class="accordion-collapse collapse" data-bs-parent="#faqlist1" style="">
                                <div class="accordion-body">
                                    <div class="row">
                                        <ol>
                                            <li><span data-contrast="auto">AK Sharma, SS Gaurav, </span><b><span data-contrast="auto">A Balkrishna (2009)</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">A rapid and simple scheme for the
                                                            standardization of polyherbal drugs</span></i>
                                                </div>
                                                <a href="https://www.greenpharmacy.info/index.php/ijgp/article/view/69" target="_blank"><span data-contrast="none">https://www.greenpharmacy.info/index.php/ijgp/article/view/69</span></a>
                                            </li>
                                            <li><span data-contrast="auto">AK Sharma, SS Gaurav, </span><b><span data-contrast="auto">A Balkrishna (2009)</span></b>
                                                <div>
                                                    <span data-contrast="auto"><em>Detection of oxidation preventive
                                                            proteins in the practicner of Pranayama.</em></span>
                                                </div>

                                                <a href="https://www.researchgate.net/publication/38111504_" target="_blank"><span data-contrast="none">https://www.researchgate.net/publication/38111504_</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Gaur, V., and </span><b><span data-contrast="auto">Balkrishna, A. (2009).</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Effect of a yoga practice session and
                                                            a yoga theory session on state anxiety. Psychological
                                                            Reports, 109(3): 924-930.</span></i>
                                                </div>

                                                <a href="https://journals.sagepub.com/doi/10.2466/pms.109.3.924-930" target="_blank"><span data-contrast="none">https://journals.sagepub.com/doi/10.2466/pms.109.3.924-930</span></a>
                                            </li>
                                            &nbsp;
                                            <li><span data-contrast="auto">AK Sharma, SS Gaurav, </span><b><span data-contrast="auto">A Balkrishna (2009)</span></b>
                                                <div>
                                                    <span data-contrast="auto">Molecular Characterizition of Ashwagandha
                                                        (Withania somnifera).&nbsp;</span>
                                                </div>
                                                <a href="https://www.cabdirect.org/cabdirect/abstract/20113004860" target="_blank"><span data-contrast="none">https://www.cabdirect.org/cabdirect/abstract/20113004860</span></a>
                                            </li>

                                            <li><span data-contrast="auto">A Kumar, </span><b><span data-contrast="auto">A Balkrishna (2009)</span></b>
                                                <div>
                                                    <span data-contrast="auto"><em>To study the effect of the sequence
                                                            of seven pranayama by Swami Ramdev on gene expression in
                                                            leukaemia patients and rapid interpretation of gene
                                                            expression.&nbsp;</em>&nbsp;</span>
                                                </div>

                                                <a href="https://pubmed.ncbi.nlm.nih.gov/19861570/" target="_blank"><span data-contrast="none">https://pubmed.ncbi.nlm.nih.gov/19861570/</span></a>
                                            </li>
                                            <li><span data-contrast="auto">Telles, S., Naveen, K.V., and </span><b><span data-contrast="auto">Balkrishna, A. (2009).</span></b>
                                                <div>
                                                    <i><span data-contrast="auto">Use of Ayurveda in promoting dental
                                                            health and preventing dental caries. Indian Journal of
                                                            Dental Research, 20(2): 246.</span></i>
                                                </div>
                                                <a href="https://www.ijdr.in/article.asp?issn=0970-9290;year=2009;volume=20;issue=2;spage=246;epage=246;aulast=" target="_blank"><span data-contrast="none">https://www.ijdr.in/article.asp?issn=0970-9290;year=2009;volume=20;issue=2;spage=246;epage=246;aulast=</span></a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>
</body> -->
