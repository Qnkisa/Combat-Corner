<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-dominator-fake-leather-red-20.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Dominator fake leather red</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>20 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>20$</p>
        </div>
        <div class="product-description">
            <p>Boxing gloves are an essential piece of equipment for anyone who is training or competing in the sport of boxing. The Dominator fake leather black boxing gloves are a popular choice among boxers due to their design and features that are specific for boxing.</p>
            <p>One of the main advantages of the Dominator fake leather red boxing gloves is their durability. They are made with synthetic leather which mimics the feel and durability of real leather, this allows boxers to have the same experience as using real leather gloves but with a more affordable price point. The gloves also feature reinforced stitching which ensures they will last for a long time and withstands the rigors of training.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Dominator Fake Leather Red">
            <input type="hidden" name="productimage" value="boxing-dominator-fake-leather-red-20.webp">
            <input type="hidden" name="productprice" value="20">
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
                <img src="images/boxing-dominator-fake-leather-black-20.webp" alt="">
                <p>dominator fake leather black</p>
                <span>20$</span>
                <a href="dominator-fake-leather-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-sz-fake-leather-black-20.webp" alt="">
                <p>sz fake leather black</p>
                <span>20$</span>
                <a href="sz-fake-leather-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-everlast-spark-50.webp" alt="">
                <p>Everlast spark</p>
                <span>50$</span>
                <a href="everlast-spark.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-29.jpg" alt="">
                    <p>Trey Hewitt</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Dominator fake leather red boxing gloves and they have quickly become my favorite pair for training and competition. The synthetic leather mimics the feel and durability of real leather, but at a more affordable price point."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-30.jpg" alt="">
                    <p>Rhett Robinson</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I have been using the Dominator fake leather red boxing gloves for several months now and they have exceeded my expectations. The reinforced stitching is extremely durable and the multi-layer foam padding provides excellent protection for my hands. I also appreciate the sleek red design, it gives me a professional look while I'm training and competing."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>