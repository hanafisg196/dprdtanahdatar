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
        <div class="col-md-9 md-padding main-content">
           
        </div>
           @include('dprdtd.page.news-sidebar')
    </div>
</div>
@endsection
