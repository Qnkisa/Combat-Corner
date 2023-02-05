<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/handwraps-venum-4m-blue-8.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>venum 4m blue</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>19 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>8$</p>
        </div>
        <div class="product-description">
            <p>The Venum 4m Blue Handwraps are a top choice for martial artists and boxers looking for durable and high-quality hand wraps. The 4m length ensures a secure and snug fit, preventing the wraps from sliding or bunching during intense training sessions. The fabric used in the making of this product is of high quality and is breathable, so that it keeps your hands dry and comfortable.</p>
            <p>The Venum 4m Blue Handwraps are a top choice for martial artists and boxers looking for durable and high-quality hand wraps. The 4m length ensures a secure and snug fit, preventing the wraps from sliding or bunching during intense training sessions. The fabric used in the making of this product is of high quality and is breathable, so that it keeps your hands dry and comfortable.

One of the unique features of these handwraps is their color. The blue color is sleek and gives an elegant look. The color is also unique and stands out in the gym or ring, making it easy to spot among other hand wraps. The Venum logo adds a touch of brand recognition and gives it a professional look.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Venum 4m blue">
            <input type="hidden" name="productimage" value="handwraps-venum-4m-blue-8.webp">
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
                    <img src="images/r-p-111.jpg" alt="">
                    <p>Luther Skeates</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Venum 4m Blue Handwraps are simply amazing! Not only do they provide the perfect amount of support for my hands during training, but the blue color adds a touch of style to my gym gear. I highly recommend them to any martial artist or boxer looking for high-quality and durable hand wraps."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-112.jpg" alt="">
                    <p>Winfred Newman</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am so impressed with my Venum 4m Blue Handwraps! They fit perfectly, stay in place during training, and the color is absolutely stunning. They make me feel confident and professional in the ring. I would highly recommend them to anyone looking for top-notch hand wraps."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>