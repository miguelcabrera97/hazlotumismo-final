<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagosController extends Controller
{

    public function pago($id){
        $stripe = new \Stripe\StripeClient("sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu");

        return $line_items = $stripe->checkout->sessions->retrieve($id);
        // DB::table('facturacion')->insert([
        //     ['total' => ''.$request->amount_total.'',
        //     'divisa' => 'mxn',
        //     'creado' => date('Y-m-d H:i:s'),
            
        //     ],
        // ]);  

        //return redirect()->away('http://localhost/hazlotumismo-final/public/');
        
    }
    


}
