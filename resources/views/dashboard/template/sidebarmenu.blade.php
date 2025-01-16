<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-house-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item has-sub {{ Request::is('dashboard/content*') ? 'active' : '' }}">
            <a href="#" class='sidebar-link'>
            <i class="bi bi-grid-1x2-fill"></i>
                <span>Postingan</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item {{Request::is('dashboard/content/berita*') ? 'active' : ''}}">
                    <a  href="{{route('dashboard.news.post.list')}}" class="submenu-link">
                        <span>Berita</span>
                    </a>
                </li>

                <li class="submenu-item {{Request::is('dashboard/content/article*') ? 'active' : ''}}">
                    <a href="{{route('dashboard.article.list')}}"  class="submenu-link">
                        <span>Artikel</span>
                    </a>
                </li>
                <li class="submenu-item {{Request::is('dashboard/content/pengumuman*') ? 'active' : ''}}">
                    <a href="{{route('dashboard.pengumuman.list')}}" class="submenu-link">
                        <span>Pengumuman</span>
                    </a>
                </li>
                <li class="submenu-item {{Request::is('dashboard/content/agenda*') ? 'active' : ''}}">
                    <a href="{{route('dashboard.agenda.list')}}" class="submenu-link">
                        <span>Agenda</span>
                    </a>
                </li>
           </ul>
        </li>
        <li class="sidebar-item {{ Request::is('filemanager') ? 'active' : '' }}">
            <a  href="{{ route('filemanager') }}" class='sidebar-link'>
                <i class="bi bi-folder-fill"></i>
                <span>File Mananger</span>
            </a>
        </li>
        <livewire:is-admin-menu>
    </ul>
</div>
