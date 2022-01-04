<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('user', function () {
    \App\Models\User::create([
        'name' => 'matintayebi',
        'email' => 'matintayebinia@gmail.com',
        'password' => Hash::make('matin321Q'),
        'is_superuser' => true
    ]);
})->purpose('Display an inspiring quote');
