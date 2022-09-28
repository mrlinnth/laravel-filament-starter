<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::factory()
        ->recycle(Hero::factory())
        ->count(12)
        ->create();
    }
}
