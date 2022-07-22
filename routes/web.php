<?php

use App\Http\Controllers\SitesController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('home');
});

Route::get('/crearsitio', [SitesController::class,'show'])->name('crearsitio');

Route::get('/sitios/{user}', function($user){
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

Route::post('/crear',[SitesController::class, 'crear'])->name('crear');