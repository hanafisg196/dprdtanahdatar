<div class="container">
    <div class="row row-eq-height">
        <div class="col-md-9 md-padding main-content">
         @foreach ($news as  $newsContent )
         <div class="blog-posts small-image">
            <div class="post-item">
                <article class="post-content">
                    <div class="post-image main-border bot-4-border">
                        <a href="blog-single.html">
                            <img src="{{ asset('storage/' . $newsContent->images->image) }}" alt="Our Blog post goes here">
                        </a>
                    </div>
                    <div class="post-item-rit">
                        <div class="post-info-container">
                            <div class="post-info">
                                <h5><a href="{{ route('news.detail', $newsContent->slug) }}">{{ $newsContent->title }}</a></h5>
                                <ul class="post-meta">
                                    <li class="meta-user"><i class="fa fa-user"></i><a href="#">{{$newsContent->users->opds->nama_opd}}</a></li>
                                </ul>
                                <ul class="post-meta" style="margin-top: -2%">
                                <li class="meta_date"><i class="fa fa-folder-o"></i><a href="#">{{$newsContent->categories->nama}}</a></li>
                                <li class="meta_date"><i class="fa fa-clock-o"></i>{{dateFormat($newsContent->created_at)}}</li>
                                <li><a href="#"><i class="fa fa-comments"></i><span>0</span></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i><span>0</span></a>
                                </ul>

                            </div>
                        </div>
                            {!! wordLimiter($newsContent->body, 400) !!}
                         <a class="more_btn main-color" href="{{ route('news.detail', $newsContent->slug) }}">Read More</a>
                    </div>
                </article>
            </div>
            <div class="xs-padding">
                <hr class="divider dev-style3">
            </div>
        </div>
         @endforeach
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
        @include('tanahdatar.template.component.news-sidebar')
    </div>
</div>
