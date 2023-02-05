<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/punching-bags-sz-angled-heavy-bag-103.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz angled heavy bag</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>14 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>103$</p>
        </div>
        <div class="product-description">
            <p>The SZ Angled Heavy Bag is a high-quality piece of fitness equipment that is designed for fitness enthusiasts and athletes who are looking to improve their striking skills and overall fitness. One of the key benefits of the angled heavy bag is its unique design which allows for more dynamic and realistic striking angles, simulating a more realistic fighting scenario. The bag is made of durable materials that can withstand heavy use and its weight and size make it perfect for hitting, punching, and kicking.</p>
            <p>Another advantage of the SZ Angled Heavy Bag is its durability and quality. The bag is made of high-quality materials that are built to last and can withstand heavy use, making it a reliable piece of equipment that will last for years to come. Additionally, the bag is easy to install, which means that it can be used in a wide range of settings, from home gyms to commercial gyms, and it's suitable for use by both men and women, and people of all ages. Furthermore, the unique angled design allows for more varied and realistic striking angles, which can improve overall striking skills and technique.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Angled heavy bag Sz">
            <input type="hidden" name="productimage" value="punching-bags-sz-angled-heavy-bag-103.webp">
            <input type="hidden" name="productprice" value="103">
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
                <img src="images/punching-bags-pride-sport-heavy-bag-camo-155.webp" alt="">
                <p>pride sport heavy bag camo</p>
                <span>155$</span>
                <a href="punching-bag-pride-sport-heavy-bag-camo.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/punching-bags-sz-heavy-bag-blue-83.webp" alt="">
                <p>sz heavy bag blue</p>
                <span>83$</span>
                <a href="punching-bag-heavy-bag-blue-sz.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/punching-bags-sz-heavy-bag-red-83.webp" alt="">
                <p>sz heavy bag red</p>
                <span>83$</span>
                <a href="punching-bag-heavy-bag-red-sz.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-135.jpg" alt="">
                    <p>Willoughby Cox</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am a professional boxer and I have to say that the SZ Angled Heavy Bag is one of the best bags I have ever used. The angle design allows for a wider range of punches and the heavy weight is perfect for building strength and power. I highly recommend it to anyone looking to take their training to the next level."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-136.jpg" alt="">
                    <p>Seven Wyman</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been training with the SZ Angled Heavy Bag for a few months now and I have noticed a huge improvement in my striking. The bag is well-made and durable, and the angle design makes it perfect for practicing hooks and uppercuts. It's also great for cardio and overall conditioning. I couldn't be happier with my purchase and I highly recommend it."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>