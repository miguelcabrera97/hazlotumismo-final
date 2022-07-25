<?php

use App\Http\Controllers\SitesController;
use App\Http\Controllers\UsersController;
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

