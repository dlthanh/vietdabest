<header class="header">
    <div class="header-menu">
        <div class="header-menu__username">
            {{Auth::user()->display_name ?? Auth::user()->name}}

            <div class="header-submenu">
                <a href="#" class="header-item">
                    <i class="fal fa-user-cog"></i>Thông tin cá nhân
                </a>
                <a href="#" class="header-item">
                    <i class="fal fa-sign-out-alt"></i>Đăng xuất
                </a>
            </div>
        </div>
    </div>
</header>