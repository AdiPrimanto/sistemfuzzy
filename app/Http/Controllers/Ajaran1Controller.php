<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ajaran1Controller extends Controller
{
    public function index()
    {
        return view('admin.ajaran1', compact('ajaran1'));
    }
}
