<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.kelas', compact('kelas'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kelas' => 'required'
        ]);

        $model = new Kelas();
        $model->nama_kelas = $request->nama_kelas;
        $model->save();
        return redirect(route('kelas'))->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id_kelas)
    {
        $dsn = \App\Dosen::find($id_dosen);
        return view('dosen/edit', ['dosen' => $dsn]);
    }

    public function update(Request $request, $id_dosen)
    {
        $dsn = \App\Dosen::find($id_dosen);
        $dsn->update($request->all());
        return redirect('/dosen')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id_kelas)
    {
        $kls = \App\Kelas::find($id_kelas);
        $kls->delete($kls);
        return redirect(route('kelas'))->with('success', 'Data Berhasil Dihapus');
    }
}
