@extends('admin.master')
@section('title')
Add Peripheral Asset
@endsection


@section('content')

<div class="card">
    <div class="card-header">
        Add Peripheral Asset
    </div>
    <div class="card-body">
        <form action="/admin/peripheral-asset/store" method="post">
        @csrf
 
            <h5>Peripheral Asset</h5>
            <hr>
            <div class="form-group">
                <label for="id_num">Peripheral ID Num.</label>
                <input type="text" name="id_num" id="id_num" class="form-control">
            </div>
            <div class="form-group">
                <label for="peripheral_name">Peripheral Name</label>
                <input type="text" name="peripheral_name" id="peripheral_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="peripheral_type">Peripheral Type</label>
                <select name="peripheral_type" id="peripheral_type" class="form-control" >
                    <option value="">--------------- Select Type -----------------</option>
                    <option value="Processor">Processor</option>
                    <option value="Motherboard">Motherboard</option>
                    <option value="Memory">Memory</option>
                    <option value="Hard Drive">Hard Drive</option>
                    <option value="Optical Drive">Optical Drive</option>
                    <option value="Case">Case</option>
                    <option value="Power Supply">Power Supply</option>
                    <option value="Input Device">Input Device</option>
                    <option value="Output Device">Output Device</option>
                    <option value="Networking">Networking</option>
                    <option value="Printing">Printing</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Accessories">Accessories</option>
                    <option value="Other">Other</option>
        
                </select>
            </div>
            <div class="form-group">
                <label for="peripheral_brand">Peripheral Brand</label>
                <input type="text" name="peripheral_brand" id="peripheral_brand" class="form-control">
            </div>
            <div class="form-group">
                <label for="peripheral_spesification">Peripheral Spesification</label>
                <input type="text" name="peripheral_spesification" id="peripheral_spesification" class="form-control" >
            </div>
            <div class="form-group">
                <label for="peripheral_unit">Peripheral Unit</label>
                <select name="peripheral_unit" id="peripheral_unit" class="form-control">
                    <option value="">--------------- Select Unit -----------------</option>
                    <option value="Unit">Unit</option>
                    <option value="Pcs">Pcs</option>
                    <option value="Roll">Roll</option>
                    <option value="Meter">Meter</option>
                    <option value="Box">Box</option>
                    <option value="Pack">Pack</option>
                </select>
            </div>
            <div class="form-group">
                <label for="peripheral_total">Peripheral Total</label>
                <input type="number" name="peripheral_total" id="peripheral_total" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="supplier">Supplier</label>
                <input type="text" name="supplier" id="supplier" class="form-control" >
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="request_date">Request Date</label>
                        <input type="date" name="request_date" id="request_date" class="form-control">
                    </div>  
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="delivery_date">Delivery Date</label>
                        <input type="date" name="delivery_date" id="delivery_date" class="form-control">
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

            <a href="/admin/peripheral-asset" class="btn btn-warning btn-sm" >Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm" >Add Data</button>
        </form>
    </div>
</div>

@endsection
