<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-sz-real-leather-blue-31.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Sz real leather blue</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>30 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>31$</p>
        </div>
        <div class="product-description">
            <p>One of the main benefits of these gloves is their quality craftsmanship and attention to detail. They are designed with a focus on both performance and safety, they come with extra padding and multi-layer foam, which provides maximum protection and safety to the hands, wrists and knuckles. Additionally, the gloves have a Velcro closure that ensures a secure and tight fit, preventing any slippage during intense training.</p>
            <p>The aesthetic design of these gloves is also noteworthy, they come in a blue color, giving them a unique and stylish look, it stands out from the usual black or red colors. The real leather material also gives them a luxurious and premium feel.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="SZ real leather blue">
            <input type="hidden" name="productimage" value="boxing-sz-real-leather-blue-31.webp">
            <input type="hidden" name="productprice" value="31">
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
                <img src="images/boxing-dominator-real-leather-red-30.webp" alt="">
                <p>dominator real leather red</p>
                <span>30$</span>
                <a href="dominator-real-leather-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-sz-real-leather-black-31.webp" alt="">
                <p>sz real leather black</p>
                <span>31$</span>
                <a href="sz-real-leather-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-pride-sport-blue-35.webp" alt="">
                <p>Pride sport blue</p>
                <span>35$</span>
                <a href="pride-sport-blue.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-45.jpg" alt="">
                    <p>Rolo Rowe</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the SZ Real leather blue gloves for my boxing training and I have been amazed by their performance. The real leather is soft and supple, it molds to the shape of my hands over time providing a custom fit. The extra padding and multi-layer foam provide great protection for my hands and wrists. The Velcro closure keeps them securely in place and the unique blue color gives them a stylish look. I highly recommend these gloves to any boxer or martial artist looking for a high-quality pair of gloves."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-46.jpg" alt="">
                    <p>Kayden Chester</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been practicing kickboxing for many years and have tried many different gloves, but the TSZ Real leather blue gloves have been by far the best. The real leather is durable and the blue color gives them a unique and stylish look. The gloves fit comfortably, and the padding and multi-layer foam provide excellent protection for my hands and wrists. The Velcro closure keeps them securely in place during intense training. I will definitely purchase these gloves again."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>