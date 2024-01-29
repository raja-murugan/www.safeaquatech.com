<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Water Purifier Sales and Service | Trusted Provider for Purifiers</title>
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favlogo.png') }}" />

    <meta name="description" content="Shop now to find the best water purifier for your needs and experience pure, safe, and great-tasting water every day!">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.safeaquatech.com/">
    <meta property="og:title" content="Your Health Matters: Prioritizing Wellness with Our Water Purifiers. ">
    <meta property="og:description" content="Shop now to find the best water purifier for your needs and experience pure, safe, and great-tasting water every day!">
    <meta property="og:image" content="https://www.safeaquatech.com/assets/images/banner/banner2.jpg">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome.min.css') }}" />
    <!-- Themify Icon -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/themify-icons.css') }}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.min.css') }}" />
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}" />
    <!-- FancyBox-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" />
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

        <!-- Google Tag Manager -->
            <script>
                (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })
                (window,document,'script','dataLayer','GTM-PKG884Q7');
            </script>
        <!-- End Google Tag Manager -->

    <style>
    @media screen and (max-width: 600px) 
    {
        div.hide 
        {
        display: none;
        }
    }
    @media only screen and (max-width: 600px)
    {
        [class="card"] 
        {
        width: 100%;
        }
    }
</style> 
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKG884Q7"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('assets/frontend/images/favlogo.png') }}" alt="perloader" />
        </div>
    </div>

    <!-- Header Start -->
    <header class="header">
        <div class="header-top">
            <div class="container-fluid">
                <div class="head-menu d-flex justify-content-center">
                    <div class="head-content">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+919344330043">+91 93443 30043</a>
                    </div>
                    <div class="head-content">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@safeaquatech.com">info@safeaquatech.com</a>
                    </div>
                    <div class="head-content">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">Mannarpuram, Tiruchirapalli, Tamil Nadu</a>
                    </div>
                    <div class="head-social-icon ml-auto">
                        <a href="https://www.facebook.com/safeaquatech" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/tv/CjK8In_satJ/?igshid=YmMyMTA2M2Y" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://youtube.com/@safeaquatechtrichy8145" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!--Navbar -->
        <nav class="navbar navbar-expand-lg top-menu">
            <div class="container-fluid">
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo" style="width: 200px;"/></a>
                </div>
                <div class="collapse main-nav navbar-collapse" id="navbarSupportedContent-333">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('service') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="header-btn">
                    <a href="https://api.whatsapp.com/send/?phone=%2B919344330043" target="_blank" class="button">Chat
                        On WhatsApp</a>
                </div>
                <div class="mobile-btn bttn">
                    <a href="#"><i class="fas fa-envelope-open-text"></i></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
                </button>
            </div>
        </nav>
    </header>
    <!-- Header End-->

<!-- Banner Start -->
<section class="banner-section">
    <div class="banner-bg">
        <div class="container two" style="max-width: 100%;">
            <div class="row">
                <div class="col-8 text-left pt-5">
                    <div class="banner-title hide pt-5 ml-3">
                        <h6 class="pt-3">WELCOME TO SAFE AQUA TECH</h6>
                        <h1>H2O at its <br> purified form</h1>
                        <p>
                        Embrace the Refreshing Difference. Elevate Your Hydration with Safe Aqua Tech's Premium Water purifier.<br> Experience Purity in Every Sip
                        </p>
                        <div class="banner-bttn bttn">
                            <a href="{{ route('about') }}" class="btn-1">Learn More</a>
                            <a href="{{ route('contact') }}" class="btn-2">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 card pt-3 pb-3" style="background-image: url(assets/frontend/images/banner/6.jpg);">
                    <h5 class="two mr-4">Your Gateway to Quality Water <span style ="color: #ffa922;">Providing Vital Details</span> for Your Purified Lifestyle.</h5>
                        <form action="homemail.php" method="post" autocomplete="off">
                            <div class="form">
                                <div class="row">
                                    <div class="col-9 pt-2 pl-5 ml-5">
                                        <input class="four" type="text" name="name" placeholder="Name *"required>
                                    </div>
                                    <div class="col-9 pl-5 ml-5 pt-3">
                                        <input class="four" type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-9 pl-5 ml-5 pt-3">
                                        <input class="four" type="text" name="phone" placeholder="Phone Number *"required>
                                    </div>
                                    <div class="col-9 pl-5 ml-5 pt-3">
                                        <input class="four" type="text" name="area" placeholder="Area">
                                    </div>
                                    <br>
                                    <div class="col-12 pl-5 text-center">
                                        <button class="order-bttn btn-2 button1" type="submit" >Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <h6 class="two pt-4">
                                Want to reach us <span style ="color: #ffa922;"> directly </span> through WhatsApp?
                            </h6>
                            <div class="col-12 text-center ml-3">
                                <button class="order-bttn">
                                    <span>
                                        <a href="https://api.whatsapp.com/send/?phone=%2B919344330043" target="_blank" class="text-white">
                                            Chat On WhatsApp
                                        </a>
                                    </span>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<!-- Support Section Start -->
<section class="support-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="support-title">
                    <div class="span">Why Safe Aqua Tech</div>
                    <h2>Empowering purity in each Ddrop</h2>
                    <h5>Nourish Your Body with the Essence of Pure Water</h5>
                    <p>
                    At Safe Aqua Tech, we recognize the essential role of clean and safe drinking water in your well-being. As a pioneering water purifier company, we are committed to delivering top-tier water purifying solutions that adhere to the strictest health and safety criteria.
                    </p>
                </div>
                <div class="support-bttn bttn">
                    <a href="{{ route('contact') }}">Contact Us<i class="ti-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="support-item">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="support-content text-left">
                                <div class="support-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #1086ff;
                                                    fill-rule: evenodd;
                                                }
                                            </style>
                                        </defs>
                                        <path
                                            id="https:_www.flaticon.com_free-icon_filter_417102_term_filter_page_3_position_84"
                                            data-name="https://www.flaticon.com/free-icon/filter_417102?term=filter&amp;page=3&amp;position=84"
                                            class="cls-1"
                                            d="M1035.23,1175.44l-7.16,7.16a0.978,0.978,0,0,0,0,1.38,1.019,1.019,0,0,0,.7.29,0.978,0.978,0,0,0,.69-0.29l7.16-7.15A0.983,0.983,0,0,0,1035.23,1175.44Zm3.5-2.11a0.99,0.99,0,0,0-1.39.01,0.96,0.96,0,0,0,0,1.38,0.966,0.966,0,0,0,1.38,0h0.01A0.99,0.99,0,0,0,1038.73,1173.33Zm5.81-16.58-0.01-.01a0.979,0.979,0,0,0-1.4,1.37l0.01,0.01h0a0.987,0.987,0,0,0,.7.3,1.012,1.012,0,0,0,.69-0.28A0.981,0.981,0,0,0,1044.54,1156.75Zm0.38,2.44a0.969,0.969,0,0,0-1.11.82,2.179,2.179,0,0,1-2.14,1.84,2.156,2.156,0,0,1-.36-4.28,0.978,0.978,0,1,0-.32-1.93,4.113,4.113,0,1,0,4.75,4.66A0.974,0.974,0,0,0,1044.92,1159.19Zm-9.98-7.34a6.267,6.267,0,0,0-5.25-1.78,0.979,0.979,0,1,0,.26,1.94,4.326,4.326,0,0,1,4.87,4.28,4.314,4.314,0,1,1-8.58-.65,0.976,0.976,0,1,0-1.93-.29A6.27,6.27,0,1,0,1034.94,1151.85Zm-7.47-.01a0.978,0.978,0,0,0-1.38,0l-0.02.01a0.985,0.985,0,0,0,.7,1.68,0.978,0.978,0,0,0,.69-0.29l0.01-.01A0.99,0.99,0,0,0,1027.47,1151.84Zm21.55,12.28h-22.73a5.49,5.49,0,0,0-10.8,0h-1.71a5.48,5.48,0,1,0-8.4,0h-2.4a0.982,0.982,0,0,0-.98.98v5.29h0a0.978,0.978,0,0,0,.29.69l18.03,18.03v7.92a1,1,0,0,0,.41.8,1.067,1.067,0,0,0,.57.18,0.866,0.866,0,0,0,.32-0.06l9.41-3.33a0.981,0.981,0,0,0,.65-0.92v-4.59l18.03-18.03a0.978,0.978,0,0,0,.29-0.69h0v-5.29A0.982,0.982,0,0,0,1049.02,1164.12Zm-28.13-2.55a3.479,3.479,0,0,1,2.49,1.04,3.394,3.394,0,0,1,.9,1.51h-6.78A3.546,3.546,0,0,1,1020.89,1161.57Zm-11.31-4.5a3.521,3.521,0,1,1-3.53,3.52A3.51,3.51,0,0,1,1009.58,1157.07Zm20.43,30.94a0.985,0.985,0,0,0-.29.69v4.3l-7.44,2.64v-6.94a0.985,0.985,0,0,0-.29-0.69l-16.65-16.64h41.32Zm18.03-18.6h-44.08v-3.33h44.08v3.33Z"
                                            transform="translate(-1002 -1150)" />
                                    </svg>
                                </div>
                                <div class="support-discription">
                                    <a href="#">Advanced Filtration Technology</a>
                                    <p>Cutting-edge tech for water purity. Our systems guarantee health-conscious hydration, sip after sip.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="support-content text-left">
                                <div class="support-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="51" viewBox="0 0 50 51">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #1086ff;
                                                    fill-rule: evenodd;
                                                }
                                            </style>
                                        </defs>
                                        <path
                                            id="https:_www.flaticon.com_free-icon_water-control_2639793_term_water_page_1_position_22"
                                            data-name="https://www.flaticon.com/free-icon/water-control_2639793?term=water&amp;page=1&amp;position=22"
                                            class="cls-1"
                                            d="M1349.7,1186.23h-0.4v-10.12a9.222,9.222,0,0,0-9.13-9.3h-8.33v-6.89a5.875,5.875,0,0,0,8.33-1.21,6.154,6.154,0,0,0-1.19-8.5,5.876,5.876,0,0,0-8.33,1.22,4.764,4.764,0,0,0-.5.81h-5.35a5.9,5.9,0,0,0-8.04-2.55,6.147,6.147,0,0,0-2.5,8.21,5.915,5.915,0,0,0,8.05,2.54,5.755,5.755,0,0,0,.8-0.52v6.89h-9.92a1.21,1.21,0,0,0,0,2.42h11.11a1.2,1.2,0,0,0,1.19-1.21V1157.9h3.97v10.12a1.2,1.2,0,0,0,1.19,1.21h9.52a6.834,6.834,0,0,1,6.75,6.88v10.12h-7.14v-6.07a3.615,3.615,0,0,0-3.58-3.64h-23.01a1.21,1.21,0,0,0,0,2.42h23.01a1.212,1.212,0,0,1,1.19,1.22v6.07H1337a1.215,1.215,0,0,0,0,2.43h12.7A1.215,1.215,0,0,0,1349.7,1186.23Zm-30.16-27.52a3.641,3.641,0,0,1,0-7.28,3.562,3.562,0,0,1,3.36,2.43,1.206,1.206,0,0,0,1.13.81h6.89a1.2,1.2,0,0,0,1.12-.81,3.555,3.555,0,0,1,4.56-2.22,3.654,3.654,0,0,1,2.18,4.64,3.554,3.554,0,0,1-6.74,0,1.2,1.2,0,0,0-1.12-.81h-6.89a1.206,1.206,0,0,0-1.13.81A3.562,3.562,0,0,1,1319.54,1158.71Zm24.63,31.09a1.165,1.165,0,0,0-1.64,0,21.437,21.437,0,0,0-1.69,1.87c-1.25,1.56-1.86,2.82-1.86,3.87a4.366,4.366,0,1,0,8.73,0c0-1.05-.6-2.31-1.85-3.87A23.174,23.174,0,0,0,1344.17,1189.8Zm-0.82,7.76a2.008,2.008,0,0,1-1.99-2.02c0-.6.94-1.95,1.99-3.12,1.05,1.17,1.98,2.52,1.98,3.12A2.006,2.006,0,0,1,1343.35,1197.56Zm3.17-38.85a1.215,1.215,0,0,0,0,2.43,3.607,3.607,0,0,1,3.57,3.64,1.2,1.2,0,1,0,2.39,0A6.031,6.031,0,0,0,1346.52,1158.71Zm0-4.85a1.21,1.21,0,0,0,0,2.42,8.441,8.441,0,0,1,8.34,8.5,1.19,1.19,0,1,0,2.38,0A10.829,10.829,0,0,0,1346.52,1153.86Zm0-4.86a1.215,1.215,0,0,0,0,2.43,13.245,13.245,0,0,1,13.1,13.35,1.19,1.19,0,1,0,2.38,0A15.648,15.648,0,0,0,1346.52,1149Z"
                                            transform="translate(-1312 -1149)" />
                                    </svg>
                                </div>
                                <div class="support-discription">
                                    <a href="#">Direct to Your Home</a>
                                    <p>Seamless doorstep delivery. Enjoy pure water convenience with our purifiers delivered right to you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="support-content text-left">
                                <div class="support-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="55" viewBox="0 0 45 55">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #1086ff;
                                                    fill-rule: evenodd;
                                                }
                                            </style>
                                        </defs>
                                        <path
                                            id="https:_www.flaticon.com_free-icon_drops_1691455_term_water_page_1_position_77"
                                            data-name="https://www.flaticon.com/free-icon/drops_1691455?term=water&amp;page=1&amp;position=77"
                                            class="cls-1"
                                            d="M1044.71,1493.1a1.07,1.07,0,0,0-2.14,0,6.442,6.442,0,0,1-6.43,6.45,1.075,1.075,0,0,0,0,2.15A8.593,8.593,0,0,0,1044.71,1493.1Zm-22.32,10.47c-0.56.86-5.53,8.46-5.53,11.66a6.434,6.434,0,1,0,12.85,0c0-3.2-4.97-10.8-5.53-11.66A1.074,1.074,0,0,0,1022.39,1503.57Zm5.18,11.66a4.3,4.3,0,1,1-8.57,0c0-1.65,2.35-5.97,4.28-9.08C1025.22,1509.26,1027.57,1513.58,1027.57,1515.23Zm-16.07-30.4a1.068,1.068,0,0,0-.88.46c-0.68.99-6.62,9.72-6.62,13.51a7.5,7.5,0,1,0,15,0c0-3.79-5.94-12.52-6.62-13.51A1.068,1.068,0,0,0,1011.5,1484.83Zm0,19.34a5.375,5.375,0,0,1-5.36-5.37c0-2.08,3-7.36,5.36-10.97,2.36,3.61,5.36,8.89,5.36,10.97A5.375,5.375,0,0,1,1011.5,1504.17Zm13.93-12.14a1.075,1.075,0,1,1-1.07-1.08A1.071,1.071,0,0,1,1025.43,1492.03Zm11.61-24.54a1.067,1.067,0,0,0-.9-0.49,1.093,1.093,0,0,0-.9.49c-0.31.49-7.59,11.96-10.63,20.05a1.07,1.07,0,0,0,2,.76c2.34-6.23,7.46-14.82,9.53-18.2,3.67,5.94,10.72,18.33,10.72,23a10.711,10.711,0,0,1-21.03,2.91,1.075,1.075,0,0,0-2.07.58,12.857,12.857,0,0,0,25.24-3.49C1049,1487.18,1040.1,1472.29,1037.04,1467.49Z"
                                            transform="translate(-1004 -1467)" />
                                    </svg>
                                </div>
                                <div class="support-discription">
                                    <a href="#">Enhanced Well-being</a>
                                    <p>Revitalize your health. Our purifiers nurture vitality, embracing a lifestyle of freshness and wellness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="support-content text-left">
                                <div class="support-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #1086ff;
                                                    fill-rule: evenodd;
                                                }
                                            </style>
                                        </defs>
                                        <path
                                            id="https:_www.flaticon.com_free-icon_support_2139015_term_support_page_3_position_79"
                                            data-name="https://www.flaticon.com/free-icon/support_2139015?term=support&amp;page=3&amp;position=79"
                                            class="cls-1"
                                            d="M1353.15,1489.64v-0.99a15.655,15.655,0,0,0-31.31,0v0.99a8.082,8.082,0,0,0,2.21,15.85,3.76,3.76,0,0,0,3.77-3.77v-8.62a3.76,3.76,0,0,0-3.45-3.75v-0.7a13.125,13.125,0,0,1,26.25,0v0.7a3.76,3.76,0,0,0-3.45,3.75v8.62a3.753,3.753,0,0,0,3.45,3.75,5.694,5.694,0,0,1-5.69,5.81h-2.75a3.472,3.472,0,0,0-3.22-2.19h-2.93a3.455,3.455,0,0,0,0,6.91h2.93a3.472,3.472,0,0,0,3.22-2.19h2.75a8.233,8.233,0,0,0,8.22-8.22v-0.42A8.077,8.077,0,0,0,1353.15,1489.64Zm-27.86,3.46v8.62a1.247,1.247,0,0,1-1.34,1.24,5.546,5.546,0,0,1,.12-11.09h0.02a1.217,1.217,0,0,1,1.2,1.23h0Zm13.67,20.37h-2.93a0.93,0.93,0,0,1,0-1.86h2.93A0.93,0.93,0,0,1,1338.96,1513.47Zm17.51-15.75a5.572,5.572,0,0,1-5.43,5.24,1.253,1.253,0,0,1-1.34-1.24v-8.62a1.217,1.217,0,0,1,1.2-1.23h0.03A5.545,5.545,0,0,1,1356.47,1497.72Zm-18.08,6.68,5.84-5.84a7.5,7.5,0,1,0-13.47,0l5.84,5.84a1.256,1.256,0,0,0,1.79,0h0Zm-5.84-10.63a2.131,2.131,0,0,1,3.01,0l1.04,1.04a1.256,1.256,0,0,0,1.79,0l1.05-1.04a2.121,2.121,0,0,1,3,3l-4.94,4.95-4.95-4.95a2.118,2.118,0,0,1,0-3h0Z"
                                            transform="translate(-1316 -1473)" />
                                    </svg>
                                </div>
                                <div class="support-discription">
                                    <a href="#">Continuous Support</a>
                                    <p>Reliable guidance whenever needed. Count on us for assistance in meeting your purified water requirements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Support Section End -->

<!-- Product Section Start -->
<section class="products-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="products-title">
                    <span>Our Services</span>
                    <h2>Water <span>Served</span> in Style</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel slider">
                    <div class="item">
                        <div class="product-item">
                            <img src="{{ asset('assets/frontend/images/service/1.png') }}" alt="product" />
                        </div>
                        <div class="price">
                            <div class="price-content">
                                <a href="javascript:void(0);">Domestic Water Purifier</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <img src="{{ asset('assets/frontend/images/service/2.png') }}" alt="product" />
                        </div>
                        <div class="price">
                            <div class="price-content">
                                <a href="javascript:void(0);">Commercial Water Purifier</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <img src="{{ asset('assets/frontend/images/service/3.png') }}" alt="product" />
                        </div>
                        <div class="price">
                            <div class="price-content">
                                <a href="javascript:void(0);">Industrial Water Purifier</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <img src="{{ asset('assets/frontend/images/service/4.png') }}" alt="product" />
                        </div>
                        <div class="price">
                            <div class="price-content">
                                <a href="javascript:void(0);">Water Softener</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <img src="{{ asset('assets/frontend/images/service/5.png') }}" alt="product" />
                        </div>
                        <div class="price">
                            <div class="price-content">
                                <a href="javascript:void(0);">Sand Filtration System</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <img src="{{ asset('assets/frontend/images/service/6.png') }}" alt="product" />
                        </div>
                        <div class="price">
                            <div class="price-content">
                                <a href="javascript:void(0);">Water Conditioner</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <img src="{{ asset('assets/frontend/images/service/7.png') }}" alt="product" />
                        </div>
                        <div class="price">
                            <div class="price-content">
                                <a href="javascript:void(0);">STP Plant</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item">
                            <img src="{{ asset('assets/frontend/images/service/8.png') }}" alt="product" />
                        </div>
                        <div class="price">
                            <div class="price-content">
                                <a href="javascript:void(0);">ETP Plant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- About Section Start -->
<section class="about-section">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-12">
                <div class="about-pic">
                    <img src="{{ asset('assets/frontend/images/about/1.jpg') }}" alt="About" class="w-100" />
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="about-title">
                    <div class="span">About Us</div>
                    <h2>
                    Empowering Well-being through Pure Water
                    </h2>
                    <p>
                    Welcome to Safe Aqua Tech, where we open the door to a realm where purity, safety, and excellence unite to provide you with top-notch water purifying solutions. With a legacy spanning more than 14+ years, we stand as pioneers in the water purifier industry, shaping new benchmarks for quality and innovation.
                    </p>
                </div>
                <div class="about-item">
                    <div class="about-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="55" viewBox="0 0 45 55">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #1086ff;
                                        fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <path id="https:_www.flaticon.com_free-icon_drops_1691455_term_water_page_1_position_78"
                                data-name="https://www.flaticon.com/free-icon/drops_1691455?term=water&amp;page=1&amp;position=78"
                                class="cls-1"
                                d="M1044.71,1493.1a1.07,1.07,0,0,0-2.14,0,6.442,6.442,0,0,1-6.43,6.45,1.075,1.075,0,0,0,0,2.15A8.593,8.593,0,0,0,1044.71,1493.1Zm-22.32,10.47c-0.56.86-5.53,8.46-5.53,11.66a6.434,6.434,0,1,0,12.85,0c0-3.2-4.97-10.8-5.53-11.66A1.074,1.074,0,0,0,1022.39,1503.57Zm5.18,11.66a4.3,4.3,0,1,1-8.57,0c0-1.65,2.35-5.97,4.28-9.08C1025.22,1509.26,1027.57,1513.58,1027.57,1515.23Zm-16.07-30.4a1.068,1.068,0,0,0-.88.46c-0.68.99-6.62,9.72-6.62,13.51a7.5,7.5,0,1,0,15,0c0-3.79-5.94-12.52-6.62-13.51A1.068,1.068,0,0,0,1011.5,1484.83Zm0,19.34a5.375,5.375,0,0,1-5.36-5.37c0-2.08,3-7.36,5.36-10.97,2.36,3.61,5.36,8.89,5.36,10.97A5.375,5.375,0,0,1,1011.5,1504.17Zm13.93-12.14a1.075,1.075,0,1,1-1.07-1.08A1.071,1.071,0,0,1,1025.43,1492.03Zm11.61-24.54a1.067,1.067,0,0,0-.9-0.49,1.093,1.093,0,0,0-.9.49c-0.31.49-7.59,11.96-10.63,20.05a1.07,1.07,0,0,0,2,.76c2.34-6.23,7.46-14.82,9.53-18.2,3.67,5.94,10.72,18.33,10.72,23a10.711,10.711,0,0,1-21.03,2.91,1.075,1.075,0,0,0-2.07.58,12.857,12.857,0,0,0,25.24-3.49C1049,1487.18,1040.1,1472.29,1037.04,1467.49Z"
                                transform="translate(-1004 -1467)" />
                        </svg>
                    </div>
                    <div class="about-content">
                        <a href="#">Empower a Healthier Lifestyle</a>
                        <p>
                        With a sense of pride and thankfulness, we've added to your health. Our journey presses on, fueled by the belief in making clean water universally accessible. Join hands with us, share in our mission, and foster a healthier future – one purified drop at a time.
                        </p>
                    </div>
                </div>
                <div class="about-item">
                    <div class="about-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="51" viewBox="0 0 50 51">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #1086ff;
                                        fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <path
                                id="https:_www.flaticon.com_free-icon_water-control_2639793_term_water_page_1_position_21"
                                data-name="https://www.flaticon.com/free-icon/water-control_2639793?term=water&amp;page=1&amp;position=21"
                                class="cls-1"
                                d="M1349.7,1186.23h-0.4v-10.12a9.222,9.222,0,0,0-9.13-9.3h-8.33v-6.89a5.875,5.875,0,0,0,8.33-1.21,6.154,6.154,0,0,0-1.19-8.5,5.876,5.876,0,0,0-8.33,1.22,4.764,4.764,0,0,0-.5.81h-5.35a5.9,5.9,0,0,0-8.04-2.55,6.147,6.147,0,0,0-2.5,8.21,5.915,5.915,0,0,0,8.05,2.54,5.755,5.755,0,0,0,.8-0.52v6.89h-9.92a1.21,1.21,0,0,0,0,2.42h11.11a1.2,1.2,0,0,0,1.19-1.21V1157.9h3.97v10.12a1.2,1.2,0,0,0,1.19,1.21h9.52a6.834,6.834,0,0,1,6.75,6.88v10.12h-7.14v-6.07a3.615,3.615,0,0,0-3.58-3.64h-23.01a1.21,1.21,0,0,0,0,2.42h23.01a1.212,1.212,0,0,1,1.19,1.22v6.07H1337a1.215,1.215,0,0,0,0,2.43h12.7A1.215,1.215,0,0,0,1349.7,1186.23Zm-30.16-27.52a3.641,3.641,0,0,1,0-7.28,3.562,3.562,0,0,1,3.36,2.43,1.206,1.206,0,0,0,1.13.81h6.89a1.2,1.2,0,0,0,1.12-.81,3.555,3.555,0,0,1,4.56-2.22,3.654,3.654,0,0,1,2.18,4.64,3.554,3.554,0,0,1-6.74,0,1.2,1.2,0,0,0-1.12-.81h-6.89a1.206,1.206,0,0,0-1.13.81A3.562,3.562,0,0,1,1319.54,1158.71Zm24.63,31.09a1.165,1.165,0,0,0-1.64,0,21.437,21.437,0,0,0-1.69,1.87c-1.25,1.56-1.86,2.82-1.86,3.87a4.366,4.366,0,1,0,8.73,0c0-1.05-.6-2.31-1.85-3.87A23.174,23.174,0,0,0,1344.17,1189.8Zm-0.82,7.76a2.008,2.008,0,0,1-1.99-2.02c0-.6.94-1.95,1.99-3.12,1.05,1.17,1.98,2.52,1.98,3.12A2.006,2.006,0,0,1,1343.35,1197.56Zm3.17-38.85a1.215,1.215,0,0,0,0,2.43,3.607,3.607,0,0,1,3.57,3.64,1.2,1.2,0,1,0,2.39,0A6.031,6.031,0,0,0,1346.52,1158.71Zm0-4.85a1.21,1.21,0,0,0,0,2.42,8.441,8.441,0,0,1,8.34,8.5,1.19,1.19,0,1,0,2.38,0A10.829,10.829,0,0,0,1346.52,1153.86Zm0-4.86a1.215,1.215,0,0,0,0,2.43,13.245,13.245,0,0,1,13.1,13.35,1.19,1.19,0,1,0,2.38,0A15.648,15.648,0,0,0,1346.52,1149Z"
                                transform="translate(-1312 -1149)" />
                        </svg>
                    </div>
                    <div class="about-content">
                        <a href="#">Witness the Transformation</a>
                        <p>
                        Experience the impact of over 8 years of dedication, expertise, and passion. Embrace water purification excellence through Safe Aqua Tech and embrace a life that's healthier and happier. Welcome to a domain where water becomes extraordinary, elevating your well-being.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Company Section Start -->
<section class="company-section">
    <div class="company-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="company-content">
                        <div class="company-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="46" viewBox="0 0 41 46">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #ffa922;
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <path
                                    id="https:_www.flaticon.com_free-icon_custody_1865671_term_safe_page_1_position_62"
                                    data-name="https://www.flaticon.com/free-icon/custody_1865671?term=safe&amp;page=1&amp;position=62"
                                    class="cls-1"
                                    d="M474.535,3849.28a0.935,0.935,0,0,0-1.289-.1,5.442,5.442,0,0,0-1.925,3.53l-2.791-3.18v-4.82a5.574,5.574,0,0,0-5.621-5.52,0.906,0.906,0,0,0-.916.9v11.4a0.9,0.9,0,0,0,.1.42l7.372,13.88v4.32a0.912,0.912,0,0,0,.915.9h9.258a0.912,0.912,0,0,0,.915-0.9v-12.02a5.1,5.1,0,0,0-1.272-3.37Zm4.191,19.93H471.3v-3.64a0.854,0.854,0,0,0-.1-0.41l-7.372-13.89V3841.1a3.74,3.74,0,0,1,2.875,3.61v5.16a0.919,0.919,0,0,0,.223.59l7.128,8.1,0.032,0.03a0.928,0.928,0,0,0,1.291.1,0.889,0.889,0,0,0,.094-1.27l-1.44-1.64a3.638,3.638,0,0,1-.216-4.56l4.084,4.67a3.33,3.33,0,0,1,.831,2.2v11.12h0Zm19.351-18.75a0.924,0.924,0,0,0,.223-0.59v-4.89a3.86,3.86,0,0,1,2.875-3.89v10.4a0.916,0.916,0,0,0,1.831,0v-11.4a0.906,0.906,0,0,0-.916-0.9,5.5,5.5,0,0,0-4.057,1.72,5.9,5.9,0,0,0-1.564,4.07v4.55l-2.791,3.17a5.456,5.456,0,0,0-1.925-3.52,0.935,0.935,0,0,0-1.289.1l-4.749,5.44a5.094,5.094,0,0,0-1.273,3.37v12.02a0.912,0.912,0,0,0,.915.9h9.258a0.912,0.912,0,0,0,.915-0.9v-4.32l3.617-6.81a0.888,0.888,0,0,0-.389-1.21,0.923,0.923,0,0,0-1.235.38l-3.72,7.01a0.855,0.855,0,0,0-.1.41v3.64h-7.426v-11.12a3.33,3.33,0,0,1,.831-2.2l4.083-4.67a3.633,3.633,0,0,1-.083,4.4l-1.748,1.99a0.891,0.891,0,0,0,.093,1.27,0.935,0.935,0,0,0,1.29-.09Zm-12.218-1.17v-3.45h2.363a0.906,0.906,0,0,0,.687-0.31,0.874,0.874,0,0,0,.221-0.7l-1.029-7.9s0-.01,0-0.01c-0.021-.15-0.049-0.29-0.082-0.43a6.214,6.214,0,0,1,2.161,3.72l0.258,1.45a0.912,0.912,0,0,0,.9.75,0.865,0.865,0,0,0,.158-0.02,0.9,0.9,0,0,0,.745-1.04l-0.257-1.45a8.072,8.072,0,0,0-4.205-5.74l-2.488-1.33a4.392,4.392,0,0,0,1.624-3.4,4.518,4.518,0,0,0-9.035,0,4.395,4.395,0,0,0,1.624,3.4l-2.488,1.33a8.075,8.075,0,0,0-4.2,5.74l-0.257,1.46a0.893,0.893,0,0,0,.745,1.03,0.865,0.865,0,0,0,.158.02,0.913,0.913,0,0,0,.9-0.75l0.257-1.45a6.214,6.214,0,0,1,2.161-3.72c-0.032.14-.06,0.28-0.082,0.43a0.036,0.036,0,0,1,0,.01l-1.029,7.9a0.874,0.874,0,0,0,.221.7,0.906,0.906,0,0,0,.687.31h2.364v3.45a0.916,0.916,0,0,0,1.831,0v-3.45h3.264v3.45a0.916,0.916,0,0,0,1.831,0h0Zm-3.463-22.5a2.64,2.64,0,1,1-2.687,2.64,2.664,2.664,0,0,1,2.687-2.64h0Zm-3.89,10.38a3.941,3.941,0,0,1,7.78,0l0.9,6.87h-9.573Zm22.5,17.64a0.925,0.925,0,0,0-1.194-.48,0.891,0.891,0,0,0-.5,1.17,0.94,0.94,0,0,0,1.195.49A0.909,0.909,0,0,0,501.005,3854.81Z"
                                    transform="translate(-462 -3825)" />
                            </svg>
                        </div>
                        <h4>150+ Clients</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="company-content">
                        <div class="company-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #ffa922;
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <path
                                    id="https:_www.flaticon.com_free-icon_water-bottle_883378_term_water_page_1_position_65"
                                    data-name="https://www.flaticon.com/free-icon/water-bottle_883378?term=water&amp;page=1&amp;position=65"
                                    class="cls-1"
                                    d="M811.036,3844.56a0.9,0.9,0,1,0,0,1.27A0.9,0.9,0,0,0,811.036,3844.56Zm11.159-13.7-5.083-5.09a2.7,2.7,0,0,0-3.811,0l-1.63,1.63a2.7,2.7,0,0,0-.723,2.51l-7.368,1.3a8.087,8.087,0,0,0-4.312,2.24l-1.575,1.58a4.489,4.489,0,0,1-5.082,5.08,4.495,4.495,0,0,1-5.083,5.09,4.491,4.491,0,0,1-5.083,5.08l-3.62,3.62a6.3,6.3,0,0,0,0,8.9l6.354,6.35a6.3,6.3,0,0,0,8.895,0l3.619-3.62a4.49,4.49,0,0,1,5.083-5.08,4.49,4.49,0,0,1,5.083-5.09,4.489,4.489,0,0,1,5.083-5.08l1.574-1.57a8.061,8.061,0,0,0,2.246-4.32l1.3-7.37a2.687,2.687,0,0,0,2.5-.72l1.63-1.63A2.691,2.691,0,0,0,822.2,3830.86Zm-25.772,33.4-3.62,3.62a4.5,4.5,0,0,1-6.354,0l-6.353-6.35a4.507,4.507,0,0,1,0-6.36l3.62-3.62a2.7,2.7,0,0,1,3.812,0l8.895,8.9A2.7,2.7,0,0,1,796.423,3864.26Zm5.082-5.08a2.7,2.7,0,0,1-3.812,0l-8.894-8.9a2.694,2.694,0,0,1,3.811-3.81h0l8.894,8.89h0A2.708,2.708,0,0,1,801.505,3859.18Zm5.083-5.09a2.682,2.682,0,0,1-3.812,0l-8.895-8.89a2.7,2.7,0,0,1,3.812-3.82l8.895,8.9A2.7,2.7,0,0,1,806.588,3854.09Zm8.4-10.01a6.218,6.218,0,0,1-1.747,3.35l-1.574,1.58a2.7,2.7,0,0,1-3.812,0l-8.895-8.9a2.7,2.7,0,0,1,0-3.81l1.576-1.57a6.2,6.2,0,0,1,3.353-1.75l8.11-1.43,4.421,4.42Zm5.933-10.68-1.63,1.63a0.9,0.9,0,0,1-1.271,0l-5.082-5.08a0.909,0.909,0,0,1,0-1.28l1.63-1.63a0.9,0.9,0,0,1,1.27,0l5.083,5.09A0.9,0.9,0,0,1,820.925,3833.4Zm1.473,25.62-4-7.84a0.9,0.9,0,0,0-1.6,0l-4,7.84A5.392,5.392,0,1,0,822.4,3859.02Zm-4.8,6.04a3.6,3.6,0,0,1-3.2-5.22l3.2-6.28,3.2,6.28A3.6,3.6,0,0,1,817.594,3865.06Zm-9.1-23.04-4.338-4.34a0.9,0.9,0,1,0-1.271,1.27l4.338,4.34A0.9,0.9,0,0,0,808.494,3842.02Z"
                                    transform="translate(-777 -3825)" />
                            </svg>
                        </div>
                        <h4>19+ Years</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="company-content">
                        <div class="company-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="48.97" viewBox="0 0 45 48.97">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #ffa922;
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <path id="_7.svg" data-name="7.svg" class="cls-1"
                                    d="M1140.86,3864.44l-5.91-10.09a4.782,4.782,0,0,0,1.22-3.19,2.867,2.867,0,0,1,.87-2.06,4.788,4.788,0,0,0,1.06-5.26,2.766,2.766,0,0,1,0-2.22,4.792,4.792,0,0,0-1.06-5.26,2.867,2.867,0,0,1-.87-2.06,4.791,4.791,0,0,0-3.02-4.45,2.931,2.931,0,0,1-1.59-1.58,4.875,4.875,0,0,0-4.52-2.98,2.918,2.918,0,0,1-2.08-.85,4.935,4.935,0,0,0-5.33-1.04,3.044,3.044,0,0,1-2.26,0,4.935,4.935,0,0,0-5.33,1.04,2.935,2.935,0,0,1-2.08.85,4.875,4.875,0,0,0-4.52,2.98,2.917,2.917,0,0,1-1.6,1.58,4.807,4.807,0,0,0-3.01,4.45,2.867,2.867,0,0,1-.87,2.06,4.774,4.774,0,0,0-1.06,5.26,2.875,2.875,0,0,1,0,2.23,4.758,4.758,0,0,0,1.06,5.25,2.867,2.867,0,0,1,.87,2.06,4.773,4.773,0,0,0,1.21,3.19l-5.9,10.09a0.936,0.936,0,0,0,.07,1.06,0.971,0.971,0,0,0,1.02.34l7.54-1.99,2.02,7.44a0.966,0.966,0,0,0,.8.7c0.05,0,.09.01,0.13,0.01a0.969,0.969,0,0,0,.84-0.48l5.45-9.31a4.924,4.924,0,0,0,3.36-.14,2.95,2.95,0,0,1,2.26,0,4.985,4.985,0,0,0,3.36.14l5.45,9.31a0.958,0.958,0,0,0,.84.48c0.04,0,.08-0.01.12-0.01a0.966,0.966,0,0,0,.81-0.7l2.02-7.44,7.54,1.99a0.971,0.971,0,0,0,1.02-.34,0.936,0.936,0,0,0,.07-1.06h0Zm-32.81,4.12-1.66-6.13a1,1,0,0,0-.45-0.58,0.959,0.959,0,0,0-.74-0.09l-6.21,1.64,4.61-7.89c0.08,0.04.16,0.07,0.24,0.11a2.869,2.869,0,0,1,1.6,1.57,4.875,4.875,0,0,0,4.52,2.98,2.935,2.935,0,0,1,2.08.85,3.329,3.329,0,0,0,.28.25Zm12.32-8.26a4.941,4.941,0,0,0-3.74,0,2.992,2.992,0,0,1-3.22-.63,4.88,4.88,0,0,0-3.45-1.41,2.953,2.953,0,0,1-2.73-1.8,4.826,4.826,0,0,0-2.64-2.61,2.905,2.905,0,0,1-1.83-2.69,4.725,4.725,0,0,0-1.43-3.41,2.882,2.882,0,0,1-.64-3.17,4.726,4.726,0,0,0,0-3.69,2.894,2.894,0,0,1,.64-3.18,4.725,4.725,0,0,0,1.43-3.41,2.915,2.915,0,0,1,1.83-2.69,4.826,4.826,0,0,0,2.64-2.61,2.944,2.944,0,0,1,2.73-1.79,4.89,4.89,0,0,0,3.45-1.42,3,3,0,0,1,3.22-.63,4.85,4.85,0,0,0,3.74,0,2.972,2.972,0,0,1,3.21.63,4.931,4.931,0,0,0,3.46,1.42,2.944,2.944,0,0,1,2.73,1.79,4.826,4.826,0,0,0,2.64,2.61,2.906,2.906,0,0,1,1.82,2.69,4.735,4.735,0,0,0,1.44,3.41,2.891,2.891,0,0,1,.63,3.18,4.815,4.815,0,0,0,0,3.69,2.878,2.878,0,0,1-.63,3.17,4.735,4.735,0,0,0-1.44,3.41,2.9,2.9,0,0,1-1.82,2.69,4.826,4.826,0,0,0-2.64,2.61,2.953,2.953,0,0,1-2.73,1.8,4.921,4.921,0,0,0-3.46,1.41A2.972,2.972,0,0,1,1120.37,3860.3Zm11.43,1.46a0.954,0.954,0,0,0-.74.09,1,1,0,0,0-.45.58l-1.66,6.13-4.27-7.29c0.09-.08.19-0.16,0.28-0.25a2.918,2.918,0,0,1,2.08-.85,4.875,4.875,0,0,0,4.52-2.98,2.882,2.882,0,0,1,1.59-1.57c0.09-.04.17-0.07,0.25-0.11l4.61,7.89Zm0.44-19.03a13.6,13.6,0,0,0-9.12-12.77,0.972,0.972,0,0,0-1.24.58,0.955,0.955,0,0,0,.59,1.22,11.686,11.686,0,0,1,7.83,10.97,11.484,11.484,0,0,1-2.51,7.17,5.3,5.3,0,0,0-5.26-4.52h-0.38a4.317,4.317,0,0,0,.77-2.45v-1.24a4.42,4.42,0,0,0-8.84,0v1.24a4.309,4.309,0,0,0,.76,2.45h-0.37a5.291,5.291,0,0,0-5.26,4.52,11.484,11.484,0,0,1-2.51-7.17,11.673,11.673,0,0,1,7.83-10.97,0.95,0.95,0,0,0,.58-1.22,0.968,0.968,0,0,0-1.24-.58,13.6,13.6,0,1,0,18.37,12.77h0Zm-16.22.2v-1.24a2.48,2.48,0,0,1,4.96,0v1.24a2.48,2.48,0,0,1-4.96,0h0Zm-4.92,8.86v-1.17a3.35,3.35,0,0,1,3.37-3.33h8.06a3.35,3.35,0,0,1,3.37,3.33v1.17a11.866,11.866,0,0,1-14.8,0h0Zm7.4-20.7a1.015,1.015,0,0,0,.68-0.28,0.942,0.942,0,0,0,0-1.36,0.978,0.978,0,0,0-1.37,0,0.966,0.966,0,0,0,0,1.36A1.02,1.02,0,0,0,1118.5,3831.09Z"
                                    transform="translate(-1096 -3823.03)" />
                            </svg>
                        </div>
                        <h4>Certified Company</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="company-content">
                        <div class="company-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #ffa922;
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <path id="_8.svg" data-name="8.svg" class="cls-1"
                                    d="M1443.85,3849.38l-6.86,6.86a0.935,0.935,0,0,0,.66,1.6,0.971,0.971,0,0,0,.67-0.27l6.86-6.86a0.954,0.954,0,0,0,0-1.33A0.936,0.936,0,0,0,1443.85,3849.38Zm3.35-2.02a0.957,0.957,0,0,0-1.34.01,0.94,0.94,0,0,0,.67,1.6,0.9,0.9,0,0,0,.66-0.28h0.01A0.945,0.945,0,0,0,1447.2,3847.36Zm5.57-15.89-0.01-.01a0.937,0.937,0,0,0-1.34,1.31l0.01,0.01h0a0.933,0.933,0,0,0,.67.29A0.94,0.94,0,0,0,1452.77,3831.47Zm0.36,2.34a0.937,0.937,0,0,0-1.07.79,2.061,2.061,0,0,1-4.1-.31,2.044,2.044,0,0,1,1.71-2.03,0.938,0.938,0,0,0-.31-1.85,3.938,3.938,0,1,0,4.56,4.46A0.93,0.93,0,0,0,1453.13,3833.81Zm-9.56-7.03a5.978,5.978,0,0,0-5.03-1.71,0.931,0.931,0,0,0-.81,1.05,0.942,0.942,0,0,0,1.05.81,4.122,4.122,0,1,1-3.55,3.48,0.936,0.936,0,1,0-1.85-.28,6.035,6.035,0,0,0,1.69,5.14A6.007,6.007,0,1,0,1443.57,3826.78Zm-7.16-.01a0.945,0.945,0,0,0-1.33-.01l-0.01.01a0.936,0.936,0,0,0,0,1.33,0.9,0.9,0,0,0,.66.28,0.971,0.971,0,0,0,.67-0.27l0.01-.02A0.942,0.942,0,0,0,1436.41,3826.77Zm20.65,11.76h-21.78a5.26,5.26,0,0,0-10.35,0h-1.64a5.254,5.254,0,0,0-4.02-8.63,5.264,5.264,0,0,0-5.26,5.25,5.188,5.188,0,0,0,1.23,3.38h-2.3a0.939,0.939,0,0,0-.94.94v5.07h0a0.975,0.975,0,0,0,.27.66l17.28,17.28v7.59a0.925,0.925,0,0,0,.4.76,0.9,0.9,0,0,0,.54.18,0.866,0.866,0,0,0,.32-0.06l9.01-3.19a0.939,0.939,0,0,0,.62-0.88v-4.4l17.28-17.28a0.941,0.941,0,0,0,.28-0.66h0v-5.07A0.939,0.939,0,0,0,1457.06,3838.53Zm-26.96-2.44a3.342,3.342,0,0,1,2.39.99,3.42,3.42,0,0,1,.86,1.45h-6.49A3.375,3.375,0,0,1,1430.1,3836.09Zm-10.84-4.32a3.38,3.38,0,0,1,2.39,5.77,3.375,3.375,0,0,1-5.76-2.39A3.38,3.38,0,0,1,1419.26,3831.77Zm19.58,29.66a0.938,0.938,0,0,0-.27.66v4.12l-7.14,2.53v-6.65a0.938,0.938,0,0,0-.27-0.66l-15.95-15.95h39.58Zm17.28-17.83h-42.24v-3.19h42.24v3.19Z"
                                    transform="translate(-1412 -3825)" />
                            </svg>
                        </div>
                        <h4>100+ Products</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Company Section End -->

<!-- Work Section Start -->
<section class="work-section" style="margin-top: 80px;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-12">
                <div class="work-title">
                    <div class="span">How we work</div>
                    <h2>
                    Crafting Pure Solutions <br />
                    Our Method in Motion
                    </h2>
                </div>
                <div class="work-item">
                    <div class="work-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="42" viewBox="0 0 29 42">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #1086ff;
                                        fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <path id="_9.svg" data-name="9.svg" class="cls-1"
                                d="M438.512,5998.35h-12.02a1.369,1.369,0,0,1-1.377-1.36,11.335,11.335,0,0,0-3.171-7.83,14.169,14.169,0,0,1,.264-19.88,14.509,14.509,0,0,1,10.265-4.29H432.5a14.458,14.458,0,0,1,10.225,4.18,14.227,14.227,0,0,1,.3,20.03,11.192,11.192,0,0,0-3.137,7.79A1.37,1.37,0,0,1,438.512,5998.35Zm-10.71-2.72h9.4a13.9,13.9,0,0,1,3.824-8.3,11.534,11.534,0,0,0-.243-16.24,11.729,11.729,0,0,0-8.279-3.38h-0.023a11.672,11.672,0,0,0-8.307,3.48,11.472,11.472,0,0,0-.22,16.11A14.079,14.079,0,0,1,427.8,5995.63Zm10.53,7.04h-11.66a1.355,1.355,0,1,1,0-2.71h11.66A1.355,1.355,0,1,1,438.332,6002.67Zm0,4.33h-11.66a1.36,1.36,0,1,1,0-2.72h11.66A1.36,1.36,0,1,1,438.332,6007Z"
                                transform="translate(-418 -5965)" />
                        </svg>
                    </div>
                    <div class="work-content">
                        <a href="#">Cutting-Edge Technology</a>
                        <p>
                        Elevate water purity with the latest innovations, setting new benchmarks for pristine water solutions.
                        </p>
                    </div>
                </div>
                <div class="work-item">
                    <div class="work-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="31.593" height="45" viewBox="0 0 31.593 45">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #1086ff;
                                        fill-rule: evenodd;
                                    }
                                </style>
                            </defs>
                            <path id="_10.svg" data-name="10.svg" class="cls-1"
                                d="M421,6154.85a1.324,1.324,0,0,0,1.057-1.53,6.546,6.546,0,1,1,12.863-.01,1.324,1.324,0,0,0,1.061,1.52,1.3,1.3,0,0,0,1.495-1.08,9.147,9.147,0,1,0-17.974.02A1.3,1.3,0,0,0,421,6154.85Zm21.283,9.21a3.863,3.863,0,0,0-5.186-1.76,3.859,3.859,0,0,0-4.739-1.94v-8.08a3.989,3.989,0,0,0-3.792-4.01,3.932,3.932,0,0,0-4.006,3.96v20.3l-1.523-1.62a3.9,3.9,0,0,0-5.457-.24,4,4,0,0,0-.211,5.66l8.753,9.49a6.442,6.442,0,0,0,4.73,2.09H441.41a6.547,6.547,0,0,0,6.482-6.59v-13.71A3.9,3.9,0,0,0,442.284,6164.06Zm3.015,17.26a3.923,3.923,0,0,1-3.889,3.95H430.853a3.89,3.89,0,0,1-2.838-1.25c-0.031-.03-8.734-9.47-8.765-9.5a1.333,1.333,0,0,1,.069-1.89,1.314,1.314,0,0,1,1.843.1l3.757,4a1.294,1.294,0,0,0,2.234-.91v-23.59a1.315,1.315,0,0,1,1.344-1.32,1.354,1.354,0,0,1,1.269,1.37c0,14.51-.025,7.93-0.025,15.77a1.309,1.309,0,1,0,2.618,0v-4.21a1.294,1.294,0,0,1,2.568.25v3.96a1.3,1.3,0,1,0,2.593,0v-2.2a1.3,1.3,0,1,1,2.593,0v2.2a1.3,1.3,0,1,0,2.593,0v-0.44a1.3,1.3,0,1,1,2.593,0v13.71Z"
                                transform="translate(-416.313 -6142.91)" />
                        </svg>
                    </div>
                    <div class="work-content">
                        <a href="#">Purification Journey</a>
                        <p>
                        By meticulously filtering, we eliminate impurities, assuring each sip meets the highest safety standards.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="workink-pic round">
                    <div class="fancy-box">
                        <img src="{{ asset('assets/frontend/images/2.png') }}" alt="working" />
                        <figure class="video-box round-os">
                            <a data-fancybox data-width="640" data-height="360" class="video-btn"
                                href="https://youtu.be/1_wPYgXXRns"><i class="fas fa-play"></i></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Work Section End -->

<!-- Testimonial Section Start -->
<section class="testimonial-section">
    <div class="testimonial-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-title">
                        <span>Testimonials</span>
                        <h2>Hear What Our <span>Customer</span> Says</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel slider-2">
                        <div class="item">
                            <div class="testimonial-slider">
                                <div class="testimonial-pic d-flex">
                                    <img src="{{ asset('assets/frontend/img/testimonials/1.png') }}" alt="" />
                                    <a href="#">Happy Customer</a>
                                    <i class="ti-quote-right"></i>
                                </div>
                                <p>
                                Water tastes incredible! Safe Aqua Tech is a game-changer. No more strange taste. One satisfied customer!
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-slider">
                                <div class="testimonial-pic d-flex">
                                    <img src="{{ asset('assets/frontend/img/testimonials/2.png') }}" alt="" />
                                    <a href="#">Happy Customer</a>
                                    <i class="ti-quote-right"></i>
                                </div>
                                <p>
                                Never had it this easy. Safe Aqua Tech's purifier delivery simplifies life. Water's a breeze.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-slider">
                                <div class="testimonial-pic d-flex">
                                    <img src="{{ asset('assets/frontend/img/testimonials/3.png') }}" alt="" />
                                    <a href="#">Happy Customer</a>
                                    <i class="ti-quote-right"></i>
                                </div>
                                <p>
                                Healthy habit now! Our family adores Safe Aqua Tech's purifier. It's a hit, for me and them!
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-slider">
                                <div class="testimonial-pic d-flex">
                                    <img src="{{ asset('assets/frontend/img/testimonials/4.png') }}" alt="" />
                                    <a href="#">Happy Customer</a>
                                    <i class="ti-quote-right"></i>
                                </div>
                                <p>
                                Water concerns vanished. Safe Aqua Tech's purifier has us covered. Clear, clean water, no fuss.
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-slider">
                                <div class="testimonial-pic d-flex">
                                    <img src="{{ asset('assets/frontend/img/testimonials/5.png') }}" alt="" />
                                    <a href="#">Happy Customer</a>
                                    <i class="ti-quote-right"></i>
                                </div>
                                <p>
                                Made the switch and loving it. Safe Aqua Tech's purifier is refreshing and reliable. Two thumbs up!
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-slider">
                                <div class="testimonial-pic d-flex">
                                    <img src="{{ asset('assets/frontend/img/testimonials/6.png') }}" alt="" />
                                    <a href="#">Happy Customer</a>
                                    <i class="ti-quote-right"></i>
                                </div>
                                <p>
                                Clean water made simple. Safe Aqua Tech's purifier delivery is seamless, water's excellent. Recommending to buddies!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End-->

<!-- Client Area Start -->
<section class="client-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="client-title">
                    <h4>Worldwide Trusted Brands</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel slider-3">
                    <div class="item">
                        <div class="client-logo">
                            <img src="{{ asset('assets/frontend/images/brand/1.png') }}" alt="client" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <img src="{{ asset('assets/frontend/images/brand/2.png') }}" alt="client" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <img src="{{ asset('assets/frontend/images/brand/3.png') }}" alt="client" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <img src="{{ asset('assets/frontend/images/brand/4.png') }}" alt="client" />
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <img src="{{ asset('assets/frontend/images/brand/5.png') }}" alt="client" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Area End -->

@include('components.guest.footer')