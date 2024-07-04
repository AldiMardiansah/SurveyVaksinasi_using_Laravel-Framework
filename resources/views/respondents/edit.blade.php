@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Identitas</h1>
    <hr />
    <form action="{{ route('respondents.update', $respondents->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $respondents->name }}">
            </div>
            <div class="col mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <input type="text" name="gender" class="form-control" id="gender" value="{{ $respondents->gender }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" name="address" class="form-control" id="address" value="{{ $respondents->address }}">
            </div>
            <div class="col mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" name="status" class="form-control" id="status" value="{{ $respondents->status }}">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <div class="d-grid">
                    <button class="btn btn-warning">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
