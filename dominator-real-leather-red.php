<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-dominator-real-leather-red-30.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Dominator real leather red</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>15 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>30$</p>
        </div>
        <div class="product-description">
            <p>One of the main benefits of these gloves is the level of protection they provide. They are designed with a focus on both performance and safety, they come with extra padding and multi-layer foam, which provides maximum protection and safety to the hands, wrists and knuckles. Additionally, the gloves have a Velcro closure that ensures a secure and tight fit, preventing any slippage during intense training.</p>
            <p>Overall, Dominator Real leather red gloves are an excellent choice for anyone looking for a pair of gloves that are durable, comfortable, and provide excellent protection. They are suitable for fighters, amateur and professionals alike, who want to train and compete at the highest level, while standing out with a bold and powerful color.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator Real Leather Red">
            <input type="hidden" name="productimage" value="boxing-dominator-real-leather-red-30.webp">
            <input type="hidden" name="productprice" value="20">
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
                <img src="images/boxing-dominator-fake-leather-red-20.webp" alt="">
                <p>dominator fake leather red</p>
                <span>20$</span>
                <a href="dominator-fake-leather-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-sz-real-leather-blue-31.webp" alt="">
                <p>sz real leather blue</p>
                <span>31$</span>
                <a href="sz-real-leather-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-pride-sport-blue-35.webp" alt="">
                <p>pride sport blue</p>
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
                    <img src="images/r-p-49.jpg" alt="">
                    <p>Jools Deacon</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Dominator Real leather red gloves for my kickboxing training and I have been extremely impressed with their performance. The real leather is soft and supple, it conforms to the shape of my hands over time providing a custom fit. The extra padding and multi-layer foam provide great protection for my hands and wrists. The Velcro closure keeps them securely in place and the bold red color gives them a powerful look. I highly recommend these gloves to any kickboxer or martial artist looking for a high-quality pair of gloves."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-50.jpg" alt="">
                    <p>Dean Easton</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am a boxer, I have been searching for a pair of gloves that would stand out from the usual black or blue colors, and I found it with Dominator Real leather red gloves. They are made of genuine leather, which is durable and resistant. The gloves have a great fit and the padding provided enough protection for my hands. The adjustable strap ensures a secure fit and the red color gives them a bold and powerful look, it makes me feel confident in the ring. I highly recommend these gloves to anyone looking for a high-quality and unique pair of gloves."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>