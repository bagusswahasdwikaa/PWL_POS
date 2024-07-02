<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
/* 
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/ubah/{id}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
Route::put('/kategori/ubah_simpan/{id}', [KategoriController::class, 'ubah_simpan'])->name('kategori.ubah_simpan');
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus'])->name('kategori.hapus');
Route::resource('m_user', POSController::class);
*/

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);          // Menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);      // Menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);   // Menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);         // Menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);       // Menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);  // Menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);     // Menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']); // Menghapus data user
});
Route::get('/level', [LevelController::class, 'index']);
Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']); // menampilkan halaman awal user
    Route::post('/list', [LevelController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']); // menampilkan halaman form tambah user
    Route::post('/', [LevelController::class, 'store']); // menyimpan data user baru
    Route::get('/{id}', [LevelController::class, 'show']); // menampilkan detail user
    Route::get('/{id}/edit', [LevelController::class, 'edit']); // menampilkan halaman form edit user
    Route::put('/{id}', [LevelController::class, 'update']); // menyimpan perubahan data user
    Route::delete('/{id}', [LevelController::class, 'destroy']); // menghapus data user
}); 
Route::get('/kategori', [KategoriController::class, 'index']);
Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']); // menampilkan halaman awal user
    Route::post('/list', [KategoriController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']); // menampilkan halaman form tambah user
    Route::post('/', [KategoriController::class, 'store']); // menyimpan data user baru
    Route::get('/{id}', [KategoriController::class, 'show']); // menampilkan detail user
    Route::get('/{id}/edit', [KategoriController::class, 'edit']); // menampilkan halaman form edit user
    Route::put('/{id}', [KategoriController::class, 'update']); // menyimpan perubahan data user
    Route::delete('/{id}', [KategoriController::class, 'destroy']); // menghapus data user
});
Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']); // menampilkan halaman awal user
    Route::post('/list', [BarangController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']); // menampilkan halaman form tambah user
    Route::post('/', [BarangController::class, 'store']); // menyimpan data user baru
    Route::get('/{id}', [BarangController::class, 'show']); // menampilkan detail user
    Route::get('/{id}/edit', [BarangController::class, 'edit']); // menampilkan halaman form edit user
    Route::put('/{id}', [BarangController::class, 'update']); // menyimpan perubahan data user
    Route::delete('/{id}', [BarangController::class, 'destroy']); // menghapus data user
});
Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']); //menampilkan halaman awal stok
    Route::post('/list', [StokController::class, 'list']); //menampilkan data stok dalam bentuk json untuk database
    Route::get('/create', [StokController::class, 'create']); //menampilkan halaman form tambah
    Route::post('/', [StokController::class, 'store']); //menyimpan data stok baru
    Route::get('/{id}', [StokController::class, 'show']); //menampilkan detail stok
    Route::get('/{id}/edit', [StokController::class, 'edit']); //menampilkan halaman form edit stok
    Route::put('/{id}', [StokController::class, 'update']); //menyimpan perubahan data stok
    Route::delete('/{id}', [StokController::class, 'destroy']); //menghapus data stok
});
Route::group(['prefix' => 'transaksi'], function () {
    Route::get('/', [TransaksiController::class, 'index']); //menampilkan halaman awal transaksi
    Route::post('/list', [TransaksiController::class, 'list']); //menampilkan data transaksi dalam bentuk json untuk database
    Route::get('create', [TransaksiController::class, 'create']); //menampilkan halaman form tambah transaksi
    Route::post('/', [TransaksiController::class, 'store']); //menyimpan data transaksi baru
    Route::get('/{id}', [TransaksiController::class, 'show']); //menampilkan detail transaksi 
    Route::get('/{id}/edit', [TransaksiController::class, 'edit']); //menampilkan halaman form edit transaksi
    Route::put('/{id}', [TransaksiController::class, 'update']); //menyimpan perubahan data transaksi
    Route::delete('/{id}', [TransaksiController::class, 'destroy']); //menghapus data transaksi
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan manager maka akan diarahkan ke UserController
Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('manager', ManagerController:: class) ;
    });
});

Route::get('/file-upload', [FileUploadController::class, 'fileUpload']);
Route::post('/file-upload', [FileUploadController::class, 'prosesFileUpload']);