<?php

namespace App\Http\Controllers;

use App\Models\User_detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::auth();
        return view('home.biodata.index', [
            'title' => 'Biodata',
            'biodata' => User_detail::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function show(User_detail $user_detail)
    {
        return view('home.biodata.index', [
            'title' => 'Biodata',
            'biodata' => $user_detail
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(User_detail $user_detail)
    {
        return view('home.biodata.edit', [
            'title' => 'Edit Biodata',
            'biodata' => $user_detail,
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_detail $user_detail)
    {
        $rules = ([
            'user_id' => 'required',
            'image' => 'required',
            'TTL' => 'required',
            'NISN' => 'required|min:8|max:12',
            'no_hp' => 'required|min:11|max:14',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'nama_ayah' => 'required|max:30',
            'nama_ibu' => 'required|max:30',
        ]);

        if($request->slug != $user_detail->slug){
            $rules['slug'] = 'required|unique:user_details';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        User_detail::where('id', $user_detail->id)
            ->update($validatedData);

        return view('/')->with('success', 'Biodata has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_detail  $user_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_detail $user_detail)
    {
        //
    }
}
