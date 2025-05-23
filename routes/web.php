<?php
// untuk route ini penting tau

use Illuminate\Support\Facades\Route;

// punya hamdani
use App\Http\Controllers\ControllerLamanAdminBerita;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ControllerLamanBerita;

// Ferry
use App\Http\Controllers\ControllerLamanBeranda;
use App\Http\Controllers\ControllerLamanTentangKami;
use App\Http\Controllers\ControllerAdminSipupuk;

use App\Http\Controllers\ControllerLamanSipupuk;
use App\Http\Controllers\LoginController;

// haqi
use App\Http\Controllers\ControllerLamanProduk;
use App\Http\Controllers\ControllerAdminUserMutualism;
//bagian java
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ControllerProfilAdmin;

use App\Http\Controllers\Auth\PasswordResetController;

use App\Http\Controllers\VersionController;
//default route
// Route::get('/', function () {
//     return view('welcome');
// });


// route buat laman beranda
//Route::get('/', [ControllerLamanBeranda::class, 'index'])->name('beranda');

// dibawah ini kumpulan route laman admin sipupuk
Route::resource('/', ControllerLamanBeranda::class)->names([
    'index' => 'beranda',
    'store' => 'input',
]);

// Route::get('/admin/contact', [ControllerLamanBeranda::class, 'adminContactUs'])->name('contactView');

Route::delete('/admin/adminberanda/delete/{id}', [ControllerLamanBeranda::class, 'destroy'])->name('delete');


Route::get('/password/reset-request', [PasswordResetController::class, 'showRequestForm'])->name('password.request');
Route::post('/password/send-code', [PasswordResetController::class, 'sendResetCode'])->name('password.send.code');

Route::get('/password/reset-form', [PasswordResetController::class, 'showResetForm'])->name('password.reset.form');
Route::post('/password/reset', [PasswordResetController::class, 'resetPassword'])->name('password.reset');



// route buat laman tentang kami
// Route::get('/tentangkami', function () {
//     return view('layouts.laman_tentangkami');
// })->name('tentangkami');
Route::get('/tentangkami', [ControllerLamanTentangKami::class, 'index'])->name('tentangkami');

// Route::resource('/adminpupuk', \App\Http\Controllers\ControllerAdminSipupuk::class);

// Route::resource('/admin/sipupuk', \App\Http\Controllers\ControllerAdminSipupuk::class)->name('sipupuk');
Route::post('/sipupuks', [ControllerAdminSipupuk::class, 'store'])->name('sipupuks.store');

// Route::resource('admin/adminsipupuk', ControllerAdminSipupuk::class)->names([
//     'index' => 'adminsipupuk.index',
//     'create' => 'adminsipupuk.create',
//     'store' => 'adminsipupuk.store',
//     'show' => 'adminsipupuk.show',
//     'edit' => 'adminsipupuk.edit',
//     'update' => 'adminsipupuk.update',
//     'destroy' => 'adminsipupuk.destroy'
// ]);


Route::resource('/sipupuk', \App\Http\Controllers\ControllerLamanSipupuk::class);
// routes/web.php

// Search laman Sipupuk
Route::get('/search', [ControllerLamanSipupuk::class, 'search'])->name('search');
// Search Admin Sipupuk
Route::get('/cari', [ControllerAdminSipupuk::class, 'cari'])->name('cari');

// routes\web.php Login

// Route::get('/login', [LoginController::class, 'login'])->name('login');

// route buat laman produk
Route::get('/produk', [ControllerAdminUserMutualism::class, 'userlist'])->name('produk.index');

Route::get('/test', function () {
    return view('component.testproduk');
});

// hq

Route::get('/listpro/list-produk', function () {
    return view('/listpro/list-produk');
});


Route::get('/version', [VersionController::class, 'showLastUpdate']);
Route::get('/version/list', [VersionController::class, 'listLastUpdate']);


Route::get('/listproduk', [ControllerAdminUserMutualism::class, 'userlist'])->name('listproduk');
Route::get('/detailproduk/{id}', [ControllerAdminUserMutualism::class, 'detailproduk'])->name('detailproduk');
// Route::get("/detailproduk", [ControllerAdminUserMutualism::class,'showuser'])->name('layouts.laman_detail_produk');
// return view('layouts.laman_produk');


// Route::get('/petronitrat.blade.php', function () {
//   return view('petronitrat');
// });



// Route::get('/redirect/{page}', 'App\Http\Controllers\RedirectController@redirectToPage')->name('redirect.to.page');




// bagian hamdani
// route test untuk laman utama
// Route::resource('/home', ControllerLamanUtama::class);
// route buat laman berita
Route::get('/berita', [ControllerLamanBerita::class, 'index'])->name('berita');
// laman berita untuk admin berita yang digunakan untuk mengatur data dari tabel beritas
// mulai dari menambah, mengubah, menampilkan, dan menghapus data
// Route::resource('/admin_berita', ControllerLamanAdminBerita::class);

// route get pengunjung, untuk menambahkan jumlah pengunjung dan di arahkan link yang dituju
Route::get('/pengunjung/{id_berita}', [ControllerLamanAdminBerita::class, 'pengunjung'])->name('berita.pengunjung');
// route get login untuk menampilkan ke laman login dan get proses_login untuk mengeksekusi proses login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/process_login', [AuthController::class, 'process_login']);
// route get register untuk menampilkan ke laman register dan get proses_register untuk mengeksekusi proses register
Route::get('/register', [AuthController::class, 'register']);
Route::post('/process_register', [AuthController::class, 'process_register']);
// route get forget untuk menampilkan ke laman forget tampilan menyusul
Route::get('/forget', [AuthController::class, 'forget'])->name('forget');

Route::get('/forget/email', [AuthController::class, 'forget_email'])->name('forget.email');

Route::get('/forget/validasi', [AuthController::class, 'forget_validasi'])->name('forget.validasi');
Route::post('/forget/proses_validasi', [AuthController::class, 'forget_proses_validasi'])->name('forget.proses_validasi');


Route::get('/forget/buat', [AuthController::class, 'forget_buat'])->name('forget.buat');
Route::post('/forget/proses_buat', [AuthController::class, 'forget_proses_buat'])->name('forget.proses_buat');

// route group admin di bawah ini untuk laman admin (sekarang juga dapat diakses oleh superadmin)
Route::group(['middleware' => 'admin'], function () {
    // dibawah ini kumpulan route laman admin dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'admin_dashboard'])->name('admin.dashboard');

    // dibawah ini kumpulan route laman admin produk
    Route::resource('/adminproduk', \App\Http\Controllers\ControllerAdminUserMutualism::class);

    // dibawah ini kumpulan route laman admin sipupuk
    Route::resource('admin/adminsipupuk', ControllerAdminSipupuk::class)->names([
        'index' => 'adminsipupuk.index',
        'create' => 'adminsipupuk.create',
        'store' => 'adminsipupuk.store',
        'show' => 'adminsipupuk.show',
        'edit' => 'adminsipupuk.edit',
        'update' => 'adminsipupuk.update',
        'destroy' => 'adminsipupuk.destroy'
    ]);

    // dibawah ini kumpulan route laman admin beranda
    Route::get('admin/adminberanda', [ControllerLamanBeranda::class, 'adminBeranda'])->name('admin_beranda.index');
    Route::put('admin/proses_beranda/{id}', [ControllerLamanBeranda::class, 'proses_edit'])->name('admin_beranda.update');

    // dibawah ini kumpulan route laman admin berita
    // route get index, untuk menampilkan data berita di laman admin berita
    Route::get('/admin/berita', [ControllerLamanAdminBerita::class, 'index'])->name('admin_berita.index');
    // route get buat_data, untuk menampilkan ke laman tambah berita
    Route::get('/admin/berita/buat_data', [ControllerLamanAdminBerita::class, 'buat_data'])->name('admin_berita.buat_data');
    // route post proses_buat_data, untuk melakukan eksekusi proses tambah data
    Route::post('/admin/berita/proses_buat_data', [ControllerLamanAdminBerita::class, 'proses_buat_data'])->name('admin_berita.proses_buat_data');
    // route get detail_data, untuk menampilkan ke laman detail data sesuai dengan id
    Route::get('/admin/berita/detail_data/{id_berita}', [ControllerLamanAdminBerita::class, 'detail_data'])->name('admin_berita.detail_data');
    // route get edit_data, untuk menampilkan ke laman edit data sesuai dengan id
    Route::get('/admin/berita/edit_data/{id_berita}', [ControllerLamanAdminBerita::class, 'edit_data'])->name('admin_berita.edit_data');
    // route put proses_edit_data, untuk melakukan eksekusi proses edit data sesuai dengan id
    Route::put('/admin/berita/proses_edit_data/{id_berita}', [ControllerLamanAdminBerita::class, 'proses_edit_data'])->name('admin_berita.proses_edit_data');
    // route delete hapus_data, untuk melakukan eksekusi proses hapus data sesuai dengan id
    Route::delete('/admin/berita/hapus_data/{id_berita}', [ControllerLamanAdminBerita::class, 'hapus_data'])->name('admin_berita.hapus_data');

    // dibawah ini kumpulan route laman admin ...
    Route::get('/admin/profile/edit', [ControllerProfilAdmin::class, 'edit'])->name('admin.profile.edit');
    Route::put('/admin/profile/update', [ControllerProfilAdmin::class, 'update'])->name('admin.profile.update');

    // dibawah ini untuk logout
    // route get logout untuk mengeksekusi proses logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});

//bagian java
Route::get('utility/form', [FormController::class, 'showForm'])->name('formprod');

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/profile', [DashboardController::class, 'showProfile'])->name('profil');
Route::get('/products', [DashboardController::class, 'showProducts'])->name('produk');
Route::get('/posts', [DashboardController::class, 'showPosts'])->name('postingan');
Route::get('/halaman}', [DashboardController::class, 'showPage'])->name('halaman');
