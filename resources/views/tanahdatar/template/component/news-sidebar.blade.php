<div class="col-md-4 md-padding sidebar">
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
            <li class="widget widget-categories">
                <h4 class="widget-title"><span class="main-color">Tau</span>tan</h4>
                <div class="tabs"  style="margin-top: 10px;">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#pemerintah" data-toggle="tab"><i class="fa fa-eye main-color"></i>Pemerintah</a></li>
                        <li><a href="#opd" data-toggle="tab"><i class="fa fa-clock-o main-color"></i>OPD/Bagian</a></li>
                    </ul>
                    <livewire:link-sidebar lazy>
                </div>
            </li>
            <li class="widget w-recent-posts">
                <h4 class="widget-title"><span class="main-color">BERITA </span>LAINYA</h4>
                <div class="widget-content">
                    <livewire:other-news lazy>
                </div>
            </li>
            <li class="widget w-recent-posts">
                <h4 class="widget-title"><span class="main-color">GPR </span>KOMINFO</h4>
                <div class="widget-content">
                    <ul>
                        <livewire:gpr-kominfo>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</div>
