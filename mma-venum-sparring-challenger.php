<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/mma-venom-sparring-challenger-49.jpg" alt="">
    </div>
    <div class="product-container-content">
        <h1>MMa venum sparring challenger</h1>
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
            <p>49$</p>
        </div>
        <div class="product-description">
            <p>MMA gloves are an essential piece of equipment for anyone who is training or competing in Mixed Martial Arts. The Ringhorns Charger MMA gloves are a popular choice among fighters due to their high-quality construction and versatile design that is suitable for MMA.</p>
            <p>The Venum Challenger MMA Sparring gloves are made with high-quality materials and construction techniques that provide maximum durability and performance for serious fighters. The gloves feature multi-density foam padding that offers excellent protection for the hands and wrists, which is essential for sparring and competition. The gloves also have a secure Velcro closure that provides a comfortable and snug fit.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="MMA venum sparring challenger">
            <input type="hidden" name="productimage" value="mma-venom-sparring-challenger-49.jpg">
            <input type="hidden" name="productprice" value="49">
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
                <img src="images/mma-venom-challenger-47.jpg" alt="">
                <p>mma venum challenger</p>
                <span>47$</span>
                <a href="mma-venum-challenger.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/mma-ufc-contender-38.jpg" alt="">
                <p>mma ufc contender</p>
                <span>38$</span>
                <a href="mma-ufc-contender.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/mma-ringhorns-charger-34.jpg" alt="">
                <p>mma ringhorns charger</p>
                <span>34$</span>
                <a href="mma-ringhorns-charger.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-35.jpg" alt="">
                    <p>Collin Russel</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been training in MMA for a few years now and I've gone through my fair share of gloves. But the Venum Sparring Challenger gloves have truly exceeded my expectations. The build quality is solid, the padding is perfect for both striking and grappling, and the Velcro wrist strap keeps my hands securely in place during training. I highly recommend these gloves to any MMA fighter looking for top-notch protection and performance."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-36.jpg" alt="">
                    <p>Mo Philips</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"As an amateur MMA fighter, I have tried multiple gloves for sparring and training. None of them have come close to the Venum Sparring Challenger gloves. The fit is snug, but not constricting, and the padding is strategically placed for maximum protection. After weeks of usage I can see that the gloves are holding up well, no wear or tear. Definitely worth the investment!"</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>