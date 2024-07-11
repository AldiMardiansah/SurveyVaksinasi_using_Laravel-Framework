@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Masukkan Identitas</h1>
    <hr />
    <form action="
            @if(Auth::user()->role == 'admin')
                {{ route('admin.store') }}
            @else
                {{ route('respondents.store') }}
            @endif" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" name="address" class="form-control" id="address">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                @foreach(\App\Models\Respondents::getValidGenders() as $key => $label)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender_{{ $key }}" value="{{ $key }}" {{ old('gender') == $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="gender_{{ $key }}">
                            {{ $label }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Usia</label>
            <input type="number" name="age" class="form-control" id="age">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <div class="form-check">
                @foreach(\App\Models\Respondents::getValidStatuses() as $key => $label)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status_{{ $key }}" value="{{ $key }}" {{ old('status') == $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="status_{{ $key }}">
                            {{ $label }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="mb-3">
            <label for="doses" class="form-label">Jumlah Dosis</label>
            <select name="doses" class="form-select" id="doses">
                <option value="">Pilih Jumlah Dosis</option>
                @foreach(\App\Models\Respondents::getValidDoses() as $dose)
                    <option value="{{ $dose }}" {{ old('doses') == $dose ? 'selected' : '' }}>
                        {{ $dose }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="vaccine" class="form-label">Jenis Vaksin</label>
            <select name="vaccine" class="form-select" id="vaccine">
                <option value="">Pilih Jenis Vaksin</option>
                @foreach(\App\Models\Respondents::getValidVaccines() as $vaccine)
                    <option value="{{ $vaccine }}" {{ old('vaccine') == $vaccine ? 'selected' : '' }}>
                        {{ $vaccine }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="effects" class="form-label">Efek Samping</label>
            <input type="text" name="effects" class="form-control" id="effects" value="{{ old('effects') }}">
        </div>
        <div class="mb-3">
            <label for="medical_history" class="form-label">Riwayat Penyakit</label>
            <input type="text" name="medical_history" class="form-control" id="medical_history" value="{{ old('medical_history') }}">
        </div>
        <div class="mb-3">
            <label for="importance" class="form-label">Skala Pentingnya Divaksin</label>
            <div>
                <span>Tidak penting</span>
                @foreach(\App\Models\Respondents::getValidImportance() as $key => $label)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="importance" id="importance_{{ $key }}" value="{{ $key }}" {{ old('importance') == $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="importance_{{ $key }}">
                            {{ $key }}
                        </label>
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
                        <input class="form-check-input" type="radio" name="info_sufficiency" id="info_sufficiency_{{ $key }}" value="{{ $key }}" {{ old('info_sufficiency') == $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="info_sufficiency_{{ $key }}">
                            {{ $key }}
                        </label>
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
                        <input class="form-check-input" type="radio" name="service_rate" id="service_rate_{{ $key }}" value="{{ $key }}" {{ old('service_rate') == $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="service_rate_{{ $key }}">
                            {{ $key }}
                        </label>
                    </div>
                @endforeach
                <span>Sangat baik</span>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
