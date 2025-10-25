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
                        <a href="#">Feedback</a>
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
                                <h4 class="card-title">Feedback</h4>
                                {{-- <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#addRowModal">
                                    <i class="fa fa-plus"></i>
                                    Add Row
                                </button> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Modal -->
                            {{-- <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="border-0 modal-header">
                                            <h5 class="modal-title" id="modalTitle">
                                                <span class="fw-mediumbold">New</span>
                                                <span class="fw-light">Category</span>
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form id="categoryForm" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" id="formMethod" value="POST">
                                            <div class="modal-body">
                                                <p class="small">Create or update a category using this form.</p>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="categoryName" name="name" type="text"
                                                                class="form-control" placeholder="Category name" />
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
                            </div> --}}


                            <div class="table-responsive">
                                <table id="add-row" class="table display table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Feedback</th>
                                            {{-- <th style="width: 10%">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Feedback</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($feedbacks as $feedback)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $feedback->name }}</td>
                                                <td>{{ $feedback->email }}</td>
                                                <td>{{ $feedback->feedback }}</td>
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
        @include('dashboard.categories.script')
    @endpush
</x-app-layout>
