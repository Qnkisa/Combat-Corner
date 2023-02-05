<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/mma-ufc-contender-38.jpg" alt="">
    </div>
    <div class="product-container-content">
        <h1>mma Ufc Contender</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>35 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>38$</p>
        </div>
        <div class="product-description">
            <p>MMA gloves are an essential piece of equipment for anyone who is training or competing in Mixed Martial Arts. The Ringhorns Charger MMA gloves are a popular choice among fighters due to their high-quality construction and versatile design that is suitable for MMA.</p>
            <p>One of the main advantages of the MMA UFC Contender gloves is their unique construction. They are made with premium synthetic leather and reinforced stitching which ensures they are both durable and comfortable. The gloves feature an open-finger design that allows for easy gripping and hand techniques which are important aspects in MMA. The gloves also have a unique ventilation system which allows for maximum breathability that helps to keep the hands cool and dry during training or competition.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="MMA ufc contender">
            <input type="hidden" name="productimage" value="mma-ufc-contender-38.jpg">
            <input type="hidden" name="productprice" value="38">
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
                <img src="images/mma-venom-sparring-challenger-49.jpg" alt="">
                <p>mma venum sparring challenger</p>
                <span>49$</span>
                <a href="mma-venum-sparring-challenger.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/mma-leone-gp121-46.webp" alt="">
                <p>leone gp121</p>
                <span>50$</span>
                <a href="leone-gp121.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-25.jpg" alt="">
                    <p>Ste Thorburn</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the mma ufc contender gloves and they have quickly become my favorite pair for training and competition."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-26.jpg" alt="">
                    <p>Amyas Vipond</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the mma ufc contender for several months now and they have exceeded my expectations. The reinforced stitching is extremely durable and the multi-layer foam padding provides excellent protection for my hands. I also appreciate the sleek black design, it gives me a professional look while I'm training and competing."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>