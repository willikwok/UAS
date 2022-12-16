<?php

namespace App\Http\Controllers;

use App\Models\tampilan;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        $rpl = tampilan::all();
        return view('tampilan',['tampilan'=>$rpl]);

    }

    public function cetak_pdf()
    {
        $rpl = tampilan::all();

        $pdf = PDF::loadview('tampilanpdf',['tampilan'=>$rpl]);
        return $pdf->download('tampilan');
    }
}
