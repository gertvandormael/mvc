<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="http://mvc.local/public/css/main.css">
    <script src="https://kit.fontawesome.com/24d7844539.js" crossorigin="anonymous"></script>
    <script src="http://mvc.local/public/js/shoppingcart.js" defer></script>
</head>
<body>
    <?php include ($_SERVER["DOCUMENT_ROOT"]."/app/views/templates/header.php") ?>
    <div class="main-container">
        <?php include 'sidebar.php'?>
        <div class="shop-container">
            <?php $allProducts = $data["allProducts"];
        // Start of foreach loop
        foreach ($allProducts as $row) { ?>
            <div class="article">
                <div class="product">
                    <div class="info">
                        <span class="brand">
                            <?php echo $row["brand"] ?>
                        </span>
                        <span class="price">
                            € <?php echo $row["price"] ?>
                        </span>
                    </div>
                    <div class="model">
                        <a href="article/<?php echo $row["id"] ?>">
                            <?php echo $row["product"] ?>
                        </a>
                    </div>
                </div>
                <div class="image">
                    <a href="<?php echo "article/".$row["id"] ?>"><img src="<?php echo $row["img_store"] ?>" alt=""></a>
                </div>
                <div class="add-cart">
                    <form action="addCart/<?php echo $row["article"]?>" method="post">
                        <input type="submit" name="addCart" value="Add to cart">
                    </form>
                </div>
            </div>
            <?php 
        } // End of foreach loop
        ?>
        </div>
    </div>
</body>