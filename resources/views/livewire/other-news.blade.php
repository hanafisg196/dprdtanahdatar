<div>
    <ul>
        @foreach ($randomNews as $ranNews)
            <li>
                <div class="post-img">
                    <a href="{{route('dprd.detail.blog', $ranNews->slug)}}">
                        @if ($ranNews->image)
                        <img src="{{asset('storage/'.$ranNews->images->thumbnail)}}" alt="">
                        @else
                        <img src="{{ asset('dist/assets/compiled/png/broken-image.png') }}" alt="">
                        @endif

                    </a>
                </div>
                <div class="widget-post-info">
                    <h5><a href="{{route('dprd.detail.blog', $ranNews->slug)}}">{{ wordLimiter($ranNews->title, 30) }}</a></h5>
                    <div class="meta">
                        <span><i class="fa fa-clock-o"></i>{{dateFormat($ranNews->created_at)}},</span><a href="blog-single.html"><i
                            class="fa fa-comments"></i>0</a>
                    </div>`
                </div>
            </li>
        @endforeach
    </ul>
</div>
