<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_detail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->hasOne(User::class);
    }
}
