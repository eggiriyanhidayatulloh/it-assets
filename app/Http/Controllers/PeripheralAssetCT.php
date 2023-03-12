<?php

namespace App\Http\Controllers;

use App\PeripheralAssetModel;
use App\Http\Requests\PeripheralAssetUpdated;
use App\Http\Requests\StorePeripheralAsset;
use App\Http\Requests\UpdatedPeripheralAsset;
use Illuminate\Http\Request;

class PeripheralAssetCT extends Controller
{
    public function index()
    {
        $model = PeripheralAssetModel::all();
        return view('admin.PeripheralAsset.index', compact('model'));
    }

    public function add()
    {
        return view('admin.PeripheralAsset.add');
    }

    public function store(StorePeripheralAsset $request)
    {

        $model = new PeripheralAssetModel;
        $model->id_num = $request->id_num;
        $model->peripheral_name = $request->peripheral_name;
        $model->peripheral_type = $request->peripheral_type;
        $model->peripheral_brand = $request->peripheral_brand;
        $model->peripheral_spesification = $request->peripheral_spesification;
        $model->peripheral_unit = $request->peripheral_unit;
        $model->peripheral_total = $request->peripheral_total;
        $model->supplier = $request->supplier;
        $model->request_date = $request->request_date;
        $model->delivery_date = $request->delivery_date;
        $model->status = $request->status;
        $model->save();

        return redirect("admin/peripheral-asset")->with("status", "Success Add Data");
    }

    public function edit($id)
    {
        $model = PeripheralAssetModel::find($id);
        return view('admin.PeripheralAsset.edit', compact('model'));
    }

    public function updated(UpdatedPeripheralAsset $request, $id)
    {
        $model = PeripheralAssetModel::find($id);
        $model->id_num = $request->id_num;
        $model->peripheral_name = $request->peripheral_name;
        $model->peripheral_type = $request->peripheral_type;
        $model->peripheral_brand = $request->peripheral_brand;
        $model->peripheral_spesification = $request->peripheral_spesification;
        $model->peripheral_unit = $request->peripheral_unit;
        $model->peripheral_total = $request->peripheral_total;
        $model->supplier = $request->supplier;
        $model->request_date = $request->request_date;
        $model->delivery_date = $request->delivery_date;
        $model->status = $request->status;
        $model->save();

        return redirect("admin/peripheral-asset")->with("status", "Success Edit Data");
    }

    public function delete($id)
    {
        PeripheralAssetModel::find($id)->delete();
        return redirect("admin/peripheral-asset")->with("status", "Success Delete Data");
    }

    public function detail($id)
    {
        $model = PeripheralAssetModel::find($id);
        return view('admin.PeripheralAsset.detail', compact('model'));
    }
}
