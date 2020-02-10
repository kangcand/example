<?php

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
    return view('welcome');
});

Route::get('profil', 'ContohController@latihan2');
Route::get('profil2', 'ContohController@latihan3');
Route::get('profil3', 'ContohController@latihan4');
Route::get('biodata', 'ContohController@bio');

Route::get('menu/{mkn?}', 'ContohController@menu');
Route::get('pesan/{mkn?}/{minum?}/{harga?}', 'ContohController@pesan');

// CRUD buku
Route::get('get-buku', 'BukuController@index');
Route::get('create-buku/{judul}', 'BukuController@buat_data');
Route::get('get-buku/{id}', 'BukuController@show');
Route::get('delete-buku/{id}', 'BukuController@delete');
Route::get('update-buku/{id}/{judul}', 'BukuController@update');

Route::get('hitung-buku', 'BukuController@hitungbuku');


// passing Data
Route::get('passing', 'PracticeController@pass');
Route::get('passing1', 'PracticeController@pass1');
Route::get('status/{a?}', 'PracticeController@status');
Route::get('buku', 'PracticeController@loop');


// Book
Route::get('book', 'BukuController@index');
Route::get('book/{id}', 'BukuController@show');

// Belajaar Blade Templating
Route::get('/profil', function () {
    return view('profil');
});

Route::get('/alamat', function () {
    return view('kontak');
});

// Relasi
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;

Route::get('relasi-1', function () {
    # Mencari mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();
    # menampilkan nama wali dari mahasiswa
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function () {
    # Mencari data mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();
    # Menampilkan nama dosen pembimbing dari Mahasiswa
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function () {
    # Mencari data dosen yang bernama Yulianto
    $dosen = Dosen::where('nama', '=', 'Abdul Musthafa')->first();
    // dd($dosen)
    # Tampilkan seluruh data mahasiswa didikan Dosen
    foreach ($dosen->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama .
          ' <strong>' . $temp->nim . '</strong></li>';
    }
});

Route::get('relasi-4', function () {

  # Mencari data Mahasiswa yang bernama Noviyanto Rachmadi
    $novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')
                      ->first();
    # Menampilkan seluruh hobi si novay
    foreach ($novay->hobi as $temp) {
        echo '<li>' . $temp->hobi . '</li>';
    }
});

Route::get('relasi-5', function () {

  # Mencari data hobi yang bernama Mandi Hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();
    # Menampilkan semua mahasiswa yang punya hobi mandi hujan
    foreach ($mandi_hujan->mahasiswa as $temp) {
        echo '<li> Nama : ' . $temp->nama .
          ' <strong>' . $temp->nim . '</strong></li>';
    }
});


Route::get('eloquent', function () {
    $data = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
    return view('eloquent', compact('data'));
});
