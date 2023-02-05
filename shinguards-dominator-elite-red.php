<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-dominator-elite-red-41.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>dominator elite red</h1>
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
            <p>41$</p>
        </div>
        <div class="product-description">
            <p>The Dominator Elite Red Shinguards are an excellent choice for martial artists looking for high-quality and durable protective gear. The shinguards are made with a high-density foam that provides excellent shock absorption and impact resistance, ensuring that your shins are well protected during intense training sessions. The construction of the shinguards also includes a durable, breathable fabric that wicks away moisture, keeping your feet dry and comfortable during extended use.</p>
            <p>The design of the shinguards is also noteworthy, as it features an adjustable strap that allows for a customizable and secure fit. This ensures that the shinguards stay in place during vigorous training and sparring. Furthermore, the design of the shinguards is sleek and stylish, making them a great addition to any martial artist's gear collection. Overall, the Dominator Elite Red Shinguards are a great choice for anyone looking for a high-quality, durable, and comfortable shinguard that can withstand the demands of intense martial arts training.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator elite red">
            <input type="hidden" name="productimage" value="shinguards-dominator-elite-red-41.webp">
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
                    <img src="images/r-p-71.jpg" alt="">
                    <p>Irvin Howard</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Dominator Elite red Shinguards have exceeded my expectations. The foam provides great protection and the adjustable strap ensures a secure fit during training. I highly recommend them!"</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-72.jpg" alt="">
                    <p>Jai Shakespeare</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Dominator Elite Red Shinguards for a few weeks now and they are amazing! The breathable fabric keeps my feet cool and the high-density foam provides excellent protection. A must-have for martial artists!"</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>