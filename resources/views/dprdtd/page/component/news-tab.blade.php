<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="heading style4">
                <h4 class="uppercase">Berita</h4>
            </div>
            <div class="tabs bottom-border">
                <ul class="nav nav-tabs">
                    <li class="active" style="font-size: 1.8rem;"><a href="#vision6" data-toggle="tab">Semua</a></li>
                    @foreach ($data['blogTabs'] as $index => $blogTab)
                    <li class="{{ $index === 0 ? '' : '' }}"style="font-size: 1.8rem;">
                        <a href="#blogTab{{ $blogTab->id }}"
                           data-toggle="tab"
                           role="tab">
                           {{ $blogTab->nama }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="vision6">
                        <div class="row row-eq-height">
                            <div class="col-md-9">
                                @if ($data['latestNews']->isNotEmpty())
                                @foreach ($data['latestNews'] as  $newsLatest )
                                <div class="blog-posts small-image">
                                   <div class="post-item">
                                       <article class="post-content">
                                           <div class="post-image main-border bot-4-border">
                                               <a href="{{ route('dprd.detail.blog', $newsLatest->slug) }}">
                                                @if ($newsLatest->images)
                                                <img src="{{ asset('storage/' . $newsLatest->images->thumbnail) }}" style="width: 800px;" alt="Our Blog post goes here">
                                                @else
                                                <img src="{{ asset('dist/assets/compiled/png/broken-image.png') }}" style="width: 800px;" alt="Our Blog post goes here">
                                                @endif

                                               </a>
                                           </div>
                                           <div class="post-item-rit">
                                               <div class="post-info-container">
                                                   <div class="post-info">
                                                       <ul class="post-meta">
                                                           <li class="meta_date"><i class="fa fa-folder-o"></i><a href="#">{{$newsLatest->categories->nama}}</a></li>
                                                           <li class="meta_date mt-1"><i class="fa fa-clock-o"></i>{{dateFormat($newsLatest->created_at)}}</li>
                                                        </ul>
                                                       <h4>
                                                       <a href="{{ route('dprd.detail.blog', $newsLatest->slug) }}" >
                                                           {{ $newsLatest->title }}
                                                       </a>
                                                       </h4>
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
                                <div style="display: flex; justify-content: center;">
                                   <a class="btn main-bg" href="{{route('dprd.news.all')}}"><i class="fa fa-book"></i>Semua</a>
                                </div>
                                @else
                                <h4 class="text-center">Tidak Ada Data</h4>
                                @endif
                            </div>
                            @include('dprdtd.page.news-sidebar')
                        </div>
                    </div>
                    @foreach ($data['blogTabs']  as $index => $blogTab)
                    <div class="tab-pane fade" id="blogTab{{ $blogTab->id }}">
                        <div class="row row-eq-height">
                            <div class="col-md-9">
                             @if ($blogTab->news->isNotEmpty())
                             @foreach ($blogTab->news as  $blog)
                             <div class="blog-posts small-image">
                                <div class="post-item">
                                    <article class="post-content">
                                        <div class="post-image main-border bot-4-border">
                                            <a href="{{ route('dprd.detail.blog', $newsLatest->slug) }}">
                                                @if ($blog->images)
                                                <img src="{{ asset('storage/' . $blog->images->thumbnail) }}" style="width: 800px;" alt="Our Blog post goes here">
                                                @else
                                                <img src="{{ asset('dist/assets/compiled/png/broken-image.png') }}" style="width: 800px;" alt="Our Blog post goes here">
                                                @endif

                                            </a>
                                        </div>
                                        <div class="post-item-rit">
                                            <div class="post-info-container">
                                                <div class="post-info">
                                                    <ul class="post-meta">
                                                        <li class="meta_date"><i class="fa fa-folder-o"></i><a href="#">{{$blog->categories->nama}}</a></li>
                                                        <li class="meta_date"><i class="fa fa-clock-o"></i>{{dateFormat($blog->created_at)}}</li>
                                                        </ul>
                                                    <h4><a href="{{ route('dprd.detail.blog', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="xs-padding">
                                    <hr class="divider dev-style3">
                                </div>
                            </div>
                             @endforeach
                             <div style="display: flex; justify-content: center;">
                                <a class="btn main-bg" href="{{route('dprd.news.all')}}"><i class="fa fa-book"></i>Semua</a>
                             </div>
                             @else
                             <h4 class="text-center">Tidak Ada Data</h4>
                             @endif
                            </div>
                            @include('dprdtd.page.news-sidebar')
                        </div>

                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </div>

</div>
