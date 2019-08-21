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
    return view('pages.dashboard');
});

// master_data
Route::get('/urusan', function () {
    return view('pages.master_data.urusan');
});
Route::get('/bidang', function () {
    return view('pages.master_data.bidang');
});
Route::get('/unit', function () {
    return view('pages.master_data.unit');
});
Route::get('/subunit', function () {
    return view('pages.master_data.subunit');
});
Route::get('/program', function () {
    return view('pages.master_data.program');
});
Route::get('/kegiatan', function () {
    return view('pages.master_data.kegiatan');
});

// kinerja_keuangan
Route::get('/kinerja', function () {
    return view('pages.kinerja_keuangan.kinerja');
});
Route::get('/keuangan', function () {
    return view('pages.kinerja_keuangan.keuangan');
});

// musrenbang_reses
Route::get('/kamus_usulan', function () {
    return view('pages.musrenbang_reses.kamus_usulan');
});
Route::get('/musrenbang', function () {
    return view('pages.musrenbang_reses.musrenbang');
});
Route::get('/reses', function () {
    return view('pages.musrenbang_reses.reses');
});

// laporan
Route::get('/monev', function () {
    return view('pages.laporan.monev');
});

// pengaturan
Route::get('/user', function () {
    return view('pages.pengaturan.pengaturan_user');
});
Route::get('/tahapan', function () {
    return view('pages.pengaturan.pengaturan_tahapan');
});
Route::get('/halaman', function () {
    return view('pages.pengaturan.pengaturan_halaman');
});