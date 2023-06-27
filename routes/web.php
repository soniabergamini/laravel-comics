<?php

use Illuminate\Support\Facades\Route;

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
    // Header Data
    $navItems = config('store.navItems');

    // Content Data
    $slides = config('comics');

    // Footer Data
    $dcItems = config('store.dcItems');
    $sitesItems = config('store.sitesItems');
    $socialLinks = config('store.socialLinks');
    $footerArray = array('dcItems' => $dcItems, 'sitesItems' => $sitesItems, 'socialLinks' => $socialLinks);

    return view('welcome', compact('navItems'), compact('footerArray'))->with(compact('slides'));
});

Route::get('/otherpage', function () {
    $links = config('store.someLinks');
    return view('other', compact('links'));
});
