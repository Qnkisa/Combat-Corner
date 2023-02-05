<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/taekwondo-sz-elastic-white-7.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Taekwondo sz elastic white</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>2 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>7$</p>
        </div>
        <div class="product-description">
            <p>Taekwondo gloves are an important piece of equipment for anyone who is training or competing in this martial art. The Sz Blue Taekwondo gloves are a popular choice among practitioners due to their high-quality construction and features that are specific for Taekwondo.</p>
            <p>The SZ Elastic White gloves are a great choice for Taekwondo practitioners because they offer a number of features that make them well-suited to this martial art. Firstly, they are made of high-quality materials that provide good padding and protection for the hands and wrists.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="taekwondo sz elastic white">
            <input type="hidden" name="productimage" value="taekwondo-sz-elastic-white-7.webp">
            <input type="hidden" name="productprice" value="7">
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
                <img src="images/taekwondo-sz-red-20.webp" alt="">
                <p>taekwondo gloves sz red</p>
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
                    <img src="images/r-p-37.jpg" alt="">
                    <p>Tatton Bryce</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"As a Taekwondo practitioner, finding the right pair of gloves is crucial for training and competition. I recently tried the SZ Elastic White gloves, and I was amazed at how well they performed. The gloves were comfortable to wear, even during intense training sessions, and the padding provided excellent protection for my hands and wrists. The elastic closure also made sure they stay snug on my hands. I highly recommend these gloves to any Taekwondo practitioner looking for a top-quality pair of gloves."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-38.jpg" alt="">
                    <p>Clark Paxton</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been practicing Taekwondo for many years and have tried many different gloves, but the SZ Elastic White gloves have been by far the best. The gloves fit perfectly, and the padding is just right. They are durable enough to handle hard strikes and kicks, and they have held up well even after multiple training sessions. The elastic closure is a plus, it keeps the gloves in place. I will definitely purchase these gloves again."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>