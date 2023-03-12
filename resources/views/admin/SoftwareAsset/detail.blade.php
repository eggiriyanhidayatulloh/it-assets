@extends('admin.master')
@section('title')
    Detail Software Asset
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <a  style="float: right" href="/admin/software-asset" class="btn btn-warning btn-sm" >
            <i data-feather='arrow-left-circle'></i>   Cancel
        </a>
    </div>
</div>
<div class="row">
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
               <h6>Software Asset</h6> 
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Software ID Num</td>
                        <td>{{ $model->id_num }}</td>
                      </tr>
                      <tr>
                        <td>Software Name</td>
                        <td>{{ $model->software_name }}</td>
                      </tr>
                      <tr>
                        <td>Software Type</td>
                        <td>{{ $model->software_type }}</td>
                      </tr>
                      <tr>
                        <td>Software Brand</td>
                        <td>{{ $model->software_brand }}</td>
                      </tr>
                      <tr>
                        <td>Software Unit</td>
                        <td>{{ $model->software_unit }}</td>
                      </tr>
                      <tr>
                        <td>Software Total</td>
                        <td>{{ $model->software_total }}</td>
                      </tr>
                      <tr>
                        <td>Serial Number</td>
                        <td>{{ $model->serial_number }}</td>
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