<?php

use App\Http\Controllers\AutoridadController;
use App\Http\Controllers\CarpetaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EstaticasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuejasSugerenciasController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TipoDocumentoController;
use App\Models\TipoDocumento;
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
    return view('welcome');
})->name('welcome');


Route::get('/descargar-archivo/{id}',[EstaticasController::class,'descargarArchivo'])->name('descargarArchivo');
Route::get('/tramites',[EstaticasController::class,'tramites'])->name('tramites');
Route::get('/transparencia/{id}',[EstaticasController::class,'carpeta'])->name('transparencia');
Route::get('/rendicion-de-cuentas/{id}',[EstaticasController::class,'carpeta'])->name('rendicionCuentas');
Route::get('/quejas-y-sugerencias',[EstaticasController::class,'quejasSugerencias'])->name('quejasSugerencias');
Route::get('/quejas-y-sugerencias/ingresar',[EstaticasController::class,'quejasSugerenciasIngresar'])->name('quejasSugerenciasIngresar');
Route::get('/quejas-y-sugerencias/consultar',[EstaticasController::class,'quejasSugerenciasConsultar'])->name('quejasSugerenciasConsultar');
Route::post('/enviar-queja-sugerencia',[EstaticasController::class,'enviarQuejaSugerencia'])->name('enviarQuejaSugerencia');
Route::get('/noticias',[EstaticasController::class,'noticias'])->name('noticias');




Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // sliders
    Route::resource('slider', SliderController::class);
    Route::resource('autoridad', AutoridadController::class);
    
    Route::resource('carpetas', CarpetaController::class);
    Route::post('guardarArchivo', [CarpetaController::class,'guardarArchivo'])->name('guardarArchivo');
    Route::get('eliminarArchivo/{id}', [CarpetaController::class,'eliminarArchivo'])->name('eliminarArchivo');
    Route::get('admin-quejas-sugerencias', [QuejasSugerenciasController::class,'index'])->name('admin.quejasSugerencias');
    Route::get('admin-quejas-sugerencias/ver/{id}', [QuejasSugerenciasController::class,'ver'])->name('admin.quejasSugerenciasVer');

});

require __DIR__.'/auth.php';
