@extends('admin.master')
@section('title')
Add Software Asset
@endsection


@section('content')

<div class="card">
    <div class="card-header">
        Add Software Asset
    </div>
    <div class="card-body">
        <form action="/admin/software-asset/store" method="post">
        @csrf
 
            <h5>Software Asset</h5>
            <hr>
            <div class="form-group">
                <label for="id_num">Software ID Num.</label>
                <input type="text" name="id_num" id="id_num" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="software_name">Software Name</label>
                <input type="text" name="software_name" id="software_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="software_type">Software Type</label>
                <select name="software_type" id="software_type" class="form-control" required>
                    <option value="">--------------- Select Type -----------------</option>
                    <option value="Operating System">Operating System</option>
                    <option value="Office">Office</option>
                    <option value="Information System">Information System</option>
                    <option value="Programming Language">Programming Language</option>
                    <option value="Antivirus">Antivirus</option>
                    <option value="Drawing">Drawing</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Internet">Internet</option>
                    <option value="Driver">Driver</option>
                    <option value="Utilities">Utilities</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="software_brand">Software Brand</label>
                <input type="text" name="software_brand" id="software_brand" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="software_unit">Software Unit</label>
                <select name="software_unit" id="software_unit" class="form-control" required>
                    <option value="">--------------- Select Unit -----------------</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Box">Box</option>
                    <option value="Unit">Unit</option>
                </select>
            </div>
            <div class="form-group">
                <label for="software_total">Software Total</label>
                <input type="number" name="software_total" id="software_total" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="serial_number">Serial Number</label>
                <input type="text" name="serial_number" id="serial_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="supplier">Supplier</label>
                <input type="text" name="supplier" id="supplier" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="request_date">Request Date</label>
                        <input type="date" name="request_date" id="request_date" class="form-control" required>
                    </div>  
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="delivery_date">Delivery Date</label>
                        <input type="date" name="delivery_date" id="delivery_date" class="form-control" required>
                    </div>  
                </div>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">--------------- Select Status -----------------</option>
                    <option value="Normal">Normal</option>
                    <option value="Repair">Repair</option>
                    <option value="Unusable">Unusable</option>
                </select>
            </div>

            <a href="/admin/software-asset" class="btn btn-warning btn-sm" >Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm" >Add Data</button>
        </form>
    </div>
</div>

@endsection
