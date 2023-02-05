<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-sz-cotton-black-10.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz cotton black</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>13 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>10$</p>
        </div>
        <div class="product-description">
            <p>The SZ Cotton Black Shinguards are a high-quality product that offers a combination of protection, comfort and durability. These shinguards are made with a cotton blend material that provides excellent comfort and breathability, making them perfect for extended use. The design of the shinguards is also noteworthy, as it features an adjustable strap that allows for a customizable and secure fit.</p>
            <p>The cotton blend material is also very breathable, which helps to keep the feet dry and cool even during intense training sessions. The adjustable strap ensures a secure fit and the black color gives a sleek and professional look. Overall, the SZ Cotton Black Shinguards are a great choice for anyone looking for a high-quality, comfortable, durable and stylish shinguard that can withstand the demands of intense martial arts training.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Sz cotton black">
            <input type="hidden" name="productimage" value="shinguards-sz-cotton-black-10.webp">
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
                    <img src="images/r-p-75.jpg" alt="">
                    <p>Logan Sharrow</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The SZ Cotton Black Shinguards are a must-have for any martial artist. They are comfortable, durable, and provide great protection. I highly recommend them."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-76.jpg" alt="">
                    <p>Reed Wilbur</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the SZ Cotton Black Shinguards for a few months now and I'm impressed. They are lightweight, breathable and the adjustable strap ensures a perfect fit. Great for martial arts training!"</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>