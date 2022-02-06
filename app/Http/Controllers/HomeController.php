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
            'subjects' => Subject::all()
        ]);
    }

    public function show(Subject $Subject){
        return view('contents.materi', [
            'title' => $Subject->name,
            'subjects' => $Subject
        ]);
    }
}
