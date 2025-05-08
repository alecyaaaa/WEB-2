<?php

namespace App\Http\Controllers;

use App\models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $unitkerja = UnitKerja::all();

        return view("unit-kerja.index", compact("unitkerja"));
    }
}
