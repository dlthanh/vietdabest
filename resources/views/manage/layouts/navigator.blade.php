<div class="nav">
    <a href="{{route('cpanel.dashboard')}}" class="nav-brand">
        <img src="{{asset('')}}lib/images/logo.png" alt="">
    </a>

    <ul class="nav-list">
        <li class="nav-item {{request()->is('cPanel') ? 'active' : ''}}">
            <a href="{{route('cpanel.dashboard')}}">
                <i class="fal fa-chart-line"></i>Bảng quản trị
            </a>
        </li>
        @role(['superadministrator', 'administrator'])
        <li class="nav-item">
            <a href="{{route('cpanel.dashboard')}}">
                <i class="fal fa-folders"></i>Danh mục sản phẩm
            </a>
        </li>
        @endrole
        
        <li class="nav-item">
            <a href="{{route('cpanel.dashboard')}}">
                <i class="fal fa-boxes-alt"></i>Sản phẩm
            </a>
        </li>

        @role(['superadministrator', 'administrator'])
        <li class="nav-item {{request()->is('cPanel/managers*') ? 'active' : ''}}">
            <a href="{{route('cpanel.manager.index')}}">
                <i class="fal fa-user"></i>Quản trị viên
            </a>
        </li>
        @endrole
    </ul>
</div>