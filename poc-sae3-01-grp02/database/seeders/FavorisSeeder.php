<?php

namespace Database\Seeders;

use App\Models\Favoris;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Favoris::factory(20)->create();

    }
}
