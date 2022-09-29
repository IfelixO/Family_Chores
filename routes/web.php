<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChoresController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/create', [ChoresController::class, 'create']) ->name('chores.create');
Route::get('/', [ChoresController::class, 'index']) ->name('chores.index');
Route::post('/', [ChoresController::class, 'store']) ->name('chores.store');
Route::get('/{id}/edit', [ChoresController::class, 'edit']) ->where('id', '[0-9]+') ->name('chores.edit');
Route::put('/{id}', [ChoresController::class, 'update']) ->where('id', '[0-9]+') ->name('chores.update');
Route::delete('/{id}', [ChoresController::class, 'destroy']) ->where('id', '[0-9]+') ->name('chores.destroy');

Route::fallback(function() {
    return "Error!";
});
