<?php

namespace App\Http\Controllers;

use App\ComputerAssetModel;
use App\Http\Requests\ComputerAssetUpdated;
use App\Http\Requests\StoreComputerAsset;
use App\Http\Requests\UpdatedComputerAsset;
use Illuminate\Http\Request;

class ComputerAssetCT extends Controller
{
    public function index()
    {
        $model = ComputerAssetModel::all();
        return view('admin.ComputerAsset.index', compact('model'));
    }

    public function add()
    {
        return view('admin.ComputerAsset.add');
    }

    public function store(StoreComputerAsset $request)
    {

        $model = new ComputerAssetModel;
        $model->id_num = $request->id_num;
        $model->computer_name = $request->computer_name;
        $model->computer_type = $request->computer_type;
        $model->computer_brand = $request->computer_brand;
        $model->computer_unit = $request->computer_unit;
        $model->computer_total = $request->computer_total;
        $model->supplier = $request->supplier;
        $model->request_date = $request->request_date;
        $model->delivery_date = $request->delivery_date;
        $model->status = $request->status;
        $model->processor = $request->processor;
        $model->motherboard = $request->motherboard;
        $model->memory = $request->memory;
        $model->display_card = $request->display_card;
        $model->hard_drive = $request->hard_drive;
        $model->optical_drive = $request->optical_drive;
        $model->network_card = $request->network_card;
        $model->power_supply = $request->power_supply;
        $model->monitor = $request->monitor;
        $model->keyboard = $request->keyboard;
        $model->mouse = $request->mouse;
        $model->save();

        return redirect("admin/computer-asset")->with("status", "Success Add Data");
    }

    public function edit($id)
    {
        $model = ComputerAssetModel::find($id);
        return view('admin.ComputerAsset.edit', compact('model'));
    }

    public function updated(UpdatedComputerAsset $request, $id)
    {
        $model = ComputerAssetModel::find($id);
        $model->id_num = $request->id_num;
        $model->computer_name = $request->computer_name;
        $model->computer_type = $request->computer_type;
        $model->computer_brand = $request->computer_brand;
        $model->computer_unit = $request->computer_unit;
        $model->computer_total = $request->computer_total;
        $model->supplier = $request->supplier;
        $model->request_date = $request->request_date;
        $model->delivery_date = $request->delivery_date;
        $model->status = $request->status;
        $model->processor = $request->processor;
        $model->motherboard = $request->motherboard;
        $model->memory = $request->memory;
        $model->display_card = $request->display_card;
        $model->hard_drive = $request->hard_drive;
        $model->optical_drive = $request->optical_drive;
        $model->network_card = $request->network_card;
        $model->power_supply = $request->power_supply;
        $model->monitor = $request->monitor;
        $model->keyboard = $request->keyboard;
        $model->mouse = $request->mouse;
        $model->save();

        return redirect("admin/computer-asset")->with("status", "Success Edit Data");
    }

    public function delete($id)
    {
        ComputerAssetModel::find($id)->delete();
        return redirect("admin/computer-asset")->with("status", "Success Delete Data");
    }

    public function detail($id)
    {
        $model = ComputerAssetModel::find($id);
        return view('admin.ComputerAsset.detail', compact('model'));
    }
}
