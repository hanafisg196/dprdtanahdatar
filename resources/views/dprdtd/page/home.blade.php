@extends('dprdtd.template.main')
@section('content')
<div id="owl-slider" style="width: 77%; margin: auto; height: auto; margin-top: 20px;" class="owl-carousel">
    @foreach ($data['headlines'] as $headline)
    <div class="item">
        <div class="slider-txt">
            <h2 class="white font-30 m-b-0">Girl Injured By Omaha Carnival Ride</h2>
        </div>
        <a href="blog-single.html" class="label label-danger p-a-1" style="position:absolute;left:20px;bottom:100px">READ MORE</a>
        <img alt="" style="height: 400px; width: 100%;object-fit: cover" src="{{asset('storage/'. $headline->images->image)}}" />
    </div>
    @endforeach
</div>
@include('dprdtd.page.component.leader')


@include('dprdtd.page.component.member')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3>Publikasi</h3>
            <div class="tabs bottom-border">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#vision6" data-toggle="tab">Semua</a></li>
                    <li><a href="#mission6" data-toggle="tab">Kegiatan</a></li>
                    <li><a href="#strategy6" data-toggle="tab">Rapat & Acara</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="vision6">
                        <div class="row row-eq-height" style="margin-top: 20px;">
                            <div class="col-md-9 md-padding main-content">
                             @foreach ($data['latestNews'] as  $newsLatest )
                             <div class="blog-posts small-image">
                                <div class="post-item">
                                    <article class="post-content">
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
                                                    <h5><a href="">{{ $newsLatest->title }}</a></h5>


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
                            @include('tanahdatar.template.component.news-sidebar')
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mission6">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa.
                        cursus massa at urnaaculis estie.Mauris in quam tristique, dignissim urna in, molestie felis.
                        Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut cursus massa at urnaaculis estie.
                    </div>
                    <div class="tab-pane fade" id="strategy6">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa.
                        cursus massa at urnaaculis estie.Mauris in quam tristique, dignissim urna in, molestie felis.
                        Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut cursus massa at urnaaculis estie.
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
</div>
@endsection
