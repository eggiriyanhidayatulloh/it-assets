@extends('admin.master')
@section('title')
Edit Peripheral Asset
@endsection


@section('content')

<div class="card">
    <div class="card-header">
        Edit Peripheral Asset
    </div>
    <div class="card-body">
        <form action="/admin/peripheral-asset/updated/{{ $model->id }}" method="post">
        @csrf
 
            <h5>Peripheral Asset</h5>
            <hr>
            <div class="form-group">
                <label for="id_num">Peripheral ID Num.</label>
                <input type="text" name="id_num" id="id_num" class="form-control"  value="{{ $model->id_num }}" >
            </div>
            <div class="form-group">
                <label for="peripheral_name">Peripheral Name</label>
                <input type="text" name="peripheral_name" id="peripheral_name" class="form-control" required value="{{ $model->peripheral_name }}" >
            </div>
            <div class="form-group">
                <label for="peripheral_type">Peripheral Type</label>
                <select name="peripheral_type" id="peripheral_type" class="form-control" >
                    <option value="">--------------- Select Type -----------------</option>
                    <option {{ ($model->peripheral_type == "Processor")? "selected" : "Processor" }} value="Processor">Processor</option>
                    <option {{ ($model->peripheral_type == "Motherboard")? "selected" : "Motherboard" }} value="Motherboard">Motherboard</option>
                    <option {{ ($model->peripheral_type == "Memory")? "selected" : "Memory" }} value="">Memory</option>
                    <option {{ ($model->peripheral_type == "Hard Drive")? "selected" : "Hard Drive" }} value="Hard Drive">Hard Drive</option>
                    <option {{ ($model->peripheral_type == "Optical Drive")? "selected" : "Optical Drive" }} value="Optical Drive">Optical Drive</option>
                    <option {{ ($model->peripheral_type == "Case")? "selected" : "Case" }} value="Case">Case</option>
                    <option {{ ($model->peripheral_type == "Power Supply")? "selected" : "Power Supply" }} value="Power Supply">Power Supply</option>
                    <option {{ ($model->peripheral_type == "Input Device")? "selected" : "Input Device" }} value="Input Device">Input Device</option>
                    <option {{ ($model->peripheral_type == "Output Device")? "selected" : "Output Device" }} value="">Output Device</option>
                    <option {{ ($model->peripheral_type == "Networking")? "selected" : "Networking" }} value="Networking">Networking</option>
                    <option {{ ($model->peripheral_type == "Printing")? "selected" : "Printing" }} value="">Printing</option>
                    <option {{ ($model->peripheral_type == "Multimedia")? "selected" : "Multimedia" }} value="Multimedia">Multimedia</option>
                    <option {{ ($model->peripheral_type == "Accessories")? "selected" : "Accessories" }} value="Accessories">Accessories</option>
                    <option {{ ($model->peripheral_type == "Other")? "selected" : "Other" }} value="Other"></option>
                </select>
            </div>
            <div class="form-group">
                <label for="peripheral_brand">Peripheral Brand</label>
                <input type="text" name="peripheral_brand" id="peripheral_brand" class="form-control" value="{{ $model->peripheral_brand }}">
            </div>
            <div class="form-group">
                <label for="peripheral_spesification">Peripheral Spesification</label>
                <input type="text" name="peripheral_spesification" id="peripheral_spesification" class="form-control" value="{{ $model->peripheral_spesification }}">
            </div>
            <div class="form-group">
                <label for="peripheral_unit">Peripheral Unit</label>
                <select name="peripheral_unit" id="peripheral_unit" class="form-control" required>
                    <option value="">--------------- Select Unit -----------------</option>
                    <option {{ ($model->peripheral_unit == "Unit")? "selected" : "Unit" }} value="Unit">Unit</option>
                    <option {{ ($model->peripheral_unit == "Pcs")? "selected" : "Pcs" }} value="Pcs">Pcs</option>
                    <option {{ ($model->peripheral_unit == "Roll")? "selected" : "Roll" }} value="Roll">Roll</option>
                    <option {{ ($model->peripheral_unit == "Meter")? "selected" : "Meter" }} value="Meter">Meter</option>
                    <option {{ ($model->peripheral_unit == "Box")? "selected" : "Box" }} value="Box">Box</option>
                    <option {{ ($model->peripheral_unit == "Pack")? "selected" : "Pack" }} value="Pack">Pack</option>
                </select>
            </div>
            <div class="form-group">
                <label for="peripheral_total">Peripheral Total</label>
                <input type="number" name="peripheral_total" id="peripheral_total" class="form-control" required value="{{ $model->peripheral_total }}">
            </div>
            <div class="form-group">
                <label for="supplier">Supplier</label>
                <input type="text" name="supplier" id="supplier" class="form-control" value="{{ $model->supplier }}">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="request_date">Request Date</label>
                        <input type="date" name="request_date" id="request_date" class="form-control" value="{{ $model->request_date }}">
                    </div>  
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="delivery_date">Delivery Date</label>
                        <input type="date" name="delivery_date" id="delivery_date" class="form-control" value="{{ $model->delivery_date }}">
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
            <a href="/admin/peripheral-asset" class="btn btn-warning btn-sm" >Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm" >Edit Data</button>
        </form>
    </div>
</div>

@endsection
