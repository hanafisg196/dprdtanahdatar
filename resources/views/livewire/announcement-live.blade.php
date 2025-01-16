<div>
    {{-- Success is as dangerous as failure. --}}

        <div class="col-md-12">
            <div class="tabs bordered gr-bg top-border">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#vision5" data-toggle="tab"><i class="fa fa-bullhorn main-color"></i>Pengumuman</a></li>
                    <li><a href="#mission5" data-toggle="tab"><i class="fa fa-check-square-o main-color"></i>Agenda Kegiatan</a></li>
                    <li><a href="#strategy5" data-toggle="tab"><i class="fa fa-book main-color"></i>Artikel/Tulisan</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                   <div class="tab-pane fade in active" id="vision5">
                        <div class="md-padding" style="margin-top: -60px;">
                            <div class="portfolio p-1-col simple" id="container">
                           @foreach ($announcements as $announcement)
                           <div class="portfolio-item develop">
                            <div class="img-holder">
                                <img alt="" src="assets/images/conference.png" width="60px;" height="60px;">
                            </div>
                                <div class="name-holder">
                                    <h4><a href="portfolio-single.html">{{ $announcement->title }}</a></h4>
                                    <div class="meta">
                                        <ul class="list">
                                            <li><i class="fa fa-clock-o main-color"></i> <strong>Tanggal:&nbsp;</strong>{{dateFormat($announcement->created_at)}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mission5">
                        <div class="md-padding" style="margin-top: -60px;">
                            <div class="portfolio p-1-col simple" id="container">
                           @foreach ($agendas as $agenda)
                           <div class="portfolio-item develop">
                            <div class="img-holder">
                                <img alt="" src="assets/images/timetable.png" width="60px;" height="60px;">
                            </div>
                                <div class="name-holder">
                                    <h4><a href="portfolio-single.html">{{ $agenda->title }}</a></h4>
                                    <div class="meta">
                                        <ul class="list">
                                            <li><i class="fa fa-clock-o main-color"></i> <strong>Mulai:</strong> {{$agenda->waktu_mulai}}
                                               &nbsp; <strong>Sampai:</strong> {{$agenda->waktu_selesai}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="strategy5">
                        <div class="md-padding" style="margin-top: -60px;">
                            <div class="portfolio p-1-col simple" id="container">
                                @foreach ($articles as $article)
                                <div class="portfolio-item develop">
                                    <div class="img-holder">
                                        {{-- <img alt="" src="{{ $article->baners ?  asset('storage/'.$article->baners->thumbnail : 'dist/assets/compiled/png/broken-image.png')  }}"  width="160px;" height="120px;"> --}}
                                    <img alt="" src="{{$article->images ?   asset('storage/'.$article->images->thumbnail) : asset('dist/assets/compiled/png/broken-image.png') }}"
                                     width="200;px;" height="120px">
                                    </div>
                                    <div class="name-holder">
                                        <h4><a href="portfolio-single.html">{{ $article->title }}</a></h4>
                                        <div class="meta">
                                            <ul class="list">
                                                <li><i class="fa fa-clock-o main-color"></i> <strong>Tanggal:</strong> {{dateFormat($article->created_at)}}</li>
                                                <li><i class="fa fa-folder-open-o main-color"></i> <strong>Kategori:</strong> <a href="#">{{$article->articleCategories->nama}}</a></li>
                                                <li><i class="fa fa-user main-color"></i> <strong>Oleh:&nbsp;</strong>Saya</li>
                                                {{-- <li><i class="fa fa-tags main-color"></i> <strong>Tags:</strong> <a href="#">News</a>, <a href="#">Computers</a>, <a href="#">Just Food</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
