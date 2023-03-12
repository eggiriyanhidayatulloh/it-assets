@extends('admin.master')
@section('title')
Computer Asset
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        Computer Asset
    </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div style="float: right" >
            <a href="/admin/computer-asset/add" class="btn btn-primary btn-sm"> Add Data </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>ID Num</th>
                        <th>Computer Name</th>
                        <th>Computer Type</th>
                        <th>Computer Brand</th>
                        <th>Computer Unit</th>
                        <th>Total</th>
                        <th>Supplier</th>
                        <th>Request Date</th>
                        <th>Delivery Date</th>
                        <th>Status</th>
                        <th>processor</th>
                        <th>motherboard</th>
                        <th>memory</th>
                        <th>display_card</th>
                        <th>hard_drive</th>
                        <th>optical_drive</th>
                        <th>network_card</th>
                        <th>power_supply</th>
                        <th>monitor</th>
                        <th>keyboard</th>
                        <th>mouse</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($model as $key => $value)
                        <tr>
                            <td>{{ $value->id_num }}</td>
                            <td>{{ $value->computer_name }}</td>
                            <td>{{ $value->computer_type }}</td>
                            <td>{{ $value->computer_brand }}</td>
                            <td>{{ $value->computer_unit }}</td>
                            <td>{{ $value->computer_total }}</td>
                            <td>{{ $value->supplier }}</td>
                            <td>{{ $value->request_date }}</td>
                            <td>{{ $value->delivery_date }}</td>
                            <td>{{ $value->status }}</td>
                            <td>{{ $value->processor }}</td>
                            <td>{{ $value->motherboard }}</td>
                            <td>{{ $value->memory }}</td>
                            <td>{{ $value->display_card }}</td>
                            <td>{{ $value->hard_drive }}</td>
                            <td>{{ $value->optical_drive }}</td>
                            <td>{{ $value->network_card }}</td>
                            <td>{{ $value->power_supply }}</td>
                            <td>{{ $value->monitor }}</td>
                            <td>{{ $value->keyboard }}</td>
                            <td>{{ $value->mouse }}</td>
                            <td>
                                <a href="/admin/computer-asset/detail/{{ $value->id }}" >
                                    <i data-feather='file-minus'></i>
                                </a>
                                <a href="/admin/computer-asset/edit/{{ $value->id }}" >
                                    <i data-feather='edit'></i>
                                </a>
                                <a href="/admin/computer-asset/delete/{{ $value->id }}" >
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