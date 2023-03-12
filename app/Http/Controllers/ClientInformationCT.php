<?php

namespace App\Http\Controllers;

use App\ClientInformationModel;
use App\Http\Requests\ClientInformationUpdated;
use App\Http\Requests\StoreClientInformation;
use App\Http\Requests\UpdatedClientInformation;
use Illuminate\Http\Request;

class ClientInformationCT extends Controller
{
    public function index()
    {
        $model = ClientInformationModel::all();
        return view('admin.ClientInformation.index', compact('model'));
    }

    public function add()
    {
        return view('admin.ClientInformation.add');
    }

    public function store(StoreClientInformation $request)
    {

        $model = new ClientInformationModel;
        $model->computer_name = $request->computer_name;
        $model->ip_address = $request->ip_address;
        $model->connection_type = $request->connection_type;
        $model->room = $request->room;
        $model->employee_number = $request->employee_number;
        $model->user_name = $request->user_name;
        $model->position = $request->position;
        $model->department = $request->department;
        $model->start_using_date = $request->start_using_date;
        $model->save();

        return redirect("admin/client-information")->with("status", "Success Add Data");
    }

    public function edit($id)
    {
        $model = ClientInformationModel::find($id);
        return view('admin.ClientInformation.edit', compact('model'));
    }

    public function updated(UpdatedClientInformation $request, $id)
    {
        $model = ClientInformationModel::find($id);
        $model->computer_name = $request->computer_name;
        $model->ip_address = $request->ip_address;
        $model->connection_type = $request->connection_type;
        $model->room = $request->room;
        $model->employee_number = $request->employee_number;
        $model->user_name = $request->user_name;
        $model->position = $request->position;
        $model->department = $request->department;
        $model->start_using_date = $request->start_using_date;
        $model->save();

        return redirect("admin/client-information")->with("status", "Success Edit Data");
    }

    public function delete($id)
    {
        ClientInformationModel::find($id)->delete();
        return redirect("admin/client-information")->with("status", "Success Delete Data");
    }

    public function detail($id)
    {
        $model = ClientInformationModel::find($id);
        return view('admin.ClientInformation.detail', compact('model'));
    }
}
