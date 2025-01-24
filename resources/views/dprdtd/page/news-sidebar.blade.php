<div class="col-md-4  sidebar" style="padding-top: -30px; margin-bottom: 20px;">
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
                    <livewire:latest-agenda lazy>
                </div>
            </li>
            <li class="widget w-recent-posts">
                <h4 class="widget-title"><span class="main-color">Berita</span>Lainya</h4>
                <div class="widget-content">
                    <livewire:other-news lazy>
                </div>
            </li>
        </ul>
    </div>
</div>
