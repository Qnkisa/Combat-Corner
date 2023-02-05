<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-sz-leather-blue-32.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz leather blue</h1>
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
            <p>32$</p>
        </div>
        <div class="product-description">
            <p>The SZ Leather Blue Shinguards are a premium product that offers a combination of protection, comfort, and style. These shinguards are made with a genuine leather material that provides excellent durability and protection, making them perfect for intense activities.</p>
            <p>The blue color adds a unique and stylish look to the shin guards, making them stand out from other traditional designs. Additionally, the shin guards are designed to fit comfortably and securely, providing optimal protection for the shins and ankles. The padding is also strategically placed to provide maximum shock absorption and cushioning, reducing the risk of injury. Overall, SZ Leather Blue Shin guards are a great choice for anyone looking for durable, stylish, and protective gear for their sports and activities.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Sz leather blue">
            <input type="hidden" name="productimage" value="shinguards-sz-leather-blue-32.webp">
            <input type="hidden" name="productprice" value="32">
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
                <img src="images/shinguards-sz-leather-black-32.webp" alt="">
                <p>sz leather black</p>
                <span>32$</span>
                <a href="shinguards-sz-leather-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-sz-leather-red-32.webp" alt="">
                <p>sz leather red</p>
                <span>32$</span>
                <a href="shinguards-sz-leather-red.php">View</a>
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
                    <img src="images/r-p-83.jpg" alt="">
                    <p>Wilmer Mercer</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the SZ Leather Blue Shin guards for my martial arts training and they have exceeded my expectations. The genuine leather material is incredibly durable and the blue color gives them a unique look. The padding is also perfectly placed for maximum protection and comfort during training."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-84.jpg" alt="">
                    <p>Wolfe Bradford</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I highly recommend the SZ Leather Blue Shin guards for anyone who trains in martial arts. They are incredibly durable and provide excellent protection for the shins and ankles. The blue color is also a nice touch, making them stand out from other traditional shin guards.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>