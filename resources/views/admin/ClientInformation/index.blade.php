@extends('admin.master')
@section('title')
Client Information
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        Client Information
    </div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div style="float: right" >
            <a href="/admin/client-information/add" class="btn btn-primary btn-sm"> Add Data </a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>Client Number</th>
                        <th>Computer Name</th>
                        <th>IP Address</th>
                        <th>Net. Conn. Type</th>
                        <th>Room</th>
                        <th>Emp. ID Number</th>
                        <th>User Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Start Using Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($model as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->computer_name }}</td>
                            <td>{{ $value->ip_address }}</td>
                            <td>{{ $value->connection_type }}</td>
                            <td>{{ $value->room }}</td>
                            <td>{{ $value->employee_number }}</td>
                            <td>{{ $value->user_name }}</td>
                            <td>{{ $value->position }}</td>
                            <td>{{ $value->department }}</td>
                            <td>{{ $value->start_using_date }}</td>
                            <td>
                                <a href="/admin/client-information/detail/{{ $value->id }}" >
                                    <i data-feather='file-minus'></i>
                                </a>
                                <a href="/admin/client-information/edit/{{ $value->id }}" >
                                    <i data-feather='edit'></i>
                                </a>
                                <a href="/admin/client-information/delete/{{ $value->id }}" >
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