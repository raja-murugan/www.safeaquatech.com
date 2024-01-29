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
        <div class="container" style="margin-bottom: 100px;">
            <div class="row">
                <div class="col-lg-8 col-md-8" style="display: flex">
                    <div class="row">
                        @foreach ($data as $datas)
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-bg">
                                    <div class="blog-pic">
                                        <img src="{{ asset('assets/backend/blog/blog_image/' . $datas->blog_image) }}" alt="{{ $datas->image_alt }}"
                                            class="w-100" style="width:   100% !important;height: 300px;object-fit: cover;" />
                                    </div>
                                    <div class="blog-item">
                                        <ul class="blog-content">
                                            {{-- <li><i class="far fa-user"></i> <a href="#">By {{ $datas->writer_name }}</a></li> --}}
                                            <li><i class="fas fa-calendar-alt"></i><a href="#">{{ date('d M Y', strtotime($datas->blog_date)) }}</a></li>
                                            <li><i class="fas fa-mouse-pointer"></i> <a href="#">{{ $datas->blogmaster->master_name }}</a>
                                            </li>
                                        </ul>
                                        <h5>
                                            <a href="{{ route('read-blog', ['title' => $datas->slug_url, 'id' => $datas->random_id]) }}">{{ $datas->title }}</a>
                                        </h5>
                                        {{-- <p>{{ $datas->short_content }}</p> --}}
                                        <hr />
                                        <a href="{{ route('read-blog', ['title' => $datas->slug_url, 'id' => $datas->random_id]) }}" class="read-btn">Continue Reading <i
                                                class="fas fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="recent-post right-border">
                        <h5>Recent Post</h5>
                    </div>
                    @foreach ($latestblog as $latestblogs)
                    <div class="recent-content d-flex">
                        <img src="{{ asset('assets/backend/blog/blog_image/' . $latestblogs->blog_image) }}" alt="{{ $latestblogs->image_alt }}" />
                        <div class="recent-discription">
                            <div class="ttl">
                                <a href="{{ route('read-blog', ['title' => $latestblogs->slug_url, 'id' => $latestblogs->random_id]) }}">{{ $latestblogs->title }}</a>
                            </div>
                            <div class="date">
                                <a href="#">By {{ $latestblogs->writer_name }} / {{ date('d M Y', strtotime($latestblogs->blog_date)) }}</a>
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
@endsection
