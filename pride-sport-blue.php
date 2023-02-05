<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-pride-sport-blue-35.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Pride Sport Blue</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>17 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>35$</p>
        </div>
        <div class="product-description">
            <p>Boxing gloves are an essential piece of equipment for anyone who is training or competing in the sport of boxing. The Dominator fake leather black boxing gloves are a popular choice among boxers due to their design and features that are specific for boxing.</p>
            <p>The PRIDE SPORT BLUE gloves are designed with both performance and durability in mind. They feature high-quality materials and construction techniques that ensure they can withstand the rigors of heavy training and competition. The gloves have extra padding in key areas to protect the hands and wrists while striking, which also helps to reduce fatigue. The gloves also have a secure, velcro closure to give you a comfortable and snug fit during your training.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Pride Sport Blue">
            <input type="hidden" name="productimage" value="boxing-pride-sport-blue-35.webp">
            <input type="hidden" name="productprice" value="35">
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
                <img src="images/boxing-dominator-real-leather-red-30.webp" alt="">
                <p>Dominator real leather red</p>
                <span>30$</span>
                <a href="dominator-real-leather-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-venum-contender-2.0-black-44.webp" alt="">
                <p>venum contender 2.0 black</p>
                <span>44$</span>
                <a href="venum-contender-2.0-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-dominator-samurai-60.webp" alt="">
                <p>dominator samurai</p>
                <span>60$</span>
                <a href="dominator-samurai.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-33.jpg" alt="">
                    <p>Joella Seabrooke</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been using the PRIDE SPORT BLUE gloves for a few months now and I have to say I'm extremely impressed. The gloves have held up incredibly well during my intense training sessions, no sign of wear and tear. The padding is perfectly placed and the extra grip they provide helps me maintain control and power during strikes. The gloves are stylish and comfortable, and I highly recommend them to anyone looking for a high-quality pair of gloves."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-34.jpg" alt="">
                    <p>Joshua Greene</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"The PRIDE SPORT BLUE gloves are simply amazing! They fit like a glove and provide excellent protection for my hands during training. The padding is very well thought out and the gloves are so lightweight you hardly feel them. The blue color gives a good look. I also appreciate the easy-to-clean design and the secure fit. I've used several different brands of gloves over the years and these are by far the best I've ever had. I would recommend these to anyone looking for a top-notch pair of gloves."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>