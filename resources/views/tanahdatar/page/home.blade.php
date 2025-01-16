@extends('tanahdatar.template.main')
@section('content')
        <!-- SwiperContent Start -->
        @include('tanahdatar.template.component.slider-content')
        <!-- SwiperContent end -->
        <!-- TagLine end -->
	  	@include('tanahdatar.template.component.tag-line')
        <!-- TagLine end -->
        <div class="md-padding">
            <div class="container">
                @include('tanahdatar.template.component.headline')
                @include('tanahdatar.template.component.latest-news')
                @include('tanahdatar.template.component.announcment')
                @include('tanahdatar.template.component.link-skpd')
                @include('tanahdatar.template.component.galery')
            </div>
         </div>
@endsection
