@extends('biodata.layouts.master')
@section('title', 'Edit Biodata')
@section('header')
    <br><br><br>
@endsection
@section('content')
    <div class="card">
        <h1 class="card-header">Edit Biodata</h1>

        <form action="{{ route('biodata.update', $biodata->id) }}" method="post" class="form card-body">
            @csrf
            @method('PUT')
            <div class="container">
                <div class="form-group">
                    <label class="form-label" for="nama_lengkap">Nama Lengkap:</label>
                    <input class="form-control" type="text" name="nama_lengkap" value="{{ $biodata->nama_lengkap }}"
                        required><br />

                    <label class="form-label" for="nik">NIK:</label>
                    <input class="form-control" type="text" name="nik" value="{{ $biodata->nik }}" required><br />

                    <label class="form-label" for="umur">Umur:</label>
                    <input class="form-control" type="number" name="umur" value="{{ $biodata->umur }}" required><br />

                    <label class="form-label" for="alamat">Alamat:</label>
                    <textarea class="form-control" name="alamat" cols="30" rows="2" required>{{ $biodata->alamat }}</textarea><br />

                    <button class="btn btn-primary" type="submit">Submit</button>

                    <a href="{{ route('biodata.index') }}" class="btn btn-secondary">Cancel</a>

                </div>
            </div>
        </form>

    </div>
@endsection
