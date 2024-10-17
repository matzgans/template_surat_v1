<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function test()
    {
        $data = ['hallo', "selamat"];
        $pdf = Pdf::loadView('pdf.kematian', $data);
        return $pdf->stream('kehilangan.pdf');
    }
}
