<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/handwraps-dominator-4.5m-blue-7.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>dominator 4.5m blue</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>16 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>7$</p>
        </div>
        <div class="product-description">
            <p>The Dominator 4.5m Blue Handwraps are a high-quality hand wraps designed specifically for martial artists. They are made with a blend of materials that provide both support and flexibility to the wrists and hands. The thumb loop and hook-and-loop closure give a snug and secure fit, ensuring the wraps stay in place during rigorous training sessions. The blue color gives them an attractive look, making them an ideal choice for competitions or tournaments.</p>
            <p>The handwraps are also easy to clean and maintain, ensuring they look and perform like new even after a long time of use. Overall, the Dominator 4.5m Blue Handwraps are a great option for martial artists looking for a durable and stylish hand wrap that provides excellent support and protection.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator 4.5m blue">
            <input type="hidden" name="productimage" value="handwraps-dominator-4.5m-blue-7.webp">
            <input type="hidden" name="productprice" value="7">
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
                <img src="images/handwraps-venum-4m-blue-8.webp" alt="">
                <p>venum 4m blue</p>
                <span>8$</span>
                <a href="handwraps-venum-4m-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-venum-4m-red-8.webp" alt="">
                <p>venum 4m red</p>
                <span>8$</span>
                <a href="handwraps-venum-4m-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-venum-4m-white-8.webp" alt="">
                <p>venum 4m white</p>
                <span>8$</span>
                <a href="handwraps-venum-4m-white.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-101.jpg" alt="">
                    <p>Bevan Eaton</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"As an MMA fighter, I can say that the Dominator 4.5m Blue Handwraps are a game changer. They provide great support and protection during training and fights. The thumb loop and hook-and-loop closure ensures a secure fit and the blue color looks great in the ring. I highly recommend these handwraps to any MMA fighter."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-102.jpg" alt="">
                    <p>Gibson Foster</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Dominator 4.5m Blue Handwraps for all my MMA training, they are top-notch. The blend of materials provides the perfect balance of support and flexibility, and the thumb loop and hook-and-loop closure keep them securely in place. The blue color gives them a unique and stylish look. I highly recommend these handwraps to any MMA fighter."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>