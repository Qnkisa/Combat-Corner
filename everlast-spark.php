<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-everlast-spark-50.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Everlast Spark</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>63 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>50$</p>
        </div>
        <div class="product-description">
            <p>Boxing gloves are an essential piece of equipment for anyone who is training or competing in the sport of boxing. The Dominator fake leather black boxing gloves are a popular choice among boxers due to their design and features that are specific for boxing.</p>
            <p>The Everlast Spark gloves are highly sought after by many fighters due to the superior quality and functionality they offer. One of the key features that make these gloves stand out is the use of advanced EverCool technology, which helps to keep the fighters hands cool and dry during intense training or competition. This technology is achieved by using a specially designed ventilation system which allows for maximum airflow, which helps to reduce perspiration and discomfort.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Everlast Spark">
            <input type="hidden" name="productimage" value="boxing-everlast-spark-50.webp">
            <input type="hidden" name="productprice" value="50">
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
                <img src="images/boxing-booster-young-marble-47.webp" alt="">
                <p>Booster young marble</p>
                <span>47$</span>
                <a href="booster-young-marble.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-sz-fake-leather-black-20.webp" alt="">
                <p>sz fake leather black</p>
                <span>20$</span>
                <a href="sz-fake-leather-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-dominator-samurai-60.webp" alt="">
                <p>dominator samurai</p>
                <span>60$</span>
                <a href="dominator-samurai.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-31.jpg" alt="">
                    <p>Ty Hubbard</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am absolutely amazed by the Everlast Spark gloves! They are incredibly durable and have held up great during my intense training sessions. The padding is perfectly placed to protect my hands and the adjustable straps provide a secure and comfortable fit. These gloves are a must-have for any serious boxer or MMA fighter."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-32.jpg" alt="">
                    <p>Tennyson Rowbottom</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently picked up a pair of Everlast Spark gloves and I am blown away by the quality. They fit like a glove (no pun intended) and provide the perfect amount of protection for my hands during my kickboxing classes. The breathable material keeps my hands cool and dry, even during the toughest workout. I highly recommend these gloves to anyone looking for top-notch protection and comfort."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>