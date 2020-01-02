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
            'nama_semester' => 'required'
        ]);

        $model = new Semester();
        $model->nama_semester = $request->nama_semester;
        $model->save();
        return redirect(route('semester'))->with('success', 'Data Berhasil Ditambahkan');
    }
}
