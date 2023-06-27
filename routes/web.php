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
    // Footer Data
    $dcItems = config('store.dcItems');
    $sitesItems = config('store.sitesItems');
    $socialLinks = config('store.socialLinks');
    $footerArray = array('dcItems' => $dcItems, 'sitesItems' => $sitesItems, 'socialLinks' => $socialLinks);
    // Content Data
    $links = config('store.someLinks');
    return view('welcome', compact('navItems'), compact('footerArray'));
});

Route::get('/otherpage', function () {
    $links = config('store.someLinks');
    return view('other', compact('links'));
});
