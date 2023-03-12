@extends('admin.master')
@section('title')
    Detail ClientInformation Asset
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <a  style="float: right" href="/admin/client-information" class="btn btn-warning btn-sm" >
            <i data-feather='arrow-left-circle'></i>   Cancel
        </a>
    </div>
</div>
<div class="row">
<div class="col-md-12">
        <div class="card">
            <div class="card-header">
               <h6>Client Information</h6> 
            </div>
            <div class="card-body">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Computer Name</td>
                        <td>{{ $model->computer_name }}</td>
                      </tr>
                      <tr>
                        <td>IP Address</td>
                        <td>{{ $model->ip_address }}</td>
                      </tr>
                      <tr>
                        <td>Net Connection Type</td>
                        <td>{{ $model->connection_type }}</td>
                      </tr>
                      <tr>
                        <td>Room</td>
                        <td>{{ $model->room }}</td>
                      </tr>
                      <tr>
                        <td>Employee ID Number</td>
                        <td>{{ $model->employee_number }}</td>
                      </tr> 
                      <tr>
                        <td>Employee / Username</td>
                        <td>{{ $model->user_name }}</td>
                      </tr>
                      <tr>
                        <td>Position</td>
                        <td>{{ $model->position }}</td>
                      </tr>
                      <tr>
                        <td>Department</td>
                        <td>{{ $model->department }}</td>
                      </tr>
                      <tr>
                        <td>Start Using Date</td>
                        <td>{{ $model->start_using_date }}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection