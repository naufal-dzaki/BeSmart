<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //post
                Post::create([
                    'judul' => 'Larutan Elektrolit dan Non Elektrolit',
                    'slug' => 'larutan-elektroit',
                    'bab' => '1',
                    'body' => 'Larutan nonelektrolit adalah larutan yang tidak dapat menghantarkan arus listrik. Hal ini karena larutan nonelektrolit tidak dapat menghasilkan ion-ion. Yang termasuk larutan nonelektrolit antara lain: Larutan urea Larutan sukrosa Larutan glukosa Larutan alkohol. untuk lebih jelasnya kalian bisa melihat video berikut : <a href="https://www.youtube.com/watch?v=8jwYzF-Nqdc"></a>',
                    'tipe' => '0',
                    'subject_id' => '2',
                    'user_id' => '3'
                ]);
                Post::create([
                    'judul' => 'Geometri',
                    'slug' => 'ini-adalah-mapel-pertama',
                    'bab' => '1',
                    'body' => '
                    GEOMETRI. Geometri berasal dari bahasa latin “ Geometria”, Geo : Tanah dan Metria : Ukuran. Geometri di Indonesia diterjemahkan Ilmu Ukur. Geometri : Cabang Matematika yang mempelajari titik, garis, bidang dan benda-benda ruang beserta sifat, ukuran dan hubungannya dengan yang lain. untuk lebih jelasnya kalian bisa melihat video berikut : <a href="https:https://www.youtube.com/watch?v=PCg37wKBsEk"></a>',
                    'tipe' => '0',
                    'subject_id' => '1',
                    'user_id' => '3'
                ]);
                Post::create([
                    'judul' => 'Statistik Inferensial',
                    'slug' => 'ini-adalah-mapel-kedua',
                    'bab' => '1',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
                    'tipe' => '1',
                    'subject_id' => '1',
                    'user_id' => '3'
                ]);
                Post::create([
                    'judul' => 'Surat Lamaran Pekerjaan',
                    'slug' => 'ini-adalah-mapel-tugas',
                    'bab' => '5',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
                    'tipe' => '1',
                    'subject_id' => '3',
                    'user_id' => '3'
                ]);

    }
}
