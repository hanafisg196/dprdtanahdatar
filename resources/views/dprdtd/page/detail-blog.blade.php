@section('title', $blog->title)
@section('description', $blog->description)
@section('keywords', $blog->keyword)
@section('ogurl', route('dprd.member.detail',$blog->slug))
@section('ogtitle', $blog->title)
@section('ogdesc', $blog->description)
@if ($blog->images)
@section('ogimage', asset('storage/' . $blog->images->image))
@else
@section('ogimage', asset(''))
@endif


@extends('dprdtd.template.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ route('home') }}">Beranda</a>
            <i class="fa fa-long-arrow-right main-color"></i>
            <a href="{{ route('dprd.news.all') }}">Berita</a><i
                class="fa fa-long-arrow-right main-color"></i><span>{{ $blog->title }}</span>
        </div>
    </div>
    <div class="container">
        <div class="post-info-container">
            <div class="post-info">
                <h2>{{ $blog->title }}</h2>
                <ul class="post-meta">
                    <li class="meta_date"><i class="fa fa-clock-o"></i>{{dateFormat($blog->created_at)}}</li>
                    <li><i class="fa fa-folder-open"></i>Kategori: <a href="#">{{ $blog->categories->nama}}</a></li>
                </ul>
            </div>
        </div>
        <div class="row row-eq-height">
            <div class="col-md-9 md-padding main-content">
                <div class="blog-single">
                    <div class="post-item">
                        <div class="details-img">
                            @if ($blog->images)
                            <img src="{{ asset('storage/' . $blog->images->image) }}" alt="blog">
                            @else
                            <img src="{{ asset('dist/assets/compiled/png/broken-image.png') }}" alt="blog">
                            @endif

                        </div>
                        <article class="post-content">
                            {!! $blog->body !!}
                        </article>
                    </div>
                </div>
            </div>
        @include('dprdtd.page.news-sidebar')
        </div>
    </div>
@endsection
