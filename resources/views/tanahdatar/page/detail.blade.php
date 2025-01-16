@extends('tanahdatar.template.main')
@section('content')
@section('title', $news->title)
@section('description', $news->description)
@section('keywords', $news->keyword)
@section('ogurl', route('news.detail',$news->slug))
@section('ogtitle', $news->title)
@section('ogdesc', $news->description)
@section('ogimage', asset('storage/' . $news->images->image))
@section('content')
<div class="breadcrumbs">
    <div class="container">
         <a href="{{ route('home') }}">Beranda</a><i class="fa fa-long-arrow-right main-color">
        </i><a href="{{ route('news.detail', $news->slug) }}">{{ $news->title }}</a>

    </div>
</div>
<div class="container">
    <div class="row row-eq-height">
        <div class="col-md-9 md-padding main-content">
            <div class="blog-single">
               <!-- .post-item start -->
                <div class="post-item">
                    <h1>{{ $news->title }}</h1>
                    <div class="details-img">
                        <img src="{{ asset('storage/'. $news->images->image) }}" alt="Our Blog post goes here">
                    </div>
                    <article class="post-content">
                        <div class="post-info-container">
                            <div class="post-info">
                                <ul class="post-meta">
                                    <li><i class="fa fa-book post-icon main-color"></i></li>
                                    <li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
                                    <li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2016</li>
                                    <li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
                                </ul>
                            </div>
                        </div>

                            {!! $news->body !!}

                        <div class="post-tools">
                            <div class="post-tags">
                                <i class="fa fa-tags"></i><span class="main-color"><strong>Tags: </strong> </span>
                                <a href="#">Responsive</a>,
                                <a href="#"> Business</a>,
                                <a href="#"> HTML</a>,
                                <a href="#"> Design</a>,
                                <a href="#"> WordPress</a>
                            </div>
                        </div>
                    </article>
                </div>
                <livewire:create-comment :newsId="$news->id" />

            </div>

        </div>
        @include('tanahdatar.template.component.news-sidebar')
    </div>
</div>
@endsection
