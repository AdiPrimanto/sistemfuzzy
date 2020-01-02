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
            'nama_matakuliah' => 'required'
        ]);

        $model = new Matakuliah();
        $model->nama_matakuliah = $request->nama_matakuliah;
        $model->save();
        return redirect(route('matakuliah'))->with('success', 'Data Berhasil Ditambahkan');
    }
}
