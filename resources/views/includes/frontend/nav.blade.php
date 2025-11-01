<!-- ======= Header ======= -->
<!-- <div class="site_header__header_two_wrap">
    <div class="topbar-two">
        <div class="container">
            <div class="topbar_two_content clearfix">
                <div class="logo-box-two float-left">
                    <a href="index.html" class="main-nag__logo">
                        <img src="{{ asset('assets/images/resources/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="header_address_two float-left">
                    <ul class="clearfix list-unstyled">
                        <li>
                            <div class="address_icon">
                                <span class="icon-placeholder"></span>
                            </div>
                            <div class="address_title">
                                <h6>Address</h6>
                                <p>66 Broklyn St. New York</p>
                            </div>
                        </li>
                        <li>
                            <div class="address_icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="address_title">
                                <h6>Phone</h6>
                                <p><a href="tel:123456789">66 Broklyn St. New York</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="address_icon">
                                <span class="icon-clock"></span>
                            </div>
                            <div class="address_title">
                                <h6>Timings</h6>
                                <p>Mon - Fri 09:00am - 07:00pm</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="header_btn_two float-right">
                    <a class="thm-btn" href="contact/index.html">Get a Free Quote</a>


                </div>
            </div>
        </div>
    </div>
    <header class="main-nav__header_two clearfix">
        <nav class="header-navigation stricky clearfix">
            <div class="container ">

                <div class="main-nav__header_two_content">
                    <div class="mobile_menu_icon_two">
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="main-nav__main-navigation two float-left">
                        <ul class="main-nav__navigation-box">
                            <li class="dropdown  current ">
                                <a href="index.html">Home</a>

                            </li>
                            <li class="">
                                <a href="service/index.html">Services</a>


                            </li>

                            <li class="">
                                <a href="{{route('about')}}">About</a>







                            </li>
                            <li class="">
                                <a href="news/index.html">News</a>


                            </li>
                            <li class="">
                                <a href="contact/index.html">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="main_nav_right_two float-right">
                        <div class="icon_search_box">
                            <a href="#" class="main-nav__search search-popup__toggler"><i class="icon-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div> -->
    <!-- End Header -->
     <!-- nav start -->
     <nav class="h-20 bg-[#F0FBF7]">
        <div class="max-w-screen-2xl lg:mx-auto flex justify-between items-center px-4 py-4">
            <a href="{{ route('index')}}">
                <img class="h-12" src="{{ asset('assets/image/logo-icon.png') }}" alt="Logo">
            </a>
            <!-- Hamburger menu button (visible on mobile) -->
            <div class="lg:hidden">
                <button id="menu-btn" class="text-[#006A51] focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <!-- Navigation links -->
            <div id="menu"
                class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:justify-around gap-4 py-4 w-full lg:w-auto">
                <a class="font-bold text-lg opacity-70" href="{{ route('celebrate.stories')}}">celebrate our story</a>
                <a class="mx-5 font-bold text-lg opacity-70" href="{{ route('executive.member')}}">executive members</a>
                <a class="mx-5 font-bold text-lg opacity-70" href="{{ route('youth.member')}}">Youth Empowerment</a>
                <a class="mx-5 font-bold text-lg opacity-70" href="{{ route('upcoming.celebration')}}">upcoming celebrations</a>
            </div>

            <!-- Join button (always visible) -->
            <div class="hidden lg:block">
                <a href="{{ route('join.community')}}">
                    <button class="bg-[#006A51] font-bold text-white px-4 py-2 rounded">Join The Best Community</button>
                </a>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu"
            class="lg:hidden flex flex-col items-center bg-[#F0FBF7] text-black hidden absolute top-20 left-0 w-full">
            <a class="font-bold text-lg opacity-70 py-2" href="{{ route('celebrate.stories')}}">celebrate our story</a>
            <a class="font-bold text-lg opacity-70 py-2" href="{{ route('executive.member')}}">executive members</a>
            <a class="font-bold text-lg opacity-70 py-2" href="{{ route('youth.member')}}">Youth Empowerment</a>
            <a class="font-bold text-lg opacity-70 py-2" href="{{ route('upcoming.celebration')}}">upcoming celebrations</a>
            <a href="{{ route('join.community')}}">
            <button class="bg-[#006A51] font-bold text-white px-4 py-2 rounded mt-2">Join The Best Community</button>
            </a>
        </div>
    </nav>
    <!-- nav end -->
