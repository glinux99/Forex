<?php

use App\Http\Controllers\Admin\AgentController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/add-agent', [AgentController::class, 'index'])->name('agents.index');
    Route::post('/create-agent', [AgentController::class, 'store'])->name('create.agent');
    Route::get('/all-agent', [AgentController::class, 'all_agent'])->name('agents.all');
});
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', function () {
        return view('admin.admin');
    })->name('admin');
    Route::get('/profile', function () {
        return view('users.profile');
    })->name('profile');
    Route::get('/alter-profile', function () {
        return view('users.alter_profile');
    })->name('user.profile');
    Route::get('/update', function () {
        return view('users.alter_profile');
    })->name('update.profile');
    Route::get('/devise', function () {
        return view('devises.add_devise');
    })->name('add.devise');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
