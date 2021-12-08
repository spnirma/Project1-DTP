<?php

use App\Http\Controllers\admincontroller;
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

Route::get('Addproduct',[admincontroller::class,'Addproduct']);
Route::get('alogin',[admincontroller::class,'alogin']);
Route::get('buy',[admincontroller::class,'buy']);
Route::get('contactFrom',[admincontroller::class,'contactFrom']);
Route::get('/',[admincontroller::class,'dashboard']);
Route::get('desc',[admincontroller::class,'desc']);
Route::get('edittitle',[admincontroller::class,'edittitle']);
Route::get('FAQ',[admincontroller::class,'FAQ']);
Route::get('FF',[admincontroller::class,'FF']);
Route::get('footerHP',[admincontroller::class,'footerHP']);
Route::get('footerHP2',[admincontroller::class,'footerHP2']);
Route::get('footerHP3',[admincontroller::class,'footerHP3']);
Route::get('hlogin',[admincontroller::class,'hlogin']);
Route::get('homepage',[admincontroller::class,'homepage']);
Route::get('login',[admincontroller::class,'login']);
Route::get('ML',[admincontroller::class,'ML']);
Route::get('namamerchant',[admincontroller::class,'namamerchant']);
Route::get('namamerchant2',[admincontroller::class,'namamerchant2']);
Route::get('namamerchant3',[admincontroller::class,'namamerchant3']);
Route::get('payment',[admincontroller::class,'payment']);
Route::get('profil',[admincontroller::class,'profil']);
Route::get('PUBG',[admincontroller::class,'PUBG']);
Route::get('rediscache',[admincontroller::class,'rediscache']);
Route::get('resetindex1',[admincontroller::class,'resetindex1']);
Route::get('resetindex2',[admincontroller::class,'resetindex2']);
Route::get('resetindex2',[admincontroller::class,'resetindex3']);
Route::get('setting',[admincontroller::class,'setting']);
Route::get('settingproduct',[admincontroller::class,'settingproduct']);
Route::get('settingproduct2',[admincontroller::class,'settingproduct2']);
Route::get('settingproduct3',[admincontroller::class,'settingproduct3']);
Route::get('statusfeedback',[admincontroller::class,'statusfeedback']);
Route::get('testimoni',[admincontroller::class,'testimoni']);
Route::get('uvmerchant',[admincontroller::class,'uvmerchant']);
Route::get('vmerchant',[admincontroller::class,'vmerchant']);