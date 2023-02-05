<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/groin-protector-ringhorns-10.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>groin protector ringhorns</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>18 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>10$</p>
        </div>
        <div class="product-description">
            <p>The Ringhorns Groin Protector is a high-quality piece of protective gear designed to protect the most sensitive areas of the body during training or competition. The protector is made of durable and high-quality materials that are built to last and can withstand heavy use. The design of the protector is lightweight and breathable, providing a comfortable fit while also allowing for freedom of movement. It also features a flexible design that allows for a full range of motion and a secure fit that stays in place during activity.</p>
            <p>One of the key advantages of the Ringhorns Groin Protector is its level of protection. The protector is designed to provide maximum coverage and support for the sensitive areas of the body. It's also designed to provide a high level of comfort and flexibility, making it suitable for use in a wide range of sports and activities, including martial arts, wrestling, and boxing. Additionally, the protector is suitable for use by both men and women, and it comes in a variety of sizes to ensure a proper fit.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Groin protector ringhorns">
            <input type="hidden" name="productimage" value="groin-protector-ringhorns-10.webp">
            <input type="hidden" name="productprice" value="10">
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
                    <img src="images/r-p-119.jpg" alt="">
                    <p>Dana Courtenay</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Ringhorns Groin Protector and I am extremely impressed with its level of protection and comfort. The design is lightweight and breathable, making it perfect for training and competition. I highly recommend this protector to anyone looking for a high-quality piece of protective gear."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-120.jpg" alt="">
                    <p>Harland Dixon</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Ringhorns Groin Protector is a must-have for anyone involved in contact sports. It provides a high level of protection and support for the sensitive areas of the body, and the lightweight and breathable design ensures a comfortable fit. I highly recommend this protector to anyone looking for a reliable and durable piece of protective gear."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>