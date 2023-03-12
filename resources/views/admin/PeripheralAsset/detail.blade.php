@extends('admin.master')
@section('title')
    Detail Peripheral Asset
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <a  style="float: right" href="/admin/peripheral-asset" class="btn btn-warning btn-sm" >
            <i data-feather='arrow-left-circle'></i>   Cancel
        </a>
    </div>
</div>
<div class="row">
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
               <h6>Peripheral Asset</h6> 
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Peripheral ID Num</td>
                        <td>{{ $model->id_num }}</td>
                      </tr>
                      <tr>
                        <td>Peripheral Name</td>
                        <td>{{ $model->peripheral_name }}</td>
                      </tr>
                      <tr>
                        <td>Peripheral Type</td>
                        <td>{{ $model->peripheral_type }}</td>
                      </tr>
                      <tr>
                        <td>Peripheral Brand</td>
                        <td>{{ $model->peripheral_brand }}</td>
                      </tr>
                      <tr>
                        <td>Peripheral Spesification</td>
                        <td>{{ $model->peripheral_spesification }}</td>
                      </tr>
                      <tr>
                        <td>Peripheral Unit</td>
                        <td>{{ $model->peripheral_unit }}</td>
                      </tr>
                      <tr>
                        <td>Peripheral Total</td>
                        <td>{{ $model->peripheral_total }}</td>
                      </tr>
                      <tr>
                        <td>Supplier</td>
                        <td>{{ $model->supplier }}</td>
                      </tr>
                      <tr>
                        <td>Request Date</td>
                        <td>{{ $model->request_date }}</td>
                      </tr>
                      <tr>
                        <td>Delivery Date</td>
                        <td>{{ $model->delivery_date }}</td>
                      </tr>
                      <tr>
                        <td>Status</td>
                        <td>{{ $model->status }}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection