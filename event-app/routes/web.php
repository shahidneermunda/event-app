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

/* Public Routes Begins */

Route::get('/', [App\Http\Controllers\PublicController::class, 'index']);
Route::get('/searchfilter', [App\Http\Controllers\PublicController::class, 'searchfilter']);
Route::get('/searchdate', [App\Http\Controllers\PublicController::class, 'searchdate']);
Route::get('/event_count', [App\Http\Controllers\PublicController::class, 'eventcount']);

/* Public Routes Ens */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){

    Route::get('/create_event', function () {
        return view('createevent');
    });

    Route::controller(\App\Http\Controllers\EventController::class)->group(function(){
        Route::post('events', 'store')->name('events.store');
        Route::post('invite', 'invite')->name('events.invite');
        Route::delete('delinvite/{id}', 'deleteInvitation')->name('events.delinvite');
        Route::get('invite/{id}', 'show');
    });

});
