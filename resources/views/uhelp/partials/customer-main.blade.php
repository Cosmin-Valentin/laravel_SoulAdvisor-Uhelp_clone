<main class="customer-main">
    <div class="customer-main-container">
        <div class="row">
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
                                <a href="#" class="side-menu-item active">
                                    <i class="fa fa-navicon"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="side-menu-item">
                                    <i class="fa fa-pencil"></i>
                                    <span>Create Ticket</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="page-card">
                @include('uhelp.partials.dashboard')
                @include('uhelp.partials.customer-create')
            </div>
        </div>
    </div>
</main>