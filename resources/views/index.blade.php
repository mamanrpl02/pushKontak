@extends('layouts.main')

@section('content')
    <div class="app-content-area">
        <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
        <div class="container-fluid mt-n22">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0 text-white">Projects</h3>
                        </div>
                        <div>
                            <a href="#!" class="btn btn-white">Create New Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lift">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Projects</h4>
                                </div>
                                <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                    <i data-feather="briefcase" height="20" width="20"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div class="lh-1">
                                <h1 class="mb-1 fw-bold">18</h1>
                                <p class="mb-0">
                                    <span class="text-dark me-2">2</span>
                                    Completed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lift">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Active Task</h4>
                                </div>
                                <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                    <i data-feather="list" height="20" width="20"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div class="lh-1">
                                <h1 class="mb-1 fw-bold">132</h1>
                                <p class="mb-0">
                                    <span class="text-dark me-2">28</span>
                                    Completed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lift">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Teams</h4>
                                </div>
                                <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                    <i data-feather="users" height="20" width="20"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div class="lh-1">
                                <h1 class="mb-1 fw-bold">12</h1>
                                <p class="mb-0">
                                    <span class="text-dark me-2">1</span>
                                    Completed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lift">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- heading -->
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="mb-0">Productivity</h4>
                                </div>
                                <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                    <i data-feather="target" height="20" width="20"></i>
                                </div>
                            </div>
                            <!-- project number -->
                            <div class="lh-1">
                                <h1 class="mb-1 fw-bold">76%</h1>
                                <p class="mb-0">
                                    <span class="text-success me-2">5%</span>
                                    Completed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row  -->
            <div class="row">
                <div class="col-xl-8 col-12 mb-5">
                    <!-- card  -->
                    <div class="card">
                        <!-- card header  -->
                        <div class="card-header">
                            <h4 class="mb-0">Active Projects</h4>
                        </div>
                        <!-- table  -->
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table text-nowrap mb-0 table-centered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Project name</th>
                                            <th>Hours</th>
                                            <th>Priority</th>
                                            <th>Members</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div>
                                                            <img src="{{ asset('dashuipro/assets/images/svg/brand-logo-1.svg') }}"
                                                                alt="dash ui - bootstrap 5 admin dashboard template" />
                                                        </div>
                                                    </div>
                                                    <div class="ms-3 lh-1">
                                                        <h5 class="mb-1"><a href="#!" class="text-inherit">Dropbox
                                                                Design System</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>34</td>
                                            <td><span class="badge badge-warning-soft">Medium</span></td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar bootstrap 5"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="bootstrap 5 avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="bootstrap 5 avatar in circle"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-primary">
                                                        <span class="avatar-initials rounded-circle fs-6">+5</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-dark">
                                                <div class="float-start me-3">15%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px">
                                                        <div class="progress-bar" role="progressbar" style="width: 15%"
                                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div>
                                                            <img src="assets/images/svg/brand-logo-2.svg"
                                                                alt="Image" />
                                                        </div>
                                                    </div>
                                                    <div class="ms-3 lh-1">
                                                        <h5 class="mb-1"><a href="#!" class="text-inherit">Slack
                                                                Team UI Design</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>47</td>
                                            <td><span class="badge badge-danger-soft">High</span></td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar bootstrap 5"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="bootstrap 5 avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="bootstrap 5 avatar in circle"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-primary">
                                                        <span class="avatar-initials rounded-circle fs-6">+5</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-dark">
                                                <div class="float-start me-3">35%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px">
                                                        <div class="progress-bar" role="progressbar" style="width: 35%"
                                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div>
                                                            <img src="assets/images/svg/brand-logo-3.svg"
                                                                alt="Image" />
                                                        </div>
                                                    </div>
                                                    <div class="ms-3 lh-1">
                                                        <h5 class="mb-1"><a href="#!" class="text-inherit">GitHub
                                                                Satellite</a></h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>120</td>
                                            <td><span class="badge badge-info-soft">Low</span></td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar bootstrap 5"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="bootstrap 5 avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="bootstrap 5 avatar in circle"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-primary">
                                                        <span class="avatar-initials rounded-circle fs-6">+5</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-dark">
                                                <div class="float-start me-3">75%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px">
                                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div>
                                                            <img src="assets/images/svg/brand-logo-6.svg"
                                                                alt="Image" />
                                                        </div>
                                                    </div>
                                                    <div class="ms-3 lh-1">
                                                        <h5 class="mb-1"><a href="#!" class="text-inherit">3D
                                                                Character Modelling</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>89</td>
                                            <td><span class="badge badge-warning-soft">Medium</span></td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar bootstrap 5"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="bootstrap 5 avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="bootstrap 5 avatar in circle"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-primary">
                                                        <span class="avatar-initials rounded-circle fs-6">+5</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-dark">
                                                <div class="float-start me-3">63%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px">
                                                        <div class="progress-bar" role="progressbar" style="width: 63%"
                                                            aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div>
                                                            <img src="{{ asset('dashuipro/assets/images/svg/brand-logo-4.svg') }}"
                                                                alt="Image" />
                                                        </div>
                                                    </div>
                                                    <div class="ms-3 lh-1">
                                                        <h5 class="mb-1"><a href="#!" class="text-inherit">Webapp
                                                                Design System</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>108</td>
                                            <td><span class="badge badge-success-soft">Track</span></td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-13.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-13.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-13.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-primary">
                                                        <span class="avatar-initials rounded-circle fs-6">+5</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-dark">
                                                <div class="float-start me-3">100%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div>
                                                            <img src="{{ asset('dashuipro/assets/images/svg/brand-logo-5.svg') }}"
                                                                alt="Image" />
                                                        </div>
                                                    </div>
                                                    <div class="ms-3 lh-1">
                                                        <h5 class="mb-1"><a href="#!" class="text-inherit">Github
                                                                Event Design</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>120</td>
                                            <td><span class="badge badge-info-soft">Low</span></td>
                                            <td>
                                                <div class="avatar-group">
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-13.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-13.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm">
                                                        <img alt="avatar"
                                                            src="{{ asset('dashuipro/assets/images/avatar/avatar-13.jpg') }}"
                                                            class="rounded-circle" />
                                                    </span>
                                                    <span class="avatar avatar-sm avatar-primary">
                                                        <span class="avatar-initials rounded-circle fs-6">+1</span>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="text-dark">
                                                <div class="float-start me-3">75%</div>
                                                <div class="mt-2">
                                                    <div class="progress" style="height: 5px">
                                                        <div class="progress-bar" role="progressbar" style="width: 75%"
                                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- card footer  -->
                        <div class="card-footer text-center">
                            <a href="#!" class="btn btn-primary">View All Projects</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
