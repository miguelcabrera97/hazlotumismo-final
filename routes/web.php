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

//Ruta a Crontolador para mostrar Plantillas Disponibles
Route::get('/crearsitio', [SitesController::class,'show'])->name('crearsitio'); 

//Ruta para mostrar Sitios que el Usuario a Creado
Route::get('/sitios/{user}', function($user){
        //Mostrar Sitios que el Usuario a creado
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.duda.co/api/accounts/grant-access/'.$user.'/sites/multiscreen', [
        'headers' => [
            'Accept' => 'application/json',
            'Authorization' => 'Basic MTczMDA3ZDhlNTpUUWU5Wm5WeDB2dE4=',
        ],
        ]);
        
        $sitios= json_decode($response->getBody()->getContents());
        return view('sitios', compact('sitios'));
});

//Ruta a Controlador para crear sitio
Route::post('/crear',[SitesController::class, 'crear'])->name('crear');

//Ruta a Controlador para resetear el sitio
Route::post('/resetear',[SitesController::class,'reset'])->name('resetear');

Route::get('/users',[UsersController::class,'index']);

Route::get('/sites',[UsersController::class,'show']);

Route::get('/editar/{cuenta}/{id}',[SitesController::class, 'editar']);

Route::get('/delete/{site}/{id}',[SitesController::class,'delete']);

Route::post('/Mxn-Anual', [PagoStripeController::class, 'PagarMxnAnual'] )->name("Mxn-Anual");
Route::post('/Mxn-Mensual', [PagoStripeController::class, 'PagarMxnMensual'] )->name("Mxn-Mensual");
Route::post('/USD-Anual', [PagoStripeController::class, 'PagarUsdAnual'] )->name("USD-Anual");
Route::post('/USD-Mensual', [PagoStripeController::class, 'PagarUsdMensual'] )->name("USD-Mensual");
Route::post('/EUR-Anual', [PagoStripeController::class, 'PagarEurAnual'] )->name("EUR-Anual");
Route::post('/EUR-Mensual', [PagoStripeController::class, 'PagarEurMensual'] )->name("EUR-Mensual");
Route::post('/COP-Anual', [PagoStripeController::class, 'PagarCopAnual'] )->name("COP-Anual");
Route::post('/COP-Mensual', [PagoStripeController::class, 'PagarCopMensual'] )->name("COP-Mensual");
Route::post('/CLP-Anual', [PagoStripeController::class, 'PagarClpAnual'] )->name("CLP-Anual");
Route::post('/CLP-Mensual', [PagoStripeController::class, 'PagarClpMensual'] )->name("CLP-Mensual");
Route::post('/SOL-Anual', [PagoStripeController::class, 'PagarSolAnual'] )->name("SOL-Anual");
Route::post('/SOL-Mensual', [PagoStripeController::class, 'PagarSolMensual'] )->name("SOL-Mensual");