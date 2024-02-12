@extends('biodata.layouts.master')
@section('title', 'Biodata List')
@section('header')
    <h1>Biodata List</h1>
    <br />
@endsection
@section('content')
    <section class="container">
        <a href="{{ route('biodata.create') }}" class="btn btn-primary mb-3">Add new biodata</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr class="table-dark">
                    <th>Name</th>
                    <th>NIK</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th colspan="2">Action</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($biodata as $item)
                    <tr>
                        <td> {{ $item->nama_lengkap }} </td>
                        <td> {{ $item->nik }} </td>
                        <td> {{ $item->umur }} </td>
                        <td> {{ $item->alamat }} </td>
                        <td>
                            <a href="{{ route('biodata.edit', $item->id) }}"> <button class="btn btn-warning">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('biodata.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </section>
@endsection
