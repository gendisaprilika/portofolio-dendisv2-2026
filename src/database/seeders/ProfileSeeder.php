<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        // Biar gak duplicate tiap seed
        Profile::truncate();

        Profile::create([
            'name' => 'Gendis',
            'title' => 'Fullstack Laravel Developer',
            'bio' => 'Saya adalah developer yang fokus pada Laravel, Filament, dan Livewire. Saya suka membangun web yang clean, cepat, dan scalable.',
            'photo' => null, // nanti upload dari filament
        ]);
    }
}