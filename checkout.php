<?php

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51KHw2nJlt27XPt2lVKvpOYs0UiFKwEWIUDmyIJHkizIxs92BaktUDWoNIml8U154jZ3DTPhdARkXuPc7BAFNv1sV00AiKpHohE');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost';

$checkout_session = \Stripe\Checkout\Session::create([
"payment_method_types"=>['card'],
"mode"=>'payment',
"line_items"=>[
	[
		"price_data"=>[
			"currency"=> "egp",
			"product_data"=> [
			"name"=> "Reservation",
			
			],
			"unit_amount" => 50000
		],
		"quantity"=> 1
	]
    ],
    'success_url' => $YOUR_DOMAIN . '/index.php',
    'cancel_url' => $YOUR_DOMAIN . '/index.php',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);