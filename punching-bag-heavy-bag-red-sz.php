<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/punching-bags-sz-heavy-bag-red-83.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>heavy bag red sz</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>58 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>83$</p>
        </div>
        <div class="product-description">
            <p>The SZ Heavy Bag Red is a top-of-the-line piece of equipment for any serious fighter or fitness enthusiast. Made from high-quality materials, this heavy bag is built to last and can withstand even the toughest training sessions. Its durable construction ensures that it will hold up to constant use and the heavy weight of the bag is perfect for building strength and power in punches, kicks and strikes.</p>
            <p>In addition to its durability, the SZ Heavy Bag Red is also designed to provide an optimal training experience. Its unique red color makes it easy to spot in a gym or training room, while its well-balanced design allows for a wider range of punches and strikes to be practiced. The bag also has a comfortable grip, making it easy to hold and maneuver during training. Whether you're a professional boxer or a beginner just starting out, the SZ Heavy Bag Red is an excellent choice for those looking to take their training to the next level.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Heavy bag red sz">
            <input type="hidden" name="productimage" value="punching-bags-sz-heavy-bag-red-83.webp">
            <input type="hidden" name="productprice" value="83">
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
                    <img src="images/r-p-139.jpg" alt="">
                    <p>Ozzie Eliott</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The SZ Heavy Bag Red is a game changer! It's extremely durable and well-balanced, making it perfect for all levels of training. I highly recommend it!"</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-140.jpg" alt="">
                    <p>Sidney Shepherd</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the SZ Heavy Bag Red for the past few months and it's been a great addition to my training. The red color makes it easy to spot in the gym and the bag is well-balanced for a variety of strikes. It's a great product!"</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>