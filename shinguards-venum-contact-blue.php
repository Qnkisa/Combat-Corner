<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-venum-kontact-blue-24.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>venum contact blue</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>15 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>24$</p>
        </div>
        <div class="product-description">
            <p>The Venum Contact Blue Shin guards are a top-of-the-line choice for martial arts and other high-impact sports. They are designed with a multi-layer foam padding that provides excellent shock absorption and cushioning to reduce the risk of injury during training or competition. The shin guards are also designed with an adjustable Velcro strap for a secure and comfortable fit, ensuring optimal protection for the shins and ankles.</p>
            <p>The shin guards are also lightweight and easy to move with, which is an important feature for martial arts practitioners. The Venum brand is also known for their high-quality and durable gear.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Venum contact blue">
            <input type="hidden" name="productimage" value="shinguards-venum-kontact-blue-24.webp">
            <input type="hidden" name="productprice" value="24">
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
                <img src="images/shinguards-sz-cotton-black-10.webp" alt="">
                <p>sz cotton black</p>
                <span>10$</span>
                <a href="shinguards-sz-cotton-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-sz-cotton-blue-10.webp" alt="">
                <p>sz cotton blue</p>
                <span>10$</span>
                <a href="shinguards-sz-cotton-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-sz-cotton-red-10.webp" alt="">
                <p>sz cotton red</p>
                <span>10$</span>
                <a href="shinguards-sz-cotton-red.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-89.jpg" alt="">
                    <p>Kenneth Noel</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Venum Contact Blue shinguards are a game changer! They fit comfortably and provide excellent protection during training and competition. I highly recommend them to any martial artist."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-90.jpg" alt="">
                    <p>Asher Whinery</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Venum Contact Blue shinguards for a few months now and they've held up great. The design is sleek and the padding is top-notch. I love how they stay in place during intense training sessions."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>