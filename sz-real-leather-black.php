<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-sz-real-leather-black-31.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Sz real leather black</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>27 reviews</p>
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
            <input type="hidden" name="productname" value="SZ real leather black">
            <input type="hidden" name="productimage" value="boxing-sz-real-leather-black-31.webp">
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
                <img src="images/boxing-sz-real-leather-blue-31.webp" alt="">
                <p>sz real leather blue</p>
                <span>31$</span>
                <a href="sz-real-leather-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-venum-contender-2.0-black-44.webp" alt="">
                <p>venum contender 2.0 black</p>
                <span>44$</span>
                <a href="venum-contender-2.0-black.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-47.jpg" alt="">
                    <p>Krystelle Barber</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the SZ Real leather black gloves for my boxing training and I couldn't be more pleased. The real leather is of great quality and feels soft and supple on the hands. The gloves provide excellent protection for my hands and wrists and the Velcro closure ensures a secure fit. I really appreciate the classic black color, it gives them a professional look. I highly recommend these gloves to anyone looking for a high-quality pair of gloves for combat sports."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-48.jpg" alt="">
                    <p>Bennett Murgatroyd</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am an muay thai practitioner and I purchased these gloves for training and competition. The SZ Real leather black gloves exceeded my expectations. They are made with real leather, which makes them durable and resistant. The gloves have a snug fit, and the padding and multi-layer foam provide great protection. The adjustable strap keeps the gloves secure on my hand. The classic black color gives them a sleek and professional look, I highly recommend them!"</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>