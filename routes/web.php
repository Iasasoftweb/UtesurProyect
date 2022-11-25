<?php

use App\Http\Livewire\Nnoticias;
use App\Http\Livewire\Action;
use App\Http\Livewire\Almacen;
use App\Http\Livewire\Formnoticias;
use App\Http\Livewire\Orgullo;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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



Route::get('/', 'App\Http\Controllers\MainController@index');

Route::get('/linker', function(){
    Artisan::call('storage:link');
   return 'PRobando....';
});


Route::get('estudiantes', 'App\Http\Controllers\MainController@estudiantes');
Route::get('docentes', 'App\Http\Controllers\MainController@docentes');
Route::get('nosotros', 'App\Http\Controllers\MainController@nosotros');
Route::get('noticiasbrowse', 'App\Http\Controllers\MainController@noticiasb')->name('noticiasbrowse');
Route::get('notidetalle/{id}', 'App\Http\Controllers\MainController@dnoticia');
Route::get('ofertasacademicas', 'App\Http\Controllers\MainController@ofertasacademicas');
Route::get('orgullo', 'App\Http\Controllers\MainController@orgullo');

/* App*/

Route::get('nnoticias', Nnoticias::class)->name('getnoticias');
Route::get('action', Action::class)->name('action');
Route::get('almacen', Almacen::class)->name('almacen');
Route::get('formnoticias', Formnoticias::class)->name('formnoticias');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
