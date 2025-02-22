@extends('layouts.main')

@section('content')
    {{-- <div class="app-content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <h3 class="mb-0">Create a Post</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12 col-12">
                    <!-- Card -->
                    <div class="card border-0 mb-4">
                        <!-- Card header -->
                        <div class="card-header">
                            <h4 class="mb-0">Tambahkan Perangkat</h4>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="mb-3 col-md-9">
                                <!-- Title -->
                                <label for="postTitle" class="form-label">Perangkat</label>
                                <input type="text" id="postTitle" class="form-control" placeholder="Nama Perangkat" />

                            </div>

                            <!-- Slug -->
                            <div class="mb-3 col-md-9">
                                <label for="basic-url" class="form-label">Nomor</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="basic-url" aria-describedby="slug"
                                        placeholder="628123456789" />
                                </div>
                            </div>
                            <a href="#!" class="btn btn-primary">Tambah</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> --}}

    <!-- Container fluid -->
    <div class="app-content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div class="mb-5">
                        <h3 class="mb-0 ">Device</h3>

                    </div>
                </div>
            </div>
            <div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card mb-4">
                            <div class="card-header d-lg-flex justify-content-between ">
                                <div class="d-grid d-lg-block">
                                    <a href="#!" class="btn btn-primary" id="contact-modal-button"
                                        data-bs-toggle="modal" data-bs-target="#contact-modal">+
                                        Create New Contact</a>
                                </div>
                                <div class="d-flex mt-3 mt-lg-0">
                                    <form action="#">
                                        <div class="input-group ">
                                            <input class="form-control rounded-3 search" type="search" value=""
                                                id="searchInput" placeholder="Search">
                                            <span class="input-group-append">
                                                <button class="btn  ms-n10 rounded-0 rounded-end" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-search text-dark">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                        </line>
                                                    </svg>
                                                </button>
                                            </span>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered table-hover">
                                        <thead class="table-light">
                                            <tr>

                                                <th>Nama</th>
                                                <th>Nomor</th>
                                                <th>Status</th>
                                                <th>Quota</th>
                                                <th>Order Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>Steve Nelson</td>
                                                <td>08123123123</td>
                                                <td><span class="badge bg-success">Connect</span></td>
                                                <td>1000</td>
                                                <td><span class="badge badge-success-soft text-success">Delivered</span>
                                                </td>
                                                <td>


                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-ghost rounded-circle"
                                                            href="#!" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i data-feather="more-vertical" class="icon-xs"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a></li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else
                                                                    here</a></li>
                                                        </ul>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>


                                                <td>Kimberly Sullivan</td>
                                                <td>08212301230</td>
                                                <td><span class="badge bg-danger">Disconect</span></td>
                                                <td>1000</td>
                                                <td><span class="badge badge-success-soft text-success">Delivered</span>
                                                </td>
                                                <td>


                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-ghost rounded-circle"
                                                            href="#!" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i data-feather="more-vertical" class="icon-xs"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a></li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else
                                                                    here</a></li>
                                                        </ul>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>

                                                <td>Elliott Potts</td>
                                                <td>081239123912</td>
                                                <td><span class="badge bg-danger">Disconnect</span></td>
                                                <td>1000</td>
                                                <td><span class="badge badge-success-soft text-success">Delivered</span>
                                                </td>
                                                <td>


                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-ghost rounded-circle"
                                                            href="#!" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i data-feather="more-vertical" class="icon-xs"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a></li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else
                                                                    here</a></li>
                                                        </ul>
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer d-md-flex justify-content-between align-items-center">
                                {{-- <span>Showing 1 to 8 of 12 entries</span>
                                <nav class="mt-2 mt-md-0">
                                    <ul class="pagination mb-0">
                                        <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                        <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                    </ul>
                                </nav> --}}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="contact-modal" tabindex="-1" aria-labelledby="contact-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="contact-modal-label">
                        Add Device
                    </h4>
                    <button type="button" class="btn-close" id="btn-close-modal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="contact-name-field">Name</label>
                            <input type="text" class="form-control" placeholder="Your Name" id="contact-name-field"
                                required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone-number-field">Device Number</label>
                            <input type="text" class="form-control" placeholder="62812345678" id="phone-number-field"
                                required />
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary" id="add-btn">
                                + Add Contact
                            </button>
                            <input type="hidden" class="form-control" placeholder="ID" id="id-field" />
                            <button class="btn btn-light ms-2" data-bs-dismiss="modal" aria-label="Close">
                                Close
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
