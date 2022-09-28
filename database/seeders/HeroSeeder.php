<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hero::factory()
        ->has(Skill::factory()->count(3))
        ->create();
    }
}
