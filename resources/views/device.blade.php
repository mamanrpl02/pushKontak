@extends('layouts.main')

@section('content')
    <div class="app-content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <h3 class="mb-0">Device List</h3>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header d-lg-flex justify-content-between">
                                <div class="d-grid d-lg-block">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact-modal">
                                        + Add Device
                                    </button>
                                </div>
                                <div class="d-flex mt-3 mt-lg-0">
                                    <form>
                                        <div class="input-group">
                                            <input class="form-control rounded-3 search" type="search"
                                                placeholder="Search">
                                            <span class="input-group-append">
                                                <button class="btn btn-dark" type="button">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Nomor</th>
                                                <th>Quota</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($devices as $device)
                                                <tr>
                                                    <td>{{ $device['name'] ?? 'N/A' }}</td>
                                                    <td>{{ $device['number'] ?? 'N/A' }}</td>
                                                    <td>{{ $device['quota'] ?? 'N/A' }}</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-{{ $device['status'] == 'connect' ? 'success' : 'danger' }}">
                                                            {{ ucfirst($device['status'] ?? 'unknown') }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        @if ($device['status'] == 'connect')
                                                            <a href="{{ route('device.disconnect', $device['id']) }}"
                                                                class="btn btn-danger btn-sm">Disconnect</a>
                                                        @else
                                                            <a href="{{ route('device.reconnect', $device['id']) }}"
                                                                class="btn btn-primary btn-sm">Reconnect</a>
                                                        @endif
                                                        <a href="{{ route('device.delete', $device['id']) }}"
                                                            class="btn btn-danger btn-sm">Delete</a>
                                                        <button class="btn btn-dark btn-sm">Order</button>
                                                        <button class="btn btn-secondary btn-sm">Token</button>
                                                        <button class="btn btn-info btn-sm">Flow</button>
                                                        <button class="btn btn-warning btn-sm">AI</button>
                                                        <button class="btn btn-success btn-sm">AI Data</button>
                                                        <button class="btn btn-primary btn-sm">Edit</button>
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
@endsection
