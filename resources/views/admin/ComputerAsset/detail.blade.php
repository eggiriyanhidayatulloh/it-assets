@extends('admin.master')
@section('title')
    Detail Computer Asset
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <a  style="float: right" href="/admin/computer-asset" class="btn btn-warning btn-sm" >
            <i data-feather='arrow-left-circle'></i>   Cancel
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
               <h6>Computer Asset</h6> 
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Computer ID Num</td>
                        <td>{{ $model->id_num }}</td>
                      </tr>
                      <tr>
                        <td>Computer Name</td>
                        <td>{{ $model->computer_name }}</td>
                      </tr>
                      <tr>
                        <td>Computer Type</td>
                        <td>{{ $model->computer_type }}</td>
                      </tr>
                      <tr>
                        <td>Computer Brand</td>
                        <td>{{ $model->computer_brand }}</td>
                      </tr>
                      <tr>
                        <td>Computer Unit</td>
                        <td>{{ $model->computer_unit }}</td>
                      </tr>
                      <tr>
                        <td>Computer Total</td>
                        <td>{{ $model->computer_total }}</td>
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
               <h6>Standard Spesifications</h6> 
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                      <tr>
                        <td>Processor</td>
                        <td>{{ $model->processor }}</td>
                      </tr>
                      <tr>
                        <td>Motherboard</td>
                        <td>{{ $model->motherboard }}</td>
                      </tr>
                      <tr>
                        <td>Memory</td>
                        <td>{{ $model->memory }}</td>
                      </tr>
                      <tr>
                        <td>Display_card</td>
                        <td>{{ $model->display_card }}</td>
                      </tr>
                      <tr>
                        <td>Hard_drive</td>
                        <td>{{ $model->hard_drive }}</td>
                      </tr>
                      <tr>
                        <td>Optical_drive</td>
                        <td>{{ $model->optical_drive }}</td>
                      </tr>
                      <tr>
                        <td>Network_card</td>
                        <td>{{ $model->network_card }}</td>
                      </tr>
                      <tr>
                        <td>Power_supply</td>
                        <td>{{ $model->power_supply }}</td>
                      </tr>
                      <tr>
                        <td>Monitor</td>
                        <td>{{ $model->monitor }}</td>
                      </tr>
                      <tr>
                        <td>Keyboard</td>
                        <td>{{ $model->keyboard }}</td>
                      </tr>
                      <tr>
                        <td>Mouse</td>
                        <td>{{ $model->mouse }}</td>
                      </tr>

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>    
@endsection