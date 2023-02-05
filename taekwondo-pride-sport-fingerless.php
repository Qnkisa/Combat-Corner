<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/taekwondo-pride-sport-fingerless-18.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>taekwondo pride sport fingerless</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>3 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>18$</p>
        </div>
        <div class="product-description">
            <p>Taekwondo gloves are an essential piece of equipment for anyone who is training or competing in the martial art of Taekwondo. The Pride Sport fingerless gloves are a popular choice among practitioners due to their design and features that are specific for Taekwondo.</p>
            <p>A big advantage of the Pride Sport fingerless gloves is the level of protection they provide. They feature multi-layer foam padding that covers the knuckle and back of the hand, which offers a high level of protection without adding excessive weight. The gloves also have a secure Velcro closure that ensures a snug and secure fit which allows the gloves to stay in place during intense training or competition. The gloves are also designed with a traditional Korean martial arts aesthetic which adds an extra layer of pride and tradition to the training. This can make the training even more enjoyable and meaningful.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Taekwondo Pride Sport Fingerless">
            <input type="hidden" name="productimage" value="taekwondo-pride-sport-fingerless-18.webp">
            <input type="hidden" name="productprice" value="18">
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
                <img src="images/taekwondo-sz-blue-20.webp" alt="">
                <p>taekwondo sz blue</p>
                <span>20$</span>
                <a href="taekwondo-gloves-sz-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/taekwondo-sz-elastic-white-7.webp" alt="">
                <p>taekwondo sz elastic white</p>
                <span>7$</span>
                <a href="taekwondo-sz-elastic-white.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/taekwondo-sz-red-20.webp" alt="">
                <p>taekwondo sz red</p>
                <span>20$</span>
                <a href="taekwondo-gloves-sz-red.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-18.jpg" alt="">
                    <p>Trecia Lockwood</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Pride Sport fingerless Taekwondo gloves and they have been a great addition to my training gear. The fingerless design allows for maximum flexibility and dexterity, making it easy to perform hand techniques and grips."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-17.jpg" alt="">
                    <p>Kameron Darnell</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Pride Sport fingerless Taekwondo gloves for several months now and they have exceeded my expectations.he traditional Korean martial arts aesthetic also adds an extra layer of pride and tradition to my training, which I appreciate a lot."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>