<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/jump-ropes-armageddon-wooden-3.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>jump rope armageddon wooden</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>3 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>3$</p>
        </div>
        <div class="product-description">
            <p>Armeddon wooden jump ropes are highly sought after due to their durability and longevity. The wooden handles provide a comfortable grip and the rope itself is made of high-quality materials that can withstand heavy use. This means that the rope is less likely to break or fray, making it a reliable choice for both fitness enthusiasts and athletes. </p>
            <p>Additionally, the weight of the wooden handles provides a unique workout experience, allowing for an added level of resistance that can help to improve muscle tone and endurance.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="jump rope Armageddon wooden">
            <input type="hidden" name="productimage" value="jump-ropes-armageddon-wooden-3.webp">
            <input type="hidden" name="productprice" value="3">
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
                <img src="images/jump-ropes-body-sculpture-counter-9.webp" alt="">
                <p>jump rope body sculpture counter</p>
                <span>9$</span>
                <a href="jump-rope-body-sculpture-counter.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/jump-ropes-venum-challenger-speed-15.webp" alt="">
                <p>venum challenger speed</p>
                <span>15$</span>
                <a href="jump-rope-venum-challenger-speed.php">View</a>
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
                    <img src="images/r-p-113.jpg" alt="">
                    <p>Courtney Pottinger</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Armeddon wooden jump rope for a few months now and I'm extremely impressed with its quality and durability. The wooden handles provide a comfortable grip and the rope itself is made of high-quality materials that can withstand heavy use. I highly recommend this jump rope to anyone looking for a reliable and versatile piece of workout equipment."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-114.jpg" alt="">
                    <p>Kaison Cash</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've tried several different jump ropes over the years, but the Armeddon wooden jump rope is by far the best. The weight of the wooden handles adds a unique resistance to my workout and I've seen a noticeable improvement in my muscle tone and endurance. It's also adjustable, which makes it perfect for both beginners and advanced jumpers. I love this jump rope and highly recommend it to anyone looking to take their fitness to the next level."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>