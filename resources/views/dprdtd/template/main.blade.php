<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DPRD Tanah Datar</title>
    <meta name="description" content="BOOKRA | Multi-purpose HTML5 Template">
    <meta name="author" content="IT-RAYS">

    <!-- Devices Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <link
        href='https://fonts.googleapis.com/css?family=Oswald:400,100,300,500,700%7CLato:400,300,700,900&subset=latin,latin-ext'
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
    <style>
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            max-width: 100px;
            height: auto;
        }

        .logo h3 {
            margin: 0 0 -2px 0;
            font-size: 1.6rem;
            text-transform: uppercase;
            font-weight: bold;
        }
		.custom-col {
			width: 19%;
			float: left;
		}
		@media (max-width: 768px) {
			.custom-col {
				width: 48%;
			}
		}
        .image-caption {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 18px;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }
    .horizontal-slider {
    position: relative;
    overflow: visible; /* Pastikan tombol slider tidak terpotong */
}
       
    </style>
    <!-- site preloader start -->
    <div class="page-loader"></div>
    <!-- site preloader end -->

    <div class="pageWrapper">

        <!-- Header start -->
        @include('dprdtd.template.header')
        <!-- Header start -->

        <!-- Content start -->
        <div class="pageContent">
            <div class="xl-padding parallax" style="background: url('assets/images/dprdtd.png');background-size: cover;"
                data-stellar-background-ratio="0.4" data-overlay="rgba(0,0,0,.5)">
                <div class="t-center md-padding hi-index">
                    <h2 class="font-70 white uppercase fx" data-animate="fadeInUp" data-animation-delay="500">Selamat
                        Datang Di<span class="main-color"> DPRD Tanah Datar</span> </h2>
                </div>
            </div>
            <div class="pageContent magazine">
                @yield('content')
            </div>
        </div>
        <!-- Content start -->

        <!-- Footer start -->
        @include('dprdtd.template.footer')
        <!-- Footer end -->

    </div>

    <!-- Back to top Link -->
    <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

    <!-- Load JS plugins -->
    <script type="text/javascript" src="/assets/js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="/assets/js/assets.js"></script>

    <!-- general script file -->
    <script type="text/javascript" src="/assets/js/script.js"></script>

</body>

</html>
