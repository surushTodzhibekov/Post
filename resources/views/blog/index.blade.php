@extends('layouts.main')

@section('content')

        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="left-side">
                        <div class="masonry-box post-media">
                             <img src="upload/garden_cat_01.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href="blog-category-01.html" title="">Gardening</a></span>
                                        <h4><a href="garden-single.html" title="">How to choose high quality soil for your gardens</a></h4>
                                        <small><a href="garden-single.html" title="">21 July, 2017</a></small>
                                        <small><a href="#" title="">by Amanda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->

                    <div class="center-side">
                        <div class="masonry-box post-media">
                             <img src="upload/garden_cat_02.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href="blog-category-01.html" title="">Outdoor</a></span>
                                        <h4><a href="garden-single.html" title="">You can create a garden with furniture in your home</a></h4>
                                        <small><a href="garden-single.html" title="">19 July, 2017</a></small>
                                        <small><a href="#" title="">by Amanda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->

                    <div class="right-side hidden-md-down">
                        <div class="masonry-box post-media">
                             <img src="upload/garden_cat_03.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-aqua"><a href="blog-category-01.html" title="">Indoor</a></span>
                                        <h4><a href="garden-single.html" title="">The success of the 10 companies in the vegetable sector</a></h4>
                                        <small><a href="garden-single.html" title="">03 July, 2017</a></small>
                                        <small><a href="#" title="">by Jessica</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end right-side -->
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">
                              @if(! $posts->count())
                              <div class="alert alert-danger">
                                <p>Nothing found</p>
                              </div>
                              @else
                                @if (isset($categoryName))
                                  <div class="alert alert-info">
                                      <p>Category: <strong>{{ $categoryName }}</strong></p>
                                  </div>
                                @endif
                                <div class="blog-box row">
                                  @foreach($posts as $post)
                                    <div class="col-md-4 mb-4">
                                      @if($post->image_url)
                                        <div class="post-media ">
                                            <a href="garden-single.html" title="">
                                                <img src="{{ $post->image_url }}" alt=""    class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                        @endif
                                    </div><!-- end col -->
                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua"><a href="{{ route('category', $post->category->slug) }}" title="">
                                          {{ $post->category->title }}
                                        </a></span>
                                        <h4><a href="{{ route('blog.show', $post->slug) }}" title="">{{ $post->title }}</a></h4>
                                        <p>{!! $post->excerpt_html !!}</p>
                                        <small><a href="garden-category.html" title=""><i class="fa fa-eye"></i> 1887</a></small>
                                        <small><a href="{{ route('blog.show', $post->slug) }}" title="">{{ $post->date }}</a></small>
                                        <small><a href="#" title="">{{ $post->author->name }}</a></small>
                                    </div><!-- end meta -->
                                    @endforeach
                                </div><!-- end blog-box -->
                                @endif

                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    {{ $posts->links() }}
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    @include('layouts.sidebar')

                </div><!-- end row -->
            </div><!-- end container -->
        </section>

@endsection
