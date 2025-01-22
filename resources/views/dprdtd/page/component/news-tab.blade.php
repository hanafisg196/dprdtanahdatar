<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Publikasi</h3>
            <div class="tabs bottom-border">
                <ul class="nav nav-tabs">
                    <li class="active" style="font-size: 1.8rem;"><a href="#vision6" data-toggle="tab">Semua</a></li>
                    <li style="font-size: 1.8rem;"><a href="#mission6" data-toggle="tab">Kegiatan</a></li>
                    <li style="font-size: 1.8rem;"><a href="#strategy6" data-toggle="tab">Rapat & Acara</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="vision6">
                        <div class="row row-eq-height">
                            <div class="col-md-9">
                             @foreach ($data['latestNews'] as  $newsLatest )
                             <div class="blog-posts small-image">
                                <div class="post-item">
                                    <article class="post-content"   >
                                        <div class="post-image main-border bot-4-border">
                                            <a href="blog-single.html">
                                                <img src="{{ asset('storage/' . $newsLatest->images->image) }}" alt="Our Blog post goes here">
                                            </a>
                                        </div>
                                        <div class="post-item-rit">
                                            <div class="post-info-container">
                                                <div class="post-info">
                                                    <ul class="post-meta">
                                                        <li class="meta_date"><i class="fa fa-folder-o"></i><a href="#">{{$newsLatest->categories->nama}}</a></li>
                                                        <li class="meta_date"><i class="fa fa-clock-o"></i>{{dateFormat($newsLatest->created_at)}}</li>
                                                        </ul>
                                                    <h4><a href="">{{ $newsLatest->title }}</a></h4>
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
                            </div>
                            @include('dprdtd.page.news-sidebar')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mission6">
                        <div class="row row-eq-height">
                            <div class="col-md-9">
                             @foreach ($data['kegiatans'] as  $kegiatan )
                             <div class="blog-posts small-image">
                                <div class="post-item">
                                    <article class="post-content">
                                        <div class="post-image main-border bot-4-border">
                                            <a href="blog-single.html">
                                                <img src="{{ asset('storage/' . $kegiatan->images->image) }}" alt="Our Blog post goes here">
                                            </a>
                                        </div>
                                        <div class="post-item-rit">
                                            <div class="post-info-container">
                                                <div class="post-info">
                                                    <ul class="post-meta">
                                                        <li class="meta_date"><i class="fa fa-folder-o"></i><a href="#">{{$kegiatan->categories->nama}}</a></li>
                                                        <li class="meta_date"><i class="fa fa-clock-o"></i>{{dateFormat($kegiatan->created_at)}}</li>
                                                        </ul>
                                                    <h4><a href="">{{ $kegiatan->title }}</a></h4>
                                                </div>
                                            </div>
                                             <a class="more_btn main-color" href="">Lihat</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="xs-padding">
                                    <hr class="divider dev-style3">
                                </div>
                            </div>
                             @endforeach
                            </div>
                            @include('dprdtd.page.news-sidebar')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="strategy6">
                        <div class="row row-eq-height">
                            <div class="col-md-9">
                             @foreach ($data['rapats'] as  $rapat )
                             <div class="blog-posts small-image">
                                <div class="post-item">
                                    <article class="post-content">
                                        <div class="post-image main-border bot-4-border">
                                            <a href="blog-single.html">
                                                <img src="{{ asset('storage/' . $rapat->images->image) }}" alt="Our Blog post goes here">
                                            </a>
                                        </div>
                                        <div class="post-item-rit">
                                            <div class="post-info-container">
                                                <div class="post-info">
                                                    <ul class="post-meta">
                                                        <li class="meta_date"><i class="fa fa-folder-o"></i><a href="#">{{$rapat->categories->nama}}</a></li>
                                                        <li class="meta_date"><i class="fa fa-clock-o"></i>{{dateFormat($rapat->created_at)}}</li>
                                                        </ul>
                                                    <h4><a href="">{{ $rapat->title }}</a></h4>
                                                </div>
                                            </div>
                                             <a class="more_btn main-color" href="">Lihat</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="xs-padding">
                                    <hr class="divider dev-style3">
                                </div>
                            </div>
                             @endforeach
                            </div>
                            @include('dprdtd.page.news-sidebar')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
