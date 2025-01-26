@extends('dprdtd.template.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ route('home') }}">Beranda</a><i class="fa fa-long-arrow-right main-color"></i><a href="#">Semua Agenda</a>
        </div>
    </div>

    <div class="container">
        <div class="row row-eq-height">
                <div class="col-md-9 md-padding main-content">
                    <div class="blog-posts small-image">
                        <div class="post-item">
                            @foreach ($agendas as $agenda)
                            <article class="post-content">
                                <div class="post-image main-border bot-4-border">
                                    <a href="blog-single.html">
                                    <img src="{{asset('dist/assets/compiled/jpg/agenda.jpg')}}"alt="agenda">
                                    </a>
                                </div>
                                <div class="post-item-rit">
                                    <div class="post-info-container">
                                        <div class="post-info">
                                            <h4>{{ $agenda->title }}</h4>
                                            <ul class="post-meta">
                                                <li class="meta_date"><i class="fa fa-clock-o"></i>{{ dateFormat($agenda->mulai) }}</li>
                                                <li class="meta_location">
                                                    <i class="fa fa-map-marker"></i> {{ $agenda->tempat }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                        </div>
                        <div class="">
                            <hr class="divider dev-style3">
                        </div>
                    </div>
                </div>
                @include('dprdtd.page.news-sidebar')
            </div>
        </div>
@endsection
