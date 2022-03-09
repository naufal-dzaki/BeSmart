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
