<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class='sidebar-link'>
                <i class="bi bi-house-fill"></i>
                <span>Beranda</span>
            </a>
        </li>
        <li class="sidebar-item has-sub {{ Request::is('dashboard/konten*') ? 'active' : '' }}">
            <a href="#" class='sidebar-link'>
            <i class="bi bi-grid-1x2-fill"></i>
                <span>Postingan</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item {{Request::is('dashboard/konten/berita*') ? 'active' : ''}}">
                    <a  href="{{route('dashboard.news.post.list')}}" class="submenu-link">
                        <span>Blog</span>
                    </a>
                </li>
                <li class="submenu-item {{Request::is('dashboard/konten/agenda*') ? 'active' : ''}}">
                    <a href="{{route('dashboard.agenda.list')}}" class="submenu-link">
                        <span>Agenda</span>
                    </a>
                </li>

                <li class="submenu-item {{Request::is('dashboard/konten/anggota*') ? 'active' : ''}}">
                    <a  href="{{route('dashboard.member.list')}}" class="submenu-link">
                        <span>Anggota</span>
                    </a>
                </li>

                <li class="submenu-item {{Request::is('dashboard/konten/partai*') ? 'active' : ''}}">
                    <a  href="{{route('dashboard.party.list')}}" class="submenu-link">
                        <span>Partai</span>
                    </a>
                </li>
           </ul>
        </li>
        {{-- <li class="sidebar-item {{ Request::is('filemanager') ? 'active' : '' }}">
            <a  href="{{ route('filemanager') }}" class='sidebar-link'>
                <i class="bi bi-folder-fill"></i>
                <span>File Mananger</span>
            </a>
        </li> --}}
        <livewire:is-admin-menu>
    </ul>
</div>
