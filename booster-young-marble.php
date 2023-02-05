<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-booster-young-marble-47.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Booster young marble</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>41 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>47$</p>
        </div>
        <div class="product-description">
            <p>Booster Young Marble gloves are designed specifically for children and young martial artists. These gloves are made with quality materials and features that make them a great choice for children who are just starting to train in martial arts.</p>
            <p>The Booster Young Marble gloves are also designed with vibrant and colorful patterns which appeals to children, making it more enjoyable and fun for them to wear and use.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Booster Young Marble">
            <input type="hidden" name="productimage" value="boxing-booster-young-marble-47.webp">
            <input type="hidden" name="productprice" value="47">
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
                <img src="images/boxing-sz-real-leather-black-31.webp" alt="">
                <p>sz real leather black</p>
                <span>31$</span>
                <a href="sz-real-leather-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-venum-contender-2.0-black-44.webp" alt="">
                <p>venum contender 2.0 black</p>
                <span>44$</span>
                <a href="venum-contender-2.0-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-dominator-samurai-60.webp" alt="">
                <p>dominator samurai</p>
                <span>60$</span>
                <a href="dominator-samurai.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-13.jpg" alt="">
                    <p>Legacy Minett</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I love my new Booster Young Marble gloves! They fit my hands perfectly and are so easy to put on and take off with the adjustable hook-and-loop closure."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-14.jpg" alt="">
                    <p>Harlan Hopkins</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am so happy with my Booster Young Marble gloves! The gloves have a good ventilation system which keeps my hands cool and dry during training."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>