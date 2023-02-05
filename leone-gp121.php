<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/mma-leone-gp121-46.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>mma leone gp121</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>23 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>46$</p>
        </div>
        <div class="product-description">
            <p>MMA gloves are a critical piece of equipment for anyone who is training or competing in Mixed Martial Arts. The Leone GP121 MMA gloves are a popular choice among fighters due to their high-quality construction and design that is suitable for MMA.</p>
            <p>One of the main advantages of the Leone GP121 MMA gloves is their multi-purpose design. These gloves are suitable for striking and grappling, the gloves feature an open-finger design which allows for maximum flexibility and dexterity when gripping and holding, as well as providing protection for the hands during strikes. The gloves also have a good ventilation system which keeps the hands dry during training. The gloves are made with premium synthetic leather which is both durable and comfortable.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Leone gp121 mma gloves">
            <input type="hidden" name="productimage" value="mma-leone-gp121-46.webp">
            <input type="hidden" name="productprice" value="46">
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
                <p>mma ufc contender</p>
                <span>38$</span>
                <a href="mma-ufc-contender.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/mma-venom-challenger-47.jpg" alt="">
                <p>mma venum challenger</p>
                <span>20$</span>
                <a href="mma-venum-challenger.php">View</a>
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
                    <img src="images/r-p-9.jpg" alt="">
                    <p>Irwin Wells</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Leone GP121 MMA gloves and have been extremely impressed with their performance. The multi-purpose design is perfect for both striking and grappling, and the open-finger design allows for maximum flexibility and dexterity. The ventilation system also keeps my hands dry during training. "</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-10.jpg" alt="">
                    <p>Alexandria Brice</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the Leone GP121 MMA gloves for the past few months and they have proven to be a great addition to my training gear."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>