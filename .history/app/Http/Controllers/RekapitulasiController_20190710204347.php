<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RekapitulasiController extends Controller
{
    public function index()
    {
        dd($this->a);
        return view('admin.rekapitulasi');
    }
}
