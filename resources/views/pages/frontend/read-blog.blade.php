@extends('layouts.guest')

@section('content')
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
                        <img src="{{ asset('assets/backend/blog/blog_image/' . $data->blog_image) }}" alt="{{ $data->image_alt }}"
                            class="w-100" />
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
                                    <a href="{{ route('read-blog', ['title' => $latestblogs->slug_url, 'id' => $latestblogs->random_id]) }}">{{ $latestblogs->title }}</a>
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
@endsection
