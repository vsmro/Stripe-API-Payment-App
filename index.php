<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link  rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Pay page</title>
</head>
<body>
<div class="container">
    <h2 class="my-4 text-center">Payment Application</h2>
    <div class="btn-group" role="group">
        <a href="customers.php" class="btn btn-primary">Customers</a>
        <a href="transactions.php" class="btn btn-secondary">Transactions</a>

    </div>
    <hr>
    <form action="charge.php" method="post" id="payment-form">
        <div class="form-row">
            <input type="text" name="first_name" class="form-control mb3 StripedElement StripedElement--empty" placeholder="First Name">
            <input type="text" name="last_name" class="form-control mb3 StripedElement StripedElement--empty" placeholder="Last Name">
            <input type="email" name="email" class="form-control mb3 StripedElement StripedElement--empty" placeholder="Email Adress">
            <div id="card-element" class="form-control">

            </div>
            <div>
                <p style="color: red ;">Hint: Use Card No: 4242 4242 4242 4242</p>
            </div>
            <!--Display errors-->
            <div id="card-errors" role="alert">

            </div>
            <!--Submit the information-->
            <button id="card-errors"> Submit Payment</button>
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="js/charge.js"></script>
</body>
</html>