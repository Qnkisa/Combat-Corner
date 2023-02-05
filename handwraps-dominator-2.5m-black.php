<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/handwraps-dominator-2.5m-black-5.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>dominator 2.5m black</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>23 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>5$</p>
        </div>
        <div class="product-description">
            <p>The Dominator 2.5m Black Handwraps are an excellent choice for martial artists looking for high-quality, durable hand wraps that provide superior protection and support. These handwraps are made from a blend of cotton and elastic, which provides a perfect balance of flexibility and support for the wrists and hands.</p>
            <p>This allows martial artists to perform strikes and grappling techniques with greater precision and power, while still providing the necessary protection to prevent injury. The wraps also feature a thumb loop and hook-and-loop closure for a secure fit, so they stay in place during even the most intense training sessions.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator 2.5m black">
            <input type="hidden" name="productimage" value="handwraps-dominator-2.5m-black-5.webp">
            <input type="hidden" name="productprice" value="5">
            <div class="product-quantity">
                <label for="quantity">Quantity:</label>
                <input type="number" name="productquantity" value="1">
            </div>
            <button type="submit" name="addproduct">Add to cart</button>
        </form>
    </div>
</div>
    <div class="similar-products">
        <h2>Similar Products</h2>
        <div class="similar-products-helper">
            <div class="similar-product">
                <img src="images/handwraps-dominator-2.5m-blue-5.webp" alt="">
                <p>dominator 2.5m blue</p>
                <span>5$</span>
                <a href="handwraps-dominator-2.5m-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-dominator-2.5m-red-5.webp" alt="">
                <p>dominator 2.5m red</p>
                <span>5$</span>
                <a href="handwraps-dominator-2.5m-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-sz-2.5m-4.webp" alt="">
                <p>sz 2.5m black</p>
                <span>4$</span>
                <a href="handwraps-sz-2.5-black.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-91.jpg" alt="">
                    <p>Astor Sanderson</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Dominator 2.5m Black Handwraps for my kickboxing training, they have been great! The hook and loop closure keeps them securely in place and the thumb loop ensures a perfect fit. I highly recommend them!"</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-92.jpg" alt="">
                    <p>Drogo Dawson</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the Dominator 2.5m Black Handwraps for my Muay Thai training, they are amazing! They provide great support for my wrists and hands, and the elastic blend allows for a good range of motion. I would highly recommend these handwraps to any martial artist."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>