<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">Home</li>

            <li class="nav-item">
                <a href="{{ url('admin') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>

            <li class="nav-title">Menu</li>

            <li class="nav-item">
                <a href="{{ url('admin/menu') }}" class="nav-link {{ (request()->is('admin/menu')) ? 'active' : '' }}">
                    <i class="fab fa-elementor"></i> Daftar Menu
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('admin/menu/create') }}"
                    class="nav-link {{ (request()->is('admin/menu/create')) ? 'active' : '' }}">
                    <i class="fas fa-plus"></i> Tambah Menu
                </a>
            </li>

            <li class="nav-item">
                    <a href="{{ url('menu') }}" class="nav-link">
                        <i class="fas fa-eye"></i> Lihat Halaman Menu
                    </a>
                </li>

            <li class="nav-title">Blog</li>

            <li class="nav-item">
                <a href="{{ url('admin/blog') }}" class="nav-link {{ (request()->is('admin/blog')) ? 'active' : '' }}">
                    <i class="fab fa-blogger"></i> Daftar Blog
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('admin/blog/create') }}" class="nav-link {{ (request()->is('admin/blog/create')) ? 'active' : '' }}">
                    <i class="fas fa-plus"></i> Tambah Blog
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('blog') }}" class="nav-link">
                    <i class="fas fa-eye"></i> Lihat Halaman Blog
                </a>
            </li>

            <li class="nav-title">About</li>

            <li class="nav-item">
                <a href="{{ url('admin/about') }}"
                    class="nav-link {{ (request()->is('admin/about*')) ? 'active' : '' }}">
                    <i class="fas fa-info-circle"></i> About Us
                </a>
            </li>

        </ul>
    </nav>
</div>
