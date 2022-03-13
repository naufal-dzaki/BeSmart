<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;

class DashboardPresensiController extends Controller
{
    public function rekapPresensiKaryawan() {
        $presensi = Presensi::with('user')->get();
        return view('dashboard.presensi.index', compact('presensi'));
      }

      public function cetakLaporan() {
        $presensi = Presensi::with('user')->get();
        $html =  view('dashboard.presensi.cetak', compact('presensi'));

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'Portrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser
        $dompdf->stream();
      }

      public function test(){
        $presensi = Presensi::with('user')->get();
        return view('dashboard.presensi.cetak', compact('presensi'));
      }
}
