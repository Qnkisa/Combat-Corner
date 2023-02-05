<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-sz-leather-black-32.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz leather black</h1>
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
            <p>32$</p>
        </div>
        <div class="product-description">
            <p>The SZ Leather Black Shinguards are an outstanding product that offers a combination of protection, comfort and durability. These shinguards are made with a genuine leather material that provides excellent durability and protection, making them perfect for intense activities. </p>
            <p>The design of the shinguards is also noteworthy, as it features an adjustable strap that allows for a customizable and secure fit. This ensures that the shinguards stay in place during vigorous training and sparring. The black color gives a sleek and classic look, making them suitable for all types of martial arts, such as karate, taekwondo, kickboxing, etc.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Sz leather black">
            <input type="hidden" name="productimage" value="shinguards-sz-leather-black-32.webp">
            <input type="hidden" name="productprice" value="32">
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
                <img src="images/shinguards-sz-leather-blue-32.webp" alt="">
                <p>sz leather blue</p>
                <span>32$</span>
                <a href="shinguards-sz-leather-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-sz-leather-red-32.webp" alt="">
                <p>sz leather red</p>
                <span>32$</span>
                <a href="shinguards-sz-leather-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/shinguards-venum-challenger-standup-58.webp" alt="">
                <p>venum challenger standup</p>
                <span>58$</span>
                <a href="shinguards-venum-challenger-standup.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-81.jpg" alt="">
                    <p>Colten Brandon</p>
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
                    <img src="images/r-p-82.jpg" alt="">
                    <p>Carlton Royceston</p>
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