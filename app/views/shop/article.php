<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entry</title>
    <link rel="stylesheet" href="http://mvc.local/public/css/main.css">
    <script src="https://kit.fontawesome.com/24d7844539.js" crossorigin="anonymous"></script>
    <script src="http://mvc.local/public/js/shoppingcart.js" defer></script>
</head>

<body>
    <?php include ($_SERVER["DOCUMENT_ROOT"]."/app/views/templates/header.php") ?>
    <div class="product-container">
        <?php 
    $product = $data["product"];
    foreach ($product as $row) { //foreach loop start
    ?>
        <h1><?php echo $row["product"] ?></h1>
        <div class="product">
            <div class="product-info">
                <img src="<?php echo $row["img_page"] ?>" alt="">
                <span><?php echo $row["price"] ?></span>
            </div>
            <div class="description">
                <h2><?php echo $row["description_header"] ?></h2>
                <p><?php echo $row["description"] ?></p>
                <p><?php echo $row["description2"] ?></p>
            </div>
        </div>

        <?php 
    } // foreach loop end
    ?>
</body>

</html>