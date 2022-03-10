<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subject;
use App\Models\Biodata;
use App\Models\Motivation;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardMotivasiController extends Controller
{
    public function index()
    {
        return view('dashboard.motivasi.index', [
            'title' => ' | Home',
            'subjects' => Subject::where('grade_id', auth()->user()->grade_id)->get(),
            'biodata' => Biodata::all(),
            'motivations' => Motivation::all()
        ]);
    }

    public function show(Motivation $motivation)
    {
        return view('dashboard.motivasi.show', [
            'title' => 'Motivasi',
            'motivation' => $motivation
        ]);
    }

    public function create()
    {
        // dd($motivation->id);
        $motivasi = Motivation::all();
        return view('dashboard.motivasi.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:50',
            'slug' => 'required|unique:posts',
            'body' => 'required'
        ]);

        Motivation::create($validatedData);
        return redirect('/dashboard/motivasi')->with('success', 'New post has been added');
    }

    public function edit($id)
    {
        $motivation = Motivation::find($id);
        return view('dashboard.motivasi.edit', [
            'title' => 'Motivasi',
            'motivation' => $motivation
        ]);
    }

    public function update(Request $request)
    {
        $rules = $request->validate([
            'judul' => 'required|max:150',
            // 'slug' => 'required|unique:posts',
            'body' => 'required'
        ]);
        // $motivation = Motivation::find($request->id);

        // if ($request->slug != $motivation->slug) {
        //     $rules['slug'] = 'required|unique:posts';
        // }
        $rules['slug'] = Str::slug('judul');

        Motivation::where('id', $request->id)
            ->update($rules);

        return redirect('dashboard/motivasi')->with('success', 'Post has been updated');
    }

    public function destroy(Motivation $motivation)
    {
        Motivation::destroy($motivation->id);
        return redirect('/dashboard/motivasi')->with('success', 'Post has been deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
