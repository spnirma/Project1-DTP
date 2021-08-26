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
    return view('welcome');
});

Route::get('index', function() {
    return view('index');
});

Route::get('ui-buttons', function() {
    return view('ui-buttons');
});

Route::get('ui-badges', function() {
    return view('ui-badges');
});

Route::get('ui-tabs', function() {
    return view('ui-tabs');
});

Route::get('ui-social buttons', function() {
    return view('ui-socialbuttons');
});

Route::get('ui-cards', function() {
    return view('ui-cards');
});

Route::get('ui-alerts', function() {
    return view('ui-alerts');
});

Route::get('ui-progress bars', function() {
    return view('ui-progressbars');
});

Route::get('ui-modals', function() {
    return view('ui-modals');
});

Route::get('ui-switches', function() {
    return view('ui-switches');
});

Route::get('ui-grids', function() {
    return view('ui-grids');
});

Route::get('ui-typography', function() {
    return view('ui-typography');
});

Route::get('tabels-basic', function() {
    return view('tabels-basic');
});

Route::get('tables-data', function() {
    return view('tabels-data');
});

Route::get('forms-basic', function() {
    return view('forms-basic');
});

Route::get('forms-advanced', function() {
    return view('forms-advance');
});

Route::get('font-fontawesome', function() {
    return view('font-fontawesome');
});

Route::get('font-themify', function() {
    return view('font-themify');
});

Route::get('widgets', function() {
    return view('widgets');
});

Route::get('charts-chartjs', function() {
    return view('charts-chartjs');
});

Route::get('charts-flot', function() {
    return view('charts-flot');
});

Route::get('charts-peity', function() {
    return view('charts-peity');
});

Route::get('maps-gmap', function() {
    return view('maps-gmap');
});

Route::get('maps-vector', function() {
    return view('maps-vector');
});

Route::get('page-login', function() {
    return view('page-login');
});

Route::get('page-register', function() {
    return view('page-register');
});

Route::get('page-forgetpass', function() {
    return view('page-forgetpass');
});

