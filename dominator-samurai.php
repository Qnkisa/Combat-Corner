<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-dominator-samurai-60.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Dominator Samurai</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>13 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>60$</p>
        </div>
        <div class="product-description">
            <p>The Dominator Samurai gloves are known for their unique design and traditional aesthetic that is inspired by the samurai of feudal Japan. The gloves feature a striking design that is both bold and elegant, with intricate detailing and embroidery that gives them a distinct look.</p>
            <p>In addition to their aesthetic appeal, the Dominator Samurai gloves are also known for their exceptional quality and durability. The gloves are made with premium materials, including genuine leather construction and reinforced stitching. The gloves have also been designed with modern technology such as multi-layer foam padding for maximum protection. The padding also provided maximum support and force distribution during striking. This ensures that the gloves can withstand the rigors of intense training and competition, and will continue to look and perform well for many years to come. Furthermore, the gloves have an added feature which the traditional hand-wrapping for Japanese martial arts, the gloves have the ability to be adjusted to different hand shapes and sizes by changing the wrapping. This makes the gloves suitable for all types of practitioners.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator Samurai">
            <input type="hidden" name="productimage" value="boxing-dominator-samurai-60.webp">
            <input type="hidden" name="productprice" value="60">
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
                <img src="images/boxing-venum-contender-2.0-black-44.webp" alt="">
                <p>venum contender 2.0 black</p>
                <span>44$</span>
                <a href="venum-contender-2.0-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-pride-sport-blue-35.webp" alt="">
                <p>Pride sport blue</p>
                <span>35$</span>
                <a href="pride-sport-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-sz-real-leather-black-31.webp" alt="">
                <p>Sz real leather black</p>
                <span>31$</span>
                <a href="sz-real-leather-black.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-5.jpg" alt="">
                    <p>Kipling Kingston</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Dominator Samurai gloves and I couldn't be happier with my purchase. Not only do they look incredible with the traditional design, but they also perform exceptionally well. The gloves are made with genuine leather and reinforced stitching that makes them extremely durable and able to withstand intense training. The multi-layer foam padding also provides great protection for my hands and wrists."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-6.jpg" alt="">
                    <p>Aria Bryant</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Dominator Samurai gloves have completely exceeded my expectations. The design is truly one of a kind and it immediately caught my attention. But, the gloves go beyond just their aesthetic appeal. The quality is second to none. The genuine leather and reinforced stitching make them extremely durable and able to withstand intense training. "</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>