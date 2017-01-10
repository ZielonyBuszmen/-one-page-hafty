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
Route::get('/', function (\Illuminate\Http\Request $request) {

    $lang = $request->session()->get('lang', 'pl');
    App::setLocale($lang);

    $lang_array = [
        [
            'url' => 'locale/pl',
            'flag' => 'img/lang/pl.jpg'
        ],
        [
            'url' => 'locale/en',
            'flag' => 'img/lang/en.jpg'
        ],
        [
            'url' => 'locale/es',
            'flag' => 'img/lang/es.jpg'
        ]
    ];

    return view('default', ['lang_array' => $lang_array]);

});

Route::get('/locale/{locale}', function ($locale, \Illuminate\Http\Request $request) {
    App::setLocale($locale);
    $request->session()->put('lang', $locale);
    return redirect("/");
})->where("locale", "(pl|en|es)");

