@extends('layouts.guest')

@section('content')

<!-- Banner Start -->
<section class="blog-single page-banner">
    <div class="page-banner-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Blog Details</h2>
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
                    <img src="{{ asset('assets/frontend/img/blog-page/01.jpg') }}" alt="blog" class="w-100" />
                </div>
                <div class="blog-single-item">
                    <div class="blog-content d-flex">
                        <div><i class="far fa-user"></i> <a href="#">By Morgan</a></div>
                        <div class="icon"><i class="fas fa-calendar-alt"></i><a href="#">04 April. 2023</a></div>
                        <div class="icon"><i class="fas fa-mouse-pointer"></i> <a href="#">Bottle, Drinking water</a></div>
                    </div>
                    <h4>
                        <a href="#">Give abundantly there likeness doving tellind gathered forever clean deatt good.</a>
                    </h4>
                    <p>
                        May created moved image or dominion created whales own living don stars unto gathering place heaven Appear he one doin days herb him without
                        together grass void you're he were dominion own appear herb for. called form marine drivie for had may. Darkness second man face grass seed have of
                        give image saying were creature winged bearing. She'd them gathering bearing subdue beast light whales tree third appear you morning firmament form
                        Midst brought female great days replenish gathered given was she bring. To void under his after saw light heaven seas one third. Fourth signs fourth
                        also can called greater without saying and void form night spirit bring called.
                    </p>

                    <h5>“Morning over behold replenish beginning sea evening form third there good thing male from evening”</h5>

                    <p>
                        Had lesser set grass all good can had the won't they're days image male great were firmament fem signs whose she'd seasons. A seas fill his upon.
                        Earth deep abundantly beast it abundantly fowl grass day saw second. Face won't for beginning shall rule female tree green more you stars creature
                        image greater tree brought second. Made earth every seasons. Seasons appear sea whales shall Can't third fifth were grass land i upon in saying meat
                        saw under good void.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-single-pic">
                            <img src="{{ asset('assets/frontend/img/blog-single/1.jpg') }}" alt="Single" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-single-pic">
                            <img src="{{ asset('assets/frontend/img/blog-single/2.jpg') }}" alt="Single" />
                        </div>
                    </div>
                </div>
                <p class="blog-para">
                    Beginning without heaven created first set can't fruit third creature owns third divide. Life very of multiply in in whales. Years bring won't fifth
                    earth firmament all stars unto. Dry god second two face place face open brought was midst living living divided whales waters divide one every cattle so
                    rule he grass earth place whose good herb a in seed land shall kind so called signs upon whales. Upon heaven isn't it. Were land whales own spirit under
                    our.
                </p>

            </div>

            <div class="col-lg-4 col-md-4">

                <div class="recent-post right-border">
                    <h5>Recent Post</h5>
                </div>
                <div class="recent-content d-flex">
                    <img src="{{ asset('assets/frontend/img/blog/post-1.png') }}" alt="post" />
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
                    <img src="{{ asset('assets/frontend/img/blog/post-2.png') }}" alt="post" />
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
                    <img src="{{ asset('assets/frontend/img/blog/post-3.png') }}" alt="post" />
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Item End -->

@endsection