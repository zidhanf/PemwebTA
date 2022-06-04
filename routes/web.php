<?php

use App\Models\Menu;
use App\Models\kategori;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardReservasiController;
use App\Http\Controllers\RegisterContoroller;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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




// Route::get('/reservasi', function () {
//     return view('reservasi', [
//         "tittle" => "Reservasi"
//     ]);
// })->middleware('auth');

// Route::get('/kategori/{kategori:name}', function (kategori $kategori) {
//     return view(
//         'kategori',
//         [
    //             'tittle ' => $kategori->name,
    //             'menus' => $kategori->menus,
    //             'kategori' => $kategori->name
    //         ]
//     );
// });

Route::get('/', function () {
    return view('home', [
        "tittle" => "Cafe.in"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About"
    ]);
});

Route::get('/menu', [MenuController::class, 'index']);

// single post
Route::get('menu/{post}', [MenuController::class, 'show']);

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class,'authenticate']);

Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterContoroller::class,'index'])->middleware('guest');;

Route::post('/register',[RegisterContoroller::class,'store']);

Route::resource('/reservasi', ReservasiController::class)->middleware('auth');

Route::resource('/review', ReviewController::class)->middleware('auth');

Route::get('/dashboard',function(){return view('dashboard.index');})->middleware('is_admin');

Route::resource('/dashboard/menus', DashboardMenuController::class)->middleware('is_admin');

Route::resource('/dashboard/reservasi', DashboardReservasiController::class)->middleware('is_admin');
