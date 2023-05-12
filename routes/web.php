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

Route::get('/register', 'RegisterController@index');
Route::post('register/prosesregister', 'RegisterController@prosesregister');
Route::get('/', 'LoginController@index');
Route::post('/proseslogin', 'LoginController@proseslogin');
Route::get('/logout', 'LoginController@proseslogout');
Route::get('/home', 'LoginController@home');
Route::get('/tambahpengumuman', 'PengumumanController@index');
Route::post('/tambahpengumuman/prosestambahpengumuman', 'PengumumanController@prosestambahpengumuman');
Route::get('/daftarpengumuman', 'PengumumanController@lihatpengumuman');
Route::get('/pilihangkatan', 'PengumumanController@pilihangkatan');
Route::get('/caripengumuman', 'PengumumanController@caripengumuman');
Route::get('/editpengumuman/{id}', 'PengumumanController@editpengumuman');
Route::post('/prosesubahpengumuman/{id}', 'PengumumanController@prosesubahpengumuman');
Route::get('/hapuspengumuman/{id}', 'PengumumanController@proseshapuspengumuman');
Route::get('/tambahdokumen', 'DokumenController@index');
Route::post('/tambahdokumen/prosestambahdokumen', 'DokumenController@prosestambahdokumen');
Route::get('/daftardokumen', 'DokumenController@lihatdokumen');
Route::get('/pilihtahundokumen', 'DokumenController@pilihtahundokumen');
Route::get('/caridokumen', 'DokumenController@caridokumen');
Route::get('/editdokumen/{id}', 'DokumenController@editdokumen');
Route::post('/prosesubahdokumen/{id}', 'DokumenController@prosesubahdokumen');
Route::get('/hapusdokumen/{id}', 'DokumenController@proseshapusdokumen');
Route::get('/tambahmahasiswa', 'MahasiswaController@index');
Route::post('/tambahmahasiswa/prosestambahmahasiswa', 'MahasiswaController@prosestambahmahasiswa');
Route::get('/daftarmahasiswa', 'MahasiswaController@lihatmahasiswa');
Route::get('/pilihangkatandua', 'MahasiswaController@pilihangkatandua');
Route::get('/carimahasiswa', 'MahasiswaController@carimahasiswa');
Route::get('/editmahasiswa/{id}', 'MahasiswaController@editmahasiswa');
Route::post('/prosesubahmahasiswa/{id}', 'MahasiswaController@prosesubahmahasiswa');
Route::get('/hapusmahasiswa/{id}', 'MahasiswaController@proseshapusmahasiswa');
Route::post('/hapusmahasiswa', 'MahasiswaController@proseshapusmahasiswa');
Route::get('/tambahdosen', 'DosenController@index');
Route::post('tambahdosen/prosestambahdosen', 'DosenController@prosestambahdosen');
Route::get('/daftardosen', 'DosenController@lihatdosen');
Route::get('/pilihpendidikanterakhir', 'DosenController@pilihpendidikanterakhir');
Route::get('/caridosen', 'DosenController@caridosen');
Route::get('/editdosen/{id}', 'DosenController@editdosen');
Route::post('/prosesubahdosen/{id}', 'DosenController@prosesubahdosen');
Route::get('/hapusdosen/{id}', 'DosenController@proseshapusdosen');
Route::get('/jumlahaksesbilitas', 'AksesbilitasController@jumlahaksesbilitas');

/*Bagian Mahasiswa*/
Route::get('/loginmahasiswa', 'LoginMahasiswaController@index');
Route::post('/prosesloginmahasiswa', 'LoginMahasiswaController@prosesloginmahasiswa');
Route::get('/logoutmahasiswa', 'LoginMahasiswaController@logoutmahasiswa');
Route::get('/homemahasiswa', 'LinkMobileController@homemahasiswa');
Route::get('/notifikasimahasiswa', 'NotifikasiMahasiswaController@notifikasipengumuman');
Route::get('/profilmahasiswa', 'LinkMobileController@profilmahasiswa');
Route::get('/pengaturanmahasiswa', 'LinkMobileController@pengaturanmahasiswa');
Route::get('/tampilkanpengumuman', 'TampilkanPengumumanController@lihatpengumuman');
Route::get('/tampilkandokumen', 'TampilkanDokumenController@lihatdokumen');
Route::get('/tampilkanmahasiswa', 'TampilkanMahasiswaController@lihatmahasiswa');
Route::get('/detailmahasiswa/{id}', 'TampilkanMahasiswaController@detailmahasiswa');
Route::get('/tampilkandosen', 'TampilkanDosenController@lihatdosen');
Route::get('/detaildosen/{id}', 'TampilkanDosenController@detaildosen');
Route::get('/tampilkanstaff', 'TampilkanStaffController@lihatstaff');
Route::get('/detailstaff/{id}', 'TampilkanStaffController@detailstaff');
Route::get('/pilihangkatanandroid', 'TampilkanPengumumanController@pilihangkatanandroid');
Route::get('/caripengumumanandroid', 'TampilkanPengumumanController@caripengumumanandroid');
Route::get('/pilihtahundokumenandroid', 'TampilkanDokumenController@pilihtahundokumenandroid');
Route::get('/caridokumenandroid', 'TampilkanDokumenController@caridokumenandroid');
Route::get('/pilihangkatanmahasiswaandroid', 'TampilkanMahasiswaController@pilihangkatanmahasiswaandroid');
Route::get('/carimahasiswaandroid', 'TampilkanMahasiswaController@carimahasiswaandroid');
Route::get('/pilihpendidikanterakhirandroid', 'TampilkanDosenController@pilihpendidikanterakhirandroid');
Route::get('/caridosenandroid', 'TampilkanDosenController@caridosenandroid');
Route::get('/pilihjabatanandroid', 'TampilkanStaffController@pilihjabatanandroid');
Route::get('/caristaffandroid', 'TampilkanStaffController@caristaffandroid');
Route::get('/kebijakanprivasi', 'LinkMobileController@kebijakanprivasi');
