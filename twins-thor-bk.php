<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/boxing-twins-thor-bk-166.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>Twins thor bk</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>29 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>166$</p>
        </div>
        <div class="product-description">
            <p>Boxing gloves are an essential piece of equipment for anyone who is training or competing in the sport of boxing. The Dominator fake leather black boxing gloves are a popular choice among boxers due to their design and features that are specific for boxing.</p>
            <p>One of the main benefits of these gloves is their ergonomic design, which provides excellent wrist support and a natural fist position. This results in a comfortable fit and increased punching power. The gloves have extra padding and multi-layer foam to provide maximum protection and safety to the hands, wrists and knuckles.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Twins thor bk">
            <input type="hidden" name="productimage" value="boxing-twins-thor-bk-166.webp">
            <input type="hidden" name="productprice" value="166">
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
                <img src="images/boxing-fairtex-bk-150.webp" alt="">
                <p>fairtex bk</p>
                <span>150$</span>
                <a href="fairtex-bk.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/boxing-king-thor-bk-160.webp" alt="">
                <p>king thor bk</p>
                <span>160$</span>
                <a href="king-thor-bk-black.php">View</a>
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
                    <img src="images/r-p-41.jpg" alt="">
                    <p>Desmond Curtis</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I recently purchased the Twins Thor BK gloves for my kickboxing training and I have been extremely impressed with their performance. The synthetic leather is durable and has held up well during intense training sessions. The gloves fit comfortably and the padding provided great protection for my hands and wrists. The Velcro closure keeps them securely in place and the iconic Twins logo gives them a sleek and professional look. I highly recommend these gloves to any kickboxer or martial artist looking for a high-quality pair of gloves."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-42.jpg" alt="">
                    <p>Lamont Jarrett</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"As a boxer, I have tried many different gloves, but the Twins Thor BK gloves have been by far the best. The gloves are made of durable synthetic leather and provide great protection for my hands and wrists. The ergonomic design is comfortable and the extra padding and multi-layer foam really makes a difference. The Velcro closure keeps them securely in place, even when throwing powerful punches. The black color and iconic Twins logo give them a sleek and professional look. I will definitely purchase these gloves again."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>