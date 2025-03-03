@extends('layouts.main')

@section('content')
    <h1 style="margin-top: 5rem" class="p-7 pb-0">Update Grup</h1>
    <div class="container bg-white rounded-lg p-7">

        {{-- Select untuk memilih perangkat --}}
        <form method="GET" action="{{ route('showGroup') }}">
            <div class="form-group">
                <label for="device-select">Pilih Perangkat:</label>
                <select id="device-select" class="form-control" onchange="this.form.submit()">
                    <option value="">Pilih Deviceg</option>
                    @foreach ($devices as $device)
                        <option value="{{ $device['token'] ?? 'N/A' }}">{{ $device['name'] ?? 'N/A' }}</option>
                    @endforeach
                    <!-- Tambahkan opsi perangkat sesuai kebutuhan -->
                </select>
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
                            <tr>
                                <td>{{ $group['name'] }}</td>
                                <td>{{ $group['id'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
