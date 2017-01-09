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

/**
 * Zmienna "photos" jest automatycznie dodawana do widoku includes.gallery_blueimp
 *  przez ComposerServiceProvider => PhotoComposer
 */
Route::get('/', function () {
    return view('default');
});
