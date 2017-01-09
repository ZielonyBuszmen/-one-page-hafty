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


function getPhotosDir()
{
    return './img/hafty/';
}

function getThumbDir()
{
    return './img/miniaturki/';
}

function getPhotos()
{
    $dir = getPhotosDir();
    $result = [];
    foreach (scandir($dir) as $file) {
        if ($file != '.' && $file != '..') {
            $result[] = $file;
        }
    }
    return $result;
}



Route::get('/', function () {
    return view('default', ['photos' => getPhotos(), 'photo_dir' => getPhotosDir(), 'thumb_dir' => getThumbDir()]);
});
