@extends('layouts.main')

@section('content')
<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h2><i class="fa fa-leaf bg-green"></i> Blog</h2>
            </div><!-- end col -->
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area">
                        <span class="color-green"><a href="{{ route('category', $post->category->slug) }}" title="">{{ $post->category->title }}</a></span>

                        <h3>{{ $post->title }}</h3>

                        <div class="blog-meta big-meta">
                            <small><a href="garden-single.html" title="">{{ $post->date }}</a></small>
                            <small><a href="{{ route('author', $post->author->slug) }}" title="">{{ $post->author->name }}</a></small>
                            <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->
                    @if($post->image_url)
                    <div class="single-post-media">
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="img-fluid">
                    </div><!-- end media -->
                    @endif
                    <div class="blog-content">
                        <div class="pp">
                            <p>{!! $post->body_html !!}</p>
                        </div><!-- end pp -->
                    </div><!-- end content -->

                    <div class="blog-title-area">
                        <div class="tag-cloud-single">
                            <span>Tags</span>
                            <small><a href="#" title="">lifestyle</a></small>
                            <small><a href="#" title="">colorful</a></small>
                            <small><a href="#" title="">trending</a></small>
                            <small><a href="#" title="">another tag</a></small>
                        </div><!-- end meta -->

                        <div class="post-sharing">
                            <ul class="list-inline">
                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div><!-- end post-sharing -->
                    </div><!-- end title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <hr class="invis1">

                    <div class="custombox authorbox clearfix">
                        <h4 class="small-title">About author</h4>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle">
                            </div><!-- end col -->

                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <h4><a href="{{ route('author', $post->author->slug) }}">{{ $post->author->name }}</a></h4>
                                <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Forest Time!</p>

                                <div class="topsocial">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Website"><i class="fa fa-link"></i></a>
                                </div><!-- end social -->

                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end author-box -->

                    <hr class="invis1">

                    <div class="custombox clearfix">
                        <h4 class="small-title">You may also like</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="garden-single.html" title="">
                                            <img src="upload/garden_single_03.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="garden-single.html" title="">We are guests of ABC Design Studio</a></h4>
                                        <small><a href="blog-category-01.html" title="">Trends</a></small>
                                        <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-lg-6">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="garden-single.html" title="">
                                            <img src="upload/garden_single_02.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class=""></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="garden-single.html" title="">Nostalgia at work with family</a></h4>
                                        <small><a href="blog-category-01.html" title="">News</a></small>
                                        <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end custom-box -->

                    @include('blog.comments')

                </div><!-- end page-wrapper -->
            </div><!-- end col -->

            @include('layouts.sidebar')

        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection
