<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Post;

class SubjectController extends Controller
{
    public function index(Subject $Subject){
<<<<<<< HEAD
        $materi = $Subject->posts->where('tipe', 0)->all();
=======
        $materi = $Subject->posts->where('tipe', 0)->load('subject')->all();
>>>>>>> 49e4b188a97e5dc2ebd8e1bd2ac0bd3010ac5f01

        return view('home.subject.materi', [
            'title' => $Subject->name,
            'posts' => $materi
        ]);
    }

    public function show(Subject $Subject, Post $Post){
        return view('home.subject.detail', [
            'title' => ' | Subject',
            'posts' => $Post->load('author'),
        ]);
    }

    public function tugas(){
        $tugas = Post::where('tipe', 1)->with('subject')->get();

        return view('home.task.tugas', [
            'title' => 'Tugas',
            'posts' => $tugas
        ]);
    }
    public function tugas_detail(Post $Post){
        return view('home.subject.detail', [
            'title' => 'Tugas',
            'posts' => $Post->load('author'),
        ]);
    }
}
