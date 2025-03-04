<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataAlumniController;
use App\Http\Controllers\dataalumniuserController;
use App\Http\Controllers\DataSekolahController;
use App\Http\Controllers\datasekolahuserController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// ROUTE FOR BERITA
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index')->middleware('auth');
Route::get('/berita/data', [BeritaController::class, 'data'])->name('berita.data')->middleware('auth');
Route::put('/berita/{berita}/update', [BeritaController::class, 'update'])->name('berita.update')->middleware('auth');
Route::get('/berita/{berita}', [BeritaController::class, 'edit'])->name('berita.edit')->middleware('auth');
Route::post('/berita/tambah', [BeritaController::class, 'store'])->name('berita.store')->middleware('auth');
Route::delete('/berita/{berita}/destroy', [BeritaController::class, 'destroy'])->name('berita.destroy')->middleware('auth');

// ROUTE FOR FASILITAS
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index')->middleware('auth');
Route::get('/fasilitas/data', [FasilitasController::class, 'data'])->name('fasilitas.data')->middleware('auth');
Route::put('fasilitas/{id}/update', [FasilitasController::class, 'update'])->name('fasilitas.update')->middleware('auth');
Route::get('/fasilitas/{id}', [FasilitasController::class, 'edit'])->name('fasilitas.edit')->middleware('auth');
Route::post('/fasilitas/tambah', [FasilitasController::class, 'store'])->name('fasilitas.store')->middleware('auth');
Route::delete('/fasilitas/{id}/destroy', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy')->middleware('auth');

// ROUTE FOR DATA SEKOLAH
Route::get('/datasekolah', [DataSekolahController::class, 'index'])->name('datasekolah.index')->middleware('auth');
Route::get('/datasekolah/data', [DataSekolahController::class, 'data'])->name('datasekolah.data')->middleware('auth');
Route::put('/datasekolah/{datasekolah}/update', [DataSekolahController::class, 'update'])->name('datasekolah.update')->middleware('auth');
Route::get('/datasekolah/{datasekolah}', [DataSekolahController::class, 'edit'])->name('datasekolah.edit')->middleware('auth');
Route::post('/datasekolah/tambah', [DataSekolahController::class, 'store'])->name('datasekolah.store')->middleware('auth');
Route::delete('/datasekolah/{datasekolah}/destroy', [DataSekolahController::class, 'destroy'])->name('datasekolah.destroy')->middleware('auth');

// ROUTE FOR BERANDA
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index')->middleware('auth');
Route::get('/beranda/data', [BerandaController::class, 'data'])->name('beranda.data')->middleware('auth');
Route::put('/beranda/{beranda}/update', [BerandaController::class, 'update'])->name('beranda.update')->middleware('auth');
Route::get('/beranda/{beranda}', [BerandaController::class, 'edit'])->name('beranda.edit')->middleware('auth');
Route::post('/beranda/tambah', [BerandaController::class, 'store'])->name('beranda.store')->middleware('auth');
Route::delete('/beranda/{beranda}/destroy', [BerandaController::class, 'destroy'])->name('beranda.destroy')->middleware('auth');

// ROUTE FOR DATA ALUMNI
Route::get('/dataalumni', [DataAlumniController::class, 'index'])->name('dataalumni.index')->middleware('auth');
Route::get('/dataalumni/data', [DataAlumniController::class, 'data'])->name('dataalumni.data')->middleware('auth');
Route::put('/dataalumni/{dataalumni}/update', [DataAlumniController::class, 'update'])->name('dataalumni.update')->middleware('auth');
Route::get('/dataalumni/{dataalumni}', [DataAlumniController::class, 'edit'])->name('dataalumni.edit')->middleware('auth');
Route::post('/dataalumni/tambah', [DataAlumniController::class, 'store'])->name('dataalumni.store')->middleware('auth');
Route::delete('/dataalumni/{dataalumni}/destroy', [DataAlumniController::class, 'destroy'])->name('dataalumni.destroy')->middleware('auth');

// Route::controller(SettingController::class)->group(function () {
//     Route::get('/setting', 'index')->name('setting.index');
//     Route::put('/setting/{setting}', 'update')->name('setting.update');
// });

Route::get('/news', [BeritasController::class, 'index'])->name('news.index');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/admin/home', function () {
    return view('admin.home');
})->name('homeAdmin');

Route::get('/artikel', function () {
    return view('user.berita.beritauser');
})->name('artikel');

Route::get('/siswa', function () {
    return view('siswa');
})->name('siswa');

Route::get('/user/datasekolahuser', [datasekolahuserController::class, 'datasekolahuser'])->name('sekolah');
Route::get('/user/dataalumniuser', [dataalumniuserController::class, 'dataalumniuser'])->name('alumni');
Route::get('/user/fasilitas', [FasilitasUserController::class, 'index'])->name('user.fasilitasuser');

Route::get('/artikel', function () {
         return view('user.berita.beritauser');
     })->name('artikel');

Route::get('/artikel/show/{berita_id}', [BeritasController::class, 'show'])->name('user.berita.show');

Route::controller(BeritaController::class)->group(function () {
    Route::get('/berita/data', 'data')->name('berita.data');
    Route::get('/berita/{berita}/detail', 'detail')->name('berita.detail');
    Route::get('/berita/{berita}', 'edit')->name('berita.edit');
    Route::put('/berita/{berita}/update', 'update')->name('berita.update');
    Route::post('/berita', 'store')->name('berita.store');
    Route::delete('/berita/{berita}/destroy', 'destroy')->name('berita.destroy');
})->middleware('auth');

Route::controller(FasilitasController::class)->group(function () {
    Route::get('fasilitas/data', 'data')->name('fasilitas.data');
    Route::get('fasilitas', 'index')->name('fasilitas.index');
    Route::get('fasilitas/{id}/show', 'show')->name('fasilitas.show');
    Route::get('fasilitas/{id}', 'edit')->name('fasilitas.edit');
    Route::put('fasilitas/{id}/update', 'update')->name('fasilitas.update');
    Route::post('fasilitas', 'store')->name('fasilitas.store');
    Route::delete('fasilitas/{id}/destroy', 'destroy')->name('fasilitas.destroy');
});

Route::controller(DataSekolahController::class)->group(function () {
    Route::get('datasekolah/data', 'data')->name('datasekolah.data');
    Route::get('/datasekolah', 'index')->name('datasekolah.index');
    Route::get('/datasekolah/{datasekolah}/show', 'detail')->name('datasekolah.detail');
    Route::get('/datasekolah/{datasekolah}', 'edit')->name('datasekolah.edit');
    Route::put('/datasekolah/{datasekolah}/update', 'update')->name('datasekolah.update');
    Route::post('/datasekolah', 'store')->name('datasekolah.store');
    Route::delete('/datasekolah/{datasekolah}/destroy', 'destroy')->name('datasekolah.destroy');
});

Route::controller(BerandaController::class)->group(function () {
    Route::get('/beranda/data', 'data')->name('beranda.data');
    Route::get('/beranda', 'index')->name('beranda.index');
    Route::get('/beranda/{beranda}/show', 'detail')->name('beranda.show');
    Route::get('/beranda/{beranda}', 'edit')->name('beranda.edit');
    Route::put('/beranda/{beranda}/update', 'update')->name('beranda.update');
    Route::post('/beranda', 'store')->name('beranda.store');
    Route::delete('/beranda/{beranda}/destroy', 'destroy')->name('beranda.destroy');
});

Route::controller(DataAlumniController::class)->group(function () {
    Route::get('/dataalumni/data', 'data')->name('dataalumni.data');
    Route::get('/dataalumni', 'index')->name('dataalumni.index');
    Route::get('/dataalumni/{dataalumni}/show', 'show')->name('dataalumni.show');
     Route::get('/dataalumni/{dataalumni}', 'edit')->name('dataalumni.edit');
     Route::put('/dataalumni/{dataalumni}/update', 'update')->name('dataalumni.update');
     Route::post('/dataalumni', 'store')->name('dataalumni.store');
     Route::delete('/dataalumni/{dataalumni}/destroy', 'destroy')->name('dataalumni.destroy');
});
