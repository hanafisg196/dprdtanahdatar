@extends('dprdtd.template.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ route('home') }}">Beranda</a>
            <i class="fa fa-long-arrow-right main-color"></i><span>Semua Berita</span>
        </div>
    </div>
    <div class="container" style="margin-top: 2%;">
        <div class="row row-eq-height">
            <div class="col-md-9">
                @if ($blogs->isNotEmpty())
                @foreach ($blogs as $blog)
                <div class="blog-posts small-image">
                    <div class="post-item">
                        <article class="post-content">
                            <div class="post-image main-border bot-4-border">
                                <a href="{{ route('dprd.detail.blog', $blog->slug) }}">
                                @if ($blog->images)
                                <img src="{{asset('storage/' . $blog->images->thumbnail)}}" style="width: 800px;"alt="agenda" >
                                @else
                                <img src="{{ asset('dist/assets/compiled/png/broken-image.png') }}" style="width: 800px;"alt="agenda" >
                                @endif
                                </a>
                            </div>
                            <div class="post-item-rit">
                                <div class="post-info-container">
                                    <div class="post-info">
                                        <h4><a href="{{ route('dprd.detail.blog', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                        <ul class="post-meta">
                                            <li class="meta_date"><i class="fa fa-clock-o"></i>{{ dateFormat($blog->created_at) }}</li>
                                            <li class="meta_location">
                                                <i class="fa fa-map-marker"></i> {{ $blog->categories->nama }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="">
                        <hr class="divider dev-style3">
                    </div>
                </div>
                @endforeach
                @else
                <h4 class="text-center">Berita Tidak Di Temukan</h4>
                @endif
                {{ $blogs->links() }}
            </div>
                @include('dprdtd.page.news-sidebar')
            </div>
        </div>
@endsection
