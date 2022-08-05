<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelLang\Publisher\Services\Filesystem\Php;
//use Slim\Http\Request;
use Slim\Http\Response;
use Stripe\Stripe;
use Illuminate\Support\Facades\DB;


class PagoStripeController extends Controller
{
    
    public function PagarMxnAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'http://127.0.0.1:8000/facturacion/aceptado',
        'cancel_url' => "http://127.0.0.1:8000/facturacion/aceptado",
        ]);
        
        //$stripe = new \Stripe\StripeClient("sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu");
        
        //return $line_items = $stripe->checkout->sessions->all(['limit' => 20]); //allLineItems(''.$checkout_session->id.'', ['limit' => 5]);
        
        $pagos = \Stripe\Checkout\Session::retrieve(''.$checkout_session->id.'');
        //   DB::table('facturacion')->insert([
        //       [
        //        'total' => ''.$checkout_session->amount_total.'',
        //        'divisa' => 'mxn',
        //        'creado' => date('Y-m-d H:i:s'),
        //        'ver' => ''.$checkout_session->id.'',
        //        'cliente' => ''.$checkout_session->client_reference_id.'',
        //        'estado' => ''.$checkout_session->payment_status.''   
        //        ],
        //   ]);  

        
        //return $pagos;
        return redirect()->away(''.$checkout_session->url.'');  
        //return $cliente;
        
    }

    public function aceptado(){
         // This is your test secret API key.
         \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');
        $pagos = DB::table('facturacion')->get();
        foreach($pagos as $pago){
            $status = \Stripe\Checkout\Session::retrieve(''.$pago->ver.'');
             DB::table('facturacion')->insert([
                 [
                    'total' => ''.$status->amount_total.'',
                    'divisa' => 'mxn',
                    'creado' => date('Y-m-d H:i:s'),
                    'ver' => ''.$status->id.'',
                    'cliente' => ''.$status->client_reference_id.'',
                    'estado' => ''.$status->payment_status.''
                 ],
             ]);
        }
          //return $status; 
        return redirect('/facturacion');
    }

    public function PagarMxnMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarUsdAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarUsdMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarEurAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarEurMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarCopAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarCopMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);
        var_dump($checkout_session);
        //return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarClpAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarClpMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarSolAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }

    public function PagarSolMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1LQbFgDdrSDOwrdabVLzdO4v',
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => 'https://www.google.com',
        'cancel_url' => "https://www.twitter.com/",
        ]);

        return redirect()->away(''.$checkout_session->url.'');
    }


    


}