<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/handwraps-doominator-4.5m-black-7.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>dominator 4.5m black</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>32 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>7$</p>
        </div>
        <div class="product-description">
            <p>The Dominator 4.5m Black Handwraps are a high-quality and durable option for martial artists looking for a supportive hand wrap.</p>
            <p>One of the key features of the Dominator 4.5m Black Handwraps is its sleek and professional black color. This color gives a very professional look, making it perfect for use in competitions and tournaments. The handwraps are also easy to clean and maintain, ensuring that they look and perform like new even after a long time of use. The Dominator 4.5m Black Handwraps are a top-of-the-line choice for martial artists looking for a high-quality, durable, and stylish handwrap that provides superior support and protection.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator 4.5m black">
            <input type="hidden" name="productimage" value="handwraps-dominator-4.5m-black-7.webp">
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
                    <img src="images/r-p-105.jpg" alt="">
                    <p>Daniel Mason</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"As a veteran boxer, I can say that the Dominator 4.5m Black Handwraps are a must-have. They provide great support and protection during training and fights. The thumb loop and hook-and-loop closure ensures a secure fit, and the black color gives them a professional look. I highly recommend these handwraps to any boxer."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-106.jpg" alt="">
                    <p>Rollo Bissette</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the Dominator 4.5m Black Handwraps for all my boxing training and fights, they are top-notch. The blend of materials provides the perfect balance of support and flexibility, and the thumb loop and hook-and-loop closure keep them securely in place. The black color gives them a sleek look, perfect for the ring. I highly recommend these handwraps to any boxer."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>