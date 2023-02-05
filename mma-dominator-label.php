<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/mma-dominator-label-27.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>MMa dominator label</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>13 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>27$</p>
        </div>
        <div class="product-description">
            <p>MMA gloves are an essential piece of equipment for anyone who is training or competing in Mixed Martial Arts. The Dominator Label MMA gloves are a popular choice among fighters due to their high-quality construction and versatile design that is suitable for MMA.</p>
            <p>They are made with premium synthetic leather and reinforced stitching which ensures they are both durable and lightweight. This is crucial in MMA where fighters need to perform quick and precise strikes as well as grappling movements. The gloves also feature an open-finger design which allows for maximum flexibility and dexterity during grappling and ground work.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="MMA domiantor label">
            <input type="hidden" name="productimage" value="mma-dominator-label-27.webp">
            <input type="hidden" name="productprice" value="27">
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
                <img src="images/mma-leone-gp121-46.webp" alt="">
                <p>mma leone gp121</p>
                <span>46$</span>
                <a href="leone-gp121.php">View</a>
            </div>
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
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-15.jpg" alt="">
                    <p>Quinlan Edison</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Dominator Label MMA gloves and they have quickly become my favorite pair for training and competition. The unique construction of the gloves makes them both lightweight and durable, which is essential for MMA. The open-finger design allows for maximum flexibility and dexterity during grappling and ground work. "</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-16.jpg" alt="">
                    <p>Bradley Badcock</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the Dominator Label MMA gloves for several months and they have exceeded my expectations."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>