<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/mma-ringhorns-charger-34.jpg" alt="">
    </div>
    <div class="product-container-content">
        <h1>mma ringhorns charger</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>53 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>34$</p>
        </div>
        <div class="product-description">
            <p>MMA gloves are an essential piece of equipment for anyone who is training or competing in Mixed Martial Arts. The Ringhorns Charger MMA gloves are a popular choice among fighters due to their high-quality construction and versatile design that is suitable for MMA.</p>
            <p>One of the main advantages of the Ringhorns Charger MMA gloves is their unique construction. They are made with premium synthetic leather and reinforced stitching which ensures they are both durable and comfortable. The gloves feature an open-finger design that allows for easy gripping and hand techniques which are important aspects in MMA. The gloves also have a unique ventilation system which allows for maximum breathability that helps to keep the hands cool and dry during training or competition.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="MMA ringhorns charger">
            <input type="hidden" name="productimage" value="mma-ringhorns-charger-34.jpg">
            <input type="hidden" name="productprice" value="34">
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
                <img src="images/mma-ufc-contender-38.jpg" alt="">
                <p>ufc contender</p>
                <span>38$</span>
                <a href="mma-ufc-contender.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/mma-dominator-label-27.webp" alt="">
                <p>mma dominator label</p>
                <span>27$</span>
                <a href="mma-dominator-label.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/mma-leone-gp121-46.webp" alt="">
                <p>mma leone gp121</p>
                <span>46$</span>
                <a href="leone-gp121.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-21.jpg" alt="">
                    <p>Topher Lawson</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Ringhorns Charger MMA gloves and they have quickly become my go-to gloves for training and competition. The premium synthetic leather and reinforced stitching make them extremely durable and comfortable to wear. "</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-22.jpg" alt="">
                    <p>Lennox Wade</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently bought the gloves and i instantly fell in love with them. If someone is serious about mma i strongly advice them to try this gloves."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>