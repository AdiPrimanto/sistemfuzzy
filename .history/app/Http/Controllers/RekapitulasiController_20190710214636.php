<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RekapitulasiController extends Controller
{
    public function index()
    {
        $data = $this->aa();
        sort($data);
        return view('admin.rekapitulasi')->withData($data);;
    }
}
