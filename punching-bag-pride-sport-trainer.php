<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/punching-bags-pride-sport-trainer-140.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>pride sport trainer</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>12 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>140$</p>
        </div>
        <div class="product-description">
            <p>The Pride Sport Punching Trainer is a high-quality piece of equipment that is designed for fitness enthusiasts and athletes who are looking to improve their striking skills and overall fitness. One of the key benefits of the punching trainer is its ability to provide an intense and challenging workout, specifically targeting the upper body muscles, including the arms, shoulders, chest, and back. The punching trainer is made of durable materials that can withstand heavy use, and its weight and size make it perfect for hitting, punching and improving striking skills.</p>
            <p>Another advantage of the Pride Sport Punching Trainer is its versatility. The punching trainer can be used by athletes of all levels, from beginners to professionals, and it's suitable for use in a wide range of sports and activities, including martial arts, boxing, and kickboxing. Additionally, the punching trainer is designed to be compact and easy to store, making it a convenient piece of equipment for both home and gym use. Furthermore, it comes with a camo design, which can give a unique look to the gym or home.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Pride Sport trainer">
            <input type="hidden" name="productimage" value="punching-bags-pride-sport-trainer-140.webp">
            <input type="hidden" name="productprice" value="140">
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
                <img src="images/punching-bags-pride-sport-heavy-bag-camo-155.webp" alt="">
                <p>pride sport heavy bag camo</p>
                <span>155$</span>
                <a href="punching-bag-pride-sport-heavy-bag-camo.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/punching-bags-sz-angled-heavy-bag-103.webp" alt="">
                <p>sz angled heavy bag</p>
                <span>103$</span>
                <a href="punching-bag-angled-heavy-bag-sz.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/punching-bags-sz-heavy-bag-red-83.webp" alt="">
                <p>sz heavy bag red</p>
                <span>83$</span>
                <a href="punching-bag-heavy-bag-red-sz.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-131.jpg" alt="">
                    <p>James Botterill</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The Pride Sport Punching Trainer is an excellent piece of equipment for anyone looking to improve their striking skills and overall fitness. It's durable, versatile, and easy to store, making it perfect for both home and gym use. I highly recommend this punching trainer to anyone looking to take their fitness to the next level."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-132.jpg" alt="">
                    <p>Alphonso Sudworth</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am extremely impressed with the Pride Sport Punching Trainer. It's made of high-quality materials that can withstand heavy use and its compact design makes it easy to store. The camo design gives it a unique look and makes it a great addition to any gym or home. I highly recommend this punching trainer to anyone looking for a reliable and durable piece of equipment."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>