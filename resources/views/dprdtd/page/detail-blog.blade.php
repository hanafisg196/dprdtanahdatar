@extends('dprdtd.template.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <a href="#">Home</a><i class="fa fa-long-arrow-right main-color"></i><a href="#">Blog</a><i
                class="fa fa-long-arrow-right main-color"></i><span>Blog Post
                Details</span>
        </div>
    </div>

    <div class="container">
        <div class="post-info-container">
            <div class="post-info">
                <h2>{{ $blog->title }}</h2>
                <ul class="post-meta">
                    <li><i class="fa fa-book post-icon main-color"></i></li>
                    <li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a>
                    </li>
                    <li class="meta_date"><i class="fa fa-clock-o"></i>15 May, 2016</li>
                    <li><i class="fa fa-folder-open"></i>Category: <a href="#">Corporate News</a></li>
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
        </div>
    </div>
@endsection
