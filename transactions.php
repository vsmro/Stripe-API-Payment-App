<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Transaction.php');

// Instanciate Transaction
$transaction = new Transaction();
// get Transaction
$transactions = $transaction->getTransactions();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>View Transactions</title>
</head>
<body>
<div class="container mt04">
    <div class="btn-group" role="group">
        <a href="customers.php" class="btn btn-secondary">Customers</a>
        <a href="transactions.php" class="btn btn-primary">Transactions</a>

    </div>
    <hr>
    <h2>Transactions</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Transaction Id</th>
            <th>Customer</th>
            <th>Product</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($transactions as $t): ?>
            <tr>
                <td><?php echo $t->id; ?></td>
                <td><?php echo $t->customer_id; ?> </td>
                <td><?php echo $t->product; ?></td>
                <td><?php echo sprintf('%.2f', $t->amount/100); ?> <?php echo strtoupper($t->currency); ?></td>
                <td><?php echo $t->created_at; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="index.php" class="btn btn-warning"> Go Back</a>
</div>
</body>
</html>