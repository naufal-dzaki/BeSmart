<?php

namespace Database\Seeders;

use App\Models\Biodata;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Grade;
use App\Models\User;
use App\Models\Subject;
use App\Models\Post;
use App\Models\Motivation;

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

        $this->call(UserSeeder::class);

        $this->call(GradeSeeder::class);

        $this->call(SubjectSeeder::class);

        $this->call(PostSeeder::class);

        Motivation::create([
            'judul' => ' "Kalau impianmu tak bisa membuatmu takut, mungkin karena impianmu tak cukup besar." - Muhammad Ali',
            'slug' => 'kalau-impianmu',
            'image' => 'motivation1.jpg',
            'body' => 'Kita hidup untuk saat ini, bermimpi untuk masa depan dan kita belajar untuk kebenaran abadi”

            Di sini Cheng Kai Shek ingin mengajarkan hal seperti hidup Anda sangatlah panjang, Anda masih memiliki banyak tugas dan juga keinginan. Dimana Anda harus bisa bermimpi dan menggapai hal baik selama hidup Anda. Dengan begitu kehidupan Anda menjadi lebih berarti.'
        ]);
        Motivation::create([
            'judul' => 'Esensi menjadi manusia adalah ketika seseorang tidak mencari kesempurnaan',
            'slug' => 'esensi-menjadi-manusia',
            'image' => 'motivation2.jpg',
            'body' => '“Esensi menjadi manusia adalah ketika seseorang tidak mencari kesempurnaan”

            Ketika Anda terpuruk akan hal yang selalu Anda buat gagal dan juga tidak pernah sempurna. Jangan menyerah, karena esensi atau sifat alami manusia memang jauh dari kesempurnaan. Sehingga jangan putus asa dan terus berusaha menggapai apa yang Anda targetkan.'
        ]);

        // \App\Models\Biodata::factory(5)->create();
    }
}
