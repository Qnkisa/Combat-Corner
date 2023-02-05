<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-venum-contender-2.0-black-44.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Venum Contender 2.0 black</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>57 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>44$</p>
        </div>
        <div class="product-description">
            <p>The Venum Contender 2.0 Black gloves are a popular choice among fighters and martial artists due to their high-quality construction and durable materials. These gloves are made from premium synthetic leather, which provides both durability and comfort. Additionally, the gloves feature triple density foam padding that offers a high level of protection for the hands and wrists, making them suitable for both training and competition.</p>
            <p>One of the main advantages of the Venum Contender 2.0 Black gloves is their excellent fit and comfort. The gloves have a curved anatomical design that conforms to the natural shape of the hand, which makes them easy to wear for long periods of time. The gloves also feature an adjustable hook-and-loop closure that allows for a secure and customizable fit. The design of the gloves also allows for a easy movement and strike to the target. Overall, these gloves are a great choice for anyone looking for high-quality, durable, and comfortable gloves for their martial arts or combat training.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Venum contender 2.0 black">
            <input type="hidden" name="productimage" value="boxing-venum-contender-2.0-black-44.webp">
            <input type="hidden" name="productprice" value="44">
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
                <img src="images/boxing-venum-contender-2.0-gold-44.webp" alt="">
                <p>venum contender 2.0 gold</p>
                <span>44$</span>
                <a href="venum-contender-2.0-gold.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-everlast-spark-50.webp" alt="">
                <p>Everlast Spark</p>
                <span>50$</span>
                <a href="everlast-spark.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-booster-young-marble-47.webp" alt="">
                <p>Booster young marble</p>
                <span>47$</span>
                <a href="booster-young-marble.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-3.jpg" alt="">
                    <p>Esmund Potter</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Venum Contender 2.0 Black gloves for about 6 months now and I couldn't be happier with my purchase. These gloves are extremely well-made and the synthetic leather feels very durable. The padding is also excellent and I've never had any issues with my hands or wrists during training."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-4.jpg" alt="">
                    <p>Ryan Bellamy</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Venum Contender 2.0 Black gloves and have been very impressed with them so far. The gloves are extremely comfortable and the padding provides a lot of protection. I've used them for both sparring and heavy bag work, and they have held up well."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>