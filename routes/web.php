<?php


use App\Http\Controllers\TaskController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home'); 

// Route::prefix('tasks')
//     ->name('tasks.')
//     ->controller(TaskController::class)
//     ->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('{id}/edit', 'edit')->name('edit');
//         Route::get('create')->name('create');
//     });

Route::get('/tasks/', [TaskController::class, 'index'])->name('tasks.index');

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

Route::get('/tasks/', [TaskController::class, 'index'])->name('tasks.index'); 