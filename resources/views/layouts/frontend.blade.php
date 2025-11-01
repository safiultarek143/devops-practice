<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('assets/css/output.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <title>bant</title>
</head>
<style>
    #mobile-menu {
    z-index: 50; /* Ensure the menu is above the banner */
    position: absolute; /* Fix the menu positioning */
    top: 80px; /* Adjust the top position to avoid overlapping with the nav */
    left: 0;
    width: 100%;
    background-color: #F0FBF7; /* Match your background */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Optional shadow for better separation */
}

    .swiper-container {
    width: 100%;
    height: 100%;
}

.swiper-slide img {
    width: 100%;
    height: auto;
}

@media (max-width: 768px) {
    .swiper-container {
        height: 300px; /* Set a fixed height for mobile devices */
    }

    .swiper-slide img {
        object-fit: cover; /* Ensure the image covers the slide area */
    }
}

@media (max-width: 480px) {
    .swiper-container {
        height: 250px; /* Smaller height for smaller screens */
    }
}


</style>
</head>

<body>

<div class="page-wrapper">
<!-- ======= Header ======= -->

@include('includes.frontend.nav')
<!-- End Header -->
@yield('content')
<!-- ======= Footer ======= -->
@include('includes.frontend.footer')
</div>


        <script>
        // Initialize Swiper
      
        const swiper = new Swiper('.swiper-container', {
    loop: true, // Enable looping of slides
    autoplay: {
        delay: 4000, // Slide transition time (in ms)
    },
    pagination: {
        el: '.swiper-pagination', // Pagination dots
        clickable: true,
    },
    slidesPerView: 1, // Default to 1 slide per view on small screens
    breakpoints: {
        768: {
            slidesPerView: 1, // One slide per view for tablets
            spaceBetween: 20, // Space between slides
        },
        1024: {
            slidesPerView: 1, // One slide per view for large tablets/desktops
            spaceBetween: 40, // Space between slides
        },
    },
});


        // JavaScript to toggle the mobile menu and its styles
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    @stack('run_custom_jquery')
</body>
</html>

