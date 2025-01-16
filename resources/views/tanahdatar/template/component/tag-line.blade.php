<div class="gry-bg">
    <div class="container">
      <div class="break-news">
          <span class="lbl label label-danger">Breaking News</span>
          <div class="vertical-slider" data-slides_count="1" data-scroll_amount="1" data-slider-speed="300" data-slider-infinite="1" data-slider-dots="0" data-slider-arrows="1" data-slider-auto="1">
            @foreach ($breakingNews as $brekNews)
              <div>
                <a href="{{ $brekNews->link }}">{{ $brekNews->title }}</a>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</div>
