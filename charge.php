<?php
require_once('vendor/autoload.php');
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');
require_once('models/Transaction.php');

\Stripe\Stripe::setApiKey('sk_test_LNt5ctVQLPOV5adJy3MhpwH7');


// sanitize POST array

$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

// GET THE FORM VALUES
$firs_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];

// Create Customenr in Stripe
$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

//Charge customer
$charge = \Stripe\Charge::create(array(
    "amount" => 5000,
    "currency" => "usd",
    "description" => "Intro to React Course",
    "customer" => $customer->id
));
// Customer data
$customerData = [
    'id' =>$charge->customer,
    'first_name' => $firs_name,
    'last_name' => $last_name,
    'email' => $email
];

// Instanciate Customer
$customer = new Customer();

//Add customer to the db
$customer->addCustomer($customerData);

// Transaction data
$transactionData = [
    'id' => $charge->id,
    'customer_id' => $charge->customer,
    'product' => $charge->description,
    'amount' => $charge->amount,
    'currency' =>$charge->currency,
    'status' => $charge->status
];

// Instanciate Transaction
$transaction = new Transaction();

//Add transaction to the db
$transaction->addTransaction($transactionData);

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);
