
@extends('layouts.main')
@section('content')
<h1 style="margin-top: 5rem" class="p-7 pb-0" >Kirim Pesan</h1>
<div class="container bg-white rounded-lg p-7" >
        <form class="row g-3 needs-validation" novalidate>
        <div class="mb-3">
            <label class="form-label" for="selectOne">Pilih Perangkat <span class="text-secondary"></span></label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Perangkat</option>
                @foreach ($devices as $device)
                <option value="{{ $device['name'] ?? 'N/A' }}">{{ $device['name'] ?? 'N/A' }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="selectOne">Pilih Grup <span class="text-secondary"></span></label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Grup</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3" style="">
            <label class="form-label" for="jumlahPesan">Jumlah Pesan</label>
            <input type="number" id="jumlahPesan" class="form-control" placeholder="Masukan Jumlah">
        </div>

        <div class="mb-3">
            <label for="textarea-input" class="form-label">Pesan</label>
            <textarea class="form-control" id="textarea-input" rows="5" placeholder="Hello World"></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Kirim Pean</button>
          </div>
        </form>
    </div>

@endsection
