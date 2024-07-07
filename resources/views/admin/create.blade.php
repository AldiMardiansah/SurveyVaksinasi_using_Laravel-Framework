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
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name">
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
            <label for="address" class="form-label">Alamat</label>
            <input type="text" name="address" class="form-control" id="address">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="status">
        </div>
        <div class="mb-3">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection