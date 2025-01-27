<header class="top-head minimal no-border">
    <div class="container">
        <!-- Logo start -->
        <div class="logo">
            <a href="{{ route('home') }}"><img alt="" src="/dist/assets/compiled/jpg/logotanahdatar.png" /></a>
            <div class="text">
                <h3>DEWAN PERWAKILAN RAKYAT DAERAH</h3>
                <h3 class="subtitle">Tanah Datar</h3>
            </div>
        </div>
        <!-- Logo end -->
          <div class="responsive-nav">
              <!-- top navigation menu start -->
              <nav class="top-nav boxes" aria-label="false">
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
                <div class="top-search short">
                    <a href="#" class="main-bg"><span class="fa fa-search"></span></a>
                    <form action="{{route('dprd.news.search')}}" method="post">
                        @csrf
                    <div class="search-box">
                        <input type="text" name="search" placeHolder="Ketik Dan Tekan Enter..." />
                    </div>
                   </form>
                </div>
                <!-- top search end -->
            </div>
          </div>
    </div>
</header>


		<!-- Header start -->
        {{-- <header class="top-head transparent semi dark fixed-head full">

            <div class="container">

                <!-- Logo start -->
                <div class="logo">
                    <a href="index.html"><img alt="" src="assets/images/logo.png" /></a>
                </div>
                <!-- Logo end -->

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
                </div>
            </div>
        </header> --}}
        <!-- Header start -->
