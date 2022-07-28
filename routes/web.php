<?php

use App\Http\Controllers\SitesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagoStripeController;
use Illuminate\Support\Facades\Route;


Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group(function(){
    Route::get('/', function () {
        return view('dashboard');
    })->name('home');
});


//Sitios
Route::controller(SitesController::class)->group(function (){

    //Ruta a Crontolador para mostrar Plantillas Disponibles
    Route::get('/crearsitio','show')->name('crearsitio'); 

    //Ruta para mostrar Sitios que el Usuario a Creado por medio de API
    // Route::get('/sitios/{user}',[SitesController::class, 'sitios'])->name('sitios');

    //Ruta a Controlador para crear sitio
    Route::post('/crear','crear')->name('crear');

    //Ruta a Controlador para resetear el sitio
    Route::post('/resetear','reset')->name('resetear');

    Route::get('/editar/{cuenta}/{id}','editar');

    Route::get('/delete/{site}/{id}','delete');
});

//Usuarios registrados en el sistema **Solo administrador**
Route::get('/users',[UsersController::class,'index']);

//Lista de Sitios por consulta a BD
Route::get('/sites',[UsersController::class,'show']);


//Pagos Stripe

Route::controller(PagoStripeController::class)->group(function (){
    Route::post('/Mxn-Anual','PagarMxnAnual')->     name("Mxn-Anual");
    Route::post('/Mxn-Mensual','PagarMxnMensual')-> name("Mxn-Mensual");
    Route::post('/USD-Anual','PagarUsdAnual')->     name("USD-Anual");
    Route::post('/USD-Mensual','PagarUsdMensual')-> name("USD-Mensual");
    Route::post('/EUR-Anual','PagarEurAnual')->     name("EUR-Anual");
    Route::post('/EUR-Mensual','PagarEurMensual')-> name("EUR-Mensual");
    Route::post('/COP-Anual','PagarCopAnual')->     name("COP-Anual");
    Route::post('/COP-Mensual','PagarCopMensual')-> name("COP-Mensual");
    Route::post('/CLP-Anual','PagarClpAnual')->     name("CLP-Anual");
    Route::post('/CLP-Mensual','PagarClpMensual')-> name("CLP-Mensual");
    Route::post('/SOL-Anual','PagarSolAnual')->     name("SOL-Anual");
    Route::post('/SOL-Mensual','PagarSolMensual')-> name("SOL-Mensual");
});

