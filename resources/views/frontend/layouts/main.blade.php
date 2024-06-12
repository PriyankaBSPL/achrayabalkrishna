<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> Acharya Balkrishna</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

    <link href="{{URL::asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Template Main CSS File -->
    <link href="{{URL::asset('frontend/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<!-- ======= Header ======= -->
<div class="top-header">
    <div class="container">
        <div class="top-headleft"><b><i class="fa fa-envelope"></i>
            </b><span><a href="mailto:info@patanjaliglobal.com">divyayoga@divyayoga.com</a>
                <i class="fa fa-phone"></i>
                <span><a href="tel:+91-6287842467">+91-1334-240008, 244107,246737</a></span></span></div>
        <div class="top-headrgt">
            <span><a href="https://www.facebook.com/AcharyBalkrishna/" target="_blank" class="facebook"><i
                        class="fa fa-facebook"></i></a>

                <a href="https://www.instagram.com/acharya_balkrishna/" target="_blank" class="instagram"><i
                        class="fa fa-instagram"></i></a>

                <a href="https://www.linkedin.com/in/acharyabalkrishna/" class="linkedin"><i class="fa fa-linkedin"></i>

                <a href="https://twitter.com/Ach_Balkrishna" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
                <a href="https://www.youtube.com/user/acharyabalkrisha" target="_blank" class="youtube"><i
                        class="fa fa-youtube"></i></a>
            </span>
        </div>
    </div>
</div>
<nav id="navbar" class="navbar sticky-top nav-scrolled">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{url('/')}}" class="logo d-flex align-items-center">

            <img src="{{URL::asset('frontend/assets/img/logo.png')}}" alt="" class="logo">
            <span>Acharya Balkrishna</span>
        </a>
        <ul>
    @foreach (getMenuData(0) as $menuItem)
        <li class="{{ $menuItem->subMenu && $menuItem->subMenu->count() > 0 ? 'dropdown' : '' }}">
            <a href="{{($menuItem->slug=='#')?url('#'): url('pages/'.$menuItem->slug) }}"><span>{{ $menuItem->title }}</span></a>
            @if($menuItem->subMenu && $menuItem->subMenu->count() > 0)
                <ul>
                    
                    @foreach (getMenuData($menuItem->id) as $child)
                        @if($menuItem->type == 'Publication')
                        <li> <a href="{{ url('publication/'.$child->slug.'/'.$child->id) }}">{{ $child->title }}</a></li>
                        @else
                        <li>  <a href="{{ ($child->slug=='#')?url('#'):url('pages/'.$child->slug) }}">{{ $child->title }}</a></li>
                        @endif

                    @endforeach
                </ul>

            @endif
        </li>
    @endforeach
</ul>

            </li>


        <i class="bi bi-list mobile-nav-toggle"></i>
    </div>
</nav><!-- .navbar -->


@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-12 footer-info">
                    <a href="index.php" class="logo d-flex align-items-center">
                        <img src="{{URL::asset('frontend/assets/img/logo.png')}}" alt="" class="logo">
                        <span>Acharya Balkrishna</span>
                    </a>
                    <p>Acharya Balkrishna, a known scholar of Ayurveda, Sanskrit and Vedas, has an ambitious dream of building a progressive nation. </p>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/AcharyBalkrishna/" class="facebook"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/acharyabalkrishna/" class="linkedin"><i
                                class="bi bi-linkedin"></i></a>
                        <a href="https://www.instagram.com/acharya_balkrishna/" class="instagram"><i
                                class="bi bi-instagram"></i></a>
                                <a href="https://twitter.com/Ach_Balkrishna" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6 footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a target="_blank" rel="noopener" href="https://www.patanjaliayurved.net/">Patanjali
                                Ayurveda</a></li>
                        <li><a target="_blank" rel="noopener" href="https://patanjali.res.in/" target="_blank">Patanjali
                                Research Institute</a></li>
                        <li><a target="_blank" rel="noopener" href="http://patanjaliresearchfoundation.com"
                                target="_blank" rel="noopener">Patanjali Research Foundation</a></li>
                        <li><a target="_blank" rel="noopener" href="https://patanjaliglobal.org/">Patanjali
                                Export</a></li>
                        <li><a target="_blank" rel="noopener" href="https://divyaprakashan.com/">Divya Prakashan</a>
                        </li>
                        <li><a target="_blank" rel="noopener" href="http://patanjaligramodhyognyas.com/">Patanjali
                                Gramodhyog Nyas</a></li>
                        <li><a target="_blank" rel="noopener" href="https://divyayoga.com/research/yoga-research/">Divya
                                Yoga</a></li>
                        <li><a target="_blank" rel="noopener" href="https://yagyadarshan.com/">Yagya Darshan</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-6 footer-links">
                    <h4>Educations</h4>
                    <ul>
                        <li><a target="_blank" rel="noopener" href="http://acharyakulam.org/">Acharyakulam Haridwar</a>
                        </li>
                        <li><a target="_blank" rel="noopener" href="https://acharyakulamranchi.com/">Acharyakulam
                                Ranchi</a></li>
                        <li><a target="_blank" rel="noopener"
                                href="https://acharyakulamkumarikata.com/">Acharyakulam Kumarikata</a></li>
                        <li><a target="_blank" rel="noopener"
                                href="https://acharyakulamchirang.com/">Acharyakulam Chirang
                            </a></li>
                        <li><a target="_blank" rel="noopener" href="https://acharyakulamseijosa.com/">Acharyakulam
                                Seijosa
                            </a></li>
                        <li><a target="_blank" rel="noopener" href="https://bsb.org.in/">Bhartiya Shiksha Board</a></li>
                        <li><a href="https://patanjaligurukulam.org.in/" target="_blank">Patanjali
                                Gurukulam</a></li>
                        <li><a target="_blank" rel="noopener" href="http://universityofpatanjali.com/">University of
                                Patanjali</a>
                        </li>
                        <li><a target="_blank" rel="noopener" href="https://pac.divyayoga.com/">
                                Patanjali Ayurved & College</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Get In Touch</h4>
                    <div class="d-flex">
                        <p>
                           <i class="bi bi-geo-alt"></i> Patanjali Yogpeeth, Maharshi Dayanand Gram,
                            Delhi-Haridwar National Highway,
                            Near Bahadrabad, Haridwar-249405
                            Uttarakhand, India<br /></p>
                    </div>
                    <p><i class="bi bi-telephone"></i> +91-1334-240008, 244107, 246737</p>
                    <p><i class="bi bi-envelope"></i> divyayoga@divyayoga.com
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                © 2024</strong> All Rights Reserved
            </div>
            <!-- <div class="credits">
         
        </div> -->
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{URL::asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{URL::asset('frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{URL::asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{URL::asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{URL::asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{URL::asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<!-- Template Main JS File -->
<script src="{{URL::asset('frontend/assets/js/main.js')}}"></script>