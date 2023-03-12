@extends('admin.master')
@section('title')
Edit Software Asset
@endsection


@section('content')

<div class="card">
    <div class="card-header">
        Edit Software Asset
    </div>
    <div class="card-body">
        <form action="/admin/software-asset/updated/{{ $model->id }}" method="post">
        @csrf
 
            <h5>Software Asset</h5>
            <hr>
            <div class="form-group">
                <label for="id_num">Software ID Num.</label>
                <input type="text" name="id_num" id="id_num" class="form-control" required value="{{ $model->id_num }}" >
            </div>
            <div class="form-group">
                <label for="software_name">Software Name</label>
                <input type="text" name="software_name" id="software_name" class="form-control" required value="{{ $model->software_name }}" >
            </div>
            <div class="form-group">
                <label for="software_type">Software Type</label>
                <select name="software_type" id="software_type" class="form-control" required>
                    <option value="">--------------- Select Type -----------------</option>
                    <option {{ ($model->software_type == "Operating System")? "selected" : "Operating System" }} value="Operating System">Operating System</option>
                    <option {{ ($model->software_type == "Office")? "selected" : "Office" }} value="Office">Office</option>
                    <option {{ ($model->software_type == "Information System")? "selected" : "Information System" }} value="Information System">Information System</option>
                    <option {{ ($model->software_type == "Programming Language")? "selected" : "Programming Language" }} value="Programming Language">Programming Language</option>
                    <option {{ ($model->software_type == "Antivirus")? "selected" : "Antivirus" }} value="Antivirus">Antivirus</option>
                    <option {{ ($model->software_type == "Drawing")? "selected" : "Drawing" }} value="Drawing">Drawing</option>
                    <option {{ ($model->software_type == "Multimedia")? "selected" : "Multimedia" }} value="Multimedia">Multimedia</option>
                    <option {{ ($model->software_type == "Internet")? "selected" : "Internet" }} value="Internet">Internet</option>
                    <option {{ ($model->software_type == "Driver")? "selected" : "Driver" }} value="Driver">Driver</option>
                    <option {{ ($model->software_type == "Utilities")? "selected" : "Utilities" }} value="Utilities">Utilities</option>
                    <option {{ ($model->software_type == "Other")? "selected" : "Other" }} value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="software_brand">Software Brand</label>
                <input type="text" name="software_brand" id="software_brand" class="form-control" required value="{{ $model->software_brand }}">
            </div>
            <div class="form-group">
                <label for="software_unit">Software Unit</label>
                <select name="software_unit" id="software_unit" class="form-control" required>
                    <option value="">--------------- Select Unit -----------------</option>
                    <option {{ ($model->software_unit == "Pcs")? "selected" : "Pcs" }} value="Pcs">Pcs</option>
                    <option {{ ($model->software_unit == "Box")? "selected" : "Box" }} value="Box">Box</option>
                    <option {{ ($model->software_unit == "Unit")? "selected" : "Unit" }} value="Unit">Unit</option>
                </select>
            </div>
            <div class="form-group">
                <label for="software_total">Serial Total</label>
                <input type="number" name="software_total" id="software_total" class="form-control" required value="{{ $model->software_total }}">
            </div>
            <div class="form-group">
                <label for="serial_number">Serial Number</label>
                <input type="text" name="serial_number" id="serial_number" class="form-control" required value="{{ $model->serial_number }}">
            </div>
            <div class="form-group">
                <label for="supplier">Supplier</label>
                <input type="text" name="supplier" id="supplier" class="form-control" required value="{{ $model->supplier }}">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="request_date">Request Date</label>
                        <input type="date" name="request_date" id="request_date" class="form-control" required value="{{ $model->request_date }}">
                    </div>  
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="delivery_date">Delivery Date</label>
                        <input type="date" name="delivery_date" id="delivery_date" class="form-control" required value="{{ $model->delivery_date }}">
                    </div>  
                </div>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">---------------pilih status-----------------</option>
                    <option {{ ($model->status == "Normal")? "selected" : "Normal" }} value="Normal">Normal</option>
                    <option {{ ($model->status == "Repair")? "selected" : "Repair" }} value="Repair">Repair</option>
                    <option {{ ($model->status == "Unusable")? "selected" : "Unusable" }} value="Unusable">Unusable</option>
                </select>
            </div>
            <a href="/admin/software-asset" class="btn btn-warning btn-sm" >Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm" >Edit Data</button>
        </form>
    </div>
</div>

@endsection
