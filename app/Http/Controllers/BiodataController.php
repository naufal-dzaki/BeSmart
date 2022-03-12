<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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
            'image' =>  'image|file|max:2048',
            'tgl_lahir' => 'required',
            'nisn' => 'required|min:8|max:12',
            'no_hp' => 'required|min:11|max:14',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nama_ayah' => 'required|max:30',
            'nama_ibu' => 'required|max:30',
        ]);

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        $biodata::where('id', $biodata->id)
            ->update($validatedData);

        return redirect()->route('biodata.show')->with('success', 'Biodata has been Updated!');
    }
}
