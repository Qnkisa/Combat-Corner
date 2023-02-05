<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-sz-cotton-red-10.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz cotton red</h1>
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
            <p>10$</p>
        </div>
        <div class="product-description">
            <p>The SZ Cotton Red Shinguards are a premium product that offers a combination of protection, comfort, and style. These shinguards are made with a cotton blend material that provides excellent comfort, breathability and durability, making them perfect for extended use. </p>
            <p>The design of the shinguards is also noteworthy, as it features an adjustable strap that allows for a customizable and secure fit. This ensures that the shinguards stay in place during vigorous training and sparring. The red color gives a bold and striking look, making them ideal for those who want to stand out from the crowd.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Sz cotton red">
            <input type="hidden" name="productimage" value="shinguards-sz-cotton-red-10.webp">
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
                <img src="images/shinguards-sz-cotton-black-10.webp" alt="">
                <p>sz cotton black</p>
                <span>10$</span>
                <a href="shinguards-sz-cotton-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-sz-cotton-blue-10.webp" alt="">
                <p>dominator elite blue</p>
                <span>10$</span>
                <a href="shinguards-sz-cotton-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-venum-kontact-blue-24.webp" alt="">
                <p>venum contact blue</p>
                <span>24$</span>
                <a href="shinguards-venum-contact-blue.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-79.jpg" alt="">
                    <p>Darryl Holland</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am in love with my SZ Cotton Red Shinguards. They are comfortable, durable, and the adjustable strap ensures a perfect fit. Plus, the bold red color is eye-catching and makes me feel confident."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-80.jpg" alt="">
                    <p>Humphrey Church</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The SZ Cotton Red Shinguards are a must-have for any martial artist. They are lightweight, breathable and the adjustable strap ensures a secure fit. The red color is also bold and striking, I love them!"</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>