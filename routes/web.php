<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/login', function () {
    return view('auth.index');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->name('dashboard');

Route::get('/category', function () {
    return view('backend.category');
})->name('category');

Route::get('/activity', function () {
    return view('backend.activity');
})->name('activity');

Route::get('/administrator', function () {
    return view('backend.administrator');
})->name('administrator');

/*Route Storage*/
Route::get('files/{filename}', function ($filename) {
    $path = storage_path('app/public/'.$filename);
    if (!File::exists($path)){
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('storage');
