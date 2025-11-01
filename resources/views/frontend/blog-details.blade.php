@extends('layouts.frontend')
@section('title') {{$post->post_title}} @stop
@section('meta_title'){{$post->post_title}}@stop
@section('meta_keyword'){{$post->post_category->Category_name}}@stop
@section('meta_image'){{$post->thumb_image}}@stop
@section('content')
    @php
        $buttonColorArray = ["#FF2D20", "#A40D77", "#4E6C54", "#4662B2"];
    @endphp
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li>Blog Single</li>
                </ol>
                <h2>Blog Single</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{asset($post->image)}}" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a>{{$post->post_title}}</a>
                            </h2>
                            <a style="background-color: {{ $buttonColorArray[rand(0, 3)] }}" href="{{ route('blog', ['type' => $post->post_category->id]) }}">
                                {{$post->post_category->Category_name}}
                            </a>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{$post->user->full_name}}</li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01">{{ $post->created_at->diffForHumans()}} </time></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {!! $post->description !!}
                                </p>

                            </div>

                        </article><!-- End blog entry -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

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
{{--                                {{dd($post->thumb_image)}}--}}
                                @if($more_blog_posts->count())
                                    @foreach($more_blog_posts  as $more_blog_post)
                                        <div class="post-item clearfix">
                                            <img src="{{ $more_blog_post->thumb_image }}" alt="">
                                            <h4><a href="{{ route('blog.details', $more_blog_post->slug) }}">{{$more_blog_post->post_title}}</a></h4>
                                            <time datetime="2020-01-01">{{ $more_blog_post->created_at->diffForHumans()}}</time>
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
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@stop
