<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartJSController;
use App\Http\Controllers\FileController;

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

//RUTAS PARA JALAR CRUD DE CLIENTE
Route::resource('clientes', ClienteController::class);

//RUTAS PARA JALAR CRUD DE FILE
Route::resource('files', FileController::class);

Auth::routes();

// RUTA DE INICIO DE SECION
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTA PARA GENERAR PDF
Route::get('miDomPDF', [PDFController::class, 'generatePDF']);

//RUTA PARA GENERAR EXCEL
Route::controller(Usercontroller::class)->group(function(){
    Route::get('users', 'index');
    Route::post('users-import', 'import')->name('users.import');
    Route::get('users-export', 'export')->name('users.export');
});


//RUTA PARA GENERAR FILE
// Route::get('upload', [FileController::class, 'upload']);
// Route::resource('upload', [FileController::class, 'upload']);
