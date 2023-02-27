<?php

use App\Http\Controllers\LokasiController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\TipePropertiController;
use App\Http\Controllers\TipeUnitController;
use App\Models\Properti;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

// Route::get('/', function () {
//     return view('pages.home');
// })->name('home');

Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/properti/{detailproperti}', [PageController::class, 'show'])->name('detailproperti');
Route::get('/lokasi/{slug}', [PageController::class, 'lokasi_filter'])->name('lokasi_filter');
Route::get('/tipeproperti/{slug}', [PageController::class, 'tipeproperti_filter'])->name('tipeproperti_filter');
Route::get('/harga/{slug}', [PageController::class, 'harga_filter'])->name('harga_filter');
Route::resource('/', PageController::class)->names([
    'index' => 'page.index',
    'store' => 'page.store',
    'destroy' => 'page.destroy',
    'edit' => 'page.edit',
    'update' => 'page.update',
]);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::delete('dashboard/properti/gallery/{gallery}', [PropertiController::class, 'deletegallery'])->name('deletegallery');
Route::get('dashboard/add-tipeunit/{tipeunit}', [TipeUnitController::class, 'addtipeunit'])->name('addtipeunit');

Route::get('/dashboard', function () {
    return view('dashboard.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('dashboard/lokasi', LokasiController::class)->only(['index', 'store', 'destroy', 'edit', 'update', 'show'])->middleware(['auth', 'verified']);

Route::resource('dashboard/tipe-properti', TipePropertiController::class)->only(['index', 'store', 'destroy', 'edit', 'update', 'show'])->middleware(['auth', 'verified']);

Route::resource('dashboard/properti', PropertiController::class)->only(['index', 'create', 'store', 'destroy', 'edit', 'update', 'show'])->middleware(['auth', 'verified']);

Route::resource('dashboard/tipe-unit', TipeUnitController::class)->only(['index', 'create', 'store', 'destroy', 'edit', 'update', 'show'])->middleware(['auth', 'verified']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
