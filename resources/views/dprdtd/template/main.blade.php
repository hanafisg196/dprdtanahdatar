<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'DPRD Tanah Datar')</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="keywords" content="@yield('keywords', '')">
    <meta name="og:url" content="@yield('ogurl', 'https://tanahdatar.go.id')" />
    <meta name="og:title" content="@yield('ogtitle', 'Tanah Datar')" />
    <meta name="og:type" content="berita" />
    <meta name="og:description" content="@yield('ogdesc', '')" />
    <meta name="og:image" content="@yield('ogimage', '')" />
    <meta name="author" content="IT-RAYS">

    <!-- Devices Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="/dist/assets/compiled/jpg/logotanahdatar.png">
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
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/sliders/owl.carousel.css" property='stylesheet' />

</head>

<body>
    <style>
        .card-member {
            border: 2px solid #ccc;
            padding: 15px;
            border-radius: 10px;
            background-color: #f9f9f9;
            max-height: 400px;
            text-align: center;
        }

        .card-member-2 {
            border: 2px solid #ccc;
            padding: 15px;
            border-radius: 10px;
            background-color: #f9f9f9;
            width: 180px;
            max-height:240px;
            text-align: center;
        }



        .img-circle {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 50%;
            margin-top: 5px;
        }



        .logo {
            text-align: center;
            /* Pusatkan konten */
        }

        .logo img {
            max-width: 100px;
            /* Sesuaikan ukuran logo */
            margin-bottom: 9px;
            /* Jarak bawah logo */
        }

        .logo .text {
            display: inline-block;
            /* Buat teks tetap dalam satu blok */
        }

        .logo .text h3 {
            margin: 0;
            /* Hapus margin default */
            font-size: 1.5rem;
            /* Ukuran font default */
        }

        .logo .text .subtitle {
            font-size: 16px;
            /* Ukuran font lebih kecil untuk "Tanah Datar" */
            font-weight: normal;
            /* Gunakan font normal untuk subtitle */
            margin-top: 5px;
            /* Jarak dari teks di atas */
        }

        .post-image img {
            width: 100%;
            /* Menjaga lebar penuh slide */
            height: ;
            /* Tentukan tinggi tetap */
            object-fit: cover;
            /* Memastikan gambar terpotong agar sesuai */
            border-radius: 10px;
            /* Opsional untuk estetika */
        }

        .swiper.mySwiper {
            width: 100%;
            max-width: 100%;
            height: auto;
            overflow: hidden;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px;
            height: auto;
        }

        .swiper-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            text-align: center;
            font-size: 12px;
            padding: 5px;
        }

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
            p margin: 0 0 -2px 0;
            font-size: 1.6rem;
            text-transform: uppercase;
            font-weight: bold;
        }

        .custom-col {
            width: 22%;
            float: left;
        }

        @media (max-width: 768px) {
            .custom-col {
                width: 48%;
            }
            .icon-box h6 {
                display:block;
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
            overflow: visible;
            /* Pastikan tombol slider tidak terpotong */
        }
    </style>
    <!-- site preloader start -->
    <div class="page-loader"></div>
    <!-- site preloader end -->

    <div class="pageWrapper">
        <!-- Header start -->
        @if (request()->routeIs('home'))
            @include('dprdtd.template.header')
            @include('dprdtd.template.paralax-image')
        @else
            @include('dprdtd.template.header-two')
        @endif
        <!-- Header start -->
        <!-- Content start -->
        <div class="pageContent">
            <div class="pageContent magazine">
                @yield('content')
            </div>
        </div>
        <!-- Content start -->
        <!-- Footer start -->
        @include('dprdtd.template.footer')
        <!-- Footer end -->
    </div>
    @include('dprdtd.template.script')
</body>

</html>
