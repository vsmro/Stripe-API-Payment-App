<?php
require_once('config/db.php');
require_once('lib/pdo_db.php');
require_once('models/Customer.php');

// Instanciate Customer
$customer = new Customer();
// get Customer
$customers = $customer->getCustomers();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>View customers</title>
</head>
<body>
<div class="container mt04">
    <div class="btn-group" role="group">
        <a href="customers.php" class="btn btn-primary">Customers</a>
        <a href="transactions.php" class="btn btn-secondary">Transactions</a>
        
    </div>
    <hr>
    <h2>Customers</h2>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Customer Id</th>
            <th>Name</th>
            <th>email</th>
            <th>date</th>
        </tr>
    </thead>
        <tbody>
        <?php foreach($customers as $c): ?>
            <tr>
                <td><?php echo $c->id; ?></td>
                <td><?php echo $c->first_name; ?> <?php echo $c->last_name; ?></td>
                <td><?php echo $c->email; ?></td>
                <td><?php echo $c->created_at; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="index.php" class="btn btn-warning"> Go Back</a>
</div>
</body>
</html>