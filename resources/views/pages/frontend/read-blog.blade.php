<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="author" content="Sthree Engineers">
    <meta name="description" content="{{ $data->short_content }}">
    <meta name="keywords" content="{{ $data->meta_keywords }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.safeaquatech.com/{{ $data->slug_url }}/{{ $data->random_id }}">
    <meta property="og:title" content="{{ $data->title }}">
    <meta property="og:description" content="{{ $data->short_content }}">
    <meta property="og:image" content="{{ asset('assets/backend/blog/blog_image/' . $data->blog_image) }}">

    <!-- Page Title -->
    <title>{{ $data->title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favlogo.png') }}" />

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
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })
        (window, document, 'script', 'dataLayer', 'GTM-PKG884Q7');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKG884Q7" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Preloader -->
    {{-- <div id="preloader">
        <div id="status">
            <img src="{{ asset('assets/frontend/images/favlogo.png') }}" alt="perloader" />
        </div>
    </div> --}}

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
                        <a href="https://www.facebook.com/safeaquatech.tpj" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/safeaquatech.tpj" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@safeaquatech_tpj" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!--Navbar -->
        <nav class="navbar navbar-expand-lg top-menu">
            <div class="container-fluid">
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/frontend/images/logo.png') }}"
                            alt="logo" style="width: 200px;" /></a>
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
                    <a href="https://api.whatsapp.com/send/?phone=%2B919344330043" target="_blank"
                        class="button">Chat
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
    <section class="blog-single page-banner">
        <div class="page-banner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title text-center">
                            <h2>{{ $data->title }}</h2>
                            <a href="{{ route('index') }}">Home</a>
                            <span>|</span>
                            <a href="javascript:void(0)">Blog Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Blog Item Start -->
    <section class="blog-single item-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="blog-pic">
                        <img src="{{ asset('assets/backend/blog/blog_image/' . $data->blog_image) }}"
                            alt="{{ $data->image_alt }}" class="w-100" />
                    </div>
                    <div class="blog-single-item">
                        <div class="blog-content d-flex">
                            <div><i class="far fa-user"></i> <a href="#">By {{ $data->writer_name }}</a></div>
                            <div class="icon"><i class="fas fa-calendar-alt"></i><a
                                    href="#">{{ date('d M Y', strtotime($data->blog_date)) }}</a></div>
                            <div class="icon"><i class="fas fa-mouse-pointer"></i> <a
                                    href="#">{{ $data->blogmaster->master_name }}</a></div>
                        </div>
                        <h4>
                            <a href="#">{{ $data->title }}</a>
                        </h4>
                        {!! $data->blog_content !!}
                    </div>

                </div>

                <div class="col-lg-4 col-md-4">

                    <div class="recent-post right-border">
                        <h5>Recent Post</h5>
                    </div>
                    @foreach ($latestblog as $latestblogs)
                        <div class="recent-content d-flex">
                            <img src="{{ asset('assets/backend/blog/blog_image/' . $latestblogs->blog_image) }}"
                                alt="{{ $latestblogs->image_alt }}" />
                            <div class="recent-discription">
                                <div class="ttl">
                                    <a
                                        href="{{ route('read-blog', ['title' => $latestblogs->slug_url, 'id' => $latestblogs->random_id]) }}">{{ $latestblogs->title }}</a>
                                </div>
                                <div class="date">
                                    <a href="#">By {{ $latestblogs->writer_name }} /
                                        {{ date('d M Y', strtotime($latestblogs->blog_date)) }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="category">
                        <div class="cata-title right-border">
                            <h5>Categories</h5>
                        </div>
                        <div class="cata-content">
                            <ul>
                                @foreach ($masterblogdata as $masterblogdatas)
                                    <li>
                                        <a href="#"><i
                                                class="fas fa-angle-right"></i>{{ $masterblogdatas->master_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Item End -->

    <!-- Contact Section Start -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="contact-title">
                        <h4>Contact Us</h4>
                    </div>
                    <ul class="contact-link">
                        <li><a href="tel:+919344330043">+91 93443 30043</a></li>
                        <li><a href="mailto:info@safeaquatech.com">info@safeaquatech.com</a></li>
                        <li><a href="#">Mannarpuram, Tiruchirapalli</a></li>
                        <li><a href="#">Mon - Sat - 10.00 am - 7.00 pm</a></li>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/safeaquatech.tpj" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/safeaquatech.tpj" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/@safeaquatech_tpj" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-title">
                        <h4>Useful Link</h4>
                    </div>
                    <ul class="contact-link">
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('service') }}">Services</a></li>
                        <li><a href="{{ route('product') }}">Products</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-title">
                        <h4>Service</h4>
                    </div>
                    <ul class="contact-link">
                        <li><a href="javascript::void(o);">Domestic Water Purifier</a></li>
                        <li><a href="javascript::void(o);">Commercial Water Purifier</a></li>
                        <li><a href="javascript::void(o);">Industrial Water Purifier</a></li>
                        <li><a href="javascript::void(o);">Water Softener</a></li>
                        <li><a href="javascript::void(o);">Sand Filtration System</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="contact-title">
                        <h4>Service</h4>
                    </div>
                    <ul class="contact-link">
                        <li><a href="javascript::void(o);">Water Conditioner</a></li>
                        <li><a href="javascript::void(o);">STP Plant</a></li>
                        <li><a href="javascript::void(o);">ETP Plant</a></li>
                        <li><a href="javascript::void(o);"></a></li>
                        <li><a href="javascript::void(o);"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-content">
                        <p>Copyright © 2023 Safe Aqua Tech. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="footer-content">
                        <p>Crafted by<a href="https://www.zworktechnology.com" target="_blank">
                                zworktechnology.com</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top Start -->
    <div id="toTop" class="back-to-top text-right">
        <img src="{{ asset('assets/frontend/img/water-bottle.png') }}" alt="" />
    </div>
    <!-- Back to Top End-->

    <script src="{{ asset('assets/frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/rainyday.min.js') }}"></script>
    <script src=" https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/script.js') }}"></script>
</body>

</html>
