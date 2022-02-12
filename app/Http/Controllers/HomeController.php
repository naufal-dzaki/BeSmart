<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        return view('home.index', [
            'title' => ' | Home',
            'subjects' => Subject::where('grade_id', auth()->user()->grade_id)->get()
        ]);
    }
}
