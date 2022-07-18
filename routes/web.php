<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/berita', [UserController::class, 'viewBerita'])->name('viewBerita');
Route::get('/berita/{slug}', [UserController::class, 'showBerita'])->name('showBerita');

Route::get('/tentang', function () {
    return view('about');
});

Route::get('/galeri', [UserController::class, 'viewGallery'])->name('viewGaleri');


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
Route::get('/kontak', [MailController::class, 'index'])->name('kontak'); // Menampilkan View Kontak
Route::post('kontak/kirim', [MailController::class, 'store'])->name('mailbox.tambah'); // Melakukan Eksekusi untuk Mengirim Email
Route::get('/admin/mail', [AdminController::class, 'viewMail'])->name('mailbox'); // Menampilkan Tampilan untuk Mailbox
Route::post('/admin/mail/delete/{id}', [MailController::class, 'destroy'])->name('mailbox.delete'); // Melakukan Eksekusi untuk menghapus data mailbox
Route::get('admin/mail/search', [MailController::class, 'search'])->name('mailbox.search'); // Melakukan eksekusi untuk mencari data email di mailbox

// Fitur Admin Bagian Galeri
Route::get('/admin/galeri', [AdminController::class, 'viewGaleri'])->name('galeri');
Route::post('/admin/galeri/tambah', [AdminController::class, 'storeGaleri'])->name('galeri.tambah');


// Fitur Admin Bagian contact
Route::get('/admin/contact', [AdminController::class, 'viewContact'])->name('contact');
Route::post('/admin/contact/{id}', [AdminController::class, 'storeContact'])->name('editContact');

