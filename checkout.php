<?php
$price = (is_numeric($_POST['price']) ? (int)$_POST['price'] : 0);
$daydiff = (is_numeric($_POST['daydifference']) ? (int)$_POST['daydifference'] : 0);

echo $price;
echo $daydiff;

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('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');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost';

$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
      'price_data' => [
        'currency' => 'eur',
        'product_data' => [
          'name' => 'INSA CAR Checkout',
        ],
        'unit_amount' => $price*$daydiff*100,
      ],
      'quantity' => 1,
    ]],
    'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $session->url);