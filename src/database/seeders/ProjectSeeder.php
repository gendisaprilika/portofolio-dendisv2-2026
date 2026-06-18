<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();

        // pastikan folder ada
        Storage::disk('public')->makeDirectory('projects');

        for ($i = 1; $i <= 6; $i++) {

            // ambil dummy image dari picsum
            $imageUrl = "https://picsum.photos/seed/" . rand(1, 9999) . "/600/400";

            // ambil isi image
            $imageContents = file_get_contents($imageUrl);

            // generate nama file
            $fileName = 'projects/' . Str::uuid() . '.jpg';

            // simpan ke storage
            Storage::disk('public')->put($fileName, $imageContents);

            Project::create([
                'title' => 'Project ' . $i,
                'description' => 'Ini adalah project ke-' . $i . ' menggunakan Laravel & Filament.',
                'image' => $fileName,
                'link' => 'https://example.com/project-' . $i,
            ]);
        }
    }
}