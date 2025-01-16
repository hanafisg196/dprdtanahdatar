<!DOCTYPE html>
<html>

<!-- Mirrored from html.winsomethemes.com/bookra/index-magazine-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 07:47:36 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'Tanah Datar')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="og:url" content="@yield('ogurl', 'https://tanahdatar.go.id')" />
    <meta name="og:title" content="@yield('ogtitle', 'Tanah Datar')" />
    <meta name="og:type" content="berita" />
    <meta name="og:description" content="@yield('ogdesc')" />
    <meta name="og:image" content="@yield('ogimage')" />
    <meta name="author" content="IT-RAYS">

    <!-- Devices Meta -->

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <link
        href='https://fonts.googleapis.com/css?family=Oswald:400,100,300,500,700%7CLato:400,300,700,900&amp;subset=latin,latin-ext'
        rel='stylesheet' type='text/css'>
    <!-- Plugins CSS files -->
    <link rel="stylesheet" href="/assets/css/assets.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/shortcodes.css">

    <!-- Magazine Styles -->
    <link rel="stylesheet" href="/assets/css/sliders/swiper.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/demos/magazine.css" type="text/css">

    <link id="theme_css" rel="stylesheet" href="/assets/css/light.css">
    <link id="skin_css" rel="stylesheet" href="/assets/css/skins/default.css">

</head>

<body>
    <!-- site preloader start -->
    <div class="page-loader"></div>
    <!-- site preloader end -->

    <div class="pageWrapper">
        <!-- Header start -->
        @include('tanahdatar.template.header')
        <!-- Header end -->

        <!-- Content start -->
        <div class="pageContent magazine">
            @yield('content')
        </div>
        <!-- Content end -->

        <!-- Footer start -->
        @include('tanahdatar.template.footer')
        <!-- Footer end -->

        <!-- Back to top Link -->
        <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

        <!-- Load JS plugins -->
        <script type="text/javascript" src="/assets/js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="/assets/js/assets.js"></script>



        <!-- general script file -->
        <script type="text/javascript" src="/assets/js/script.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                var swiper = new Swiper(".swiper-container", {
                spaceBetween: 30,
                centeredSlides: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                loop: true,
                effect: 'coverflow',
                coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                },
                speed: 1000,
                // effect: 'fade',
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-next",
                    prevEl: ".swiper-prev",
                },
                });
            });
        </script>

</body>

<!-- Mirrored from html.winsomethemes.com/bookra/index-magazine-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2024 07:47:53 GMT -->

</html>
