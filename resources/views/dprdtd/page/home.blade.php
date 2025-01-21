@extends('dprdtd.template.main')
@section('content')





{{-- <div class="swiper-container swiper-container-h" style="display: flex; justify-content: center; width: 81%;">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <article class="post-entry">
            <a href="#" class="post-image"><img alt="" src="https://images6.alphacoders.com/134/1346530.jpeg"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta-category">
                    <span class="label label-danger">Technology</span>
                </div>
                <div class="post-entry-meta">
                    <div class="post-entry-meta-title">
                        <h2><a href="#">Test</a></h2>
                    </div>
                    <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                </div>
            </div>
        </article>
     </div>
    </div>
    <div class="swiper-button swiper-next"><i class="fa fa-angle-right"></i></div>
    <div class="swiper-button swiper-prev"><i class="fa fa-angle-left"></i></div>
</div> --}}

<div class="swiper-container swiper-container-h" style="height: 400px">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <article class="post-entry">
                <a href="#" class="post-image"><img alt="" src="/assets/images/demos/magazine/1.jpg"></a>
                <div class="post-entry-overlay">
                    <div class="post-entry-meta-category">
                        <span class="label label-danger">Technology</span>
                    </div>
                    <div class="post-entry-meta">
                        <div class="post-entry-meta-title">
                            <h2><a href="#">Girl Injured By Omaha Carnival Ride</a></h2>
                        </div>
                        <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                    </div>
                </div>
            </article>
        </div>
        <div class="swiper-slide">
            <div class="swiper-container swiper-container-v" style="height: 500px">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <article class="post-entry">
                            <a href="#" class="post-image"><img alt="" src="/assets/images/demos/magazine/7.jpg"></a>
                            <div class="post-entry-overlay">
                                <div class="post-entry-meta-category">
                                    <span class="label label-danger">News</span>
                                </div>
                                <div class="post-entry-meta">
                                    <div class="post-entry-meta-title">
                                        <h2><a href="#">Jersey Family to Split $429.6M Powerball Jackpot</a></h2>
                                    </div>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="post-entry">
                            <a href="#" class="post-image"><img alt="" src="assets/images/demos/magazine/6.jpg"></a>
                            <div class="post-entry-overlay">
                                <div class="post-entry-meta-category">
                                    <span class="label label-danger">Lifestyle</span>
                                </div>
                                <div class="post-entry-meta">
                                    <div class="post-entry-meta-title">
                                        <h2><a href="#">Three Black Female Astronauts Share Their Small</a></h2>
                                    </div>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide">
                        <article class="post-entry">
                            <a href="#" class="post-image"><img alt="" src="assets/images/demos/magazine/5.jpg"></a>
                            <div class="post-entry-overlay">
                                <div class="post-entry-meta-category">
                                    <span class="label label-danger">Sports</span>
                                </div>
                                <div class="post-entry-meta">
                                    <div class="post-entry-meta-title">
                                        <h2><a href="#">10 Tips And Tricks To Learn Any Language</a></h2>
                                    </div>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="swiper-button swiper-up"><i class="fa fa-angle-up"></i></div>
                <div class="swiper-button swiper-down"><i class="fa fa-angle-down"></i></div>
            </div>
        </div>
        <div class="swiper-slide">
            <article class="post-entry">
                <a href="#" class="post-image"><img alt="" src="assets/images/demos/magazine/2.jpg"></a>
                <div class="post-entry-overlay">
                    <div class="post-entry-meta-category">
                        <span class="label label-danger">World</span>
                    </div>
                    <div class="post-entry-meta">
                        <div class="post-entry-meta-title">
                            <h2><a href="#">We Protect our Communities': Cop Watchers Speak</a></h2>
                        </div>
                        <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                    </div>
                </div>
            </article>
        </div>
        <div class="swiper-slide">
            <article class="post-entry">
                <a href="#" class="post-image"><img alt="" src="assets/images/demos/magazine/3.jpg"></a>
                <div class="post-entry-overlay">
                    <div class="post-entry-meta-category">
                        <span class="label label-danger">Political</span>
                    </div>
                    <div class="post-entry-meta">
                        <div class="post-entry-meta-title">
                            <h2><a href="#">conseq uipsum velit auctor auctor, nisi elit conseq </a></h2>
                        </div>
                        <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <!-- Add Pagination -->
    <!-- Add Pagination -->

    <!-- Add Arrows -->
    <div class="swiper-button swiper-next"><i class="fa fa-angle-right"></i></div>
    <div class="swiper-button swiper-prev"><i class="fa fa-angle-left"></i></div>
</div>


@include('dprdtd.page.component.leader')
@include('dprdtd.page.component.member')

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
                                    <p>Kosong</p>
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
