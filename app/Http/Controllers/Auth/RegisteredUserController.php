<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Grade;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register', [
            'grades' => Grade::all(),
            'user' => User::all()
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'grade_id' => 'required',
            'level' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'image' =>  'image|file|max:2048',
            // 'tgl_lahir' => '',
            'nisn' => 'min:8|max:12',
            'no_hp' => 'min:11|max:14',
            // 'jenis_kelamin' => '',
            // 'agama' => '',
            'nama_ayah' => 'max:30',
            'nama_ibu' => 'max:30',
        ]);

        $name = $request->name;
        $slug = \Str::slug($name);

        $user = User::create([
            'name' => $name,
            'slug' => $slug,
            'grade_id' => $request->grade_id,
            'level' => $request->level,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return redirect()->intended('login');

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }
}
