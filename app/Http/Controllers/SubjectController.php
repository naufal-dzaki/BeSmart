<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Post;

class SubjectController extends Controller
{
    public function index(Subject $Subject){
        $materi = $Subject->posts->where('tipe', 0)->all();

        return view('home.subject.materi', [
            'title' => $Subject->name,
            'posts' => $materi
        ]);
    }

    public function show(Subject $Subject, Post $Post){
        return view('home.subject.detail', [
            'title' => ' | Subject',
            'posts' => $Post,
        ]);
    }

    public function tugas(){
        // $tugascondition = Post::where('tipe', 1)->get();
        // $subjectCondition = Subject::where('grade_id', auth()->user()->grade_id)->get('id');
        // $tugas = $tugascondition->where('subject_id', $subjectCondition)->all();
        $tugas = Post::where('tipe', 1)->get();

        return view('home.task.tugas', [
            'title' => 'Tugas',
            'posts' => $tugas
        ]);
    }
    public function tugas_detail(Post $Post){
        return view('home.subject.detail', [
            'title' => 'Tugas',
            'posts' => $Post,
        ]);
    }
}
