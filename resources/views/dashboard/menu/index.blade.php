<x-app-layout>
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="mb-3 fw-bold">Dashboard</h3>
                <ul class="mb-3 breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Menu</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">View</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add Row</h4>
                                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add Row
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="border-0 modal-header">
                                            <h5 class="modal-title" id="modalTitle">
                                                <span class="fw-mediumbold">New</span>
                                                <span class="fw-light">Menu</span>
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form id="menuForm" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="_method" id="formMethod" value="POST">
                                            <div class="modal-body">
                                                <p class="small">Create or update a menu using this form.</p>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="menuName" name="name" type="text"
                                                                class="form-control" placeholder="Menu name" />
                                                        </div>
                                                    </div>
                                                   <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Half Price</label>
                                                            <input id="menuHalfPrice" name="half_price" type="number"
                                                                class="form-control" placeholder="Price" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Full Price</label>
                                                            <input id="menuFullPrice" name="full_price" type="number"
                                                                class="form-control" placeholder="Price" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Menu image</label>
                                                            <input id="menuImg" name="menu_img" type="file"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Category</label>
                                                            <select class="form-select" id="menuCategory"
                                                                name="category_id">
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-0 modal-footer">
                                                <button type="submit" class="btn btn-primary"
                                                    id="submitBtn">Add</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="add-row" class="table display table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Half Price</th>
                                            <th>Full Price</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Half Price</th>
                                            <th>Full Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($menus as $menu)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ asset(''.$menu->menu_img) }}"
                                                        class="img-fluid rounded-top" alt="{{ $menu->name }}"
                                                        style="width: 80px; height: auto;" />
                                                </td>
                                                <td>{{ $menu->name }}</td>
                                                <td>{{ $menu->category->name }}</td>
                                                <td>Rs.{{ $menu->half_price }}</td>
                                                <td>Rs.{{ $menu->full_price }}</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-link btn-primary btn-lg edit-btn"
                                                            data-id="{{ $menu->id }}"
                                                            data-name="{{ $menu->name }}"
                                                            data-half-price="{{ $menu->half_price }}"
                                                            data-full-price="{{ $menu->full_price }}"
                                                            data-category="{{ $menu->category_id }}">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('menus.destroy', $menu->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link btn-danger"
                                                                data-bs-toggle="tooltip" data-original-title="Delete"
                                                                onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No record found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     @push('etxtra-scripts')
        @include('dashboard.menu.script')
    @endpush
</x-app-layout>
