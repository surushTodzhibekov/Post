<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">
        <div class="widget">
            <h2 class="widget-title">Search</h2>
            <form class="form-inline search-form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search on the site">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Popular Posts</h2>
            <div class="blog-list-widget">
                <div class="list-group">
                  @foreach($popularPosts as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                          @if($post->image_url)
                            <img src="{{ $post->image_url }}" alt="" class="img-fluid float-left">
                          @endif  
                            <h5 class="mb-1">{{ $post->title }}</h5>
                            <small>{{ $post->date }}</small>
                        </div>
                    </a>
                  @endforeach
                </div>
            </div><!-- end blog-list -->
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Advertising</h2>
            <div class="banner-spot clearfix">
                <div class="banner-img">
                    <img src="upload/banner_04.jpg" alt="" class="img-fluid">
                </div><!-- end banner-img -->
            </div><!-- end banner -->
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Instagram Feed</h2>
            <div class="instagram-wrapper clearfix">
                <a href="#"><img src="upload/garden_sq_01.jpg" alt="" class="img-fluid"></a>
                <a href="#"><img src="upload/garden_sq_02.jpg" alt="" class="img-fluid"></a>
                <a href="#"><img src="upload/garden_sq_03.jpg" alt="" class="img-fluid"></a>
                <a href="#"><img src="upload/garden_sq_04.jpg" alt="" class="img-fluid"></a>
                <a href="#"><img src="upload/garden_sq_05.jpg" alt="" class="img-fluid"></a>
                <a href="#"><img src="upload/garden_sq_06.jpg" alt="" class="img-fluid"></a>
                <a href="#"><img src="upload/garden_sq_07.jpg" alt="" class="img-fluid"></a>
                <a href="#"><img src="upload/garden_sq_08.jpg" alt="" class="img-fluid"></a>
                <a href="#"><img src="upload/garden_sq_09.jpg" alt="" class="img-fluid"></a>
            </div><!-- end Instagram wrapper -->
        </div><!-- end widget -->

        <div class="widget">
            <h2 class="widget-title">Popular Categories</h2>
            <div class="link-widget">
                <ul>
                  @foreach($categories as $category)
                    <li>
                      <a href="{{ route('category', $category->slug) }}">{{ $category->title }}
                      <span>{{ $category->posts->count() }}</span></a>
                    </li>
                    @endforeach
                </ul>
            </div><!-- end link-widget -->
        </div><!-- end widget -->
    </div><!-- end sidebar -->
</div><!-- end col -->
