@extends('admin.master')
@section('title')
Edit Computer Asset
@endsection


@section('content')

<div class="card">
    <div class="card-header">
        Edit Computer Asset
    </div>
    <div class="card-body">
        <form action="/admin/computer-asset/updated/{{ $model->id }}" method="post">
        @csrf
 
            <h5>Computer Asset</h5>
            <hr>
            <div class="form-group">
                <label for="id_num">Computer ID Num.</label>
                <input type="text" name="id_num" id="id_num" class="form-control" required value="{{ $model->id_num }}" >
            </div>
            <div class="form-group">
                <label for="computer_name">Computer Name</label>
                <input type="text" name="computer_name" id="computer_name" class="form-control" required value="{{ $model->computer_name }}" >
            </div>
            <div class="form-group">
                <label for="computer_type">Computer Type</label>
                <select name="computer_type" id="computer_type" class="form-control" required>
                    <option value="">--------------- Select Type -----------------</option>
                    <option {{ ($model->computer_type == "Personal Computer")? "selected" : "" }} value="Personal Computer">Personal Computer</option>
                    <option {{ ($model->computer_type == "Notebook")? "selected" : "" }} value="Notebook">Notebook</option>
                    <option {{ ($model->computer_type == "Netbook")? "selected" : "" }} value="Netbook">Netbook</option>
                    <option {{ ($model->computer_type == "Server")? "selected" : "" }} value="Server">Server</option>
                    <option {{ ($model->computer_type == "Tablet")? "selected" : "" }} value="Tablet">Tablet</option>
                    <option {{ ($model->computer_type == "Smartphone")? "selected" : "" }} value="Smartphone">Smartphone</option>
                    <option {{ ($model->computer_type == "Other")? "selected" : "" }} value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="computer_brand">Computer brand</label>
                <input type="text" name="computer_brand" id="computer_brand" class="form-control" required value="{{ $model->computer_brand }}">
            </div>
            <div class="form-group">
                <label for="computer_unit">Computer Unit</label>
                <select name="computer_unit" id="computer_unit" class="form-control" required>
                    <option value="">--------------- Select Unit -----------------</option>
                    <option {{ ($model->computer_unit == "Unit")? "selected" : "" }} value="Unit">Unit</option>
                    <option {{ ($model->computer_unit == "Pcs")? "selected" : "" }} value="Pcs">Pcs</option>
                </select>
            </div>
            <div class="form-group">
                <label for="computer_total">Total</label>
                <input type="number" name="computer_total" id="computer_total" class="form-control" required value="{{ $model->computer_total }}">
            </div>
            <div class=
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
                    <option {{ ($model->status == "Normal")? "selected" : "" }} value="Normal">Normal</option>
                    <option {{ ($model->status == "Repair")? "selected" : "" }} value="Repair">Repair</option>
                    <option {{ ($model->status == "Unusable")? "selected" : "" }} value="Unusable">Unusable</option>
                </select>
            </div>

            <h5 class="mt-3">Standard Spesifications</h5>
            <hr>
            <div class="form-group">
                <label for="processor">Processor</label>
                <input type="text" name="processor" id="processor" class="form-control" required value="{{ $model->processor }}">
            </div>
            <div class="form-group">
                <label for="motherboard">Motherboard</label>
                <input type="text" name="motherboard" id="motherboard" class="form-control" value="{{ $model->motherboard }}">
            </div>
            <div class="form-group">
                <label for="memory">Memory</label>
                <input type="number" name="memory" id="memory" class="form-control" required value="{{ $model->memory }}">
            </div>
            <div class="form-group">
                <label for="display_card">Display Card</label>
                <input type="text" name="display_card" id="display_card" class="form-control" value="{{ $model->display_card }}">
            </div>
            <div class="form-group">
                <label for="hard_drive">Hard Drive</label>
                <input type="text" name="hard_drive" id="hard_drive" class="form-control" required value="{{ $model->hard_drive }}">
            </div>
            <div class="form-group">
                <label for="optical_drive">Optical Drive</label>
                <input type="text" name="optical_drive" id="optical_drive" class="form-control" value="{{ $model->optical_drive }}">
            </div>
            <div class="form-group">
                <label for="network_card">Network Card</label>
                <input type="text" name="network_card" id="network_card" class="form-control" value="{{ $model->network_card }}">
            </div>
            <div class="form-group">
                <label for="power_supply">Power Supply</label>
                <input type="text" name="power_supply" id="power_supply" class="form-control" value="{{ $model->power_supply }}">
            </div>
            <div class="form-group">
                <label for="monitor">Monitor</label>
                <input type="text" name="monitor" id="monitor" class="form-control" value="{{ $model->monitor }}">
            </div>
            <div class="form-group">
                <label for="keyboard">Keyboard</label>
                <input type="text" name="keyboard" id="keyboard" class="form-control" value="{{ $model->keyboard }}">
            </div>
            <div class="form-group">
                <label for="mouse">Mouse</label>
                <input type="text" name="mouse" id="mouse" class="form-control" value="{{ $model->mouse }}">
            </div>

            <a href="/admin/computer-asset" class="btn btn-warning btn-sm" >Cancel</a>
            <button type="submit" class="btn btn-primary btn-sm" >Edit Data</button>
        </form>
    </div>
</div>

@endsection
