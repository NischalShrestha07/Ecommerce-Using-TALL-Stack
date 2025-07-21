<?php

use App\Livewire\HomePage;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomePage::class);
Route::get('/users', function () {
    return view('users', ['livewire' => 'user-list']);
});
