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
                        <h3 class="mb-0 ">Orders</h3>

                    </div>
                </div>
            </div>
            <div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card mb-4">
                            <div class="card-header  ">
                                <div class="row">
                                    <div class=" col-lg-3 col-md-6">
                                        <input type="search" class="form-control " placeholder="Search Files...">

                                    </div>

                                    <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">

                                        <a href="#!" class="btn btn-primary me-2">+ Add New Order</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered table-hover">
                                        <thead class="table-light">
                                            <tr>

                                                <th>Nama</th>
                                                <th>Nomor</th>
                                                <th>Payment Status</th>
                                                <th>Total</th>
                                                <th>Order Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>Steve Nelson</td>
                                                <td>26 July, 2023 10:19 AM</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>$425.31</td>
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
                                                <td>18 July, 2023 9:52 PM</td>
                                                <td><span class="badge bg-secondary">Refunded</span></td>
                                                <td>$113.00</td>
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
                                                <td>23 June, 2023 8:14 PM</td>
                                                <td><span class="badge bg-danger">Cancel</span></td>
                                                <td>$113.00</td>
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
                                <span>Showing 1 to 8 of 12 entries</span>
                                <nav class="mt-2 mt-md-0">
                                    <ul class="pagination mb-0">
                                        <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                        <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
