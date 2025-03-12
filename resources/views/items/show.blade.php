@extends('layouts.adminlte')

@section('title', 'Item Details')
@section('page_title', 'Item Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Item Information</h3>
                    <div class="card-tools">
                        <a href="{{ route('items.edit', $item) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('items.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 200px">ID</th>
                                <td>{{ $item->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $item->name }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $item->description }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{ number_format($item->price, 2) }}</td>
                            </tr>
                            <tr>
                                <th>Quantity</th>
                                <td>{{ $item->quantity }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $item->updated_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection