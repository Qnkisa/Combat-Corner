<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-dominator-elite-blue-41.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>dominator elite blue</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>22 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>41$</p>
        </div>
        <div class="product-description">
            <p>The Dominator Elite Blue Shinguards are top-of-the-line product that offers a combination of protection and durability. The shinguards are made with a high-density foam that provides excellent shock absorption and impact resistance, ensuring that your shins are protected during intense activities. </p>
            <p>The construction of the shinguards also includes a durable, breathable fabric that wicks away moisture, keeping your feet dry and comfortable during extended use. The design of the shinguards is also noteworthy, as it features an adjustable strap that allows for a customizable and secure fit. Overall, the Dominator Elite Blue Shinguards are a great choice for anyone looking for a high-quality, durable, and comfortable shinguards that can withstand the demands of intense activities.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator elite blue">
            <input type="hidden" name="productimage" value="shinguards-dominator-elite-blue-41.webp">
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
                <img src="images/shinguards-dominator-elite-red-41.webp" alt="">
                <p>dominator elite red</p>
                <span>41$</span>
                <a href="shinguards-dominator-elite-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-dominator-elite-white-41.webp" alt="">
                <p>dominator elite white</p>
                <span>41$</span>
                <a href="shinguards-dominator-elite-white.php">View</a>
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
                    <img src="images/r-p-69.jpg" alt="">
                    <p>Tex Arkwright</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Dominator Elite Blue Shinguards for martial arts training and it's been a game changer. The high-density foam provides great protection for my shins during kicks and the breathable fabric keeps my feet dry and comfortable. The adjustable strap also keeps the shinguards securely in place during intense training sessions. I highly recommend this product to any martial artist looking for a durable and high-performing shinguards."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-70.jpg" alt="">
                    <p>Dominic Waldroup</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been practicing martial arts for years and I've tried a lot of different shinguards. The Dominator Elite Blue Shinguards are by far the best one I've used. The protection is top-notch and the breathable fabric keeps my feet from getting too sweaty during training. The adjustable strap also ensures a perfect fit. I highly recommend this product to any martial artist looking for a high-quality shinguard."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>