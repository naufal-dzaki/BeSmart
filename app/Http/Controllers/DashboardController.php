<?php

namespace App\Http\Controllers;

use App\Models\Motivation;
use Illuminate\Http\Request;
// use App\Models\Biodata;
use App\Models\Post;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $count['tugas'] = Post::where('user_id', auth()->user()->id)->where('tipe', 1)->with('subject')->count();
        $count['materi'] = Post::where('user_id', auth()->user()->id)->where('tipe', 0)->with('subject')->count();
        $count['user'] = User::count();
        return view('dashboard.index', [
            'title' => ' | Home',
            'biodata' => User::all(),
            'motivations' => Motivation::all(),
            'tugas' =>  Post::where('user_id', auth()->user()->id)->where('tipe', 1)->with('subject')->get(),
            'materi' => Post::where('user_id', auth()->user()->id)->where('tipe', 0)->with('subject')->get(),
            'no' => 0
        ],compact('count'));
    }
}
