@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Masukkan Identitas</h1>
    <hr />
    <form action="{{ route('respondents.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Jenis Kelamin</label>
            <input type="text" name="gender" class="form-control" id="gender">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Alamat</label>
            <input type="text" name="address" class="form-control" id="address">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="status">
        </div>
        <div class="mb-3">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection