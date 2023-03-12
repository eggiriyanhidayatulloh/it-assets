<?php

namespace App\Http\Controllers;

use App\Ms_kategori;
use Illuminate\Http\Request;

class KategoriCT extends Controller
{
    //

    public function index()
    {
        $model = Ms_kategori::all();
        return view("admin.kategori.index", compact('model'));
    }

    public function add()
    {
        return view("admin.kategori.add");
    }

    public function add_action(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        $model = new Ms_kategori;
        $model->nama_kategori = $request->nama_kategori;
        $model->save();

        return redirect("admin/kategori")->with("status", "Berhasil Input data");
    }


    public function edit($id_kategori)
    {
        $model = Ms_kategori::find($id_kategori);
        return view("admin.kategori.edit", compact('model'));
    }

    public function edit_action(Request $request, $id_kategori)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ]);

        $model = Ms_kategori::find($id_kategori);
        $model->nama_kategori = $request->nama_kategori;
        $model->save();

        return redirect("admin/kategori")->with("status", "Berhasil Edit data");
    }

    public function delete($id_kategori)
    {
        Ms_kategori::find($id_kategori)->delete();
        return redirect("admin/kategori")->with("status", "Berhasil Hapus data");
    }
}
