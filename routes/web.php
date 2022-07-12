<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// Front-end Tropisianimal
Route::get('/', function () {
    return view('index');
});

Route::get('/tentang', function () {
    return view('about');
});

Route::get('/galeri', function () {
    return view('gallery');
});

Route::get('/berita', function () {
    return view('news');
});


// Back-end Tropisianimal

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();
// Dashboard Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboardAdmin'])->name('dashboard');

// Fitur Admin Bagian Berita
Route::get('/admin/berita', [AdminController::class, 'index'])->name('dataBerita'); // Menampilkan Data Berita yang ada di Database
Route::get('/admin/berita/tambah', [AdminController::class, 'create'])->name('tambahBerita'); // Menampilkan Halaman untuk Menambah Berita Baru
Route::post('/admin/berita/tambah', [AdminController::class, 'store'])->name('tambahBeritaBaru'); // Melakukan Eksekusi untuk menambah berita baru
Route::get('/admin/berita/edit/{id}', [AdminController::class, 'edit'])->name('viewEditBerita');// Menampilkan halaman untuk mengedit berita
Route::post('/admin/berita/edit/{id}', [AdminController::class, 'update'])->name('editBerita');// Menampilkan halaman untuk mengedit berita
Route::post('/admin/berita/delete/{id}', [AdminController::class, 'destroy'])->name('deleteBerita'); // Melakukan Eksekusi untuk menghapus berita
Route::get('/admin/berita/search', [AdminController::class, 'search'])->name('cari'); // Melakukan Eksekusi Pencarian


// Fitur Admin Bagian Mailbox
Route::get('/kontak', [MailController::class, 'index'])->name('kontak'); // Melakukan Eksekusi View
Route::post('kontak/kirim', [MailController::class, 'store'])->name('mailbox.tambah');
Route::get('/admin/mail', [AdminController::class, 'viewMail'])->name('mailbox');
Route::post('/admin/mail/delete/{id}', [MailController::class, 'destroy'])->name('mailbox.delete');
Route::get('admin/mail/search', [MailController::class, 'search'])->name('mailbox.search');
