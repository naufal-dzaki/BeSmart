<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
