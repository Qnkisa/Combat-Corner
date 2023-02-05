<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/punching-bags-pride-sport-water-bag-98.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>pride sport water bag</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>54 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>98$</p>
        </div>
        <div class="product-description">
            <p>The Pride Sport Water Bag is a high-quality piece of fitness equipment that is designed for fitness enthusiasts and athletes who are looking to add resistance to their workout routine. One of the key benefits of the water bag is its ability to provide an intense and challenging workout by adding resistance to a wide range of exercises, such as cardio and strength training exercises. The water bag is made of durable materials that can withstand heavy use and its adjustable weight allows users to increase the intensity of their workout as they progress.</p>
            <p>Another advantage of the Pride Sport Water Bag is its portability and versatility. The water bag is designed to be lightweight and easy to carry, making it perfect for use at home, in the gym or even outdoor workout sessions. Additionally, the water bag is suitable for use by both men and women, and people of all ages. It can be used for a wide range of exercises and activities, from cardio and strength training to rehabilitation and recovery from injuries. Furthermore, the water bag is easy to fill and empty, making it convenient for users to adjust the weight as per their needs.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Pride Sport water bag">
            <input type="hidden" name="productimage" value="punching-bags-pride-sport-water-bag-98.webp">
            <input type="hidden" name="productprice" value="98">
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
                <img src="images/punching-bags-sz-speed-bag-15.webp" alt="">
                <p>sz speed bag</p>
                <span>15$</span>
                <a href="punching-bag-speed-bag-sz.php">View</a>
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
                    <img src="images/r-p-133.jpg" alt="">
                    <p>Walker Joyce</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Pride Sport Water Bag is a fantastic piece of fitness equipment. It's durable, portable and versatile, making it perfect for a wide range of exercises and activities. The adjustable weight feature allows me to increase the intensity of my workout as I progress. I highly recommend this water bag to anyone looking to add resistance to their workout routine."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-134.jpg" alt="">
                    <p>Walter White</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Pride Sport Water Bag for a few weeks now and I am extremely impressed with its quality and performance. It's lightweight, easy to carry, and can be used for a wide range of exercises and activities. The adjustable weight feature is a great feature that allows me to increase the intensity of my workout as I progress. I highly recommend this water bag to anyone looking for a reliable and durable piece of fitness equipment."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>