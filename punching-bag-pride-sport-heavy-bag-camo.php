<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/punching-bags-pride-sport-heavy-bag-camo-155.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>pride sport heavy bag camo</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>55 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>155$</p>
        </div>
        <div class="product-description">
            <p>The Pride Sport Heavy Bag Camo is a high-quality piece of equipment designed for serious fitness enthusiasts and athletes who are looking to improve their strength and endurance. One of the key benefits of the heavy bag is its ability to provide an intense and challenging workout. The bag is made of durable materials that can withstand heavy use, and its weight and size make it perfect for hitting, kicking, and punching. The bag also features a camouflage design, which can give a unique look to the gym or home.</p>
            <p>Another advantage of the Pride Sport Heavy Bag Camo is its durability and quality. The bag is made of high-quality materials that are built to last and can withstand heavy use, making it a reliable piece of equipment that will last for years to come. Additionally, the bag is easy to install, which means that it can be used in a wide range of settings, from home gyms to commercial gyms, and it's suitable for use by both men and women, and people of all ages. Furthermore, it's great for cardio, endurance and strength training, and can be used for multiple martial arts and combat sports.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Pride Sport heavy bag camo">
            <input type="hidden" name="productimage" value="punching-bags-pride-sport-heavy-bag-camo-155.webp">
            <input type="hidden" name="productprice" value="155">
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
                <img src="images/punching-bags-pride-sport-trainer-140.webp" alt="">
                <p>pride sport trainer</p>
                <span>140$</span>
                <a href="punching-bag-pride-sport-trainer.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/punching-bags-sz-angled-heavy-bag-103.webp" alt="">
                <p>sz angled heavy bag</p>
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
                    <img src="images/r-p-129.jpg" alt="">
                    <p>Lex Groves</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Pride Sport Heavy Bag Camo is a great piece of equipment. It's durable, easy to install and the camouflage design gives it a unique look. It's perfect for cardio, endurance and strength training and it can be used for multiple martial arts and combat sports. I highly recommend this heavy bag to anyone looking to improve their strength and endurance."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-130.jpg" alt="">
                    <p>Des Field</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am really impressed with the Pride Sport Heavy Bag Camo. It's made of high-quality materials that can withstand heavy use and it's easy to install. The camouflage design is unique and gives it a great look. It's perfect for people of all ages, and suitable for use by both men and women. I highly recommend this heavy bag to anyone looking for a reliable and durable piece of equipment."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>