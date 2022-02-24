<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'message' => 'required'
        ]);

        Chat::create($data);

        return redirect()->back();
    }


}
