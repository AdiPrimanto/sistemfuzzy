<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::all();
        return view('admin.matakuliah', compact('matakuliah'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_matakuliah' => 'required'
        ]);

        $model = new Matakuliah();
        $model->nama_matakuliah = $request->nama_matakuliah;
        $model->save();
        return redirect(route('matakuliah'))->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id_matakuliah)
    {
        $matkul = \App\Matakuliah::find($id_matakuliah);
        return view('matakuliah/edit', ['matakuliah' => $matkul]);
    }

    public function update(Request $request, $id_matakuliah)
    {
        $matkul = \App\Matakuliah::find($id_matakuliah);
        $matkul->update($request->all());
        return redirect('/matakuliah')->with('success', 'Data Berhasil Diupdate');
    }
    
    public function delete($id_matakuliah)
    {
        $matkul = \App\Matakuliah::find($id_matakuliah);
        $matkul->delete($matkul);
        return redirect(route('matakuliah'))->with('success', 'Data Berhasil Dihapus');
    }
}