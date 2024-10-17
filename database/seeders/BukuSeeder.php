<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0;$i <10 ;$i++){
            Buku::create([
                'title' => fake()->sentence(3),
                'author' => fake()->name(),
                'genre' => fake()->sentence(1),
                'year' => fake()->year(),
                'prices' => fake()->numberBetween(10000, 100000)
            ]);
    }
}
}
