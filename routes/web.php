<?php

use App\Todo\Actions\CreateTodoAction;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(static function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/todo/create', CreateTodoAction::class);
    Route::post('/todo/store');
    Route::put('/todo/{todoitem}');
});
