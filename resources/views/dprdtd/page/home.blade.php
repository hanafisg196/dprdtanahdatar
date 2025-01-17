@extends('dprdtd.template.main')
@section('content')
<div class="container gry-bg " style="padding: 20px; margin-top: 30px; margin-bottom: 30px;">
    <div class="row" style="justify-content: center; margin-left: -5px; margin-right: -5px;">
        @foreach(range(1, 4) as $item)
        <div class="col-xs-6 custom-col" style="padding: 5px;">
            <div class="thumbnail" style="background-color: #fff; margin: 0; position: relative; overflow: hidden;">
                <img src="https://dprd.padang.go.id/uploads/images/image_big_671725456e3c1.jpg" alt="Foto" class="img-responsive">
                <div style="position: absolute;bottom: 0;left: 0; right: 0;background: rgba(0, 0, 0, 0.5);color: white;
                    text-align: center; padding: 10px; font-size: 14px;">
                    WAKIL KETUA {{$item}}
                </div>
            </div>
          <p class="text-center">TEST NAME</p>
        </div>
        @endforeach

        {{-- <div class="col-xs-6 custom-col" style="padding: 5px;">
            <a class="btn rect-angles btn-gry-border" href="#" style="width: 260px;"><i class="fa fa-crop"></i>Angled Button</a>
        </div>
        <div class="col-xs-6 custom-col" style="padding: 5px;">
            <a class="btn rect-angles btn-gry-border" href="#" style="width: 260px;"><i class="fa fa-crop"></i>Angled Button</a>
        </div>
        <div class="col-xs-6 custom-col" style="padding: 5px;">
            <a class="btn rect-angles btn-gry-border" href="#" style="width: 260px;"><i class="fa fa-crop"></i>Angled Button</a>
        </div> --}}
        
    </div>
</div>


<div class="container gry-bg " style="padding: 20px; margin-top: 50px; margin-bottom: 30px;">
    <div class="horizontal-slider marginelements show-arrows" data-slides_count="5" data-scroll_amount="1" data-slider-speed="600" data-center-mode="1" data-slider-infinite="1" data-slider-dots="0" data-slider-arrows="1">
        <div>
            <a class="zoom" href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <img alt="" src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <div style="position: absolute;bottom: 0;left: 0; right: 0;background: rgba(0, 0, 0, 0.5);color: white;
                text-align: center; font-size: 14px;">
               Christian Rudi Kurniawan
            </div>
            </a>
        </div>
        <div>
            <a class="zoom" href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <img alt="" src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <div style="position: absolute;bottom: 0;left: 0; right: 0;background: rgba(0, 0, 0, 0.5);color: white;
                text-align: center; font-size: 14px;">
               Christian Rudi Kurniawan
            </div>
            </a>
        </div>
        <div>
            <a class="zoom" href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <img alt="" src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <div style="position: absolute;bottom: 0;left: 0; right: 0;background: rgba(0, 0, 0, 0.5);color: white;
                text-align: center; font-size: 14px;">
               Christian Rudi Kurniawan
            </div>
            </a>
        </div>
        <div>
            <a class="zoom" href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <img alt="" src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <div style="position: absolute;bottom: 0;left: 0; right: 0;background: rgba(0, 0, 0, 0.5);color: white;
                text-align: center; font-size: 14px;">
               Christian Rudi Kurniawan
            </div>
            </a>
        </div>
        <div>
            <a class="zoom" href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <img alt="" src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <div style="position: absolute;bottom: 0;left: 0; right: 0;background: rgba(0, 0, 0, 0.5);color: white;
                text-align: center; font-size: 14px;">
               Christian Rudi Kurniawan
            </div>
            </a>
        </div>
        <div>
            <a class="zoom" href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <img alt="" src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <div style="position: absolute;bottom: 0;left: 0; right: 0;background: rgba(0, 0, 0, 0.5);color: white;
                text-align: center; font-size: 14px;">
               Christian Rudi Kurniawan
            </div>
            </a>
        </div>
        <div>
            <a class="zoom" href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <img alt="" src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <div style="position: absolute;bottom: 0;left: 0; right: 0;background: rgba(0, 0, 0, 0.5);color: white;
                text-align: center; font-size: 14px;">
               Christian Rudi Kurniawan
            </div>
            </a>
        </div><div>
            <a class="zoom" href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <img alt="" src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <div style="position: absolute;bottom: 0;left: 0; right: 0;background: rgba(0, 0, 0, 0.5);color: white;
                text-align: center; font-size: 14px;">
               Christian Rudi Kurniawan
            </div>
            </a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row row-eq-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="filter-by style2">
                        <ul id="filters">
                            <li class="selected"><a href="#" class="filter" data-filter="*"><span>Show All</span></a></li>
                            <li><a href="#" class="filter" data-filter=".design"><span>Web Design</span></a></li>
                            <li><a href="#" class="filter" data-filter=".develop"><span>Web Development</span></a></li>
                            <li><a href="#" class="filter" data-filter=".computers"><span>Computers</span></a></li>
                        </ul>
                    </div>
                    
                    <div class="portfolio grid p-3-cols p-style1" id="grid">
                            <div class="portfolio-item design">
                                <figure>
                                    <div class="port-img">
                                        <div class="icon-links">
                                            <a href="portfolio-single.html" class="link white-bg"><i class="fa fa-link"></i></a><a href="assets/images/portfolio/grid/1.jpg" class="zoom main-bg" title="Quality Products for Companies"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                        <img alt="" src="assets/images/portfolio/grid/1.jpg">
                                    </div>
                                    <figcaption>
                                        <div class="port-captions">
                                            <h4 class="uppercase"><a class="main-color" href="portfolio-single.html">Quality Products for Companies</a></h4>
                                            <p class="description"><a href="#">Design</a>, <a href="#">Development</a></p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="portfolio-item develop">
                                <figure>
                                    <div class="port-img">
                                        <div class="icon-links">
                                            <a href="portfolio-single.html" class="link white-bg"><i class="fa fa-link"></i></a><a href="assets/images/portfolio/grid/2.jpg" class="zoom main-bg" title="Nature vs. Man"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                        <img alt="" src="assets/images/portfolio/grid/2.jpg">
                                    </div>
                                    <figcaption>
                                        <div class="port-captions">
                                            <h4 class="uppercase"><a class="main-color" href="portfolio-single.html">Nature vs. Man</a></h4>
                                            <p class="description"><a href="#">Design</a>, <a href="#">Development</a></p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="portfolio-item computers">
                                <figure>
                                    <div class="port-img">
                                        <div class="icon-links">
                                            <a href="portfolio-single.html" class="link white-bg"><i class="fa fa-link"></i></a><a href="assets/images/portfolio/grid/3.jpg" class="zoom main-bg" title="A Day with Sunshine & Bliss"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                        <img alt="" src="assets/images/portfolio/grid/3.jpg">
                                    </div>
                                    <figcaption>
                                        <div class="port-captions">
                                            <h4 class="uppercase"><a class="main-color" href="portfolio-single.html">A Day with Sunshine & Bliss</a></h4>
                                            <p class="description"><a href="#">Design</a>, <a href="#">Development</a></p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="portfolio-item develop">
                                <figure>
                                    <div class="port-img">
                                        <div class="icon-links">
                                            <a href="portfolio-single.html" class="link white-bg"><i class="fa fa-link"></i></a><a href="assets/images/portfolio/grid/4.jpg" class="zoom main-bg" title="A Workplace for Champions"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                        <img alt="" src="assets/images/portfolio/grid/4.jpg">
                                    </div>
                                    <figcaption>
                                        <div class="port-captions">
                                            <h4 class="uppercase"><a class="main-color" href="portfolio-single.html">A Workplace for Champions</a></h4>
                                            <p class="description"><a href="#">Design</a>, <a href="#">Development</a></p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="portfolio-item design">
                                <figure>
                                    <div class="port-img">
                                        <div class="icon-links">
                                            <a href="portfolio-single.html" class="link white-bg"><i class="fa fa-link"></i></a><a href="assets/images/portfolio/grid/5.jpg" class="zoom main-bg" title="Doing it the Chilled Way"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                        <img alt="" src="assets/images/portfolio/grid/5.jpg">
                                    </div>
                                    <figcaption>
                                        <div class="port-captions">
                                            <h4 class="uppercase"><a class="main-color" href="portfolio-single.html">Doing it the Chilled Way</a></h4>
                                            <p class="description"><a href="#">Design</a>, <a href="#">Development</a></p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="portfolio-item computers">
                                <figure>
                                    <div class="port-img">
                                        <div class="icon-links">
                                            <a href="portfolio-single.html" class="link white-bg"><i class="fa fa-link"></i></a><a href="assets/images/portfolio/grid/6.jpg" class="zoom main-bg" title="Take a Ride in a Luxury Car"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                        <img alt="" src="assets/images/portfolio/grid/6.jpg">
                                    </div>
                                    <figcaption>
                                        <div class="port-captions">
                                            <h4 class="uppercase"><a class="main-color" href="portfolio-single.html">Take a Ride in a Luxury Car</a></h4>
                                            <p class="description"><a href="#">Design</a>, <a href="#">Development</a></p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                    </div>

                </div>
            </div>
        </div>
        
           @include('dprdtd.page.news-sidebar')
    </div>
</div>
@endsection
