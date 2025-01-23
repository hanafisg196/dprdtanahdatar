<div class="col-md-4  sidebar" style="padding-top: -30px;">
    <div class="sidebar-widgets">
        <ul>
            <li class="widget search-widget">
                <h4 class="widget-title"><span class="main-color">Pencarian</span> Berita</h4>
                <div class="widget-content">
                    <form action="#" method="get">
                        <input type="text" name="t" id="t2-search" class="txt-box" placeholder="Enter search keyword..." />
                        <button type="submit" class="main-color"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </li>
            <li class="widget w-recent-posts">
                <h4 class="widget-title"><span class="main-color">Age</span>nda</h4>
                <div class="widget-content">
                    <ul>
                        @foreach ($data['agendas'] as $agenda)
                        <li>
                            <div class="post-img">
                                <a href="blog-single.html"><img src="{{asset('dist/assets/compiled/jpg/agenda.jpg')}}" alt=""></a>
                            </div>
                            <div class="widget-post-info">
                                <h5><a href="blog-single.html">{{ $agenda->title }}</a></h5>
                                <div class="meta">
                                    <span><i class="fa fa-clock-o"></i>{{ $agenda->waktu_mulai }}</span>
                                    <span><i class="fa fa-map-marker"></i>{{ $agenda->tempat }}</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <li class="widget w-recent-posts">
                <h4 class="widget-title"><span class="main-color">Berita</span>Lainya</h4>
                <div class="widget-content">
                    <ul>
                        @foreach ($data['randomNews'] as $randomNews)
                        <li>
                            <div class="post-img">
                                <a href="blog-single.html"><img src="{{asset('dist/assets/compiled/jpg/agenda.jpg')}}" alt=""></a>
                            </div>
                            <div class="widget-post-info">
                                <h5><a href="blog-single.html">{{ $randomNews->title }}</a></h5>
                                <div class="meta">
                                    <span><i class="fa fa-clock-o"></i>{{dateFormat($randomNews->waktu_mulai )}}</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</div>
