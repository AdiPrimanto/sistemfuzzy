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

        $model = new kelas();
        $model->nama_kelas = $request->nama_kelas;
        $model->save();
        return redirect(route('kelas'))->with('success', 'Data Berhasil Ditambahkan');
    }
}
