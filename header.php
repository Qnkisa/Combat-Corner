<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat Corner | Martial Arts Equipment</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    
    <header>
        <nav>
            <div class="nav-helper">
                <div class="nav-logo">
                    <img src="images/website-logo.png" alt="">
                    <p>Combat Corner</p>
                </div>
            </div>
            <ul id="menu">
                <li><a href="index.php" class="home-link">Home</a></li>
                <li><a href="shop.php" class="shop-link">Shop</a></li>
                <li><a href="about.php" class="about-link">About</a></li>
                <li>
                    <div class="nav-cart">
                        <div class="nav-cart-main" id="nav-cart-main">
                            <p>Your Cart</p>
                            <ion-icon name="cart-outline" class="nav-cart-icon"></ion-icon>
                        </div>
                        <div class="nav-cart-helper" id="nav-cart-helper"></div>
                        <div class="nav-cart-submain" id="nav-cart-submain">
                            <div class="nav-cart-submain-top">
                                <p>Your Cart</p>
                                <ion-icon name="close-outline" class="nav-cart-close" id="nav-cart-close"></ion-icon>
                            </div>
                            <?php

                                    if(isset($_SESSION["cart"])){
                                        echo "<div class='cart-products'>";
                                        foreach($_SESSION['cart'] as $index => $product) {
                                            echo "<div class='cart-product'>";
                                            echo "<h5>" . $product['name'] . "</h5>";
                                            echo "<img src='images/" . $product['image'] . "'>";
                                            echo "<div class='product-price-quantity'>";
                                            echo "<span>Price: $" . $product['price'] . "</span>";
                                            echo "<span>Quantity: " . $product['quantity'] . "</span>";
                                            echo "<form method='post' action='includes/removefromcart.php'>";
                                            echo "<input type='hidden' name='remove-index' value='$index'>";
                                            echo "<button type='submit' name='removeitemfromcart'>X</button>";
                                            echo "</form>";
                                            echo "</div>";
                                            echo "</div>";
                                        }

                                        $fullPrice = 0;
                                        foreach($_SESSION['cart'] as $product) {
                                            $fullPrice += $product['price'] * $product['quantity'];
                                        }

                                        echo "</div>";
                                        echo '<div class="products-full-price">';
                                        echo "<p class='full-price'>Full Price: $" .  $fullPrice . "</p>";
                                        echo "</div>";
                                        echo "<div class='finalize-purchase-anchor'>";
                                        echo "<a href='purchasestep-one.php' class='finalize-purchase'>Finalize purchase</a>";
                                        echo "</div>";
                                    }
                                    
                                
                            ?>
                            <div class="nav-cart-back-to-website">
                                <p id='no-products-message'>You have no products in your cart.</p>
                                <a href="#" id="back-to-website-button">Back to website</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </div>
        </nav>
    </header>