<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/mma-venom-challenger-47.jpg" alt="">
    </div>
    <div class="product-container-content">
        <h1>mma venum challenger</h1>
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
            <p>47$</p>
        </div>
        <div class="product-description">
            <p>MMA gloves are an essential piece of equipment for anyone who is training or competing in Mixed Martial Arts. The Ringhorns Charger MMA gloves are a popular choice among fighters due to their high-quality construction and versatile design that is suitable for MMA.</p>
            <p>The Venum Challenger MMA gloves are considered to be of high quality due to several factors. Firstly, they are made with durable, multi-layer foam that provides superior shock absorption, protecting the fighters hands and wrists while striking. The gloves also feature a full attached thumb design which reduces the risk of thumb injury during grappling and striking.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="MMA venom challenger">
            <input type="hidden" name="productimage" value="mma-venom-challenger-47.jpg">
            <input type="hidden" name="productprice" value="47">
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
                <img src="images/mma-dominator-label-27.webp" alt="">
                <p>mma dominator label</p>
                <span>27$</span>
                <a href="mma-dominator-label.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/mma-venom-sparring-challenger-49.jpg" alt="">
                <p>mma venum sparring challenger</p>
                <span>49$</span>
                <a href="mma-venum-sparring-challenger.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/mma-leone-gp121-46.webp" alt="">
                <p>leone gp121</p>
                <span>50$</span>
                <a href="leone-gp121.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-27.jpg" alt="">
                    <p>Cornell Trevis</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I've been training MMA for years and I've gone through a lot of gloves, but the Venum Challenger gloves are by far the best I've ever used. The shock absorption is fantastic, and my hands and wrists feel protected even during the most intense strikes. The attached thumb design is a game changer too - I used to worry about thumb injuries all the time, but not anymore."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-28.jpg" alt="">
                    <p>Devon Farnham</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I was really impressed with the Venum Challenger gloves when I first got them. They are super comfortable and fit like a glove (no pun intended). I love the breathability and ventilation as well - it makes such a difference during training. The skintex leather is durable and easy to clean too. I'm truly amazed by the quality of these gloves and would recommend them to any MMA fighter."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>