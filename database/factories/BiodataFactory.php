<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\User;
class BiodataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->name;
        $slug = \Str::slug($title);    
        return [
            'user_id' => rand(1, 2),
            'slug' => $slug,
            'image' => 'user-profille.png',
            'tgl_lahir' => 'Surabaya, 9 Mei 2004',
            'nisn' => $this->faker->randomNumber,
            'no_hp' => $this->faker->randomNumber,
            'jenis_kelamin' => 'laki-laki',
            'agama' => 'islam',
            'nama_ayah' => $this->faker->name,
            'nama_ibu' => $this->faker->name
        ];
    }
}
