<?php

use App\Http\Controllers\Auth\RegisterAgentController;
use App\Http\Controllers\Auth\RegisterController;
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

//Route::post('/createUser', [RegisterController::class, 'create'])->name('create.user');
Route::post('crud', [RegisterAgentController::class, 'store'])->name('register.agent');
Route::get('/profile', function () {
    return view('admin.profile');
})->name('profile.me');
Route::get('/parametre', function () {
    return view('admin.parametre');
})->name('parametre');
Route::get('/historique', function () {
    return view('admin.historiqueConnection');
})->name('historique.connection');
Route::get('/transaction', function () {
    return view('admin.transaction');
})->name('historiques.transactions');
Route::get('/devise', function () {
    return view('admin.devise_par_caisse');
})->name('admin.devise.caisse');
Route::get('/deviseadd', function () {
    return view('admin.valeur_devises');
})->name('admin.nouvelle.devise');
Route::get('/role', function () {
    $User = User::find(2);
    $User->assignRole('caissier');
});
Route::get('/agent', [RegisterAgentController::class, 'index'])->name('admin.agent.view');
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
