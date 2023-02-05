<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/gum-shield-dominator-white-12.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>dominator white</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>19 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>12$</p>
        </div>
        <div class="product-description">
            <p>The Dominator White Gumshield is a top-notch protective gear designed specifically for combat sports such as boxing, kickboxing, and MMA. One of its key features is its customizable fit, which allows the user to mold the shield to the contours of their own teeth and gums, providing a secure and comfortable fit. This is particularly beneficial for fighters who want to ensure a proper fit and maximum protection for their teeth and gums during training and competition.</p>
            <p>In short, the Dominator White Gumshield is a top-of-the-line protective gear that offers a customizable fit, durable construction, and a secure fit, making it an ideal option for fighters who want to ensure proper protection for their teeth and gums during training and competition. The sleek white color adds a touch of professionalism to the gear.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator White">
            <input type="hidden" name="productimage" value="gum-shield-dominator-white-12.webp">
            <input type="hidden" name="productprice" value="12">
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
                    <img src="images/r-p-64.jpg" alt="">
                    <p>Merritt Kimberly</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am a kickboxer and I have been using the Dominator White Gumshield for several months now and it has exceeded my expectations. The custom fit design is comfortable and secure, the durable material can withstand intense training. The white color gives it a sleek and professional look. I highly recommend this gumshield to any kickboxer or martial artist looking for a high-quality piece of protective gear."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-63.jpg" alt="">
                    <p>Julia Constable</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Dominator White Gumshield and it has been a game-changer for my MMA training. The custom fit design provides maximum protection for my teeth and gums and the durable material can withstand intense training. The white color gives it a professional look. I highly recommend this gumshield to any MMA fighter or martial artist looking for a high-quality piece of protective gear."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>