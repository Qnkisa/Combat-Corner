<?php include 'header.php';?>

<div class="real-cart-container-big">
    <h1>Finalize Your Purchase</h1>
    <div class="real-cart-container">
    <div class="user-details">
        <form action="includes/savepurchase.php" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstName" placeholder="First Name...">
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastName" placeholder="Last Name...">
            <label for="country">Country:</label>
            <input type="text" name="country" placeholder="Country...">
            <label for="city">City:</label>
            <input type="text" name="city" placeholder="City:">
            <label for="address">Address:</label>
            <input type="text" name="address" placeholder="Address...">
            <label for="phonenumber">Phone Number:</label>
            <input type="text" name="phoneNumber" placeholder="Phone Number...">
            <div class="payment-method">
                <p>Payment Method:</p>
                <span>Cash on Delivery</span>
            </div>
            <button type="submit" name="order">Order</button>
        </form>
    </div>
    <div class="user-products">
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
                    echo "</div>";
                    echo "</div>";
                }

                $fullPrice = 0;
                foreach($_SESSION['cart'] as $product) {
                    $fullPrice += $product['price'] * $product['quantity'];
                }

                echo "</div>";
                echo '<div class="products-full-price">';
                echo "<p>Full Price: $" .  $fullPrice . "</p>";
                echo "</div>";
                echo "<div class='finalize-purchase-anchor'>";
                echo "<a href='index.php'>Back to website</a>";
                echo "</div>";
            }
            else{
                echo "<p style='color:black; font-size:1.25rem; padding:1rem; text-align:center; font-family:Arial, Helvetica, sans-serif;'>You have no products in your cart.</p>";
            }

        ?>
    </div>
</div>
</div>



<?php include 'footer.php';?>