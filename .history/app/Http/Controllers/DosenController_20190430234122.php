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

    public function delete($id_dosen)
    {
        $dsn = \App\Dosen::find($id_dosen);
        $dsn->delete($matkul);
        return redirect(route('matakuliah'))->with('success', 'Data Berhasil Dihapus');
    }
}
