@extends('layouts.guest')

@section('content')

        <!-- Banner Start -->
        <section class="blog page-banner">
            <div class="page-banner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title text-center">
                                <h2>Blog</h2>
                                <a href="{{ route('index') }}">Home</a>
                                <span>|</span>
                                <a href="javascript:void(0)">Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner End -->

        <!-- Blog Item Start -->
        <section class="blog-page item-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="blog-bg">
                            <div class="blog-pic">
                                <img src="{{ asset('assets/frontend/img/blog-page/01.jpg') }}" alt="blog" class="w-100" />
                            </div>
                            <div class="blog-item">
                                <ul class="blog-content">
                                    <li><i class="far fa-user"></i> <a href="#">By Morgan</a></li>
                                    <li><i class="fas fa-calendar-alt"></i><a href="#">04 April. 2023</a></li>
                                    <li><i class="fas fa-mouse-pointer"></i> <a href="#">Bottle, Drinking water</a></li>
                                </ul>
                                <h4>
                                    <a href="#">Give abundantly there likeness tellind gathered forever clean deatt good.</a>
                                </h4>
                                <hr />
                                <a href="#" class="read-btn">Continue Reading <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>

                        <div class="blog-bg">
                            <div class="blog-pic round">
                                <img src="{{ asset('assets/frontend/img/blog-page/02.jpg') }}" alt="working" class="w-100" />
                                <div class="fancy-box">
                                    <figure class="video-box round-os">
                                        <a data-fancybox data-width="640" data-height="360" class="video-btn" href="https://youtu.be/MPUBSZYESgU"><i class="fas fa-play"></i></a>
                                    </figure>
                                </div>
                            </div>
                            <div class="blog-item blog-item-2">
                                <ul class="blog-content">
                                    <li><i class="far fa-user"></i> <a href="#">By Morgan</a></li>
                                    <li><i class="fas fa-calendar-alt"></i><a href="#">04 April. 2023</a></li>
                                    <li><i class="fas fa-mouse-pointer"></i> <a href="#">Bottle, Drinking water</a></li>
                                </ul>
                                <h4>
                                    <a href="#">Give abundantly there likeness tellind gathered forever clean deatt good.</a>
                                </h4>
                                <hr />
                                <a href="#" class="read-btn">Continue Reading <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>

                        <div class="blog-bg">
                            <div class="blog-pic">
                                <img src="assets/img/blog-page/03.jpg" alt="blog" class="w-100" />
                            </div>
                            <div class="blog-item">
                                <ul class="blog-content">
                                    <li><i class="far fa-user"></i> <a href="#">By Morgan</a></li>
                                    <li><i class="fas fa-calendar-alt"></i><a href="#">04 April. 2023</a></li>
                                    <li><i class="fas fa-mouse-pointer"></i> <a href="#">Bottle, Drinking water</a></li>
                                </ul>
                                <h4>
                                    <a href="#">Give abundantly there likeness tellind gathered forever clean deatt good.</a>
                                </h4>
                                <hr />
                                <a href="#" class="read-btn">Continue Reading <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>

                        <div class="blog-bg">
                            <div class="owl-carousel slider-4">
                                <div class="item">
                                    <div class="blog-pic">
                                        <img src="assets/img/blog-page/04.jpg" alt="blog" class="w-100" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="blog-pic">
                                        <img src="assets/img/blog-page/04.jpg" alt="blog" class="w-100" />
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item blog-slider">
                                <ul class="blog-content">
                                    <li><i class="far fa-user"></i> <a href="#">By Morgan</a></li>
                                    <li><i class="fas fa-calendar-alt"></i><a href="#">04 April. 2023</a></li>
                                    <li><i class="fas fa-mouse-pointer"></i> <a href="#">Bottle, Drinking water</a></li>
                                </ul>
                                <h4>
                                    <a href="#">Give abundantly there likeness tellind gathered forever clean deatt good.</a>
                                </h4>
                                <hr />
                                <a href="#" class="read-btn">Continue Reading <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>

                        <div class="blog-bg">
                            <div class="blog-pic">
                                <img src="assets/img/blog-page/05.jpg" alt="blog" class="w-100" />
                            </div>
                            <div class="blog-item">
                                <ul class="blog-content">
                                    <li><i class="far fa-user"></i> <a href="#">By Morgan</a></li>
                                    <li><i class="fas fa-calendar-alt"></i><a href="#">04 April. 2023</a></li>
                                    <li><i class="fas fa-mouse-pointer"></i> <a href="#">Bottle, Drinking water</a></li>
                                </ul>
                                <h4>
                                    <a href="#">Give abundantly there likeness tellind gathered forever clean deatt good.</a>
                                </h4>
                                <hr />
                                <a href="#" class="read-btn">Continue Reading <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>

                        <div class="blog-bg">
                            <div class="blog-pic">
                                <img src="assets/img/blog-page/06.jpg" alt="blog" class="w-100" />
                            </div>
                            <div class="blog-item">
                                <ul class="blog-content">
                                    <li><i class="far fa-user"></i> <a href="#">By Morgan</a></li>
                                    <li><i class="fas fa-calendar-alt"></i><a href="#">04 April. 2023</a></li>
                                    <li><i class="fas fa-mouse-pointer"></i> <a href="#">Bottle, Drinking water</a></li>
                                </ul>
                                <h4>
                                    <a href="#">Give abundantly there likeness tellind gathered forever clean deatt good.</a>
                                </h4>
                                <hr />
                                <a href="#" class="read-btn">Continue Reading <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="search-bar">
                            <form>
                                <input class="search" name="search" placeholder="Search.." />
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <div class="recent-post right-border">
                            <h5>Recent Post</h5>
                        </div>
                        <div class="recent-content d-flex">
                            <img src="assets/img/blog-page/post-1.png" alt="post" />
                            <div class="recent-discription">
                                <div class="ttl">
                                    <a href="#">Forth seed creepeth itself the seasons after </a>
                                </div>
                                <div class="date">
                                    <a href="#">By Devid / 03 Mar.2020</a>
                                </div>
                            </div>
                        </div>
                        <div class="recent-content d-flex">
                            <img src="assets/img/blog-page/post-2.png" alt="post" />
                            <div class="recent-discription">
                                <div class="ttl">
                                    <a href="#">Signs and made kind void Sea first meat be two. </a>
                                </div>
                                <div class="date">
                                    <a href="#">By Devid / 03 Mar.2020</a>
                                </div>
                            </div>
                        </div>
                        <div class="recent-content d-flex">
                            <img src="assets/img/blog-page/post-3.png" alt="post" />
                            <div class="recent-discription">
                                <div class="ttl">
                                    <a href="#">Replenish without image gren blessed have </a>
                                </div>
                                <div class="date">
                                    <a href="#">By Devid / 03 Mar.2020</a>
                                </div>
                            </div>
                        </div>
                        <div class="category">
                            <div class="cata-title right-border">
                                <h5>Categories</h5>
                            </div>
                            <div class="cata-content">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-angle-right"></i> Bottled Water</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-angle-right"></i> Filtration</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-angle-right"></i> Waterfall</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-angle-right"></i> Technology</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-angle-right"></i> Creative</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-angle-right"></i> Water Drop</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-angle-right"></i> Pure Mineral</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ads-banner">
                            <div class="ads-pic">
                                <img src="assets/img/blog-page/ads-banner.jpg" alt="ads" />
                            </div>
                        </div>
                        <div class="popular">
                            <div class="popular-title right-border">
                                <h5>Tags Cloud</h5>
                            </div>
                            <div class="link-up">
                                <ul class="">
                                    <li><a href="#">Project</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Love</a></li>

                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">illustration</a></li>
                                    <li><a href="#">Android</a></li>

                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Feature</a></li>
                                </ul>
                            </div>
                            <div class="news-title right-border">
                                <h5>Newsletter</h5>
                            </div>
                            <div class="search-bar-news">
                                <form>
                                    <input class="search" name="search" placeholder="Email Address" />
                                </form>
                            </div>
                            <div class="news-btn bttn">
                                <a href="#">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-8">
                                <nav aria-label="...">
                                    <ul class="pagination pagination-lg">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item" aria-current="page">
                                            <span class="page-link">
                                                <i class="fas fa-arrow-right"></i>
                                                <span class="sr-only">(current)</span>
                                            </span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Item End -->


@endsection