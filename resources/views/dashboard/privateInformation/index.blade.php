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
                                        <form id="privateInfoForm" method="POST">
                                             @csrf
                                            <input type="hidden" name="_method" id="formMethod" value="POST">
                                            <div class="modal-body">
                                                <p class="small">Create or update private information using this form.
                                                </p>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Phone One</label>
                                                            <input name="phone_one" id="phone_one" type="text" class="form-control"
                                                                placeholder="Phone One"
                                                                value="{{ old('phone_one', $info->phone_one ?? '') }}" />
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Phone Two</label>
                                                            <input name="phone_two" id="phone_two" type="text" class="form-control"
                                                                placeholder="Phone Two"
                                                                value="{{ old('phone_two', $info->phone_two ?? '') }}" />
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Email</label>
                                                            <input name="email" id="email" type="email" class="form-control"
                                                                placeholder="Email"
                                                                value="{{ old('email', $info->email ?? '') }}" />
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Address</label>
                                                            <input name="address" id="address" type="text" class="form-control"
                                                                placeholder="Address"
                                                                value="{{ old('address', $info->address ?? '') }}" />
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Opening From</label>
                                                            <input name="opening_from" id="opening_from" type="time"
                                                                class="form-control"
                                                                value="{{ old('opening_from', $info->opening_from ?? '') }}" />
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group form-group-default">
                                                            <label>Opening To</label>
                                                            <input name="opening_to" id="opening_to" type="time" class="form-control"
                                                                value="{{ old('opening_to', $info->opening_to ?? '') }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-0 modal-footer">
                                                <button type="submit" class="btn btn-primary" id="submitBtn">
                                                    {{ isset($info) ? 'Update' : 'Add' }}
                                                </button>
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
                                            <th>Phone # 1</th>
                                            <th>Phone # 2</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Opening From</th>
                                            <th>Opening To</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Phone # 1</th>
                                            <th>Phone # 2</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Opening From</th>
                                            <th>Opening To</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if ($info)
                                            <tr>
                                                <td>{{ $info->phone_one ?? 'N/A' }}</td>
                                                <td>{{ $info->phone_two ?? 'N/A' }}</td>
                                                <td>{{ $info->email ?? 'N/A' }}</td>
                                                <td>{{ $info->address ?? 'N/A' }}</td>
                                                <td>{{ \Carbon\Carbon::parse($info->opening_from)->format('h:i A') ?? 'N/A' }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($info->opening_to)->format('h:i A') ?? 'N/A' }}
                                                </td>

                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-link btn-primary btn-lg edit-btn"
                                                            data-phone-one="{{$info->phone_one}}"
                                                            data-phone-two="{{$info->phone_two}}"
                                                            data-email="{{$info->email}}"
                                                            data-address="{{$info->address}}"
                                                            data-opening-from="{{$info->opening_from}}"
                                                            data-opening-to="{{$info->opening_to}}"
                                                            data-id="{{ $info->id }}"
                                                            >
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('private-information.destroy', $info->id) }}"
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
                                        @else
                                            <tr>
                                                <td colspan="8" class="text-center">No record found</td>
                                            </tr>
                                        @endif
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
        @include('dashboard.privateInformation.script')
    @endpush
</x-app-layout>
