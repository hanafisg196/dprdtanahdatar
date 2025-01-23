<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    @if ($isAdmin == true)
    <li class="sidebar-item has-sub {{ Request::is('dashboard/category*') ? 'active' : '' }}">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>Kategori</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item {{Request::is('dashboard/category/berita') ? 'active' : ''}}">
                <a href="{{route('dashboard.category.berita')}}" class="submenu-link">
                    <span>Berita</span>
                </a>
            </li>
            <li class="submenu-item {{Request::is('dashboard/category/agenda') ? 'active' : ''}}">
                <a href="{{route('dashboard.category.agenda')}}" class="submenu-link">
                    <span>Agenda</span>
                </a>
            </li>
       </ul>
    </li>
    <li class="sidebar-item has-sub {{ Request::is('dashboard/settings*') ? 'active' : '' }}">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear-fill"></i>
            <span>Pengaturan</span>
        </a>
        <ul class="submenu">
            <li class="submenu-item {{Request::is('dashboard/settings/menu/list') ? 'active' : ''}}">
                <a href="{{ route('dashboard.settings.menu.list') }}" class="submenu-link">
                    <span>Menu</span>
                </a>
            </li>
            <li class="submenu-item {{Request::is('dashboard/settings/slide-image/list') ? 'active' : ''}}">
                <a href="{{route('dashboard.settings.slide-image.list')}}" class="submenu-link">
                    <span>Slide Gambar</span>
                </a>
            </li>
       </ul>
    </li>
    <li class="sidebar-item {{ Request::is('dashboard/user/manager/list') ? 'active' : '' }}">
        <a  href="{{ route('dashboard.usermanager.list') }}" class='sidebar-link'>
            <i class="bi bi-person-fill-gear"></i>
            <span>Pengguna</span>
        </a>
    </li>
    @endif
</div>
