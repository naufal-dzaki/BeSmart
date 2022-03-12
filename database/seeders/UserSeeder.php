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
                //user
                User::Create([
                    'id' => 1,
                    'name' => 'naufal',
                    'level' => 'siswa',
                    'grade_id' => '2',
                    'email' => 'naufal@gmail.com',
                    'password' => bcrypt('password')
                ]);
                User::Create([
                    'id' => 2,
                    'name' => 'bilal',
                    'level' => 'siswa',
                    'grade_id' => '1',
                    'email' => 'bilal@gmail.com',
                    'password' => bcrypt('password')
                ]);

                // user detail
                Biodata::Create([
                    'user_id' => 1,
                    'slug' => 'muhammad-naufal',
                    'tgl_lahir' => 'Surabaya, 9 Mei 2003',
                    'nisn' => '988123098',
                    'no_hp' => '08154567984',
                    'jenis_kelamin' => 'laki-laki',
                    'agama' => 'islam',
                    'nama_ayah' => 'Ini nama ayahnya',
                    'nama_ibu' => 'ini nama ibunya'
                ]);
                Biodata::Create([
                    'user_id' => 2,
                    'slug' => 'muhammad-bilal',
                    'tgl_lahir' => 'Surabaya, 9 Mei 2004',
                    'nisn' => '988123098',
                    'no_hp' => '0815456798129',
                    'jenis_kelamin' => 'laki-laki',
                    'agama' => 'islam',
                    'nama_ayah' => 'Ini nama ayahnya',
                    'nama_ibu' => 'ini nama ibunya'
                ]);

                $faker = \Faker\Factory::create();

                $total = User::count();

                for ($i = $total+1; $i <= $total+10; $i++) {
                    $user = User::Create([
                        'id' => $i,
                        'name' => $faker->name,
                        'grade_id' => '2',
                        'email' => $faker->email,
                        'password' => bcrypt('password')
                    ]);

                    Biodata::Create([
                        'user_id' => $user->id,
                        'slug' => Str::slug($user->name),
                        'image' => 'user-profille.png',
                        'tgl_lahir' => $faker->date($format = 'Y-m-d', $max = 'now'),
                        'nisn' => rand(100000000, 999999999),
                        'no_hp' => $faker->phoneNumber,
                        'jenis_kelamin' =>  $faker->randomElements(['male', 'female'])[0],
                        'agama' => $faker->randomElements(['islam', 'kristen', 'hindu', 'budha'])[0],
                        'nama_ayah' => $faker->name,
                        'nama_ibu' => $faker->name
                    ]);
                }

    }
}
