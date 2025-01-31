@extends('dprdtd.template.main')
@section('content')
<div class="container">
<div class="heading style4" style="margin-top: 20px; margin-bottom: -5px;">
    <h4 class="uppercase">Berita Terkini</h4>
</div>
</div>
<div id="owl-slider" class="owl-carousel owl-theme" style="width: 81%; margin: auto; height: auto; margin-top: 20px;">
    @foreach ($data['headlines'] as $headline)
        <div class="item">
            <div class="slider-txt">
                <a href="{{ route('dprd.detail.blog', $headline->slug) }}">
                    <h2 class="white font-30 m-b-0">
                        {{ $headline->title }}
                    </h2>
                </a>
            </div>
            <a href="{{ route('dprd.detail.blog', $headline->slug) }}" class="label label-danger p-a-1"
                style="position:absolute;left:20px;bottom:100px">LIHAT</a>
            <img alt="" style="height: 400px; width: 100%;object-fit: cover; border-radius: 5px;"
                src="{{ asset('storage/' . $headline->images->image) }}" />
        </div>
    @endforeach
</div>

@include('dprdtd.page.component.leader')
@include('dprdtd.page.component.member')
@include('dprdtd.page.component.news-tab')
</div>
<script>
    $(document).ready(function(){
        $("#owl-slider").owlCarousel({
            nav: true,
            dots: false,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        });
    });
</script>

@endsection
