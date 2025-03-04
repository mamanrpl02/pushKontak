@extends('layouts.main')

@section('content')
    <div class="container bg-white rounded-lg p-7" style="margin-top: 8rem">
        <h1>List Grup </h1>

        {{-- Select untuk memilih perangkat --}}
        <form method="GET" action="{{ route('list.group') }}">
            <div class="form-group">
                <label for="device-select">Pilih Perangkat:</label>
                <select name="device" id="device-select" class="form-control mt-1" onchange="this.form.submit()">
                    <option value="0" {{ request('device') == '0' ? 'selected' : '' }}>Pilih Device</option>
                    @foreach ($devices as $device)
                        <option value="{{ $device['token'] ?? 'N/A' }}"
                            {{ request('device') == ($device['token'] ?? 'N/A') ? 'selected' : '' }}>
                            {{ $device['name'] ?? 'N/A' }}
                        </option>
                    @endforeach
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
                            <th>Jumlah Anggota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($groups) && count($groups) > 0)
                            @foreach ($groups as $group)
                                <tr>
                                    <td>{{ $group['name'] ?? 'N/A' }}</td>
                                    <td>
                                        {{ $group['id'] ?? 'N/A' }}
                                        <button onclick="copyToClipboard('{{ $group['id'] ?? '' }}')"
                                            class="btn btn-sm btn-secondary">Copy ID</button>
                                    </td>
                                    <td>{{ $group['member_count'] ?? 0 }}</td> <!-- Menampilkan jumlah anggota -->

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada grup yang ditemukan.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function copyToClipboard(text) {
            var tempInput = document.createElement("input");
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);

            // SweetAlert2 Notification
            Swal.fire({
                title: "Berhasil!",
                text: "ID grup telah disalin: " + text,
                icon: "success",
                confirmButtonText: "OK",
                timer: 2000
            });
        }
    </script>


@endsection
