<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/weight-vest-armageddon-15kg-50.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>weight vest armageddon 15kg</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>24 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>50$</p>
        </div>
        <div class="product-description">
            <p>The Armageddon Weight Vest is a high-quality piece of fitness equipment that is designed to add resistance to bodyweight exercises, helping to increase overall strength and endurance. One of the key benefits of the Armageddon Weight Vest is its ability to add resistance to a wide range of exercises, from cardio and bodyweight exercises to strength training, making it a versatile and practical tool for fitness enthusiasts of all levels. The 15kg weight vest is suitable for intermediate and advanced users who are looking to take their training to the next level.</p>
            <p>Another advantage of the Armageddon Weight Vest is its durability and quality. The vest is made of high-quality materials that are built to last, and the weights are securely fastened and evenly distributed in the vest, making it comfortable to wear and easy to use. The vest also features an adjustable design, which allows users to adjust the fit to their body, making it comfortable to wear during a wide range of exercises and activities. Furthermore, the vest is suitable for both indoor and outdoor use, making it a great option for those looking to add resistance to their running or other cardio exercises.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Weight Vest Armageddon 15kg">
            <input type="hidden" name="productimage" value="weight-vest-armageddon-15kg-50.webp">
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
                <img src="images/weight-vest-armageddon-10kg-40.webp" alt="">
                <p>weight vest armageddon 10kg</p>
                <span>40$</span>
                <a href="weight-vest-armageddon-10kg.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/weight-vest-armageddon-20kg-65.webp" alt="">
                <p>weight vest armageddon 20kg</p>
                <span>65$</span>
                <a href="weight-vest-armageddon-20kg.php">View</a>
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
                    <img src="images/r-p-125.jpg" alt="">
                    <p>Russ Fitzroy</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Armageddon Weight Vest for a few months now and I am extremely impressed with its quality and versatility. The 15kg weight is perfect for intermediate and advanced users looking to take their training to the next level. The vest is comfortable to wear and easy to use, making it a great tool for a wide range of exercises and activities. I highly recommend this weight vest to anyone looking to add resistance to their workouts."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-126.jpg" alt="">
                    <p>Rhys Presley</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Armageddon Weight Vest is a game changer for me. It's durable, comfortable, and versatile, making it perfect for a wide range of exercises and activities. The 15kg weight is perfect for intermediate and advanced users and it's suitable for indoor and outdoor use. I highly recommend this weight vest to anyone looking to take their fitness to the next level."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>