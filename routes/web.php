<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\Logado;

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
Route::get('/vagas', [VagaController::class, 'index'])->name('vagas.index');
Route::resource('/vagas', VagaController::class)->only([
    'create',
    'show'
])->middleware(Logado::class);
Route::get('/politica_de_privacidade', [VagaController::class, 'politica'])->name('vagas.politica');
Route::get('/termos', [VagaController::class, 'termos'])->name('vagas.termos');
Route::post('/store', [VagaController::class, 'store'])->name('vagas.store')->middleware(Logado::class);
Route::get('/logout', [VagaController::class, 'logout'])->name('vagas.logout')->middleware(Logado::class);

/* User */
Route::get('/login/{provider}', [UserController::class, 'redirect'])->name('social.login');
Route::get('/login/{provider}/callback', [UserController::class, 'callback'])->name('social.callback');
Route::post('/users/upload/{id}', [UserController::class, 'upload'])->name('users.upload')->middleware(Logado::class);
Route::post('/candidaturas', [UserController::class, 'minhasCandidaturas'])->name('user.minhasCandidaturas');
Route::get('/minhascandidaturas/{vagas}', [UserController::class, 'candidaturas'])->name('user.candidaturas');