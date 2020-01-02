<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Akademik;
use App\Matakuliah;
use App\Kelas;
use App\Dosen;
use App\Semester;

class KuisionerController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function abc()
    {
        $akademik = Akademik::all();
        $data = [];
        foreach($akademik as $ak){
            $hasil = DB::table('hasil_kuisioner')
            // -> join('akademik','hasil_kuisioner.id_akademik', '=', 'akademik.id_akademik')
            // -> join('matakuliah','akademik.id_matakuliah', '=', 'matakuliah.id_matakuliah')
            // -> join('kelas','akademik.id_kelas', '=', 'kelas.id_kelas')
            // ->where('nama_matakuliah', 'SISTEM FUZZY')
            // ->where('nama_kelas', '9')
            ->where('id_akademik', $ak->id_akademik)
            ->get();
            
        if(!$hasil->isEmpty()){
        $avgp1 = $hasil->sum('p1') / $hasil->count('p1');
        $avgp2 = $hasil->sum('p2') / $hasil->count('p2');
        $avgp3 = $hasil->sum('p3') / $hasil->count('p3');
        $avgp4 = $hasil->sum('p4') / $hasil->count('p4');
        $avgp5 = $hasil->sum('p5') / $hasil->count('p5');
        $avgp6 = $hasil->sum('p6') / $hasil->count('p6');
        $avgp7 = $hasil->sum('p7') / $hasil->count('p7');
        $avgp8 = $hasil->sum('p8') / $hasil->count('p8');
        $avgp9 = $hasil->sum('p9') / $hasil->count('p9');
        
        //mencari rata-rata parameter 1
        $hasil1 = ($avgp1 + $avgp2 + $avgp3 + $avgp4 + $avgp5 + $avgp6 + $avgp7 + $avgp8 + $avgp9) / 9;
        $range = $this->RangeOf($hasil1);
        //dd($h1);

        //mencari fuzzifikasi parameter 1
        $μProsesBelajarMengajar1 = $this->liniernaik($hasil1, round(ceil($hasil1),0), round(floor($hasil1),0));
        $μProsesBelajarMengajar2 = $this->linierturun($hasil1, round(ceil($hasil1),0), round(floor($hasil1),0));
        $range["nilai"][0] = $μProsesBelajarMengajar1;
        $range["nilai"][1] = $μProsesBelajarMengajar2;
        
        $P1 = new fuzzifikasi();
        for($i=0; $i<=1; $i++)
        {   
            if($range[$i]=="SKB")
            {
                $P1->SKB=$range["nilai"][$i];
            }
            else if($range[$i]=="KB")
            {
                $P1->KB=$range["nilai"][$i];
            }
            else if($range[$i]=="C")
            {
                $P1->C=$range["nilai"][$i];
            }
            else if($range[$i]=="B")
            {
                $P1->B=$range["nilai"][$i];
            }
            else if($range[$i]=="SB")
            {
                $P1->SB=$range["nilai"][$i];
            }
        }
        
        $avgp10 = $hasil->sum('p10') / $hasil->count('p10');
        $avgp11= $hasil->sum('p11') / $hasil->count('p11');
        $avgp12= $hasil->sum('p12') / $hasil->count('p12');
        $avgp13 = $hasil->sum('p13') / $hasil->count('p13');

        //mencari rata-rata parameter 2
        $hasil2 = ($avgp10 + $avgp11 + $avgp12 + $avgp13) / 4;
        $range2 = $this->RangeOf($hasil2);

        //mencari fuzzifikasi parameter 2
        $μKompetensiDosen1 = $this->liniernaik($hasil2, round(ceil($hasil2),0), round(floor($hasil2),0));
        $μKompetensiDosen2 = $this->linierturun($hasil2, round(ceil($hasil2),0), round(floor($hasil2),0));
        $range2["nilai"][0] = $μKompetensiDosen1;
        $range2["nilai"][1] = $μKompetensiDosen2;
        
        $P2 = new fuzzifikasi();
        for($i=0; $i<=1; $i++)
        {   
            if($range2[$i]=="SKB")
            {
                $P2->SKB=$range2["nilai"][$i];
            }
            else if($range2[$i]=="KB")
            {
                $P2->KB=$range2["nilai"][$i];
            }
            else if($range2[$i]=="C")
            {
                $P2->C=$range2["nilai"][$i];
            }
            else if($range2[$i]=="B")
            {
                $P2->B=$range2["nilai"][$i];
            }
            else if($range2[$i]=="SB")
            {
                $P2->SB=$range2["nilai"][$i];
            }
        }
        // echo print_r($P2);

        $avgp14 = $hasil->sum('p14') / $hasil->count('p14');
        $avgp15 = $hasil->sum('p15') / $hasil->count('p15');

        //mencari rata-rata parameter 3
        $hasil3 = ($avgp14 + $avgp15) / 2;
        $range3 = $this->RangeOf($hasil3);
        // $h3 = round($hasil3,1,PHP_ROUND_HALF_EVEN);
        
        //mencari fuzzifikasi parameter 3
        $μKetersediaanSarana1 = $this->liniernaik($hasil3, round(ceil($hasil3),0), round(floor($hasil3),0));
        $μKetersediaanSarana2 = $this->linierturun($hasil3, round(ceil($hasil3),0), round(floor($hasil3),0));
        $range3["nilai"][0] = $μKetersediaanSarana1;
        $range3["nilai"][1] = $μKetersediaanSarana2;
        
        $P3 = new fuzzifikasi();
        for($i=0; $i<=1; $i++)
        {   
            if($range3[$i]=="SKB")
            {
                $P3->SKB=$range3["nilai"][$i];
            }
            else if($range3[$i]=="KB")
            {
                $P3->KB=$range3["nilai"][$i];
            }
            else if($range3[$i]=="C")
            {
                $P3->C=$range3["nilai"][$i];
            }
            else if($range3[$i]=="B")
            {
                $P3->B=$range3["nilai"][$i];
            }
            else if($range3[$i]=="SB")
            {
                $P3->SB=$range3["nilai"][$i];
            }
        }
        // echo print_r($P3);
     
        $max = $this->inferensi($P1, $P2, $P3);

        $makul = Matakuliah::where('id_matakuliah', $ak->id_matakuliah)
                 ->first();
        $dosen = Dosen::where('id_dosen', $ak->id_dosen)
                 ->first();
        $kelas = Kelas::where('id_kelas', $ak->id_kelas)
                 ->first();
        $semester = Semester::where('id_semester', $ak->id_semester)
                 ->first();

        $data[] = [
            'id_akademik' => $ak->id_akademik,
            'hasil1' => $hasil1,
            'hasil2' => $hasil2,
            'hasil3' => $hasil3,
            'matakuliah' => $makul->nama_matakuliah,
            'dosen' => $dosen->nama_dosen,
            'kelas' => $kelas->nama_kelas,
            'semester' => $semester->semester,
            'max' => $max
        ];
        }
    }

        return $data;
    }
    public function index()
    {
    //     $akademik = Akademik::all();
    //     $data = [];
    //     foreach($akademik as $ak){
    //         $hasil = DB::table('hasil_kuisioner')
    //         // -> join('akademik','hasil_kuisioner.id_akademik', '=', 'akademik.id_akademik')
    //         // -> join('matakuliah','akademik.id_matakuliah', '=', 'matakuliah.id_matakuliah')
    //         // -> join('kelas','akademik.id_kelas', '=', 'kelas.id_kelas')
    //         // ->where('nama_matakuliah', 'SISTEM FUZZY')
    //         // ->where('nama_kelas', '9')
    //         ->where('id_akademik', $ak->id_akademik)
    //         ->get();
            
    //     if(!$hasil->isEmpty()){
    //     $avgp1 = $hasil->sum('p1') / $hasil->count('p1');
    //     $avgp2 = $hasil->sum('p2') / $hasil->count('p2');
    //     $avgp3 = $hasil->sum('p3') / $hasil->count('p3');
    //     $avgp4 = $hasil->sum('p4') / $hasil->count('p4');
    //     $avgp5 = $hasil->sum('p5') / $hasil->count('p5');
    //     $avgp6 = $hasil->sum('p6') / $hasil->count('p6');
    //     $avgp7 = $hasil->sum('p7') / $hasil->count('p7');
    //     $avgp8 = $hasil->sum('p8') / $hasil->count('p8');
    //     $avgp9 = $hasil->sum('p9') / $hasil->count('p9');
        
    //     //mencari rata-rata parameter 1
    //     $hasil1 = ($avgp1 + $avgp2 + $avgp3 + $avgp4 + $avgp5 + $avgp6 + $avgp7 + $avgp8 + $avgp9) / 9;
    //     $range = $this->RangeOf($hasil1);
    //     //dd($h1);

    //     //mencari fuzzifikasi parameter 1
    //     $μProsesBelajarMengajar1 = $this->liniernaik($hasil1, round(ceil($hasil1),0), round(floor($hasil1),0));
    //     $μProsesBelajarMengajar2 = $this->linierturun($hasil1, round(ceil($hasil1),0), round(floor($hasil1),0));
    //     $range["nilai"][0] = $μProsesBelajarMengajar1;
    //     $range["nilai"][1] = $μProsesBelajarMengajar2;
        
    //     $P1 = new fuzzifikasi();
    //     for($i=0; $i<=1; $i++)
    //     {   
    //         if($range[$i]=="SKB")
    //         {
    //             $P1->SKB=$range["nilai"][$i];
    //         }
    //         else if($range[$i]=="KB")
    //         {
    //             $P1->KB=$range["nilai"][$i];
    //         }
    //         else if($range[$i]=="C")
    //         {
    //             $P1->C=$range["nilai"][$i];
    //         }
    //         else if($range[$i]=="B")
    //         {
    //             $P1->B=$range["nilai"][$i];
    //         }
    //         else if($range[$i]=="SB")
    //         {
    //             $P1->SB=$range["nilai"][$i];
    //         }
    //     }
        
    //     $avgp10 = $hasil->sum('p10') / $hasil->count('p10');
    //     $avgp11= $hasil->sum('p11') / $hasil->count('p11');
    //     $avgp12= $hasil->sum('p12') / $hasil->count('p12');
    //     $avgp13 = $hasil->sum('p13') / $hasil->count('p13');

    //     //mencari rata-rata parameter 2
    //     $hasil2 = ($avgp10 + $avgp11 + $avgp12 + $avgp13) / 4;
    //     $range2 = $this->RangeOf($hasil2);

    //     //mencari fuzzifikasi parameter 2
    //     $μKompetensiDosen1 = $this->liniernaik($hasil2, round(ceil($hasil2),0), round(floor($hasil2),0));
    //     $μKompetensiDosen2 = $this->linierturun($hasil2, round(ceil($hasil2),0), round(floor($hasil2),0));
    //     $range2["nilai"][0] = $μKompetensiDosen1;
    //     $range2["nilai"][1] = $μKompetensiDosen2;
        
    //     $P2 = new fuzzifikasi();
    //     for($i=0; $i<=1; $i++)
    //     {   
    //         if($range2[$i]=="SKB")
    //         {
    //             $P2->SKB=$range2["nilai"][$i];
    //         }
    //         else if($range2[$i]=="KB")
    //         {
    //             $P2->KB=$range2["nilai"][$i];
    //         }
    //         else if($range2[$i]=="C")
    //         {
    //             $P2->C=$range2["nilai"][$i];
    //         }
    //         else if($range2[$i]=="B")
    //         {
    //             $P2->B=$range2["nilai"][$i];
    //         }
    //         else if($range2[$i]=="SB")
    //         {
    //             $P2->SB=$range2["nilai"][$i];
    //         }
    //     }
    //     // echo print_r($P2);

    //     $avgp14 = $hasil->sum('p14') / $hasil->count('p14');
    //     $avgp15 = $hasil->sum('p15') / $hasil->count('p15');

    //     //mencari rata-rata parameter 3
    //     $hasil3 = ($avgp14 + $avgp15) / 2;
    //     $range3 = $this->RangeOf($hasil3);
    //     // $h3 = round($hasil3,1,PHP_ROUND_HALF_EVEN);
        
    //     //mencari fuzzifikasi parameter 3
    //     $μKetersediaanSarana1 = $this->liniernaik($hasil3, round(ceil($hasil3),0), round(floor($hasil3),0));
    //     $μKetersediaanSarana2 = $this->linierturun($hasil3, round(ceil($hasil3),0), round(floor($hasil3),0));
    //     $range3["nilai"][0] = $μKetersediaanSarana1;
    //     $range3["nilai"][1] = $μKetersediaanSarana2;
        
    //     $P3 = new fuzzifikasi();
    //     for($i=0; $i<=1; $i++)
    //     {   
    //         if($range3[$i]=="SKB")
    //         {
    //             $P3->SKB=$range3["nilai"][$i];
    //         }
    //         else if($range3[$i]=="KB")
    //         {
    //             $P3->KB=$range3["nilai"][$i];
    //         }
    //         else if($range3[$i]=="C")
    //         {
    //             $P3->C=$range3["nilai"][$i];
    //         }
    //         else if($range3[$i]=="B")
    //         {
    //             $P3->B=$range3["nilai"][$i];
    //         }
    //         else if($range3[$i]=="SB")
    //         {
    //             $P3->SB=$range3["nilai"][$i];
    //         }
    //     }
    //     // echo print_r($P3);
     
    //     $max = $this->inferensi($P1, $P2, $P3);

    //     $makul = Matakuliah::where('id_matakuliah', $ak->id_matakuliah)
    //              ->first();
    //     $dosen = Dosen::where('id_dosen', $ak->id_dosen)
    //              ->first();
    //     $kelas = Kelas::where('id_kelas', $ak->id_kelas)
    //              ->first();
    //     $semester = Semester::where('id_semester', $ak->id_semester)
    //              ->first();

    //     $data[] = [
    //         'id_akademik' => $ak->id_akademik,
    //         'hasil1' => $hasil1,
    //         'hasil2' => $hasil2,
    //         'hasil3' => $hasil3,
    //         'matakuliah' => $makul->nama_matakuliah,
    //         'dosen' => $dosen->nama_dosen,
    //         'kelas' => $kelas->nama_kelas,
    //         'semester' => $semester->semester,
    //         'max' => $max
    //     ];
    //     }
    // }
       
        // echo print_r($max);
        // return view('admin.hasilkuisioner', compact("hasil1", "hasil2", "hasil3", "max"));
        $data = DB::select('select * from rekapitulasi');
        $data = json_decode(json_encode($data), True);
        // return json_encode($data);
        return view('admin.hasilkuisioner', compact('data'));
    }

    public function liniernaik($ratarata, $batasatas, $batasbawah)
    {
        $hasil = ($ratarata - $batasbawah) / ($batasatas - $batasbawah);
        
        return array($hasil, "naik");
    }

    public function linierturun($ratarata, $batasatas, $batasbawah)
    {
        $hasil = ($batasatas - $ratarata) / ($batasatas - $batasbawah);
        return array($hasil, "turun");
    }

    public function RangeOf($nilai)
    {
        $kategori = array();
        if(($nilai > 1.0) && ($nilai < 2.0))
        {
            $kategori[0]="KB";
            $kategori[1]="SKB";
        }
        else if(($nilai > 2.0) && ($nilai < 3.0))
        {
            $kategori[0]="C";
            $kategori[1]="KB";
        }
        else if(($nilai > 3.0) && ($nilai < 4.0))
        {
            $kategori[0]="B";
            $kategori[1]="C";
        }
        else if(($nilai > 4.0) && ($nilai < 5.0))
        {
            $kategori[0]="SB";
            $kategori[1]="B";
        }
        return $kategori;
    }

    //mencari perbandingan nilai min
    public function ceklinier($x, $y, $z)
    {
        $min = $x;
        if($y[0] < $min[0])
        {
            $min = $y;
        }
        if($z[0] < $min[0])
        {
            $min = $z;
        }
        return $min;
    }

    public function inferensi($P1, $P2, $P3)
    {
        $deffuzifikasi = array();
        for($a=0; $a<45; $a++)
        {
            $z1 = 0;
            $aturanindex = $this->aturan[$a];
            $aturanindex0 = $aturanindex[0];
            $aturanindex1 = $aturanindex[1];
            $aturanindex2 = $aturanindex[2];
            $aturanindex3 = $aturanindex[3];
            if($this->ceklinier($P1->$aturanindex0, $P2->$aturanindex1, $P3->$aturanindex2) > 0)
            { 
                $a1 = ($this->ceklinier($P1->$aturanindex0, $P2->$aturanindex1, $P3->$aturanindex2));
                // echo $a;
                // echo print_r($a1);
                if($aturanindex3 == 'SKB')
                {
                    $z1 = -($a1[0] * (2-1) - 2);
                }
                else if($aturanindex3 == 'KB')
                {
                    $a1 = ($this->ceklinier($P1->$aturanindex0, $P2->$aturanindex1, $P3->$aturanindex2));
                    if($a1[1] == "turun")
                    {
                        $z1 = -($a1[0] * (3-2) - 3);
                    }
                    else if($a1[1] == "naik")
                    {
                        $z1 = $a1[0] * (2-1) + 1;
                    }
                }
                else if($aturanindex3 == 'C')
                {
                    $a1 = ($this->ceklinier($P1->$aturanindex0, $P2->$aturanindex1, $P3->$aturanindex2));
                    if($a1[1] == "turun")
                    {
                        $z1 = -($a1[0] * (4-3) - 4);
                    }
                    else if($a1[1] == "naik")
                    {
                        $z1 = $a1[0] * (3-2) + 2;
                    }
                }
                else if($aturanindex3 == 'B')
                {
                    $a1 = ($this->ceklinier($P1->$aturanindex0, $P2->$aturanindex1, $P3->$aturanindex2));
                    if($a1[1] == "turun")
                    {
                        $z1 = -($a1[0] * (5-4) - 5);
                    }
                    else if($a1[1] == "naik")
                    {
                        $z1 = $a1[0] * (4-3) + 3;
                    }
                }
                else if($aturanindex3 == 'SB')
                {
                    $z1 = $a1[0] * (5-4) + 4;
                }
            }
            // echo print_r($z1); array_push (utk menambahkan data array ke array yg sudah ada)
            array_push($deffuzifikasi, array($a1, $z1));
        }
        // echo print_r($deffuzifikasi);

        $max = array(array(0,0),0,0);
        for($i=0; $i<45; $i++)
        {
            if($deffuzifikasi[$i][0][0] > $max[0][0])
            {
                $max[0] = $deffuzifikasi[$i][0];
                $max[1] = $deffuzifikasi[$i][1];
                $max[2] = $this->aturan[$i][3];
                $max["index"] = $i;
            }
        }
        // echo print_r($max);
        return $max;
    }

}

    public $aturan = [ ['SB','SB','SB','SB'], //0
                    ['SB','SB','B','B'], //1
                    ['SB','SB','C','C'], //2
                    ['SB','SB','KB','KB'], //3
                    ['SB','SB','SKB','SKB'], //4
                    ['SB','B','SB','SB'], //5
                    ['SB','B','B','B'], //6
                    ['SB','B','C','C'], //7
                    ['SB','B','KB','KB'], //8
                    ['SB','B','SKB','SKB'], //9
                    ['SB','C','SB','SB'], //10
                    ['SB','C','B','B'], //11
                    ['SB','C','C','C'], //12
                    ['SB','C','KB','KB'], //13
                    ['SB','C','SKB','SKB'], //14
                    ['B','SB','SB','SB'], //15
                    ['B','SB','B','B'], //16
                    ['B','SB','C','C'], //17
                    ['B','SB','KB','KB'], //18
                    ['B','SB','SKB','SKB'], //19
                    ['B','B','SB','SB'], //20
                    ['B','B','B','B'], //21
                    ['B','B','C','C'], //22
                    ['B','B','KB','KB'], //23
                    ['B','B','SKB','SKB'], //24
                    ['B','C','SB','SB'], //25
                    ['B','C','B','B'], //26
                    ['B','C','C','C'], //27
                    ['B','C','KB','KB'], //28
                    ['B','C','SKB','SKB'],
                    ['C','SB','SB','SB'], //30
                    ['C','SB','B','B'], //31
                    ['C','SB','C','C'], //32
                    ['C','SB','KB','KB'], //33
                    ['C','SB','SKB','SKB'], //34
                    ['C','B','SB','SB'], //35
                    ['C','B','B','B'], //36
                    ['C','B','C','C'], //37
                    ['C','B','KB','KB'], //38
                    ['C','B','SKB','SKB'], //39
                    ['C','C','SB','SB'], //40
                    ['C','C','B','B'], //41
                    ['C','C','C','C'], //42
                    ['C','C','KB','KB'], //43
                    ['C','C','SKB','SKB'] //44
        ];
}

class Fuzzifikasi
{
    public $SKB=array(0,'');
    public $KB=array(0,'');
    public $C=array(0,'');
    public $B=array(0,'');
    public $SB=array(0,'');
}
