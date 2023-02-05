<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/handwraps-dominator-4.5m-red-7.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>dominator 4.5m red</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>24 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>7$</p>
        </div>
        <div class="product-description">
            <p>The Dominator 4.5m Red Handwraps are a top-of-the-line choice for martial artists looking for a high-quality, durable, and supportive hand wraps. These handwraps are designed with a blend of materials that provide both support and flexibility to the wrists and hands, allowing martial artists to perform strikes and grappling techniques with greater precision and power while preventing injury.</p>
            <p>Another noteworthy feature of Dominator 4.5m Red Handwraps is its striking red color, which makes it a great option for martial artists looking for a stylish and unique handwrap. The red color is bold and vibrant, making them perfect for use in competitions and tournaments. They are also easy to clean and maintain, ensuring that they look and perform like new even after a long time of use.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator 4.5m red">
            <input type="hidden" name="productimage" value="handwraps-dominator-4.5m-red-7.webp">
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
                    <img src="images/r-p-103.jpg" alt="">
                    <p>Kian Bunker</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"As a kickboxer, I highly recommend the Dominator 4.5m Red Handwraps. They provide great support and protection during training and fights, the thumb loop and hook-and-loop closure keeps them securely in place. The red color is also a nice touch and makes them look great in the ring. I highly recommend these handwraps to any kickboxer."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-104.jpg" alt="">
                    <p>Hoyt Burgess</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Dominator 4.5m Red Handwraps for my kickboxing training and they are amazing. The thumb loop and hook-and-loop closure ensure a secure fit and the blend of materials provides the perfect balance of support and flexibility. The red color is also a nice touch, making them stand out in the ring. I highly recommend these handwraps to any kickboxer."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>