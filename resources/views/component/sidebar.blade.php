<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Laravel Fortify</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">
                <i class="fab fa-laravel text-success"></i>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item active">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-th-large"></i><span>Beranda</span>
                </a>
            </li>

            <li class="menu-header">Menu Utama</li>

            @if (auth()->user()->role == 'superadmin' || auth()->user()->role == 'admin')
                <li class="nav-item">
                    <a href="{{ route('pengguna.index') }}" class="nav-link">
                        <i class="fas fa-users"></i><span>Pengguna</span>
                    </a>
                </li>
            @endif

        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="javascript:void(0);" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
