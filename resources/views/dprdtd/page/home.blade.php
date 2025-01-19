@extends('dprdtd.template.main')
@section('content')
<div class="container gry-bg" style="padding: 20px; margin-top: 30px; margin-bottom: 30px;">
    <div class="row" style="justify-content: center; margin-left: -5px; margin-right: -5px;">
        @foreach(range(1, 4) as $item)
        <div class="col-xs-6 custom-col" style="padding: 5px;">
            <div class="thumbnail" style="background-color: #fff; margin: 0; position: relative; overflow: hidden;">
                <img src="https://dprd.padang.go.id/uploads/images/image_big_671725456e3c1.jpg" alt="Foto" class="img-responsive">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.5); color: white; text-align: center; padding: 10px; font-size: 14px;">
                    WAKIL KETUA {{$item}}
                </div>
            </div>
            <p class="text-center">TEST NAME</p>
        </div>
        @endforeach

        {{-- @for ($i = 0; $i < 3; $i++)
        <div class="col-xs-6 custom-col" style="padding: 5px;">
            <a class="btn rect-angles btn-gry-border" href="#" style="width: 260px;">
                <i class="fa fa-crop"></i> Angled Button
            </a>
        </div>
        @endfor --}}
    </div>
</div>

<div class="container gry-bg" style="padding: 20px; margin-top: 50px; margin-bottom: 30px;">
    <div class="horizontal-slider marginelements show-arrows" data-slides_count="5" data-scroll_amount="1" data-slider-speed="600" data-center-mode="1" data-slider-infinite="1" data-slider-dots="0" data-slider-arrows="1">
        @for ($i = 0; $i < 7; $i++)
        <div>
            <a class="zoom" href="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <img alt="" src="https://dprd.padang.go.id/uploads/images/image_default_6718a9cfe05ec.jpg">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0, 0, 0, 0.5); color: white; text-align: center; font-size: 14px;">
                    Christian Rudi Kurniawan
                </div>
            </a>
        </div>
        @endfor
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="filter-by style2">
                <ul id="filters">
                    <li class="selected"><a href="#semua" data-toggle="tab"><span>Semua</span></a></li>
                    <li class=""><a href="#kegiatan" data-toggle="tab"><span>Kegiatan</span></a></li>
                    <li class=""><a href="#rapat" data-toggle="tab"><span>Rapat & Acara</span></a></li>
                    <li class=""><a href="#artikel" data-toggle="tab"><span>Artikel</span></a></li>
                </ul>
            </div>
            <div class="row row-eq-height">
                <div class="col-md-9 md-padding main-content">
                    <div class="tab-content">
                      <div class="tab-pane fade in active" id="semua">
                        <div class="blog-posts small-image">
                            <div class="post-item">
                                <article class="post-content">
                                    <div class="post-media main-border bot-4-border">
                                        <img src="/assets/images/blog/large/1.jpg" alt="blog-post">
                                    </div>
                                    <div class="post-item-rit">
                                        <div class="post-info-container">
                                            <div class="post-info">
                                                <h4><a href="blog-single.html">Mauris mauris ante, blandit et, ultrices a, suscipit eget.</a></h4>
                                                <ul class="post-meta">
                                                    <li class="main-bg"><i class="fa fa-video-camera"></i></li>
                                                    <li class="meta_date"><i class="fa fa-folder-o"></i>in: <a href="#">Entertainment</a></li>
                                                    <li class="meta_date"><i class="fa fa-clock-o"></i>15 May 2016</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>
                                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. 
                                            <a class="more_btn main-color" href="blog-single.html">Read More</a>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane fade in" id="kegiatan">
                            <div class="blog-posts small-image">
                                <div class="post-item">
                                    <article class="post-content">
                                        <div class="post-media main-border bot-4-border">
                                            <img src="/assets/images/blog/large/1.jpg" alt="blog-post">
                                        </div>
                                        <div class="post-item-rit">
                                            <div class="post-info-container">
                                                <div class="post-info">
                                                    <h4><a href="blog-single.html">Mauris mauris ante, blandit et, ultrices a, suscipit eget.</a></h4>
                                                    <ul class="post-meta">
                                                        <li class="main-bg"><i class="fa fa-video-camera"></i></li>
                                                        <li class="meta_date"><i class="fa fa-folder-o"></i>in: <a href="#">Entertainment</a></li>
                                                        <li class="meta_date"><i class="fa fa-clock-o"></i>15 May 2016</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p>
                                                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. 
                                                <a class="more_btn main-color" href="blog-single.html">Read More</a>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                      </div>
                      <div class="tab-pane fade in" id="rapat">
                        <div class="blog-posts small-image">
                            <div class="post-item">
                                <article class="post-content">
                                    <div class="post-media main-border bot-4-border">
                                        <img src="/assets/images/blog/large/1.jpg" alt="blog-post">
                                    </div>
                                    <div class="post-item-rit">
                                        <div class="post-info-container">
                                            <div class="post-info">
                                                <h4><a href="blog-single.html">Mauris mauris ante, blandit et, ultrices a, suscipit eget.</a></h4>
                                                <ul class="post-meta">
                                                    <li class="main-bg"><i class="fa fa-video-camera"></i></li>
                                                    <li class="meta_date"><i class="fa fa-folder-o"></i>in: <a href="#">Entertainment</a></li>
                                                    <li class="meta_date"><i class="fa fa-clock-o"></i>15 May 2016</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>
                                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. 
                                            <a class="more_btn main-color" href="blog-single.html">Read More</a>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane fade in" id="artikel">
                        <div class="blog-posts small-image">
                            <div class="post-item">
                                <article class="post-content">
                                    <div class="post-media main-border bot-4-border">
                                        <img src="/assets/images/blog/large/1.jpg" alt="blog-post">
                                    </div>
                                    <div class="post-item-rit">
                                        <div class="post-info-container">
                                            <div class="post-info">
                                                <h4><a href="blog-single.html">Mauris mauris ante, blandit et, ultrices a, suscipit eget.</a></h4>
                                                <ul class="post-meta">
                                                    <li class="main-bg"><i class="fa fa-video-camera"></i></li>
                                                    <li class="meta_date"><i class="fa fa-folder-o"></i>in: <a href="#">Entertainment</a></li>
                                                    <li class="meta_date"><i class="fa fa-clock-o"></i>15 May 2016</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>
                                            Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate. Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. 
                                            <a class="more_btn main-color" href="blog-single.html">Read More</a>
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="pager">
                        <ul class="pagination style2">
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li class="selected"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                @include('dprdtd.page.news-sidebar')
            </div>
        </div>
    </div>
</div>
@endsection
