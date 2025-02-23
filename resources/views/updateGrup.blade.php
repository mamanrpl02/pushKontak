@extends('layouts.main')

@section('content')
    <h1 style="margin-top: 5rem" class="p-7 pb-0">Update Grup</h1>
    <div class="container bg-white rounded-lg p-7">
        <form class="row g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label class="form-label" for="selectOne">Pilih Perangkat <span class="text-secondary"></span></label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Perangkat</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
