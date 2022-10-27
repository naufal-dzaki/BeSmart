<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Biodata;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            // 'id' => 1,
            'name' => 'Muhammad Naufal',
            'slug' => 'muhammad-naufal',
            'level' => 'siswa',
            'grade_id' => '2',
            'email' => 'naufal@gmail.com',
            'password' => bcrypt('password')
            ]);
        User::Create([
            // 'id' => 2,
            'name' => 'Muhammad Bilal',
            'slug' => 'muhammad-bilal',
            'level' => 'siswa',
            'grade_id' => '1',
            'email' => 'bilal@gmail.com',
            'password' => bcrypt('password')
        ]);
        //user
        User::Create([
            'name' => 'Pak Arsyad',
            'slug' => 'pak-arsyad',
            'level' => 'guru',
            'grade_id' => '1',
            'email' => 'pakarsyad@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
