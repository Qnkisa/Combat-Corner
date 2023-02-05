<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/handwraps-sz-2.5m-4.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz 2.5m black</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>31 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>4$</p>
        </div>
        <div class="product-description">
            <p>The Sz 2.5m Black Handwraps are an exceptional choice for martial artists looking for a high-quality, durable and supportive hand wraps. These handwraps are made from a blend of cotton and elastic, which provide a balance of flexibility and support for the wrists and hands.</p>
            <p>In addition to their functional benefits, the Sz 2.5m Black Handwraps are also a great option for martial artists looking for a stylish and professional look. The black color gives them a sleek and professional look, making them perfect for use in competitions and tournaments. They are also easy to clean and maintain, so they will continue to look and perform great for a long time. Overall, the Sz 2.5m Black Handwraps are a top-of-the-line choice for martial artists looking for a high-quality, durable, and stylish handwrap.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Sz 2.5m black">
            <input type="hidden" name="productimage" value="handwraps-sz-2.5m-4.webp">
            <input type="hidden" name="productprice" value="4">
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
                <img src="images/handwraps-dominator-2.5m-black-5.webp" alt="">
                <p>dominator 2.5m black</p>
                <span>5$</span>
                <a href="handwraps-dominator-2.5m-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-dominator-2.5m-blue-5.webp" alt="">
                <p>dominator 2.5m blue</p>
                <span>5$</span>
                <a href="handwraps-dominator-2.5m-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-dominator-2.5m-red-5.webp" alt="">
                <p>dominator 2.5m red</p>
                <span>5$</span>
                <a href="handwraps-dominator-2.5m-red.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-97.jpg" alt="">
                    <p>Egbert Waters</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am a boxer and I have been using the Sz 2.5m Black Handwraps for my training and fights, they are amazing! They provide great support for my wrists and hands, and the elastic blend allows for a good range of motion. I would highly recommend these handwraps to any boxer."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-98.jpg" alt="">
                    <p>Nathan Pratt</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the Sz 2.5m Black Handwraps for my boxing training, they are top-notch. The thumb loop and hook-and-loop closure ensures a secure fit, and the cotton and elastic blend provides the perfect amount of support and flexibility for my wrists and hands. I highly recommend these handwraps to any boxer."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>