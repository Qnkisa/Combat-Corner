<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-king-thor-bk-160.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>King thor bk black</h1>
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
            <p>160$</p>
        </div>
        <div class="product-description">
            <p>King Thor BK Black Gloves are a top-of-the-line choice for anyone looking for a high-performance glove. These gloves are made with premium materials and feature a sleek, black design that is both stylish and functional.</p>
            <p>One of the key features of the King Thor BK Black Gloves is their durability. The gloves are made with a combination of leather and synthetic materials that are designed to withstand the wear and tear of regular use. They are reinforced in key areas, such as the fingertips and palms, to provide added protection against abrasion and impact.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="King thor bk black">
            <input type="hidden" name="productimage" value="boxing-king-thor-bk-160.webp">
            <input type="hidden" name="productprice" value="160">
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
                <img src="images/boxing-fairtex-bk-150.webp" alt="">
                <p>Fairtext bk</p>
                <span>150$</span>
                <a href="fairtex-bk.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-twins-thor-bk-166.webp" alt="">
                <p>Twins thor bk</p>
                <span>166$</span>
                <a href="twins-thor-bk.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-everlast-spark-50.webp" alt="">
                <p>Everlast Spark</p>
                <span>50$</span>
                <a href="everlast-spark.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-1.jpg" alt="">
                    <p>Gunter Ruhl</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using King Thor BK Black gloves for over a year now and they're fantastic. They're durable, comfortable and offer great protection for my hands. The adjustable wrist strap is a great added feature that allows me to get the perfect fit. I highly recommend these gloves."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-2.jpg" alt="">
                    <p>Martin Peter</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"As an avid cyclist, I recently picked up a pair of King Thor BK Black Gloves and I couldn't be happier. They offer great padding for the palms, reinforced knuckle protection and are comfortable and breathable. The adjustable wrist strap ensures a perfect fit every time. Highly recommend these gloves to anyone looking for a great pair."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>

