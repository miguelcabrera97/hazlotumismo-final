<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelLang\Publisher\Services\Filesystem\Php;
//use Slim\Http\Request;
use Slim\Http\Response;
use Stripe\Stripe;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth;


class PagoStripeController extends Controller
{

    public function PagarMxnAnual(Request $emailuser){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LZk7pIouA9z8SYyfOAHSEm9opwyaipP01qRyhkiTnsw7Ue4a3GtNopuzDKyMzzrelXDmDEKcliXaSW0lI8f9euv00XJ8VrToP');
     //   return $emailuser->emailuser;
        header('Content-Type: application/json');

        $idcreado = DB::table('clientes')->where('email','=',$emailuser->emailuser)->first();


        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price' => 'price_1La0lrIouA9z8SYyz2y25JYC',
            'quantity' => 1,
        ]],
        'mode' => 'subscription',
        'customer' => ''.$idcreado->id_stripe.'',
        'success_url' => 'https://conexioneleven.socialsystemsconnect.com/public/facturacion',
        'cancel_url' => "https://conexioneleven.socialsystemsconnect.com/public/facturacion",
        ]);


        return redirect()->away(''.$checkout_session->url.'');

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
