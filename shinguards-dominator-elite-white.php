<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-dominator-elite-white-41.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>dominator elite white</h1>
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
            <p>41$</p>
        </div>
        <div class="product-description">
            <p>The Dominator Elite White Shinguards are a top-of-the-line product that offers a combination of protection and durability. The shinguards are made with high-density foam that provides excellent shock absorption and impact resistance, ensuring that your shins are protected during intense activities. The construction of the shinguards also includes a durable and breathable fabric that wicks away moisture, keeping your feet dry and comfortable during extended use.</p>
            <p>In addition to the excellent protection and durability, the Dominator Elite White Shinguards are very comfortable to wear. The breathable fabric keeps the feet dry and cool even during intense training sessions, and the adjustable strap ensures a secure fit. They are also very lightweight, which allows for freedom of movement, and the high-density foam provides excellent shock absorption. </p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator elite white">
            <input type="hidden" name="productimage" value="shinguards-dominator-elite-white-41.webp">
            <input type="hidden" name="productprice" value="41">
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
                <img src="images/shinguards-dominator-elite-blue-41.webp" alt="">
                <p>dominator elite blue</p>
                <span>41$</span>
                <a href="shinguards-dominator-elite-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-dominator-elite-red-41.webp" alt="">
                <p>dominator elite red</p>
                <span>41$</span>
                <a href="shinguards-dominator-elite-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-venum-challenger-standup-58.webp" alt="">
                <p>venum challenger standup</p>
                <span>58$</span>
                <a href="shinguards-venum-challenger-standup.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-73.jpg" alt="">
                    <p>Alton Caulfield</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Dominator Elite White Shinguards are amazing! They fit well, look great and provide great protection. I highly recommend them."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-74.jpg" alt="">
                    <p>Chile Fox</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Dominator Elite White Shinguards for martial arts training and they are fantastic! Lightweight and breathable, provide great protection. Love them!"</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>