<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akademik;
use App\Matakuliah;
use App\Dosen;
use App\Kelas;
use App\Semester;

class AkademikController extends Controller
{
    public function index()
    {
        // $akademik = Matakuliah::all();
        $akademik = new Akademik();
        $a = $akademik->akademik();
        $b = Matakuliah::all();
        $c = Dosen::all();
        $d = Kelas::all();
        $e = Semester::all();
        return view('admin.akademik', compact('a', 'b', 'c', 'd', 'e'));
    }

    public function create(Request $request)
    {
        $model = new Akademik();
        $model->id_matakuliah = $request->matakuliah;
        $model->id_dosen = $request->dosen;
        $model->id_kelas = $request->kelas;
        $model->id_semester = $request->semester;
        $model->save();
        return redirect('/akademik')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function delete($id_akademik)
    {
        $aka = \App\Akademik::find($id_akademik);
        $aka->delete($aka);
        return redirect('akademik')->with('success', 'Data Berhasil Dihapus');
    }
}
