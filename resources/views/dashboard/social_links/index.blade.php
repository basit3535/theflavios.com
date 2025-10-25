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
                        <a href="#">Social Links</a>
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
                                <h4 class="card-title">Social Links</h4>
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
                                                <span class="fw-light">Social Link</span>
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form id="linkForm" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" id="formMethod" value="POST">
                                            <div class="modal-body">
                                                <p class="small">Create or update a social link using this form.</p>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Name</label>
                                                            <input id="linkName" name="name" type="text"
                                                                class="form-control" placeholder="link name" />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Link</label>
                                                            <input id="socialLink" name="link" type="text"
                                                                class="form-control" placeholder="Link" />
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
                                            <th>Name</th>
                                            <th>Link</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Link</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @forelse ($socialLinks as $socialLink)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $socialLink->name }}</td>
                                                <td><a href="{{ $socialLink->link }}">Open Link</a></td>
                                                 <td>
                                                    <div class="form-button-action">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-link btn-primary btn-lg edit-btn"
                                                            data-id="{{ $socialLink->id }}"
                                                            data-name="{{ $socialLink->name }}"
                                                            data-link="{{ $socialLink->link }}"
                                                           >
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('social-links.destroy', $socialLink->id) }}"
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
        @include('dashboard.social_links.script')
    @endpush
</x-app-layout>
