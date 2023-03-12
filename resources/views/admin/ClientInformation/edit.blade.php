@extends('admin.master')
@section('title')
Edit Client Information
@endsection


@section('content')

<div class="card">
    <div class="card-header">
        Edit Client Information
    </div>
    <div class="card-body">
        <form action="/admin/client-information/updated/{{ $model->id }}" method="post">
        @csrf
 
            <h5>Client Information</h5>
            <hr>
            <div class="form-group">
                <label for="computer_name">Computer Name</label>
                <input type="text" name="computer_name" id="computer_name" class="form-control" required value="{{ $model->computer_name }}" >
            </div>
            <div class="form-group">
                <label for="ip_address">IP Address</label>
                <input type="text" name="ip_address" id="ip_address" class="form-control" required value="{{ $model->ip_address }}" >
            </div>
            <div class="form-group">
                <label for="connection_type">Net. Connection Type</label>
                <select name="connection_type" id="connection_type" class="form-control" required>
                    <option value="">---------------pilih Type-----------------</option>
                    <option {{ ($model->connection_type == "cable")? "selected" : "" }} value="cable">Cable</option>
                    <option {{ ($model->connection_type == "wireless")? "selected" : "" }} value="wireless">Wireless</option>
                    <!-- <option {{ ($model->connection_type == "type3")? "selected" : "" }} value="type3">type 3</option> -->
                </select>
            </div>
            <div class="form-group">
                <label for="room">Room</label>
                <select name="room" id="room" class="form-control" required>
                    <option value="">---------------pilih room-----------------</option>
                    <option {{ ($model->room == "C1")? "selected" : "" }} value="C1">C1</option>
                    <option {{ ($model->room == "C2")? "selected" : "" }} value="C2">C2</option>
                    <option {{ ($model->room == "C3")? "selected" : "" }} value="C3">C3</optio>
                </select>
            </div>
            <div class="form-group">
                <label for="employee_number">Employee Number</label>
                <input type="text" name="employee_number" id="employee_number" class="form-control" required value="{{ $model->employee_number }}">
            </div>
            <div class="form-group">
                <label for="user_name">Employee / User Name</label>
                <input type="text" name="user_name" id="user_name" class="form-control" required value="{{ $model->user_name }}">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" required value="{{ $model->position }}">
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" name="department" id="department" class="form-control" required value="{{ $model->department }}">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="start_using_date">Start Using Date</label>
                        <input type="date" name="start_using_date" id="start_using_date" class="form-control" required value="{{ $model->start_using_date }}">
                    </div>  
                </div>
            </div>
            <a href="/admin/client-information" class="btn btn-warning btn-sm" >Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm" >Edit Data</button>
        </form>
    </div>
</div>

@endsection
