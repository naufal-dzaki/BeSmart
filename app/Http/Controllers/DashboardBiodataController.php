<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\User;

class DashboardBiodataController extends Controller
{
    public function index(){
        return view('dashboard.biodata.index', [
            'biodata' => Biodata::all()
            // 'biodata' => Biodata::where('grade_id', auth()->user()->grade_id)->get()
        ]);
    }
}
