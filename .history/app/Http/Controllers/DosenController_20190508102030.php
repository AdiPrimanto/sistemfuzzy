<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('admin.dosen', compact('dosen'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_dosen' => 'required'
        ]);

        $model = new Dosen();
        $model->nama_dosen = $request->nama_dosen;
        $model->save();
        return redirect(route('dosen'))->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id_dosen)
    {
        $matkul = \App\Dosen::find($id_dosen);
        return view('dosen/edit', ['dosen' => $matkul]);
    }

    public function update(Request $request, $id_matakuliah)
    {
        $matkul = \App\Matakuliah::find($id_matakuliah);
        $matkul->update($request->all());
        return redirect('/matakuliah')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id_dosen)
    {
        $dsn = \App\Dosen::find($id_dosen);
        $dsn->delete($dsn);
        return redirect(route('dosen'))->with('success', 'Data Berhasil Dihapus');
    }
}
