<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;
use App\Models\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //kelas
        Grade::create([
            'grade' => 'X',
            'slug' => 'x'
        ]);

        Grade::create([
            'grade' => 'XI',
            'slug' => 'xi'
        ]);

        Grade::create([
            'grade' => 'XII',
            'slug' => 'xii'
        ]);

        //mapel
        Subject::create([
            'grade_id' => '1',
            'image' => 'matematika.png',
            'name' => 'Matematika X',
            'slug' => 'matematika-x'
        ]);
        Subject::create([
            'grade_id' => '1',
            'image' => 'Kimia.png',
            'name' => 'Kimia X',
            'slug' => 'kimia-x'
        ]);
        Subject::create([
            'grade_id' => '1',
            'image' => 'B Indo.png',
            'name' => 'B. Indonesia X',
            'slug' => 'b-indo-x'
        ]);
        Subject::create([
            'grade_id' => '1',
            'image' => 'Biologi.png',
            'name' => 'Biologi X',
            'slug' => 'biologi-x'
        ]);
        Subject::create([
            'grade_id' => '1',
            'image' => 'English.png',
            'name' => 'B Inggris X',
            'slug' => 'b-inggris-x'
        ]);
        Subject::create([
            'grade_id' => '1',
            'image' => 'Fisika.png',
            'name' => 'Fisika X',
            'slug' => 'fisika-x'
        ]);
        Subject::create([
            'grade_id' => '1',
            'image' => 'Penjas.png',
            'name' => 'Penjas X',
            'slug' => 'penjas-x'
        ]);
        Subject::create([
            'grade_id' => '1',
            'image' => 'Sejarah.png',
            'name' => 'Sejarah X',
            'slug' => 'sejarah-x'
        ]);

    }
}
