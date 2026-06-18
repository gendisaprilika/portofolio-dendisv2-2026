<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Illuminate\Support\Facades\Response;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Contact;

Route::get('/', function () {
    return view('welcome', [
        'profile' => Profile::first(),
        'projects' => Project::all(),
        'skills' => Skill::all(),
        'contacts' => Contact::all(),
    ]);
});

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

