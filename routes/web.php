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


Route::get('/', function (\App\Repositories\PhotoRepository $repo) {
    $repo->getAll();
    return view('default', ['photos' => $repo->getAll()]);
});
