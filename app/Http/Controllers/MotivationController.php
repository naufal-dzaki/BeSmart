<?php

namespace App\Http\Controllers;

use App\Models\Motivation;
use Illuminate\Http\Request;

class MotivationController extends Controller
{
    public function index(Motivation $motivation){
        return view('home.motivation.index', [
            'title' => 'Motivasi',
            'motivation' => $motivation
        ]);
    }
}
