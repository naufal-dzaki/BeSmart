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
                    'judul' => 'ini judul',
                    'slug' => 'ini-judul',
                    'bab' => '1',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
                    'tipe' => '0',
                    'subject_id' => '2',
                    'user_id' => '1'
                ]);
                Post::create([
                    'judul' => 'Geometri',
                    'slug' => 'ini-adalah-mapel-pertama',
                    'bab' => '1',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
                    'tipe' => '0',
                    'subject_id' => '1',
                    'user_id' => '2'
                ]);
                Post::create([
                    'judul' => 'Statistik Inferensial',
                    'slug' => 'ini-adalah-mapel-kedua',
                    'bab' => '1',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
                    'tipe' => '1',
                    'subject_id' => '1',
                    'user_id' => '2'
                ]);
                Post::create([
                    'judul' => 'Surat Lamaran Pekerjaan',
                    'slug' => 'ini-adalah-mapel-tugas',
                    'bab' => '5',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
                    'tipe' => '1',
                    'subject_id' => '3',
                    'user_id' => '2'
                ]);

    }
}
