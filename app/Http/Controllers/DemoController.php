<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index() {
        $ketuaHima = 'John Doe';
        $anggotas = ['Susan', 'Richard'];
        $divisions = ['Kemitraan', 'Akademik'];
        return view('demo/file3', ['abc' => $ketuaHima])->with('members', $anggotas)
        ->with('division', $divisions);
    }
}
