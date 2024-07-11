@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Survey</h1>
    <hr />
    <div class="row">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $respondents->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <input type="text" name="gender" class="form-control" id="gender" value="{{ $respondents->gender }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" name="address" class="form-control" id="address" value="{{ $respondents->address }}" readonly>
        </div>
        <div class="col mb-3">
            <label for="age" class="form-label">Usia</label>
            <input type="text" name="age" class="form-control" id="age" value="{{ $respondents->age }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="status" value="{{ $respondents->status }}" readonly>
        </div>
        <div class="col mb-3">
            <label for="doses" class="form-label">Jumlah Dosis</label>
            <input type="text" name="doses" class="form-control" id="doses" value="{{ $respondents->doses }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="vaccine" class="form-label">Jenis Vaksin</label>
            <input type="text" name="vaccine" class="form-control" id="vaccine" value="{{ $respondents->vaccine }}" readonly>
        </div>
        <div class="col mb-3">
            <label for="effects" class="form-label">Efek Samping</label>
            <input type="text" name="effects" class="form-control" id="effects" value="{{ $respondents->effects }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="medical_history" class="form-label">Riwayat Penyakit</label>
            <input type="text" name="medical_history" class="form-control" id="medical_history" value="{{ $respondents->medical_history }}" readonly>
        </div>
    </div>
    <div class="mb-3">
        <label for="importance" class="form-label">Skala Pentingnya Divaksin</label>
        <input type="text" name="importance" class="form-control" id="importance" value="{{ $respondents->importance }}" readonly>
    </div>
    <div class="mb-3">
        <label for="info_sufficiency" class="form-label">Kelengkapan Informasi Vaksin</label>
        <input type="text" name="info_sufficiency" class="form-control" id="info_sufficiency" value="{{ $respondents->info_sufficiency }}" readonly>
    </div>
    <div class="mb-3">
        <label for="service_rate" class="form-label">Skala Pelayanan</label>
        <input type="text" name="service_rate" class="form-control" id="service_rate" value="{{ $respondents->service_rate }}" readonly>
    </div>
@endsection