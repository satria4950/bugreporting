<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BugReportingController;
use App\Http\Controllers\BugReportingUserController;
use App\Http\Controllers\BugReportingAdminController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/bugreportadmin', BugReportingAdminController::class)->except('edit','update','destroy','show')->middleware('admin');

Route::get('/dashboard/bugreportadmin/{slug}', [BugReportingAdminController::class, 'show'])->middleware('admin');

Route::delete('/dashboard/bugreportadmin/{bug_reportings:slug}', [BugReportingAdminController::class, 'destroy'])->middleware('admin');

Route::get('/dashboard/bugreportadmin/{bug_reportings:slug}/edit', [BugReportingAdminController::class, 'edit'])->middleware('admin');

Route::put('/dashboard/bugreportadmin/{bug_reportings:slug}', [BugReportingAdminController::class, 'update'])->middleware('admin');

Route::get('/dashboard/bugreportcategorybug', [BugReportingAdminController::class, 'categorybug'])->middleware('admin');

Route::get('/dashboard/bugreportcategoryrequest', [BugReportingAdminController::class,'categoryrequest'])->middleware('admin');

Route::resource('/dashboard/bugreportuser', BugReportingUserController::class)->middleware('!admin');
