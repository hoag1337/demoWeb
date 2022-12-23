<?php

use App\Http\Controllers\CategoryCtrl;
use App\Http\Controllers\HomeCtrl;
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
    return view('mainpage.index');
});

Route::get('/admin1', function () {
    return view('admin.dashboard');
});
Route::get(['/register' =>  HomeCtrl::class]);
// route::get('/register', function () {
//     return view('auth.register');
// });
Route::resources(['/admin1/category' => CategoryCtrl::class] );
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});