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

        //user
        User::Create([
            'id' => 1,
            'name' => 'naufal',
            'grade_id' => '2',
            'email' => 'naufal@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::Create([
            'id' => 2,
            'name' => 'bilal',
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

        //post
        Post::create([
            'judul' => 'ini judul',
            'slug' => 'ini-judul',
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
            'bab' => '1',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
            'link' => 'https://youtu.be/',
            'tipe' => '1',
            'subject_id' => '1',
            'user_id' => '2'
        ]);
        Post::create([
            'judul' => 'ini adalah mapel tugas',
            'slug' => 'ini-adalah-mapel-tugas',
            'bab' => '5',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, repellat rem sed inventore a omnis eius vero quaerat porro dolores expedita corporis, totam harum quidem nihil numquam accusamus beatae atque illo quo. Facilis illum perferendis accusantium hic, nesciunt corporis nulla amet obcaecati inventore maxime, corrupti dolore nemo, sed impedit repellat itaque unde incidunt quae asperiores! Similique et error quod adipisci at autem dolore iure reprehenderit? Consequuntur quibusdam quaerat ipsam fugit incidunt eligendi ratione quos ducimus aliquam consequatur. Nesciunt architecto earum alias dolorum quasi, illum enim tenetur sequi repellat beatae hic ab, dicta omnis tempora magni quod eum vitae eos! Ab, id voluptas nulla explicabo magni tempora cupiditate autem, molestiae praesentium voluptatem quod consequuntur quas et! Quo totam ducimus illo optio!',
            'link' => 'https://youtu.be/',
            'tipe' => '1',
            'subject_id' => '3',
            'user_id' => '2'
        ]);

        Motivation::create([
            'judul' => 'Ini Adalah Judul Yang Pertama',
            'slug' => 'ini-adalah-judul-yang-pertama',
            'image' => 'motivation1.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis pariatur id corrupti sit. Sed sint amet, numquam nihil eveniet cum dolorum. Neque quisquam eos ducimus odit veniam maxime excepturi delectus amet aliquid nostrum animi et nemo exercitationem, atque, facere quam earum beatae, modi tempore possimus corrupti totam culpa. Maiores asperiores repudiandae quasi tempora nisi nulla facere cupiditate eius quae quisquam doloremque accusantium sint, dolor at nam veritatis dolorem consequuntur. Possimus maiores ratione nostrum, corporis itaque eligendi suscipit. Vero dolores, quidem eos inventore voluptatum, qui dolorem, saepe unde quos maxime repellendus sint rerum harum modi distinctio commodi esse. Iste facere delectus veritatis possimus earum ipsum quae iusto asperiores laudantium quis eum aspernatur alias eligendi numquam nulla odit ad ab quia, debitis minus eveniet aut amet? Libero quam perspiciatis rem voluptatum at accusamus voluptas totam quo odit natus culpa amet consequuntur reiciendis iure aut cum adipisci, saepe officiis. Nobis beatae totam rem ipsam assumenda nisi ratione cum doloribus nesciunt! Voluptas ipsum voluptatem illo placeat praesentium tempore, nemo nobis libero delectus velit quas, laboriosam asperiores natus voluptatibus ut reiciendis soluta quasi explicabo accusamus minima blanditiis. Perspiciatis, eaque. Voluptatibus optio accusamus reiciendis explicabo incidunt est, magnam hic corrupti asperiores autem alias temporibus! Mollitia praesentium beatae, nemo dolorem dolor alias quod sed earum cupiditate hic doloremque expedita, animi, facere quia nam ad aspernatur deserunt. Recusandae quo quibusdam sed quidem velit voluptas consequuntur omnis, doloremque sint iste. Aliquam eligendi tenetur consequuntur voluptas? Assumenda explicabo facere, dolorum fugiat et pariatur ab dolor accusamus eum deleniti asperiores? Eligendi neque in asperiores cumque ullam, sit commodi nobis totam animi vitae recusandae excepturi, quasi magni, quaerat iure illo optio unde fugiat impedit https://v2.tailwindcss.com/docs/max-height tempore nulla. Modi, voluptates nam fugit mollitia a soluta facilis architecto ea quas dolores perferendis necessitatibus minus aut laborum explicabo autem voluptatibus, saepe totam et vero quo! Debitis.'
        ]);
        Motivation::create([
            'judul' => 'Ini Adalah Judul Yang kedua',
            'slug' => 'ini-adalah-judul-yang-kedua',
            'image' => 'motivation2.jpg',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis pariatur id corrupti sit. Sed sint amet, numquam nihil eveniet cum dolorum. Neque quisquam eos ducimus odit veniam maxime excepturi delectus amet aliquid nostrum animi et nemo exercitationem, atque, facere quam earum beatae, modi tempore possimus corrupti totam culpa. Maiores asperiores repudiandae quasi tempora nisi nulla facere cupiditate eius quae quisquam doloremque accusantium sint, dolor at nam veritatis dolorem consequuntur. Possimus maiores ratione nostrum, corporis itaque eligendi suscipit. Vero dolores, quidem eos inventore voluptatum, qui dolorem, saepe unde quos maxime repellendus sint rerum harum modi distinctio commodi esse. Iste facere delectus veritatis possimus earum ipsum quae iusto asperiores laudantium quis eum aspernatur alias eligendi numquam nulla odit ad ab quia, debitis minus eveniet aut amet? Libero quam perspiciatis rem voluptatum at accusamus voluptas totam quo odit natus culpa amet consequuntur reiciendis iure aut cum adipisci, saepe officiis. Nobis beatae totam rem ipsam assumenda nisi ratione cum doloribus nesciunt! Voluptas ipsum voluptatem illo placeat praesentium tempore, nemo nobis libero delectus velit quas, laboriosam asperiores natus voluptatibus ut reiciendis soluta quasi explicabo accusamus minima blanditiis. Perspiciatis, eaque. Voluptatibus optio accusamus reiciendis explicabo incidunt est, magnam hic corrupti asperiores autem alias temporibus! Mollitia praesentium beatae, nemo dolorem dolor alias quod sed earum cupiditate hic doloremque expedita, animi, facere quia nam ad aspernatur deserunt. Recusandae quo quibusdam sed quidem velit voluptas consequuntur omnis, doloremque sint iste. Aliquam eligendi tenetur consequuntur voluptas? Assumenda explicabo facere, dolorum fugiat et pariatur ab dolor accusamus eum deleniti asperiores? Eligendi neque in asperiores cumque ullam, sit commodi nobis totam animi vitae recusandae excepturi, quasi magni, quaerat iure illo optio unde fugiat impedit https://v2.tailwindcss.com/docs/max-height tempore nulla. Modi, voluptates nam fugit mollitia a soluta facilis architecto ea quas dolores perferendis necessitatibus minus aut laborum explicabo autem voluptatibus, saepe totam et vero quo! Debitis.'
        ]);

        // \App\Models\Biodata::factory(5)->create();
    }
}
