@extends('layouts.main')

@section('content')
    <h1 style="margin-top: 5rem" class="p-7 pb-0">Update Grup</h1>
    <div class="container bg-white rounded-lg p-7">

        {{-- Notifikasi Sukses atau Error --}}
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Form Pilih Perangkat --}}
        <form class="row g-3 needs-validation" action="{{ route('list.grup') }}" method="POST" novalidate>
            @csrf
            <div class="mb-3">
                <label class="form-label" for="deviceSelect">Pilih Perangkat</label>
                <select class="form-select" id="deviceSelect" name="device_name" required>
                    <option value="">Pilih Perangkat</option>
                    @foreach ($devices as $device)
                        <option value="{{ $device['token'] ?? 'N/A' }}">{{ $device['name'] ?? 'N/A' }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Tampilkan Grup</button>
            </div>
        </form>

        {{-- List Grup --}}
        <div id="groups-container" class="mt-4">
            <h2>Daftar Grup</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="groups-table">
                    <thead>
                        <tr>
                            <th>Nama Grup</th>
                            <th>ID Grup</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($groups as $group)
                            <tr data-device="{{ $group['device_token'] ?? 'N/A' }}">
                                <td>{{ $group['name'] ?? 'Tidak Ada Nama' }}</td>
                                <td>{{ $group['id'] ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
