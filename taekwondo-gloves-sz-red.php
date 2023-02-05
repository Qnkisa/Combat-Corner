<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/taekwondo-sz-red-20.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Taekwondo gloves sz red</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>9 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>20$</p>
        </div>
        <div class="product-description">
            <p>Taekwondo gloves are an important piece of equipment for anyone who is training or competing in this martial art. The Sz Blue Taekwondo gloves are a popular choice among practitioners due to their high-quality construction and features that are specific for Taekwondo.</p>
            <p>One of the most notable advantages of the Sz Red Taekwondo gloves is their level of protection. They feature multi-layer foam padding that covers the knuckle and back of the hand, which offers a high level of protection without adding excessive weight. This is important for the safety of the practitioners especially in high-impact sport such as Taekwondo. The gloves also feature a strong and durable stitching which ensures that they will last for a long time and withstands the rigors of training.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Taekwondo sz red">
            <input type="hidden" name="productimage" value="taekwondo-sz-red-20.webp">
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
                <img src="images/taekwondo-sz-blue-20.webp" alt="">
                <p>taekwondo gloves sz blue</p>
                <span>20$</span>
                <a href="taekwondo-gloves-sz-blue.php">View</a>
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
                    <img src="images/r-p-19.jpg" alt="">
                    <p>Evelyn Savage</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Sz Red Taekwondo gloves and they have quickly become my favorite pair for training and competition. The multi-layer foam padding provides excellent protection for my hands and the durable stitching ensures that the gloves will last for a long time. The breathable material and ventilation system keep my hands cool and dry during training."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-20.jpg" alt="">
                    <p>Branson Power</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the Sz Red Taekwondo gloves for several months now and they have exceeded my expectations. The multi-layer foam padding provides great protection for my hands, the stitching is very durable and the gloves have held up well during intense training sessions."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>