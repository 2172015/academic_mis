<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    function index() {
        $dosens = DB::select('select * from users');
        return view('Dosen', ['Dosen' => $dosens]);
    }
}
