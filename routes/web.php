<?php
use App\Http\Controllers\AboutController;

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

Route::get('gallery/images/{filename}', function ($filename) {
    $path = storage_path('picture/gallery/images') . '/' . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file);
    $response->header("Content-Type", $type);
    return $response;
});
Route::get('attorney/images/{filename}', function ($filename) {
    $path = storage_path('picture/attorney/images') . '/' . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file);
    $response->header("Content-Type", $type);
    return $response;
});
Route::get('about/images/{filename}', function ($filename) {
    $path = storage_path('picture/about/images') . '/' . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file);
    $response->header("Content-Type", $type);
    return $response;
});
Route::get('dk/images/{filename}', function ($filename) {
    $path = storage_path('picture/dk/images') . '/' . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file);
    $response->header("Content-Type", $type);
    return $response;
});
Route::get('license/images/{filename}', function ($filename) {
    $path = storage_path('picture/license/images') . '/' . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file);
    $response->header("Content-Type", $type);
    return $response;
});

Route::get('/', 'AboutController@getcount');
Route::get('pelayanan', function () {
    return view('service');
});
Route::get('dk', 'AboutController@dk');
Route::get('galeri', 'AboutController@gallery');
Route::get('tentang', 'AboutController@rate');
Route::get('kontak', function () {
    return view('contact');
});

Route::get('zraw-&&&-admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('zraw-&&&-admin/login', 'Auth\LoginController@login');
Route::post('zraw-&&&-admin/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('ulasan/store', 'RateController@store');

Auth::routes();

Route::get('zraw-&&&-admin', 'HomeController@index');

Route::group(['prefix' => 'zraw-&&&-admin'], function () {
    //Gallery
    Route::get('/gallery', 'GalleryController@index');
    Route::get('/gallery/create', 'GalleryController@create');
    Route::post('/gallery/store', 'GalleryController@store');
    Route::get('/gallery/destroy/{id}', 'GalleryController@destroy');

    //License
    Route::get('/license', 'LicenseController@index');
    Route::get('/license/create', 'LicenseController@create');
    Route::post('/license/store', 'LicenseController@store');
    Route::get('/license/destroy/{id}', 'LicenseController@destroy');

    //About
    Route::get('/about', 'AboutController@index');
    Route::post('/about/update/{id}', 'AboutController@update');

    //Footer
    Route::get('/footer', 'FooterController@index');
    Route::post('/footer/update/{id}', 'FooterController@update');

    //contact
    Route::get('/contact', 'ContactController@index');
    Route::post('/contact/update/{id}', 'ContactController@update');

    //ulasan
    Route::get('/rate', 'RateController@index');
    Route::post('/rate/destroy/{id}', 'RateController@destroy')->name('rate.destroy');

    //Service
    Route::get('/service', 'ServiceController@index');
    Route::get('/service/create', 'ServiceController@create');
    Route::post('/service/store', 'ServiceController@store');
    Route::get('/service/edit/{id}', 'ServiceController@edit');
    Route::post('/service/update', 'ServiceController@update');
    Route::get('/service/destroy/{id}', 'ServiceController@destroy');

    //Attorney
    Route::get('/attorney', 'AttorneyController@index');
    Route::get('/attorney/create', 'AttorneyController@create');
    Route::post('/attorney/store', 'AttorneyController@store');
    Route::get('/attorney/edit/{id}', 'AttorneyController@edit');
    Route::post('/attorney/update', 'AttorneyController@update');
    Route::get('/attorney/destroy/{id}', 'AttorneyController@destroy');

    //DK
    Route::get('/dk', 'DaftarKasusController@index');
    Route::get('/dk/create', 'DaftarKasusController@create');
    Route::post('/dk/store', 'DaftarKasusController@store');
    Route::get('/dk/edit/{id}', 'DaftarKasusController@edit');
    Route::post('/dk/update', 'DaftarKasusController@update');
    Route::get('/dk/destroy/{id}', 'DaftarKasusController@destroy');
});
