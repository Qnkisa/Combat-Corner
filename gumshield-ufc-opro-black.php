<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/gum-shield-ufc-opro-black-10.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>ufc opro black</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
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
            <p>The UFC Opro Black Gumshield is a high-quality piece of protective gear that is designed for use in combat sports such as boxing, kickboxing, and MMA. One of the main benefits of this gumshield is its custom fit design. It is designed to be moldable by the user, allowing them to mold the shield to their own teeth and gums for a comfortable and secure fit. This is particularly beneficial for fighters who want to ensure a proper fit and maximum protection for their teeth and gums.</p>
            <p>Another benefit of the UFC Opro Black Gumshield is its construction and materials. The gumshield is made of a resilient and durable material that is able to withstand the impact of punches and kicks. The material is also BPA-free, latex-free, and phthalate-free, which makes it safe to use and non-toxic. The gumshield also features a secure fit, with a flexible and comfortable fit that stays securely in place during intense training or competition. The black color gives it a sleek and professional look.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Ufc opro black">
            <input type="hidden" name="productimage" value="gum-shield-ufc-opro-black-10.webp">
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
                <img src="images/gum-shield-dominator-white-12.webp" alt="">
                <p>dominator white</p>
                <span>12$</span>
                <a href="gumshield-dominator-white.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/gum-shield-venum-challenger-white-15.webp" alt="">
                <p>venum challenger white</p>
                <span>15$</span>
                <a href="gumshield-venum-challenger-white.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/gum-shield-sz-black-8.webp" alt="">
                <p>sz gum shield black</p>
                <span>8$</span>
                <a href="gumshield-sz-black.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-59.jpg" alt="">
                    <p>Gaylord Colson</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the UFC Opro Black Gumshield for my MMA training and I am extremely impressed with its performance. The custom moldable fit provides maximum protection for my teeth and gums and the durable material can withstand intense training. The black color gives it a professional look. I highly recommend this gumshield to any MMA fighter or martial artist looking for a high-quality piece of protective gear."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-60.jpg" alt="">
                    <p>Patrick Ivers</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am a kickboxer, I have been using the UFC Opro Black Gumshield for several months now and it has exceeded my expectations. The custom fit design is comfortable and secure, the durable material can withstand intense training. The black color gives it a sleek and professional look. I highly recommend this gumshield to any kickboxer or martial artist looking for a high-quality piece of protective gear."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>