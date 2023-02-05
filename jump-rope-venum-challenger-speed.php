<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/jump-ropes-venum-challenger-speed-15.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>venum challenger speed</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>22 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>15$</p>
        </div>
        <div class="product-description">
            <p>The Venum Challenger Speed Jump Rope is a high-quality, professional grade jump rope that is designed for serious fitness enthusiasts and athletes. One of the standout features of this jump rope is its speed and agility. The lightweight design and precision bearings in the handles allow for a smooth and fast rotation of the rope, which makes it perfect for high-intensity workouts and endurance training. This also makes it great for boxers, martial artists, and other athletes who need to work on their footwork, speed and coordination.</p>
            <p>Another advantage of the Venum Challenger Speed Jump Rope is its durability. The rope is made of high-quality materials that are built to last, and the handles are made of durable, lightweight aluminum. This means that the rope is less likely to break or fray, even with heavy use. Additionally, the rope is adjustable, which means that it can accommodate different jumping styles, as well as different height requirements, making it a versatile and practical tool for fitness enthusiasts of all levels.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="venum challenger speed">
            <input type="hidden" name="productimage" value="jump-ropes-venum-challenger-speed-15.webp">
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
                <img src="images/jump-ropes-armageddon-wooden-3.webp" alt="">
                <p>jump rope armageddon wooden</p>
                <span>3$</span>
                <a href="jump-rope-armageddon-wooden.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/jump-ropes-body-sculpture-counter-9.webp" alt="">
                <p>jump rope body sculpture counter</p>
                <span>9$</span>
                <a href="jump-rope-body-sculpture-counter.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/groin-protector-ringhorns-10.webp" alt="">
                <p>groin protector ringhorns</p>
                <span>10$</span>
                <a href="groin-protector-ringhorns.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-117.jpg" alt="">
                    <p>Stew Weaver</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Venum Challenger Speed Jump Rope is a game changer! The lightweight design and precision bearings make for a smooth and fast rotation, which makes it perfect for high-intensity workouts. Plus, the rope is made of high-quality materials that can withstand heavy use. I highly recommend this jump rope to anyone looking for a reliable and professional-grade jump rope."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-118.jpg" alt="">
                    <p>Walt York</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am impressed with the quality and performance of the Venum Challenger Speed Jump Rope. It's lightweight and fast rotation make it perfect for endurance training and high-intensity workouts. The rope is also durable and adjustable, making it perfect for people of all levels. I highly recommend this jump rope to anyone looking to take their fitness to the next level."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>