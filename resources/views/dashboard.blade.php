@extends('layouts.adminlte')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ \App\Models\Item::count() }}</h3>
                    <p>Total Items</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <a href="{{ route('items.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Welcome to Ivanfarhani Dashboard</h3>
                </div>
                <div class="card-body">
                    <p>This is a simple dashboard integrated with AdminLTE v3.2.0 in Laravel.</p>
                    <p>You can manage items by clicking on the Items menu in the sidebar.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection