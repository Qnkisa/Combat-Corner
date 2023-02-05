<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/handwraps-venum-4m-white-8.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>venum 4m white</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>18 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>8$</p>
        </div>
        <div class="product-description">
            <p>The Venum 4m White Handwraps are a high-quality hand wraps designed specifically for martial artists. They are made with a blend of materials that provide both support and flexibility to the wrists and hands. The thumb loop and hook-and-loop closure give a snug and secure fit, ensuring the wraps stay in place during rigorous training sessions.</p>
            <p>One of the unique feature of Venum 4m White Handwraps is its ventilation system that allows for breathability and comfort during intense training sessions. This feature allows for improved air circulation and reduce sweat retention, keeping the handwraps fresh and dry for a longer period of time.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Venum 4m white">
            <input type="hidden" name="productimage" value="handwraps-venum-4m-white-8.webp">
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
                <img src="images/handwraps-dominator-4.5m-blue-7.webp" alt="">
                <p>dominator 4.5m blue</p>
                <span>7$</span>
                <a href="handwraps-dominator-4.5m-blue.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-dominator-4.5m-red-7.webp" alt="">
                <p>dominator 4.5m red</p>
                <span>7$</span>
                <a href="handwraps-dominator-4.5m-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/handwraps-doominator-4.5m-black-7.webp" alt="">
                <p>dominator 4.5m black</p>
                <span>7$</span>
                <a href="handwraps-dominator-4.5m-black.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-107.jpg" alt="">
                    <p>Kian Bunker</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the Venum 4m White Handwraps for my martial arts training and they are amazing. The thumb loop and hook-and-loop closure ensure a secure fit and the blend of materials provides the perfect balance of support and flexibility. The ventilation system is a game changer, it keeps my hands cool and dry during training. I highly recommend these handwraps."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-108.jpg" alt="">
                    <p>Silas Peck</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"As a martial artist, I highly recommend the Venum 4m White Handwraps. They provide great support and protection during training and the ventilation system keeps my hands cool and dry. The white color gives them a clean and minimalist look. I highly recommend these handwraps to any martial artist."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>