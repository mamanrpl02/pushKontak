@extends('layouts.main')

@section('content')
    <h1 style="margin-top: 5rem" class="p-7 pb-0">Update Grup</h1>
    <div class="container bg-white rounded-lg p-7">
        <form class="row g-3 needs-validation" action="{{ route('update.groups') }}" method="POST" novalidate>
            @csrf
            <div class="mb-3">
                <label class="form-label" for="deviceSelect">Pilih Perangkat <span class="text-secondary"></span></label>
                <select class="form-select" id="deviceSelect" name="device_name" aria-label="Default select example">
                    <option selected>Pilih Perangkat</option>
                    @foreach ($devices as $device)
                        <option value="{{ $device['name'] ?? 'N/A' }}">{{ $device['name'] ?? 'N/A' }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>

        <div id="groups-container" style="display: none;">
            <h2 class="mt-4">Daftar Grup</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="groups-table">
                    <thead>
                        <tr>
                            <th>Nama Grup</th>
                            <th>ID Grup</th>
                        </tr>
                    </thead>
                    <tbody>
                        </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <script>
        document.getElementById('deviceSelect').addEventListener('change', function() {
            const deviceName = this.value;

            if (deviceName === 'Pilih Perangkat') {
                document.getElementById('groups-container').style.display = 'none';
                return;
            }

            fetch('{{ route('get.groups') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ device_name: deviceName })
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    alert(data.error);
                    return;
                }

                const tableBody = document.querySelector('#groups-table tbody');
                tableBody.innerHTML = ''; // Bersihkan tabel sebelum menambahkan data baru

                if (data.groups && data.groups.length > 0) {
                    data.groups.forEach(group => {
                        const row = `
                            <tr>
                                <td>${group.group_name || 'N/A'}</td>
                                <td>${group.group_id || 'N/A'}</td>
                            </tr>
                        `;
                        tableBody.innerHTML += row;
                    });
                    document.getElementById('groups-container').style.display = 'block';
                } else {
                    tableBody.innerHTML = '<tr><td colspan="2">Tidak ada grup tersedia.</td></tr>';
                    document.getElementById('groups-container').style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengambil daftar grup.');
            });
        });
    </script> --}}
@endsection
