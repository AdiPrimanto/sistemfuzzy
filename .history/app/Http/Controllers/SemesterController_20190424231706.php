<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semester;

class SemesterController extends Controller
{
    public function index()
    {
        $semester = Semester::all();
        return view('admin.semester', compact('semester'));
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
