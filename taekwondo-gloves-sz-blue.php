<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/taekwondo-sz-blue-20.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Taekwondo gloves sz blue</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>4 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>20$</p>
        </div>
        <div class="product-description">
            <p>Taekwondo gloves are an important piece of equipment for anyone who is training or competing in this martial art. The Sz Blue Taekwondo gloves are a popular choice among practitioners due to their high-quality construction and features that are specific for Taekwondo.</p>
            <p>The Sz Blue Taekwondo gloves are also designed with a high level of protection in mind, they have a foam padding that covers the knuckle and back of the hand, which offers a high level of protection without adding excessive weight. The gloves also have a secure Velcro closure which provides a secure and customizable fit. This ensure that the gloves stay in place during intense training or competition, and provide the protection needed for the hands.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Taekwondo gloves sz blue">
            <input type="hidden" name="productimage" value="taekwondo-sz-blue-20.webp">
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
                <img src="images/taekwondo-pride-sport-fingerless-18.webp" alt="">
                <p>taekwondo gloves pride sport fingerless</p>
                <span>18$</span>
                <a href="taekwondo-pride-sport-fingerless.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/taekwondo-sz-red-20.webp" alt="">
                <p>taekwondo gloves sz red</p>
                <span>20$</span>
                <a href="taekwondo-gloves-sz-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/taekwondo-sz-elastic-white-7.webp" alt="">
                <p>taekwondo gloves elastic white</p>
                <span>7$</span>
                <a href="taekwondo-sz-elastic-white.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-7.jpg" alt="">
                    <p>Shane Bone</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Sz Blue Taekwondo gloves for the past few months and they have been a great addition to my training gear. The lightweight design is perfect for the fast-paced nature of taekwondo and the open-finger design allows for maximum flexibility and dexterity."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-8.jpg" alt="">
                    <p>Maxton Woolf</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Sz Blue Taekwondo gloves and I am extremely impressed with their performance. The gloves are specifically designed for taekwondo and it shows in their construction."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>