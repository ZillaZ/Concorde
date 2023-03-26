<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Register;
use App\Http\Livewire\Login;
use App\Http\Livewire\Root;
use App\Http\Livewire\Chat;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Root::class);

Route::get('/register', Register::class);

Route::get('/login', Login::class);

Route::get('/chat/{user}', Chat::class);