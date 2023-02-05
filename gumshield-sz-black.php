<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/gum-shield-sz-black-8.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz gum shield black</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>27 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>8$</p>
        </div>
        <div class="product-description">
            <p>The SZ Black Gumshield is a high-quality protective gear designed for combat sports such as boxing, kickboxing, and MMA. It features a moldable design that allows the user to customize the fit to their own teeth and gums for a comfortable and secure fit, providing maximum protection for teeth and gums.</p>
            <p>The gumshield is made of a durable and high-quality material that can withstand the impact of punches and kicks, and it is also BPA-free, latex-free, and phthalate-free, ensuring safety and non-toxicity for the user. The sleek black color gives it a professional look.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Sz Gum Shield black">
            <input type="hidden" name="productimage" value="gum-shield-sz-black-8.webp">
            <input type="hidden" name="productprice" value="8">
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
                <img src="images/gum-shield-sz-4.webp" alt="">
                <p>sz gum shield</p>
                <span>4$</span>
                <a href="gumshield-sz-gum-shield.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/gum-shield-dominator-white-12.webp" alt="">
                <p>dominator white</p>
                <span>12$</span>
                <a href="gumshield-dominator-white.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-67.jpg" alt="">
                    <p>Xzavier Masters</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am really pleased with my SZ Black Gumshield, it offers a comfortable fit and effective protection during my training sessions."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-68.jpg" alt="">
                    <p>Monday Holmwood</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The SZ Black Gumshield is a great product, it fits perfectly and provides excellent protection for my teeth and gums."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>