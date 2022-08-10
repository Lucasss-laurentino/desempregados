<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VagaController;

use App\Http\Controllers\UserController;

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

/* Vagas */
Route::get('/', function () {
    return to_route('vagas.index');
});
Route::resource('/vagas', VagaController::class)->only([
    'index',
    'create',
    'store',
    'show'
]);
Route::get('/logout', [VagaController::class, 'logout'])->name('vagas.logout');

/* User */
Route::get('/login/{provider}', [UserController::class, 'redirect'])->name('social.login');
Route::get('/login/{provider}/callback', [UserController::class, 'callback'])->name('social.callback');
Route::post('/users/upload/{id}', [UserController::class, 'upload'])->name('users.upload');