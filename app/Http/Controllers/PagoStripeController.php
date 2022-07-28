<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagoStripeController extends Controller
{
    public function PagarMxnAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarMxnMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarUsdAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarUsdMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarEurAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarEurMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarCopAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarCopMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarClpAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarClpMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarSolAnual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

    public function PagarSolMensual(){
        // This is your test secret API key.
        \Stripe\Stripe::setApiKey('sk_test_51LPW7ODdrSDOwrdagflUHPc2JKvOYfCiLTa8m5gpNTTY9JeQ0CMYKwV7toLDjLZwuINvAqSjiNSuaY5qTPmYLdmH007oM3tVgu');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://localhost/StripeTest/public/';

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

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }

}