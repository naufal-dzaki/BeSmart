<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Biodata;
use App\Models\User;

class DashboardBiodataController extends Controller
{
    public function index(){
        return view('dashboard.biodata.index', [
            'biodata' => User::all()
        ]);
    }
}
