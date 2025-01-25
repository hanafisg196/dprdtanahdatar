@extends('dprdtd.template.main')
@section('content')
@section('title', $blog->title)
{{-- @section('description', $blog->description)
@section('keywords', $blog->keyword)
@section('ogurl', route('dprd.member.detail',$blog->slug))
@section('ogtitle', $blog->title)
@section('ogdesc', $blog->description)
@section('ogimage', asset('storage/' . $blog->images->image)) --}}
    <div class="breadcrumbs">
        <div class="container">
            <a href="#}">Beranda</a>
            <i class="fa fa-long-arrow-right main-color"></i>
            <a href="#">Berita</a><i
                class="fa fa-long-arrow-right main-color"></i><span>test</span>
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
                            <img src="{{ asset('storage/' . $blog->images->image) }}" alt="blog">
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
