<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-venum-challenger-standup-58.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>venum challenger standup</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>68 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>58$</p>
        </div>
        <div class="product-description">
            <p>The Venum Challenger Standup Shin guards are a top-of-the-line choice for martial arts and other high-impact sports. They are made with a multi-layer foam padding that provides excellent shock absorption and cushioning to reduce the risk of injury during training or competition. The shin guards are also designed with an adjustable Velcro strap for a secure and comfortable fit, ensuring optimal protection for the shins and ankles. </p>
            <p>The design of the shin guards includes a curved shape that follows the contour of the leg for a natural movement and better fit. The shin guards are also lightweight and easy to move with, which is an important feature for martial arts practitioners. The Venum brand is also known for their high-quality and durable gear. Overall, the Venum Challenger Standup Shin guards are an excellent choice for anyone looking for high-quality, durable, and protective gear for martial arts and other high-impact sports.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Venum challenger standup">
            <input type="hidden" name="productimage" value="shinguards-venum-challenger-standup-58.webp">
            <input type="hidden" name="productprice" value="58">
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
                <img src="images/shinguards-sz-leather-black-32.webp" alt="">
                <p>sz leather black</p>
                <span>32$</span>
                <a href="shinguards-sz-leather-black.php">View</a>
            </div>
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
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-87.jpg" alt="">
                    <p>Rob Stacks</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the Venum Challenger Standup Shin guards for my martial arts training and they have exceeded my expectations. The multi-layer foam padding provides excellent protection and the adjustable Velcro strap ensures a secure fit. The curved shape also follows the contour of my leg for a natural movement and better fit."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-88.jpg" alt="">
                    <p>Zeke Garnier</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I highly recommend the Venum Challenger Standup Shin guards for anyone who trains in martial arts. They are lightweight and provide excellent protection for the shins and ankles. The adjustable Velcro strap ensures a perfect fit and the curved shape allows for a natural movement. The quality of the Venum brand is also top-notch."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>