<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a href="cindex.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shop Now
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-light bg-success\">$count</span><small> items in </small>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-light bg-success\">0</span><small> items in </small>";
                        }
                        
                        ?>
                        <i class="fas fa-shopping-cart"></i> Cart
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>