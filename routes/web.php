<?php

use App\Models\Team;
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
    $equipo = new Team();
    $equipo->nombre = "Julio Flores y Roberto Mejia";
    $equipo->grupo = "3522IS";
    return view('index', ['team' => $equipo]);
})->name('inicio');

Route::get('/uno', function () {
    return view('Temas.single');
})->name('uno');

Route::get('/dos', function () {
    return view('Temas.singletwo');
})->name('dos');

Route::get('/tres', function () {
    return view('Temas.singlethree');
})->name('tres');

Route::get('/cuatro', function () {
    return view('Temas.four');
})->name('cuatro');

Route::get('/cinco', function () {
    return view('Temas.five');
})->name('cinco');

Route::get('/seis', function () {
    return view('Temas.six');
})->name('seis');

Route::get('/siete', function () {
    return view('Temas.seven');
})->name('siete');

Route::get('/ocho', function () {
    return view('Temas.eight');
})->name('ocho');

Route::get('/singlefour.blade.php', function () {
    return view('singlefour');
});
Route::get('/index2.blade.php', function () {
    return view('index2');
});
Route::get('/index3.blade.php', function () {
    return view('index3');
});
Route::get('/index4.blade.php', function () {
    return view('index4');
});
Route::get('/index5.blade.php', function () {
    return view('index5');
});
Route::get('/index6.blade.php', function () {
    return view('index6');
});