@extends('admin.master')
@section('title')
Peripheral Asset
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        Peripheral Asset
    </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div style="float: right" >
            <a href="/admin/peripheral-asset/add" class="btn btn-primary btn-sm"> Add Data </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>ID Number</th>
                        <th>Peripheral Name</th>
                        <th>Peripheral Type</th>
                        <th>Peripheral Brand</th>
                        <th>Peripheral Spesification</th>
                        <th>Peripheral Unit</th>
                        <th>Peripheral Total</th>
                        <th>Supplier</th>
                        <th>Request Date</th>
                        <th>Delivery Date</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($model as $key => $value)
                        <tr>
                            <td>{{ $value->id_num }}</td>
                            <td>{{ $value->peripheral_name }}</td>
                            <td>{{ $value->peripheral_type }}</td>
                            <td>{{ $value->peripheral_brand }}</td>
                            <td>{{ $value->peripheral_spesification }}</td>
                            <td>{{ $value->peripheral_unit }}</td>
                            <td>{{ $value->peripheral_total }}</td>
                            <td>{{ $value->supplier }}</td>
                            <td>{{ $value->request_date }}</td>
                            <td>{{ $value->delivery_date }}</td>
                            <td>{{ $value->status }}</td>
                            <td>
                                <a href="/admin/peripheral-asset/detail/{{ $value->id }}" >
                                    <i data-feather='file-minus'></i>
                                </a>
                                <a href="/admin/peripheral-asset/edit/{{ $value->id }}" >
                                    <i data-feather='edit'></i>
                                </a>
                                <a href="/admin/peripheral-asset/delete/{{ $value->id }}" >
                                    <i data-feather='trash-2'></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection