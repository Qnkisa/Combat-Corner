<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/shinguards-sz-leather-red-32.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>sz leather red</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>21 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>32$</p>
        </div>
        <div class="product-description">
            <p>SZ Leather Red Shin guards are considered to be top-of-the-line protective gear for martial arts and other high-impact sports. They are made of genuine leather, which is known for its strength and durability. The red color adds a bold and stylish look to the shin guards, making them stand out from other designs. The shin guards are also designed to fit snugly and securely, ensuring optimal protection for the shins and ankles.</p>
            <p>The padding is strategically placed to provide maximum shock absorption and cushioning, reducing the risk of injury during training or competition. The shin guards are also lightweight and easy to move with, which is an important feature for martial arts practitioners. Overall, SZ Leather Red Shin guards are an excellent choice for anyone looking for high-quality, stylish, and protective gear for martial arts and other high-impact sports.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Sz leather red">
            <input type="hidden" name="productimage" value="shinguards-sz-leather-red-32.webp">
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
                    <img src="images/r-p-85.jpg" alt="">
                    <p>Alf Alvey</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am extremely impressed with the SZ Leather Red Shin guards. The genuine leather material is incredibly durable and the red color gives them a bold look. The padding is also perfectly placed for maximum protection and comfort during training."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-86.jpg" alt="">
                    <p>Ryker Lynton</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I highly recommend the SZ Leather Red Shin guards for martial arts practitioners. They are lightweight and provide excellent protection for the shins and ankles. The red color also makes them stand out from other traditional shin guards and the genuine leather material is very durable."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>