<aside class="app-aside">
    <div class="aside-logo">
        <div class="logo">
            <a href="#" class="header-brand">
                <img src="https://logo.clearbit.com/clearbit.com" alt="logo">
            </a>
        </div>
    </div>
    <div class="aside-container">
        <div class="sidebar-user">
            <div class="user-pic">
                <img src="https://randomuser.me/api/portraits/men/{{ $user->id }}.jpg" alt="user avatar">
            </div>
            <div class="user-info">
                <h5>Admin</h5>
                <span>{{ ucwords($user->name) }}</span>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="{{ route('uhelp.index') }}" class="sidebar-menu-item {{ request()->routeIs('uhelp.index') ? 'active' : '' }}">
                    <i class="fa fa-navicon"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('uhelp.create') }}" class="sidebar-menu-item {{ request()->routeIs('uhelp.create') ? 'active' : '' }}">
                    <i class="fa fa-pencil"></i>
                    <span>Create Ticket</span>
                </a>
            </li>
        </ul>
    </div>
</aside>