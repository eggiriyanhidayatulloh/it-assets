<?php

namespace App\Http\Controllers;

use App\Ms_pegawai;
use Illuminate\Http\Request;

class PegawaiCT extends Controller
{
    //

    public function index()
    {
        $model = Ms_pegawai::all();
        return view("admin.pegawai.index", compact('model'));
    }

    public function add()
    {
        return view("admin.pegawai.add");
    }

    public function add_action(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'divisi_pegawai' => 'required',
        ]);

        $model = new Ms_pegawai;
        $model->nama_pegawai = $request->nama_pegawai;
        $model->divisi_pegawai = $request->divisi_pegawai;
        $model->save();

        return redirect("admin/pegawai")->with("status", "Berhasil Input data");
    }

    public function edit($id_pegawai)
    {
        $model = Ms_pegawai::find($id_pegawai);
        return view("admin.pegawai.edit", compact('model'));
    }

    public function delete($id_pegawai)
    {
        Ms_pegawai::find($id_pegawai)->delete();
        return redirect("admin/pegawai")->with("status", "Berhasil Hapus data");
    }

    public function edit_action(Request $request, $id_pegawai)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'divisi_pegawai' => 'required',
        ]);

        $model = Ms_pegawai::find($id_pegawai);
        $model->nama_pegawai = $request->nama_pegawai;
        $model->divisi_pegawai = $request->divisi_pegawai;
        $model->save();

        return redirect("admin/pegawai")->with("status", "Berhasil Edit Data");
    }
}
