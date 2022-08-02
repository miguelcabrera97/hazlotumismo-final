<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagosController extends Controller
{

    public function pago(Request $request){
        DB::table('facturacion')->insert([
            ['total' => ''.$request->nombre.'',
            
            'creado' => date('Y-m-d H:i:s'),
            'template' => ''.$request->template_id.'',
            ],
        ]);  

        return redirect()->away('http://localhost/hazlotumismo-final/public/');
    }
    


}
