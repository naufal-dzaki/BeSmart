<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;
use App\Models\User;
use App\Models\Subject;
use App\Models\Post;

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

        //user
        User::Create([
            'name' => 'naufal',
            'grade_id' => '2',
            'email' => 'naufal@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::Create([
            'name' => 'bilal',
            'grade_id' => '1',
            'email' => 'bilal@gmail.com',
            'password' => bcrypt('password')
        ]);

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

        //post
        Post::create([
            'judul' => 'ini judul',
            'slug' => 'ini-judul',
            'image' => 'materi.png',
            'bab' => '1',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
            'link' => 'https://codingstudio.id/cara-pull-github/',
            'tipe' => '0',
            'subject_id' => '2',
            'user_id' => '1'
        ]);
        Post::create([
            'judul' => 'ini adalah mapel pertama',
            'slug' => 'ini-adalah-mapel-pertama',
            'image' => 'materi.png',
            'bab' => '1',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
            'link' => 'https://youtu.be/',
            'tipe' => '0',
            'subject_id' => '1',
            'user_id' => '2'
        ]);
        Post::create([
            'judul' => 'ini adalah mapel kedua',
            'slug' => 'ini-adalah-mapel-kedua',
            'image' => 'tugas.png',
            'bab' => '1',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
            'link' => 'https://youtu.be/',
            'tipe' => '1',
            'subject_id' => '1',
            'user_id' => '2'
        ]);
    }
}
