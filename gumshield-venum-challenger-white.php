<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/gum-shield-venum-challenger-white-15.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>venum challenger white</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>40 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>15$</p>
        </div>
        <div class="product-description">
            <p>The Venum Challenger White Gumshield is a top-of-the-line protective gear designed for combat sports like boxing, kickboxing, and MMA. One of its standout features is its customizable fit, allowing the user to mold the shield to their own teeth and gums for a comfortable and secure fit, which is essential for fighters who want to ensure proper fit and maximum protection for their teeth and gums.</p>
            <p>Another advantage of the Venum Challenger White Gumshield is its construction and materials. It is made of high-quality, durable materials that can withstand the impact of punches and kicks, and it is also BPA-free, latex-free and phthalate-free, making it safe to use and non-toxic. The gumshield also has a flexible and comfortable fit that stays securely in place during intense training or competition, giving the user peace of mind during their training or competition. The white color gives it a sleek and clean look.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Venum challenger white">
            <input type="hidden" name="productimage" value="gum-shield-venum-challenger-white-15.webp">
            <input type="hidden" name="productprice" value="15">
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
                <img src="images/gum-shield-sz-4.webp" alt="">
                <p>sz gum shield</p>
                <span>4$</span>
                <a href="gumshield-sz-gum-shield.php">View</a>
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
                    <img src="images/r-p-61.jpg" alt="">
                    <p>Moses Eaton</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I was really impressed with the Venum Challenger White Gumshield. The custom fit design provided maximum protection for my teeth and gums during training and competition. The white color gives it a sleek look. I highly recommend this gumshield to any martial artist looking for a high-quality piece of protective gear."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-62.jpg" alt="">
                    <p>Tristin Bell</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am a boxer and I have been using the Venum Challenger White Gumshield for several months now, it exceeded my expectations. The custom fit design is comfortable and secure. The white color gives it a clean and professional look. I highly recommend this gumshield to any boxer or martial artist looking for a high-quality piece of protective gear."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>