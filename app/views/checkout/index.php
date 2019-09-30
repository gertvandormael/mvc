<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <link rel="stylesheet" href="http://mvc.local/public/css/main.css">
    <script src="https://kit.fontawesome.com/24d7844539.js" crossorigin="anonymous"></script>
    <script src="http://mvc.local/public/js/shoppingcart.js" defer></script>
</head>
<body>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/app/views/templates/header.php") ?>
<div class="checkout-container">
    <?php var_dump($data["cart"]) ?>
    <?php $cart = $data["cart"];
    foreach ($cart as $row) { //start of foreach loop ?>
    <div class="checkout">
        <div class="brand">
            <?php echo $row["brand"] ?>
        </div>
    </div>
    <?php
    } // end of foreach loop
    ?>
</div>