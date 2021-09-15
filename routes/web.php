<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/search/{group}', App\Http\Livewire\Search::class);
