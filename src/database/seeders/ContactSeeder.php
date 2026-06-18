<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::truncate();

        Contact::create([
            'type' => 'Email',
            'value' => 'gendis@email.com',
            'icon' => 'heroicon-o-envelope',
        ]);

        Contact::create([
            'type' => 'GitHub',
            'value' => 'https://github.com/username',
            'icon' => 'heroicon-o-code-bracket',
        ]);

        Contact::create([
            'type' => 'Instagram',
            'value' => 'https://instagram.com/username',
            'icon' => 'heroicon-o-camera',
        ]);
    }
}