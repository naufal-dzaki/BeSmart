<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Subject;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardMateriController extends Controller
{

    public function index()
    {
        return view('dashboard.materi.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        $subject = Subject::where('grade_id', auth()->user()->grade_id)->get();
        return view('dashboard.materi.create', [
            'subjects' => $subject
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' =>  'required|unique:posts',
            'image' =>  'image|file|max:2048',
            'bab' => 'required',
            'body' => 'required',
            'link' => 'required',
            'tipe' => 'required',
            'subject_id' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Post::create($validatedData);

        return redirect('/dashboard/materi')->with('success', 'New post has been added!');
    }

    public function show(Post $post)
    {
        return view('dashboard.materi.show', [
            'posts' => $post
        ]);
    }

    public function edit(Post $post)
    {
        $subject = Subject::where('grade_id', auth()->user()->grade_id)->get();
        return view('dashboard.materi.edit', [
            'post' => $post,
            'subjects' => $subject
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $rules = ([
            'judul' => 'required|max:255',
            'slug' =>  'required|unique:posts',
            'image' =>  'required',
            'bab' => 'required',
            'body' => 'required',
            'link' => 'required',
            'tipe' => 'required',
            'subject_id' => 'required'
        ]);

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/materi')->with('success', 'Post has been Updated!');
    }

    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/dashboard/materi')->with('success', 'Post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
