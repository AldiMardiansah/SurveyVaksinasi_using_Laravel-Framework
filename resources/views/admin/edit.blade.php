@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Identitas</h1>
    <hr />
    <form action="{{ route('admin.update', $respondents->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $respondents->name }}">
            </div>
            <div class="col mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select name="gender" id="gender" class="form-select">
                    @foreach(\App\Models\Respondents::getValidGenders() as $key => $label)
                        <option value="{{ $key }}" {{ $respondents->gender == $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" name="address" class="form-control" id="address" value="{{ $respondents->address }}">
            </div>
            <div class="col mb-3">
                <label for="age" class="form-label">Usia</label>
                <input type="number" name="age" class="form-control" id="age" value="{{ $respondents->age }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select">
                    @foreach(\App\Models\Respondents::getValidStatuses() as $key => $label)
                        <option value="{{ $key }}" {{ $respondents->status == $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label for="doses" class="form-label">Jumlah Dosis</label>
                <select name="doses" id="doses" class="form-select">
                    @foreach(\App\Models\Respondents::getValidDoses() as $dose)
                        <option value="{{ $dose }}" {{ $respondents->doses == $dose ? 'selected' : '' }}>{{ $dose }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="vaccine" class="form-label">Jenis Vaksin</label>
                <select name="vaccine" id="vaccine" class="form-select">
                    @foreach(\App\Models\Respondents::getValidVaccines() as $vaccine)
                        <option value="{{ $vaccine }}" {{ $respondents->vaccine == $vaccine ? 'selected' : '' }}>{{ $vaccine }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label for="effects" class="form-label">Efek Samping</label>
                <input type="text" name="effects" class="form-control" id="effects" value="{{ $respondents->effects }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label for="medical_history" class="form-label">Riwayat Penyakit</label>
                <input type="text" name="medical_history" class="form-control" id="medical_history" value="{{ $respondents->medical_history }}">
            </div>
        </div>
        <div class="mb-3">
            <label for="importance" class="form-label">Skala Pentingnya Divaksin</label>
            <div>
                <span>Tidak penting</span>
                @foreach(\App\Models\Respondents::getValidImportance() as $key => $label)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="importance" id="importance_{{ $key }}" value="{{ $key }}" {{ $respondents->importance == $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="importance_{{ $key }}">{{ $key }}</label>
                    </div>
                @endforeach
                <span>Sangat penting</span>
            </div>
        </div>
        <div class="mb-3">
            <label for="info_sufficiency" class="form-label">Kelengkapan Informasi Vaksin</label>
            <div>
                <span>Tidak lengkap</span>
                @foreach(\App\Models\Respondents::getValidInfo() as $key => $label)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="info_sufficiency" id="info_sufficiency_{{ $key }}" value="{{ $key }}" {{ $respondents->info_sufficiency == $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="info_sufficiency_{{ $key }}">{{ $key }}</label>
                    </div>
                @endforeach
                <span>Sangat lengkap</span>
            </div>
        </div>
        <div class="mb-3">
            <label for="service_rate" class="form-label">Skala Pelayanan</label>
            <div>
                <span>Sangat buruk</span>
                @foreach(\App\Models\Respondents::getValidRatings() as $key => $label)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="service_rate" id="service_rate_{{ $key }}" value="{{ $key }}" {{ $respondents->service_rate == $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="service_rate_{{ $key }}">{{ $key }}</label>
                    </div>
                @endforeach
                <span>Sangat baik</span>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid">
                <button class="btn btn-warning">Submit</button>
            </div>
        </div>
    </form>
@endsection