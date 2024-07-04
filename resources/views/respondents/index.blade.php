@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-beetween">
        <a href="{{ route('respondents.create') }}" class="btn btn-primary">Isi Survey Mu</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#:</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if ($respondents->count() > 0)
                @foreach ($respondents as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->gender }}</td>
                        <td class="align-middle">{{ $rs->address }}</td>
                        <td class="align-middle">{{ $rs->status }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('respondents.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('respondents.edit', $rs->id) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('respondents.destroy', $rs->id) }}" method="post" type="button" class="btn btn-danger m-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection