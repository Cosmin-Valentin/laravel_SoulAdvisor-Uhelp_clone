<div class="customer-card">
    <div class="card">
        <div class="card-body">
            <div class="profile">
                <div class="profile-img">
                    <img src="https://randomuser.me/api/portraits/men/40.jpg" alt="user avatar">
                </div>
                <h5 class="profile-name">Timothy L. Brodbeck</h5>
                <small class="profile-email">customer@customer.com</small>
            </div>
        </div>

        <div class="card-sidebar">
            <ul class="side-menu">
                <li>
                    <a href="{{ route('uhelp.index') }}" class="side-menu-item {{ request()->routeIs('uhelp.index') ? 'active' : '' }}">
                        <i class="fa fa-navicon"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('uhelp.create') }}" class="side-menu-item {{ request()->routeIs('uhelp.create') ? 'active' : '' }}">
                        <i class="fa fa-pencil"></i>
                        <span>Create Ticket</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>