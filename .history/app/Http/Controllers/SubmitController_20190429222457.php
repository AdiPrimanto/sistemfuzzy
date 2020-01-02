<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submit;
// use Validator;

class SubmitController extends Controller
{
    public function submit(Request $request){
        // $valid = Validator::make($request->all(), [
            $this->validate($request, [
            'matakuliah' => 'required',
            'kelas' => 'required',
            'dosen' => 'required',
            'semester' => 'required',
            'p1' => 'required',
            'p2' => 'required',
            'p3' => 'required',
            'p4' => 'required',
            'p5' => 'required',
            'p6' => 'required',
            'p7' => 'required',
            'p8' => 'required',
            'p9' => 'required',
            'p10' => 'required',
            'p11' => 'required',
            'p12' => 'required',
            'p13' => 'required',
            'p14' => 'required',
            'p15' => 'required',
        ]);

        $a = \DB::table('akademik')
                -> where('id_akademik')
                -> get();

        $hasil_kuisioner = new Submit();
        $hasil_kuisioner->id_hasil_kuisioner = $request->input('id_hasil_kuisioner');
        $hasil_kuisioner->id_akademik = $request->input('id_akademik');
        $hasil_kuisioner->p1 = $request->input('p1');
        $hasil_kuisioner->p2 = $request->input('p2');
        $hasil_kuisioner->p3 = $request->input('p3');
        $hasil_kuisioner->p4 = $request->input('p4');
        $hasil_kuisioner->p5 = $request->input('p5');
        $hasil_kuisioner->p6 = $request->input('p6');
        $hasil_kuisioner->p7 = $request->input('p7');
        $hasil_kuisioner->p8 = $request->input('p8');
        $hasil_kuisioner->p9 = $request->input('p9');
        $hasil_kuisioner->p10 = $request->input('p10');
        $hasil_kuisioner->p11 = $request->input('p11');
        $hasil_kuisioner->p12 = $request->input('p12');
        $hasil_kuisioner->p13 = $request->input('p13');
        $hasil_kuisioner->p14 = $request->input('p14');
        $hasil_kuisioner->p15 = $request->input('p15');
        $hasil_kuisioner->semester = $request->input('semester');
        if($hasil_kuisioner->save()){
            echo "aa";
        }else{
            echo "bb";
        }
        // return redirect(route('/'))->with('success', 'Data Berhasil Ditambahkan');
    }
    
}
