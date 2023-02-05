<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-fairtex-bk-150.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Fairtex bk</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>17 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>150$</p>
        </div>
        <div class="product-description">
            <p>Fairtex BK gloves are a popular choice among martial arts enthusiasts, especially those who practice Muay Thai, Kickboxing or boxing. They are well-known for their high-quality construction, durability and protection features that make them an ideal choice for training and competition.</p>
            <p>One of the main advantages of the Fairtex BK gloves is their superior construction. The gloves are made with premium synthetic leather and reinforced stitching which ensures they are durable enough to withstand the rigors of intense training and competition. The gloves also feature triple-layer foam padding which provides a high level of protection for the hands and wrists, while still allowing for a natural range of motion. The foam padding is also designed to distribute the impact of strikes evenly, which reduces the risk of injury.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Fairtext bk">
            <input type="hidden" name="productimage" value="boxing-fairtex-bk-150.webp">
            <input type="hidden" name="productprice" value="150">
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
                <img src="images/boxing-king-thor-bk-160.webp" alt="">
                <p>king thor bk</p>
                <span>160$</span>
                <a href="king-thor-bk-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-dominator-real-leather-red-30.webp" alt="">
                <p>dominator real leather red</p>
                <span>30$</span>
                <a href="dominator-real-leather-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-venum-contender-2.0-gold-44.webp" alt="">
                <p>venum contender 2.0 gold</p>
                <span>44$</span>
                <a href="venum-contender-2.0-gold.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-11.jpg" alt="">
                    <p>Jep Norton</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Fairtex BK gloves and they have quickly become my go-to gloves for training. The superior construction with premium synthetic leather and reinforced stitching make them extremely durable and able to withstand intense training sessions."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-12.jpg" alt="">
                    <p>Chester Irvin</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using Fairtex BK gloves for over a year now and they have held up incredibly well. The construction is top-notch and the synthetic leather is very durable. The triple-layer foam padding provides excellent protection for my hands and wrists and distributes the impact of strikes well."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>