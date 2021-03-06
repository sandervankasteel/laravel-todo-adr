<?php

use App\Todo\Actions\CreateTodoAction;
use App\Todo\Actions\ShowUnfinishedTodoAction;
use App\Todo\Actions\StoreTodoItemAction;
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
    Route::get('/dashboard', ShowUnfinishedTodoAction::class)->name('dashboard');

    Route::get('/todo/create', CreateTodoAction::class);
    Route::post('/todo', StoreTodoItemAction::class);
    Route::patch('/todo/{todoitem}');
    Route::delete('/todo/{todoitem}');
});
