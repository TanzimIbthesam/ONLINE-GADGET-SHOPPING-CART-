<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css./style.css">
</head>
<body>
    <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
     <a href="index.php"class="nav-bar brand">
     <h3 class="px-5"> <i class="fas fa-shopping-cart"></i> Shopping Cart
     </h3>
    </a>
    <button class="navbar-toggler"
    type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
    
    type="button"></button>
    <span class="navbar-toggler-icon"></span>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <!-- <span id="cart_count"class="text-warning bg-light">0</span> -->
                        <?php 
                        if(isset($_SESSION['cart'])){
                            $count=count($_SESSION['cart']);
                          echo "<span id=\"cart_count\"class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\"class=\"text-warning bg-light\">0</span>";
                        }
                        ?>
        </button>

    </nav>
    </header>
</body>
</html>