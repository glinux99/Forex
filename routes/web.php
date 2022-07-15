<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//A effacer

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

//A effacer
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

Route::get('/role', function () {
    $User = User::find(2);
    $User->assignRole('caissier');
});
Route::get('/agent', function () {
    return view('admin.add_agent');
})->name('admin.agent.view');
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin')->middleware('auth');
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/test', function () {
    return view('test');
});
Route::get('/index', function () {
    return redirect(url('/#About'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
