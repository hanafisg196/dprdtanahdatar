<div class="no-padding">
    <div class="heading style4">
        <h4 class="uppercase">Headline</h4>
    </div>
    <div class="row">
        <div class="col-md-5">
            @if ($headline->isNotEmpty())
                <div class="post-item gry-bg p-a-2">
                    <div class="entry-image">
                        <a href="{{route('news.detail', $headline[0]->slug)}}">
                            @if ($headline[0]->images)
                            <img src="{{ asset('storage/' . $headline[0]->images->thumbnail) }}" alt="">
                            @else
                            <img src="{{ asset('dist/assets/compiled/png/broken-image.png') }}" alt="">
                            @endif
                        </a>
                    </div>
                    <article class="post-content">
                        <div class="post-info-container">
                            <div class="post-info">
                                <h3><a class="main-color" href="{{route('news.detail', $headline[0]->slug)}}">{{ $headline[0]->title }}</a></h3>
                                <ul class="post-meta">
                                    <li class="meta-date"><i class="fa fa-clock-o"></i>{{dateFormat($headline[0]->created_at)}}</li>
                                    <li class="meta-category"><i class="fa fa-tag"></i><a href="#">Sports</a></li>
                                </ul>
                            </div>
                        </div>
                         {!! wordLimiter($headline[0]->body, 400) !!}
                        <a class="main-color" href="{{route('news.detail', $headline[0]->slug)}}">Read more</a>
                    </article>
                </div>
            @endif
        </div>
        <div class="col-md-7">
            <div class="row">
                @foreach ($headline->skip(1)->take(4) as $headlines)
                    <div class="col-md-6">
                        <div class="post-item">
                            <div class="entry-image">
                                <a href="{{route('news.detail', $headlines->slug)}}">
                                    @if ($headlines->images)
                                    <img src="{{ asset('storage/' . $headlines->images->thumbnail) }}" alt="">
                                    @else
                                    <img src="{{ asset('dist/assets/compiled/png/broken-image.png') }}" alt="">
                                    @endif
                                </a>
                            </div>
                            <article class="entry-content">
                                <div class="post-info">
                                    <h5><a href="{{route('news.detail', $headlines->slug)}}">{{ wordLimiter($headlines->title, 35)}}</a></h5>
                                    <ul class="post-meta">
                                        <li class="meta-date"><i class="fa fa-clock-o"></i>15 May, 2015</li>
                                        <li class="meta-category"><i class="fa fa-tag"></i><a href="#">Local</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
