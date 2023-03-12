@extends('admin.master')
@section('title')
Add Client Information
@endsection


@section('content')

<div class="card">
    <div class="card-header">
        Add Client Information
    </div>
    <div class="card-body">
        <form action="/admin/client-information/store" method="post">
        @csrf
 
            <h5>Client Information</h5>
            <hr>
            <div class="form-group">
                <label for="computer_name">Computer Name</label>
                <input type="text" name="computer_name" id="computer_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ip_address">IP Address</label>
                <input type="text" name="ip_address" id="ip_address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="connection_type">Net. Connection Type</label>
                <select name="connection_type" id="connection_type" class="form-control" required>
                    <option value="">---------------pilih Type-----------------</option>
                    <option value="Cable">Cable</option>
                    <option value="Wireless">Wireless</option>
                    <!-- <option value="type3">type 3</option> -->
                </select>
            </div>
            <div class="form-group">
                <label for="room">Room</label>
                <select name="room" id="room" class="form-control" required>
                    <option value="">---------------pilih room-----------------</option>
                    <option value="C1">C1</option>
                    <option value="C2">C2</option>
                    <option value="C3">C3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="employee_number">Employee ID Number</label>
                <input type="text" name="employee_number" id="employee_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="user_name">Employee / User Name</label>
                <input type="text" name="user_name" id="user_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" id="position" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" name="department" id="department" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="start_using_date">Start Using Date</label>
                        <input type="date" name="start_using_date" id="start_using_date" class="form-control" required>
                    </div>  
                </div>
            </div>
            <a href="/admin/client-information" class="btn btn-warning btn-sm" >Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm" >Add Data</button>
        </form>
    </div>
</div>

@endsection
