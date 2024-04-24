@extends('uhelp.app')


@section('main')
    @include('uhelp.partials.agent-aside')

    <div class="agent-main">
        <div class="agent-main-container">
            <div class="side-app">
                <div class="app-header"></div>
                @include('uhelp.partials.agent-header', ['title' => 'Category'])
                <div class="agent-dashboard">
                    <div class="row">
                        <div>
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Category
                                    </h4>
                                    <button class="btn-ticket" id="add-category">Add Category</button>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="dashboard-table collections-table">
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
                                                                <th class="sorting">Category Name</th>
                                                                <th class="sorting">Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($categories as $category)
                                                                <tr>
                                                                    <td>{{ $loop->index + 1 }}</td>
                                                                    <td class="remove-column-data">
                                                                        <input type="checkbox" autocomplete="off">
                                                                    </td>
                                                                    <td class="ticket-details">
                                                                        {{ ucwords($category->name) }}
                                                                    </td>
                                                                    <td>Enabled</td>
                                                                    <td>
                                                                        <div class="actions">
                                                                            <button class="view-ticket">
                                                                                <i class="fa fa-eye"></i>
                                                                            </button>
                                                                            <div class="tooltip show">View Ticket</div>
                                                                            <button class="delete-ticket">
                                                                                <i class="fa fa-trash-o"></i>
                                                                            </button>
                                                                            <div class="tooltip delete">Delete Ticket</div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
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
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('uhelp.partials.footer')
@endsection

@include('uhelp.modals.add-category')