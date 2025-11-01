@extends('layouts.frontend')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Blog</li>
                </ol>
                <h2>Blog</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        @if($posts->count())
                            @foreach($posts  as $post)
                        <article class="entry">
                            <div class="entry-img">
                                <img src="{{$post->image}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="{{ route('blog.details', $post->slug) }}">{{$post->post_title}}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{ $post->created_at->diffForHumans() }}</time></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {!! $post->description !!}
                                </p>
                                <div class="read-more">
                                    <a href="{{ route('blog.details', $post->slug) }}">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                            @endforeach
                        @endif

                        <div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li >{{ $posts->links() }}</li>
                            </ul>
                        </div>

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form method="get" action="{{ route('blog') }}">
                                    <input type="text" name="keyword">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->
                            @if(app('request')->input('keyword'))
                                <div class="col-md-12 mt-4 mb-4">
                                    <h5 class="float-left">You are searching "{{ app('request')->input('keyword') }}"</h5>
                                    <a href="{{ route('blog') }}" class="see-all-post float-right">View All Blog Post</a>
                                </div>
                            @endif
                            <h3 class="sidebar-title">Categories</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    @foreach($post_categories as $post_category )
                                        <li><a href="{{ route('blog', ['type' => $post_category->id]) }}">{{$post_category->category_name}} <span>(25)</span></a></li>
                                    @endforeach
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Recent Posts</h3>
                            <div class="sidebar-item recent-posts">
                                @if($posts->count())
                                    @foreach($posts  as $post)
                                        <div class="post-item clearfix">
                                            <img src="{{ $post->thumb_image }}" alt="">
                                            <h4><a href="{{ route('blog.details', $post->slug) }}">{{$post->post_title}}</a></h4>
                                            <time datetime="2020-01-01">{{ $post->created_at->diffForHumans()}}</time>
                                        </div>

                                    @endforeach
                                @else
                                        <div class="col-md-12 mt-4 text-center">
                                            <span class="">No result found!</span>
                                        </div>
                                @endif

                            </div><!-- End sidebar recent posts-->
                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section>
        <!-- End Blog Section -->

    </main><!-- End #main -->
@stop
