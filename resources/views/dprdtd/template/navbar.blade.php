<div class="responsive-nav">
    <!-- top navigation menu start -->
    <nav class="top-nav">
        <ul>
            @foreach ($menu as $menus)
            @if ($menus->type == 0)
            <li class=""><a href="{{ $menus->link }}"><span>{{ $menus->name }}</span></a></li>
            @else
            <li class=""><a href="{{ $menus->link }}"><span>{{ $menus->name }}</span></a>
                <ul>
                    @foreach ($menus->subMenus as $subMenu)
                    <li><a href="{{ $subMenu->sub_link }}"><span>{{ $subMenu->sub_name }}</span></a></li>
                    @endforeach
                </ul>
            </li>
            @endif
            @endforeach
          </ul>
    </nav>
    <!-- top navigation menu end -->
    <div class="f-right">
        <!-- top search start -->
        <div class="top-search">
            <a href="#"><span class="fa fa-search"></span></a>
            <form action="{{route('dprd.news.search')}}" method="post">
                @csrf
            <div class="search-box">
                <input type="text" name="search" placeHolder="Ketik Dan Tekan Enter..." />
            </div>
           </form>
        </div>
        <!-- top search end -->

        <!-- cart start -->
        <!-- cart end -->
    </div>
</div>
