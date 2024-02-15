@extends('layouts.master')
@section('title', 'Product')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product</h1>
        <div>
            <a href="/admin" class="d-none d-sm-inline-block"><i class="fas fa-download fa-sm text-white-50"></i>Home</a> /
            Product
        </div>
    </div>

    <!-- Content Row -->

    <div class="row d-flex justify-content-center">

        <!-- Product List -->
        <div class="col-xl-8 col-lg-10">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <button onclick="return alert('Not implemented')" class="btn btn-sm btn-primary mr-2">Mass Upload</button>
                        <a href="{{ route('product.create') }}" class="btn btn-sm btn-success">Tambah</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td><img src="{{ $product->image_url }}" width="100"></td>
                                        <td>
                                            <b>{{ $product->name }}</b><br>
                                            Kategori: <span class="badge badge-secondary">{{ $product->category->name }}</span><br>
                                            Berat: <span class="badge badge-secondary">{{ $product->weight }}</span>
                                        </td>
                                        <td>Rp {{ $product->price }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>{{ $product->status }}</td>
                                        <td>
                                            <a href="{{ route('product.edit', $product->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
