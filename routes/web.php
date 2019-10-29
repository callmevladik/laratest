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
$mock = json_decode(json_encode(config('mock')), FALSE);
Route::get('/', function () use($mock) {
    return view('welcome',[
        'mock'=> $mock,
    ]);
});
Route::get('/catalog', function () use($mock) {
    return view('pages.catalog',[
        'mock'=> $mock,
    ]);
});
Route::get('/stocks', function () use($mock) {
    return view('pages.stocks',[
        'mock'=> $mock,
    ]);
});
Route::get('/about-us', function () use($mock) {
    return view('pages.about',[
        'mock'=> $mock,
    ]);
});
Route::get('/contacts', function () use($mock) {
    return view('pages.contacts',[
        'mock'=> $mock,
    ]);
});