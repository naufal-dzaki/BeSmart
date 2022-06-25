<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use DateTime;
use DateTimeZone;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function index(){
        return view('home.presensi.index', [
            'title' => 'Presensi',
            'presensi' => Presensi::with('user')->get()
        ]);
    }


    public function postPresensiMasuk() {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id', '=', auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();
        if ($presensi) {
            return redirect('presensi')->with('warning', 'Maaf Anda Sudah Melakukan Presensi Masuk');
        } else {
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tgl' => $tanggal,
                'jam_masuk' => $localtime,
            ]);
        }
        return redirect()->route('presensi')->with('success', 'Presensi Masuk Sukses');
    }

    public function postPresensiKeluar() {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id', '=', auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();

        $dt = [
            'jam_keluar' => $localtime,
        ];

        if ($presensi->jam_keluar == "") {
            $presensi->update($dt);
            return redirect('presensi')->with('success', 'Presensi Keluar Sukses');
        } else {
            return redirect('presensi')->with('warning', 'Maaf Anda Sudah Melakukan Presensi Keluar');
        }
    }

    // public function rekapPresensiKaryawan() {
    //     $presensi = Presensi::with('user')->get();
    //     return view('user.rekap-presensi', compact('presensi'));
    // }
}
