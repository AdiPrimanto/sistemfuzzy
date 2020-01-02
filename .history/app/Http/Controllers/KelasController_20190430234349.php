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

    public function delete($id_kelas)
    {
        $matkul = \App\kelas::find($id_kelas);
        $matkul->delete($matkul);
        return redirect(route('kelas'))->with('success', 'Data Berhasil Dihapus');
    }
}
