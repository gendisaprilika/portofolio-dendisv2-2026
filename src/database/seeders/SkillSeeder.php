<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        Skill::truncate();

        $skills = [
            ['name' => 'Laravel', 'level' => 90],
            ['name' => 'Filament', 'level' => 85],
            ['name' => 'Livewire', 'level' => 80],
            ['name' => 'TailwindCSS', 'level' => 85],
            ['name' => 'Docker', 'level' => 75],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}