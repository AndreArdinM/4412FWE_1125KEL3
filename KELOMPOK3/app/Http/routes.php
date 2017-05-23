<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route:: get('/login','Sesicontroller@form');
Route:: post('/login','Sesicontroller@validasi');
Route:: get('/logout','Sesicontroller@logout');
Route:: get('/','Sesicontroller@index');




Route::group(['middleware'=>'AutentikasiUser'],function(){
Route::get('nasabahC','nasabahControllerT@awal');
Route::get('nasabahC/tambah', 'nasabahControllerT@tambah');
Route::get('nasabahC/{nasabahC}', 'nasabahControllerT@lihat');
Route::post('nasabahC/simpan','nasabahControllerT@simpan');
Route::get('nasabahC/edit/{nasabahC}', 'nasabahControllerT@edit');
Route::post('nasabahC/edit/{nasabahC}','nasabahControllerT@update');
Route::get('nasabahC/hapus/{nasabahC}','nasabahControllerT@hapus');




Route::get('pengguna', 'PenggunaController@awal');
Route::get('pengguna/tambah', 'PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan', 'PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');


//Route::get('/home', 'HomeController@index');

Route::get('teller','TellerController@awal');
Route::get('teller/tambah', 'TellerController@tambah');
Route::get('teller/{teller}', 'TellerController@lihat');
Route::post('teller/simpan','TellerController@simpan');
Route::get('teller/edit/{teller}', 'TellerController@edit');
Route::post('teller/edit/{teller}','TellerController@update');
Route::get('teller/hapus/{teller}','TellerController@hapus');

Route::get('manajer','manajerController@awal');
Route::get('manajer/tambah', 'manajerController@tambah');
Route::get('manajer/{manajer}', 'manajerController@lihat');
Route::post('manajer/simpan','manajerController@simpan');
Route::get('manajer/edit/{manajer}', 'manajerController@edit');
Route::post('manajer/edit/{manajer}','manajerController@update');
Route::get('manajer/hapus/{manajer}','manajerController@hapus');


Route::get('paket','paketcontroller@awal');
Route::get('paket/tambah', 'paketcontroller@tambah');
Route::get('paket/{paket}', 'paketcontroller@lihat');
Route::post('paket/simpan','paketcontroller@simpan');
Route::get('paket/edit/{paket}', 'paketcontroller@edit');
Route::post('paket/edit/{paket}','paketcontroller@update');
Route::get('paket/hapus/{paket}','paketcontroller@hapus');


Route::get('nasabah','nasabahController@awal');
Route::get('nasabah/tambah', 'nasabahController@tambah');
Route::get('nasabah/{nasabah}', 'nasabahController@lihat');
Route::post('nasabah/simpan','nasabahController@simpan');
Route::get('nasabah/edit/{nasabah}', 'nasabahController@edit');
Route::post('nasabah/edit/{nasabah}','nasabahController@update');
Route::get('nasabah/hapus/{nasabah}','nasabahController@hapus');

Route::get('kategori','kategoriController@awal');
Route::get('kategori/tambah', 'kategoriController@tambah');
Route::get('kategori/{kategori}', 'kategoriController@lihat');
Route::post('kategori/simpan','kategoriController@simpan');
Route::get('kategori/edit/{kategori}', 'kategoriController@edit');
Route::post('kategori/edit/{kategori}','kategoriController@update');
Route::get('kategori/hapus/{kategori}','kategoriController@hapus');


Route::get('fitur','FiturController@awal');
Route::get('fitur/tambah', 'FiturController@tambah');
Route::get('fitur/{fitur}', 'FiturController@lihat');
Route::post('fitur/simpan','FiturController@simpan');
Route::get('fitur/edit/{fitur}', 'FiturController@edit');
Route::post('fitur/edit/{fitur}','FiturController@update');
Route::get('fitur/hapus/{fitur}','FiturController@hapus');


Route::get('kantorcabang','KantorCabangController@awal');
Route::get('kantorcabang/tambah', 'KantorCabangController@tambah');
Route::get('kantorcabang/{kantorcabang}', 'KantorCabangController@lihat');
Route::post('kantorcabang/simpan','kantorCabangController@simpan');
Route::get('kantorcabang/edit/{kantorcabang}', 'KantorCabangController@edit');
Route::post('kantorcabang/edit/{kantorcabang}','KantorCabangController@update');
Route::get('kantorcabang/hapus/{kantorcabang}','KantorCabangController@hapus');

});



Route::get('/berandatel', function () {
    return view('berandateller');
});

Route::get('/awal', function () {
    return view('awal.awal');
});

Route::get('/', function () {
    return view('masterr');
});




Route::get('/berandatel', function () {
    return view('berandatellerr');
});





// Route::get('/login','SesiController@form');
// Route::post('/login','SesiController@validasi');
// Route::get('/logout','SesiController@logout');
// Route::get('/','SesiController@index');
// Route::group(['middleware'=>'AutentikasiUser'],function(){



// });

Route::get('/home', 'HomeController@index');
