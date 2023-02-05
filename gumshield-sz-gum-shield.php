<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/gum-shield-sz-4.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz gum shield</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>50 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>4$</p>
        </div>
        <div class="product-description">
            <p>The SZ Gumshield is a high-quality piece of protective gear designed for combat sports such as boxing, kickboxing, and MMA. One of the key benefits of this gumshield is its custom fit design. It is designed to be moldable by the user, allowing them to mold the shield to their own teeth and gums for a comfortable and secure fit. This is particularly beneficial for fighters who want to ensure proper fit and maximum protection for their teeth and gums during training and competition.</p>
            <p>Another advantage of the SZ Gumshield is its construction and materials. The gumshield is made of a durable and high-quality material that can withstand the impact of punches and kicks. The material is also BPA-free, latex-free, and phthalate-free, ensuring safety and non-toxicity for the user. The gumshield also features a secure fit, with a flexible and comfortable fit that stays securely in place during intense training or competition.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Sz Gum Shield">
            <input type="hidden" name="productimage" value="gum-shield-sz-4.webp">
            <input type="hidden" name="productprice" value="4">
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
                <img src="images/gum-shield-ufc-opro-black-10.webp" alt="">
                <p>ufc opro black</p>
                <span>10$</span>
                <a href="gumshield-ufc-opro-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/gum-shield-sz-black-8.webp" alt="">
                <p>gum shield sz black</p>
                <span>8$</span>
                <a href="gumshield-sz-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/gum-shield-venum-challenger-white-15.webp" alt="">
                <p>venum challenger white</p>
                <span>15$</span>
                <a href="gumshield-venum-challenger-white.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-65.jpg" alt="">
                    <p>Kamryn Kirk</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The SZ Gumshield is the best investment I've ever made, it saved my teeth during a match!"</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-66.jpg" alt="">
                    <p>Ward Peck</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I love my SZ Gumshield, it fits like a glove and gave me the confidence to train harder!"</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>