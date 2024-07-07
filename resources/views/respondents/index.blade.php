@extends('layouts.app')

@section('body')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <h1>Hello, {{ Auth::user()->name }} </h1>
    
    <div class="d-flex align-items-center justify-content-beetween">
        <a href="{{ route('respondents.create') }}" class="btn btn-primary">Isi Survey Mu</a>
    </div>
    <hr />
@endsection