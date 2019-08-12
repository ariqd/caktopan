<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">Page Settings</li>

            <li class="nav-item">
                <a href="{{ url('admin') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('menu') }}" class="nav-link {{ (request()->is('admin/menu*')) ? 'active' : '' }}">
                    <i class="fab fa-elementor"></i> Menus
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('blog') }}" class="nav-link {{ (request()->is('admin/blog*')) ? 'active' : '' }}">
                    <i class="fab fa-blogger"></i> Blog
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('about') }}" class="nav-link {{ (request()->is('admin/about*')) ? 'active' : '' }}">
                    <i class="fas fa-info-circle"></i> About Us
                </a>
            </li>

        </ul>
    </nav>
</div>
