<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ url('admin') }}" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                    <i class="fa fa-home"></i> Notifikasi
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('drivers') }}" class="nav-link {{ (request()->is('drivers')) ? 'active' : '' }}">
                    <i class="fa fa-user"></i> Driver
                </a>
            </li>

            <li class="nav-title">Muatan</li>
            
            <li class="nav-item">
                <a href="{{ url('drivers') }}" class="nav-link {{ (request()->is('drivers')) ? 'active' : '' }}">
                    <i class="fa fa-money"></i> Bidding
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ url('drivers') }}" class="nav-link {{ (request()->is('drivers')) ? 'active' : '' }}">
                    <i class="fa fa-search"></i> Pencarian
                </a>
            </li>

            <li class="nav-title">Truk</li>

            <li class="nav-item">
                <a href="{{ url('drivers') }}" class="nav-link {{ (request()->is('drivers')) ? 'active' : '' }}">
                    <i class="fa fa-cog"></i> Pengaturan
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ url('drivers') }}" class="nav-link {{ (request()->is('drivers')) ? 'active' : '' }}">
                    <i class="fa fa-truck"></i> Lacak
                </a>
            </li>

        </ul>
    </nav>
</div>
