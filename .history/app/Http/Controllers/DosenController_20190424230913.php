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
            'nama_matakuliah' => 'required'
        ]);

        $model = new Matakuliah();
        $model->nama_matakuliah = $request->nama_matakuliah;
        $model->save();
        return redirect(route('matakuliah'))->with('success', 'Data Berhasil Ditambahkan');
    }
}
