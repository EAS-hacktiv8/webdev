@extends('biodata.layouts.master')
@section('title', 'Create Biodata')
@section('header')
    <br><br><br>
@endsection
@section('content')
    <div class="card">
        <h1 class="card-header">Create Biodata</h1>
        <form action="{{ route('biodata.store') }}" method="post" class="form card-body">
            @csrf
            <div class="container">
                <div class="form-group">
                    <label class="form-label" for="nama_lengkap">Nama Lengkap:</label>
                    <input class="form-control" type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}"
                        required><br />

                    <label class="form-label" for="nik">NIK:</label>
                    <input class="form-control" type="text" name="nik" value="{{ old('nik') }}" required><br />

                    <label class="form-label" for="umur">Umur:</label>
                    <input class="form-control" type="number" name="umur" value="{{ old('umur') }}" required><br />

                    <label class="form-label" for="alamat">Alamat:</label>
                    <textarea class="form-control" name="alamat" cols="30" rows="2" required>{{ old('alamat') }}</textarea><br />

                    <button class="btn btn-primary" type="submit">Submit</button>

                </div>

            </div>
        </form>
    </div>
@endsection
