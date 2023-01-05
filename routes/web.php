<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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






// Route::get('set-locale/{locale}', function($locale){
//     App::setLocale($locale); 
//     session()->put('locale',$locale);
//     return redirect()->back();  
// })->middleware('check.locale')->name('locale.setting');




// Route::get('greetion/{locale}', function($locale){
//     if(!in_array($locale,['en','ar','ru'])){
//         abort(400);
//     }
//     App::setLocale($locale);
// });



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/frontEnd', function () {
            return view('frontEnd');
        });
        Route::get('/backEnd', function(){
            return view('backEnd');
        });
        Route::get('/theme1', function(){
            return view('theme1');
        });
        Auth::routes();
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });