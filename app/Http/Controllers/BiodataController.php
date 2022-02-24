<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\User;

class BiodataController extends Controller
{
    public function index(){
        return view('home.biodata.index', [
            'title' => 'Biodata',
            'biodata' => Biodata::where('user_id', auth()->user()->id)->get() ]);
    }

    public function edit(Biodata $biodata){
        return view('home.biodata.edit', [
            'title' => 'Edit Biodata',
            'biodata' => $biodata,
            'users' => User::all()
        ]);
    }

    public function update(Request $request, Biodata $biodata){
        $rules = ([
            'slug' => 'required',
            'image' => 'required',
            'tgl_lahir' => 'required',
            'nisn' => 'required|min:8|max:12',
            'no_hp' => 'required|min:11|max:14',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nama_ayah' => 'required|max:30',
            'nama_ibu' => 'required|max:30',
        ]);

        // if($request->slug != $biodata->slug){
        //     $rules['slug'] = 'required|unique:$biodatas';
        // }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        $biodata::where('id', $biodata->id)
            ->update($validatedData);

        return redirect()->route('biodata.show')->with('success', 'Biodata has been Updated!');
    }
}
