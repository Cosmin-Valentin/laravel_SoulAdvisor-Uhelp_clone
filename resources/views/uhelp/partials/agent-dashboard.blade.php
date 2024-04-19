<div class="agent-dashboard">
    <h6>Global Tickets</h6>
    <div class="row">
        <div class="global-ticket">
            <div class="card">
                <div class="card-body">
                    <a href="#">
                        <div>
                            <div class="primary-transparent global-ticket-icon">
                                <i class="fa fa-ticket"></i>
                            </div>
                            <div>
                                <p>All Tickets</p>
                                <h5>30</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="global-ticket">
            <div class="card">
                <div class="card-body">
                    <a href="#">
                        <div>
                            <div class="secondary-transparent global-ticket-icon">
                                <i class="fa fa-ticket"></i>
                            </div>
                            <div>
                                <p>Recent Tickets</p>
                                <h5>3</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="global-ticket">
            <div class="card">
                <div class="card-body">
                    <a href="#">
                        <div>
                            <div class="success-transparent global-ticket-icon">
                                <i class="fa fa-ticket"></i>
                            </div>
                            <div>
                                <p>Active Tickets</p>
                                <h5>19</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="global-ticket">
            <div class="card">
                <div class="card-body">
                    <a href="#">
                        <div>
                            <div class="danger-transparent global-ticket-icon">
                                <i class="fa fa-ticket"></i>
                            </div>
                            <div>
                                <p>Closed Tickets</p>
                                <h5>8</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Recent Tickets
                    </h4>
                </div>
                <div class="card-body">
                    <div>
                        <div class="dashboard-table">
                            <div class="row">
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th class="remove-column">
                                                    <input type="checkbox" id="checkAll" autocomplete="off">
                                                    <label for="checkAll"></label>
                                                </th>
                                                <th class="sorting">Ticket Details</th>
                                                <th class="sorting">User</th>
                                                <th class="sorting">Status</th>
                                                <th class="sorting">Assign To</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="remove-column-data">
                                                    <input type="checkbox" autocomplete="off">
                                                </td>
                                                <td class="ticket-details">
                                                    <div>
                                                        <a href="{{ route('uhelp.show') }}">Lorem ipsum dolor sit amet.</a>
                                                        <ul>
                                                            <li>#SP-1</li>
                                                            <li>
                                                                <i class="fa fa-calendar"></i>
                                                                18-Apr-2024
                                                            </li>
                                                            <li class="preference high">High</li>
                                                            <li>
                                                                <i class="fa fa-th-list"></i>
                                                                necessitatibus
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-clock-o"></i>
                                                                20 hours ago
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>Timothy L. Brodbeck (Customer)</td>
                                                <td>
                                                    <span class="badge badge-orange">New</span>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn-small">Assign</button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="#">Self Assign</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Other Assign</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="actions">
                                                        <a href="{{ route('uhelp.show') }}" class="view-ticket">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="#" class="delete-ticket">
                                                            <i class="fa fa-trash-o"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>