<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/punching-bags-sz-speed-bag-15.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>speed bag sz</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>90 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>15$</p>
        </div>
        <div class="product-description">
            <p>The SZ Speed Bag is a high-quality piece of equipment that is perfect for both beginners and advanced fighters. It is designed to improve hand-eye coordination, speed, and endurance of the user. The bag is made of durable and high-quality materials, ensuring that it will withstand intense training sessions and last for a long time. The leather material gives the bag a good rebound which is perfect for fast-paced training and also provides a comfortable grip.</p>
            <p>The SZ Speed Bag also features a swivel that is designed to give the user a smooth and consistent motion, which allows for a more efficient training session. The speed bag is also designed to be easy to use and adjust, making it perfect for both beginners and advanced fighters. Whether you are a professional boxer or just looking to improve your hand-eye coordination, the SZ Speed Bag is an excellent choice that will help you achieve your goals.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Speed bag sz">
            <input type="hidden" name="productimage" value="punching-bags-sz-speed-bag-15.webp">
            <input type="hidden" name="productprice" value="15">
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
                <img src="images/punching-bags-pride-sport-water-bag-98.webp" alt="">
                <p>pride sport water bag</p>
                <span>98$</span>
                <a href="punching-bag-pride-sport-water-bag.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/punching-bags-sz-angled-heavy-bag-103.webp" alt="">
                <p>angled heavy bag sz</p>
                <span>103$</span>
                <a href="punching-bag-angled-heavy-bag-sz.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/punching-bags-sz-heavy-bag-blue-83.webp" alt="">
                <p>sz heavy bag blue</p>
                <span>83$</span>
                <a href="punching-bag-heavy-bag-blue-sz.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-141.jpg" alt="">
                    <p>Zeb Durant</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The SZ Speed Bag is a fantastic piece of equipment, it's durable, well-designed, and improves hand-eye coordination and speed. I highly recommend it."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-142.jpg" alt="">
                    <p>Chesley Leigh</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the SZ Speed Bag for a few weeks now and it's been a great addition to my training. The smooth and consistent motion of the bag makes it perfect for improving hand-eye coordination and speed. It's definitely worth the investment!"</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>