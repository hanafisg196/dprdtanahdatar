@extends('dprdtd.template.main')
@section('content')
<div id="owl-slider" style="width: 81%; margin: auto; height: auto; margin-top: 20px;" class="owl-carousel">
    @foreach ($data['headlines'] as $headline)
    <div class="item">
        <div class="slider-txt">
            <a href="{{ route('dprd.detail.blog', $headline->slug) }}">
            <h2 class="white font-30 m-b-0">

                {{ $headline->title }}
            </h2>
            </a>
        </div>
        <a href="{{ route('dprd.detail.blog', $headline->slug) }}" class="label label-danger p-a-1" style="position:absolute;left:20px;bottom:100px">LIHAT</a>
        <img alt="" style="height: 400px; width: 100%;object-fit: cover; border-radius: 5px;" src="{{asset('storage/'. $headline->images->image)}}" />
    </div>
    @endforeach
</div>
@include('dprdtd.page.component.leader')
@include('dprdtd.page.component.member')
@include('dprdtd.page.component.news-tab')
</div>
<script>
      var owl = $('.owl-carousel');
         owl.owlCarousel({
             items: 1,
             loop: true,
             margin: 10,
             autoplay: true,
             autoplayTimeout: 2000,
             autoplayHoverPause: true
         });
         $('.play').on('click', function() {
             owl.trigger('play.owl.autoplay', [1000])
         })
         $('.stop').on('click', function() {
             owl.trigger('stop.owl.autoplay')
         });
</script>
@endsection
