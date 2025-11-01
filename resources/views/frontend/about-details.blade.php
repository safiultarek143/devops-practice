@extends('layouts.frontend')
@section('content')
<section class="page-header" style="background-image: url({{asset('assets/images/backgrounds/page-header-contact.jpg')}});">
    <div class="container">
        <h2>about</h2>
        <ul class="thm-breadcrumb list-unstyled">
            <li><a href="index-2.html">Home</a></li>
            <li><a href="#" class="shop_style">pages</a></li>
            <li><span>about</span></li>
        </ul>
    </div>
</section>
<section class="about_two">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="block-title text-left">
                    <p>About agrikol</p>
                    <h3>We’re Providing The Best Solution</h3>
                    <div class="leaf">
                        <img src="{{asset('assets/images/resources/leaf.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about_two_text">
                    <p>Millions in Australia spend hours, labouring hard in all weathers on their farms.
                        We endeavour to make their life easier by introducing customized farm technology
                        for their specific requirements.</p>
                    <p>You see, as experts say, integrating geospatial technology alongside various solutions can
                        vastly enhance agricultural practices and accredit small farm holders.
                        The difference brought out by such implementations has been observed in India and Africa.
                        We at Farmapps strive to bring a system of targeted, area-specific machinery and
                        technology to Australian fields, aiming to improve quality and amount of yield,
                        yet reducing manual workload.</p>
                    <p>Alongside recommendations of the most suitable equipment for farmers and landowners'
                        specific requirements, we offer tips on how to master full control over your farm,
                        and fulfil the land's agricultural potential!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="about_two_left">
                    <img src="{{asset('assets/images/about/about_page_left-img.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="about_two_middle">
                    <img src="{{asset('assets/images/about/about_page_middle-img.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xl-2 col-lg-2">
                <div class="about_two-right">
                    <img src="{{asset('assets/images/about/about_page_right-img.jpg')}}" alt="">
                    <div class="about_two_content">
                        <h2>We’ve 40 Years Agriculture Experience</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bx-testimonial bx-testimonial2 about_bx-testimonial2">
    <div class="bx-testimonial_bg" style="background-image: url({{asset('assets/images/testimonials/bx-testi-bg.png')}})">
    </div>
    <div class="container">
        <div class="block-title text-center">
            <p>testimonails</p>
            <h3>What people say</h3>
            <div class="leaf">
                <img src="{{asset('assets/images/resources/leaf.png')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="bx_testimonial_slider">
                    <div class="slider-pager">
                        <ul class="thumb-box list-unstyled text-center">
                            <li>
                                <a class="active" data-slide-index="0" href="#">
                                    <div class="img-holder">
                                        <img src="{{asset('assets/images/testimonials/bx-testi-1.png')}}" alt="">
                                        <div class="quote_testimonial">
                                            <img src="{{asset('assets/images/icon/quote_1.png')}}" alt="">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="1" href="#">
                                    <div class="img-holder">
                                        <img src="{{asset('assets/images/testimonials/bx-testi-2.png')}}" alt="">
                                        <div class="quote_testimonial">
                                            <img src="{{asset('assets/images/icon/quote_1.png')}}" alt="">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="2" href="#">
                                    <div class="img-holder">
                                        <img src="{{asset('assets/images/testimonials/bx-testi-3.png')}}" alt="">
                                        <div class="quote_testimonial">
                                            <img src="{{asset('assets/images/icon/quote_1.png')}}" alt="">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="slider-content clearfix bxslider list-unstyled text-center ">
                        <li>
                            <div class="bx_testimonial_single clearfix">
                                <div class="bx_testimonial_text">
                                    <p>This is due to their excellent service, competitive pricing and customer
                                        support. It’s throughly refresing to get such a personal touch.</p>
                                    <h3>christine rose</h3>
                                    <h6>Customer</h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="bx_testimonial_single clearfix">
                                <div class="bx_testimonial_text">
                                    <p>This is due to their excellent service, competitive pricing and customer
                                        support. It’s throughly refresing to get such a personal touch.</p>
                                    <h3>christine rose</h3>
                                    <h6>Customer</h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="bx_testimonial_single clearfix">
                                <div class="bx_testimonial_text">
                                    <p>This is due to their excellent service, competitive pricing and customer
                                        support. It’s throughly refresing to get such a personal touch.</p>
                                    <h3>christine rose</h3>
                                    <h6>Customer</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="brand-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="brand-one-carousel owl-carousel">
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-1.png')}}" alt="brand"></a>
                    </div>
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-2.png')}}" alt="brand"></a>
                    </div>
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-3.png')}}" alt="brand"></a>
                    </div>
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-4.png')}}" alt="brand"></a>
                    </div>
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-5.png')}}" alt="brand"></a>
                    </div>
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-1.png')}}" alt="brand"></a>
                    </div>
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-2.png')}}" alt="brand"></a>
                    </div>
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-3.png')}}" alt="brand"></a>
                    </div>
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-4.png')}}" alt="brand"></a>
                    </div>
                    <div class="single_brand_item">
                        <a href="#"><img src="{{asset('assets/images/resources/brand-1-5.png')}}" alt="brand"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="video-one" style="background-image:url({{asset('assets/images/resources/video-bg-1.jpg')}});">
    <div class="container text-center">
        <a href="https://www.youtube.com/watch?v=i9E_Blai8vk" class="video-one__btn video-popup"><i class="fa fa-play"></i></a>
        <p>Modern agriculture types</p>
        <h3>Agriculture matters to the<br>future of development</h3>
    </div>
</section>
<section class="product-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="product_img">
                    <img src="{{asset('assets/images/resources/product-1-img-1.jpg')}}" alt="Product One Img" />
                    <div class="experience_box">
                        <h2>10 years</h2>
                        <p>of research</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="growing_product">
                    <div class="block-title text-left">
                        <p>fresh products</p>
                        <h3>Growing products</h3>
                        <div class="leaf">
                            <img src="{{asset('assets/images/resources/leaf.png')}}" alt="" />
                        </div>
                    </div>
                    <div class="growing_product_text">
                    </div>
                    <div class="progress-levels">

                        <div class="progress-box">
                            <div class="inner count-box">
                                <div class="text">Agriculture</div>
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="skill-percent">
<span class="count-text" data-speed="3000" data-stop="68">0</span
>
                                            <span class="percent">%</span>
                                        </div>
                                        <div class="bar-fill" data-percent="68"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="progress-box">
                            <div class="inner count-box">
                                <div class="text">Organic</div>
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="skill-percent">
<span class="count-text" data-speed="3000" data-stop="98">0</span
>
                                            <span class="percent">%</span>
                                        </div>
                                        <div class="bar-fill" data-percent="98"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="team_one about_team_one">
</section>
<section class="cta-one" style="background-image: url({{asset('assets/images/resources/cta_one_bg-1.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta_one_content">
                    <h1>Provide you the Highest Quality products<br>that Meets your Expectation</h1>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
