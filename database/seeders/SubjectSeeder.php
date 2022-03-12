<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mapel kelas 10
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

        //kelas 11
        Subject::create([
            'grade_id' => '2',
            'image' => 'matematika.png',
            'name' => 'Matematika XI',
            'slug' => 'matematika-xi'
        ]);
        Subject::create([
            'grade_id' => '2',
            'image' => 'Kimia.png',
            'name' => 'Kimia XI',
            'slug' => 'kimia-xi'
        ]);
        Subject::create([
            'grade_id' => '2',
            'image' => 'B Indo.png',
            'name' => 'B. Indonesia XI',
            'slug' => 'b-indo-xi'
        ]);
        Subject::create([
            'grade_id' => '2',
            'image' => 'Biologi.png',
            'name' => 'Biologi XI',
            'slug' => 'biologi-xi'
        ]);
        Subject::create([
            'grade_id' => '2',
            'image' => 'English.png',
            'name' => 'B Inggris XI',
            'slug' => 'b-inggris-xi'
        ]);
        Subject::create([
            'grade_id' => '2',
            'image' => 'Fisika.png',
            'name' => 'Fisika XI',
            'slug' => 'fisika-xi'
        ]);
        Subject::create([
            'grade_id' => '2',
            'image' => 'Penjas.png',
            'name' => 'Penjas XI',
            'slug' => 'penjas-xi'
        ]);
        Subject::create([
            'grade_id' => '2',
            'image' => 'Sejarah.png',
            'name' => 'Sejarah XI',
            'slug' => 'sejarah-xi'
        ]);

        //mapel kelas 12
        Subject::create([
            'grade_id' => '3',
            'image' => 'matematika.png',
            'name' => 'Matematika XII',
            'slug' => 'matematika-xii'
        ]);
        Subject::create([
            'grade_id' => '3',
            'image' => 'Kimia.png',
            'name' => 'Kimia XII',
            'slug' => 'kimia-xii'
        ]);
        Subject::create([
            'grade_id' => '3',
            'image' => 'B Indo.png',
            'name' => 'B. Indonesia XII',
            'slug' => 'b-indo-xii'
        ]);
        Subject::create([
            'grade_id' => '3',
            'image' => 'Biologi.png',
            'name' => 'Biologi XII',
            'slug' => 'biologi-xii'
        ]);
        Subject::create([
            'grade_id' => '3',
            'image' => 'English.png',
            'name' => 'B Inggris XII',
            'slug' => 'b-inggris-xii'
        ]);
        Subject::create([
            'grade_id' => '3',
            'image' => 'Fisika.png',
            'name' => 'Fisika XII',
            'slug' => 'fisika-xii'
        ]);
        Subject::create([
            'grade_id' => '3',
            'image' => 'Penjas.png',
            'name' => 'Penjas XII',
            'slug' => 'penjas-xii'
        ]);
        Subject::create([
            'grade_id' => '3',
            'image' => 'Sejarah.png',
            'name' => 'Sejarah XII',
            'slug' => 'sejarah-xii'
        ]);

    }
}
