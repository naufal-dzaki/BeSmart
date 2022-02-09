<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Post;

class SubjectController extends Controller
{
    public function index(Subject $Subject){
        return view('home.subject.materi', [
            'title' => $Subject->name,
            // 'subjects' => $Subject,
            'posts' => $Subject->posts->all()
        ]);
    }

    public function show(Subject $Subject, Post $Post){
        return view('home.subject.detail', [
            'title' => ' | Subject',
            'posts' => $Post,
        ]);
    }
}
