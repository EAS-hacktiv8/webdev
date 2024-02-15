@extends('layouts.master')
@section('title', 'Order')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Order</h1>
        <div>
            <a href="/admin" class="d-none d-sm-inline-block"><i class="fas fa-download fa-sm text-white-50"></i>Home</a> /
            Order
        </div>
    </div>

    <!-- Content Row -->

    <div class="row d-flex justify-content-center">

        <!-- Order List -->
        <div class="col-xl-8 col-lg-10">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Order List</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pembeli</th>
                                    <th>Tanggal</th>
                                    <th>ID Invoice</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @php
                                                $user = \App\Models\User::find($order->user_id);
                                            @endphp
                                            {{ $user->name }}
                                        </td>
                                        <td>{{ $order->order_date }}</td>
                                        <td>{{ $order->invoice_id }}</td>
                                        <td>{{ $order->order_status }}</td>
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
