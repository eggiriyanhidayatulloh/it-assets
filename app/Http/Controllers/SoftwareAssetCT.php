<?php

namespace App\Http\Controllers;

use App\SoftwareAssetModel;
use App\Http\Requests\SoftwareAssetUpdated;
use App\Http\Requests\StoreSoftwareAsset;
use App\Http\Requests\UpdatedSoftwareAsset;
use Illuminate\Http\Request;

class SoftwareAssetCT extends Controller
{
    public function index()
    {
        $model = SoftwareAssetModel::all();
        return view('admin.SoftwareAsset.index', compact('model'));
    }

    public function add()
    {
        return view('admin.SoftwareAsset.add');
    }

    public function store(StoreSoftwareAsset $request)
    {

        $model = new SoftwareAssetModel;
        $model->id_num = $request->id_num;
        $model->software_name = $request->software_name;
        $model->software_type = $request->software_type;
        $model->software_brand = $request->software_brand;
        $model->software_unit = $request->software_unit;
        $model->software_total = $request->software_total;
        $model->serial_number = $request->serial_number;
        $model->supplier = $request->supplier;
        $model->request_date = $request->request_date;
        $model->delivery_date = $request->delivery_date;
        $model->status = $request->status;
        $model->save();

        return redirect("admin/software-asset")->with("status", "Success Add Data");
    }

    public function edit($id)
    {
        $model = SoftwareAssetModel::find($id);
        return view('admin.SoftwareAsset.edit', compact('model'));
    }

    public function updated(UpdatedSoftwareAsset $request, $id)
    {
        $model = SoftwareAssetModel::find($id);
        $model->id_num = $request->id_num;
        $model->software_name = $request->software_name;
        $model->software_type = $request->software_type;
        $model->software_brand = $request->software_brand;
        $model->software_unit = $request->software_unit;
        $model->software_total = $request->software_total;
        $model->serial_number = $request->serial_number;
        $model->supplier = $request->supplier;
        $model->request_date = $request->request_date;
        $model->delivery_date = $request->delivery_date;
        $model->status = $request->status;
        $model->save();

        return redirect("admin/software-asset")->with("status", "Success Edit Data");
    }

    public function delete($id)
    {
        SoftwareAssetModel::find($id)->delete();
        return redirect("admin/software-asset")->with("status", "Success Delete Data");
    }

    public function detail($id)
    {
        $model = SoftwareAssetModel::find($id);
        return view('admin.SoftwareAsset.detail', compact('model'));
    }
}
