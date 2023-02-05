<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/neck-trainer-20.jpg" alt="">
    </div>
    <div class="product-container-content">
        <h1>neck trainer</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>82 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>20$</p>
        </div>
        <div class="product-description">
            <p>The Neck Trainer is a highly effective piece of equipment designed to help improve neck strength, flexibility, and overall fitness. One of the key benefits of the Neck Trainer is its ability to target the neck muscles specifically. The design of the Neck Trainer allows users to perform a variety of exercises that isolate and strengthen the neck muscles, which can help to prevent injury and improve overall athletic performance. It also help with the posture and alleviate headaches caused by tension in the neck muscles.</p>
            <p>In summary, the Neck Trainer is a highly effective piece of equipment that is designed to help improve neck strength, flexibility, and overall fitness. Its ability to target the neck muscles specifically, versatility, portability, and ease of use make it a great tool for athletes of all levels and a wide range of sports and activities. It can also be used for rehabilitation and recovery from neck injuries, as well as for injury prevention.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Neck trainer">
            <input type="hidden" name="productimage" value="neck-trainer-20.jpg">
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
                <img src="images/jump-ropes-venum-challenger-speed-15.webp" alt="">
                <p>venum challenger speed</p>
                <span>15$</span>
                <a href="jump-rope-venum-challenger-speed.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-121.jpg" alt="">
                    <p>Lew James</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Neck Trainer for a few weeks now and I can already see a noticeable improvement in my neck strength and posture. It's lightweight, portable and easy to use, making it perfect for both home and gym use. I highly recommend this product to anyone looking to improve their neck fitness and overall well-being."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-122.jpg" alt="">
                    <p>Marlon Moon</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Neck Trainer is a game changer for me. It targets the neck muscles specifically and helped me to improve my neck strength, flexibility, and overall fitness. I highly recommend this product to anyone looking to improve their athletic performance or prevent neck injuries."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>