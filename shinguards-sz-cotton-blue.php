<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-sz-cotton-blue-10.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz cotton blue</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>25 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>10$</p>
        </div>
        <div class="product-description">
            <p>The SZ Cotton Blue Shinguards are a top-notch product that offers a combination of protection, comfort, and style. These shinguards are made with a cotton blend material that provides excellent comfort, breathability and durability, making them perfect for extended use. The design of the shinguards is also noteworthy, as it features an adjustable strap that allows for a customizable and secure fit. </p>
            <p>In addition to the excellent comfort and durability, the SZ Cotton Blue Shinguards are also very lightweight. They are designed to provide excellent freedom of movement, which is essential for martial arts training.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Sz cotton blue">
            <input type="hidden" name="productimage" value="shinguards-sz-cotton-blue-10.webp">
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
                <img src="images/shinguards-sz-cotton-red-10.webp" alt="">
                <p>sz cotton red</p>
                <span>10$</span>
                <a href="shinguards-sz-cotton-red.php">View</a>
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
                    <img src="images/r-p-77.jpg" alt="">
                    <p>Gale Saylor</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am so happy with my purchase of the SZ Cotton Blue Shinguards. They are comfortable, durable, and the adjustable strap ensures a perfect fit. The unique blue color is also a nice touch."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-78.jpg" alt="">
                    <p>Rhys Richard</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the SZ Cotton Blue Shinguards for martial arts training and they are fantastic! Lightweight, breathable and the adjustable strap ensures a secure fit. Plus, the blue color is stylish and unique."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>