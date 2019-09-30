<div class="header">
        <div class="banner">
            <h1><a href="http://mvc.local/public/shop/index">Music shop</a></h1>
        </div>
        <div class="menu" id="menu">
            <i class="fas fa-shopping-cart"></i>
            <div class="shopping-cart hidden" id="shoppingCart">
                <div class="close" id="close">
                    close
                </div>
                <?php 
                if (isset($_COOKIE["cart"])) {
                    echo $_COOKIE["cart"];
                }
                ?>
                <form action="http://mvc.local/public/checkout/">                
                    <button>Go to checkout!</button>
                </form>
            </div>
        </div>
    </div>