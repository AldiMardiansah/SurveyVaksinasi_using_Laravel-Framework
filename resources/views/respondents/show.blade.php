@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Survey</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $respondents->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label for="name" class="form-label">Jenis Kelamin</label>
            <input type="text" name="gender" class="form-control" id="gender" value="{{ $respondents->gender }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="name" class="form-label">Alamat</label>
            <input type="text" name="address" class="form-control" id="address" value="{{ $respondents->address }}" readonly>
        </div>
        <div class="col mb-3">
            <label for="name" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="status" value="{{ $respondents->status }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="name" class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" id="created_at" value="{{ $respondents->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label for="name" class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" id="updated_at" value="{{ $respondents->updated_at }}" readonly>
        </div>
    </div>
@endsection