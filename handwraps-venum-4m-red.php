<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/handwraps-venum-4m-red-8.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>venum 4m red</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>27 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>8$</p>
        </div>
        <div class="product-description">
            <p>The Venum 4m Red Handwraps are a highly rated product among martial artists and boxers. Made from high-quality materials, these handwraps provide excellent support and protection for the hands and wrists. The 4m length allows for a secure and snug fit, ensuring that the wraps stay in place during intense training sessions. The breathable fabric also helps to wick away sweat, keeping the hands dry and comfortable.</p>
            <p>In addition to their functional benefits, the Venum 4m Red Handwraps also have a sleek and stylish design. The bold red color stands out in the gym or ring, and the Venum logo adds a touch of brand recognition.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Venum 4m red">
            <input type="hidden" name="productimage" value="handwraps-venum-4m-red-8.webp">
            <input type="hidden" name="productprice" value="8">
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
                <img src="images/handwraps-dominator-4.5m-blue-7.webp" alt="">
                <p>dominator 4.5m blue</p>
                <span>7$</span>
                <a href="handwraps-dominator-4.5m-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-dominator-4.5m-red-7.webp" alt="">
                <p>dominator 4.5m red</p>
                <span>7$</span>
                <a href="handwraps-dominator-4.5m-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-doominator-4.5m-black-7.webp" alt="">
                <p>dominator 4.5m black</p>
                <span>7$</span>
                <a href="handwraps-dominator-4.5m-black.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-109.jpg" alt="">
                    <p>Kory Beckett</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I absolutely love my Venum 4m Red Handwraps! They provide the perfect amount of support for my hands during training and the bold red color always turns heads in the gym. I highly recommend them to anyone looking for high-quality hand wraps."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-110.jpg" alt="">
                    <p>Colson Rowe</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Venum 4m Red Handwraps are a game changer for me! Not only do they protect my hands during training, but they also add a touch of style to my workout gear. I've never felt more confident and comfortable in the ring. I highly recommend them to any martial artist or boxer."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>