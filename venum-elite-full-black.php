<?php include 'header.php';?>

<div class="product-container-big">
<div class="product-container">
    <div class="product-container-image">
        <img src="images/head-guards-venum-elite-full-black-83.webp" alt="">
    </div>
    <div class="product-container-content">
        <h1>venum elite full black</h1>
        <div class="product-rating">
            <div class="product-rating-stars">
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
                <ion-icon name="star-outline" class="star-icon"></ion-icon>
            </div>
            <div class="product-rating-reviews">
                <p>34 reviews</p>
            </div>
        </div>
        <div class="product-price">
            <p>83$</p>
        </div>
        <div class="product-description">
            <p>The Venum Elite Full Black head guard is a top-of-the-line piece of protective gear that is perfect for combat sports such as boxing, kickboxing, and MMA. One of the standout features of this head guard is its full coverage design, which offers complete protection for the entire head and face, including the ears and the back of the head. This makes it ideal for fighters who want to minimize their risk of injury during training and competition.</p>
            <p>Another advantage of the Venum Elite Full Black head guard is its high-quality construction and materials. The head guard is made of a durable and high-density foam that provides optimal shock absorption and protection for the head and face. Additionally, the foam padding is strategically placed to protect the most vulnerable areas of the head such as the temples, forehead, and chin. The head guard also features a snug and secure fit, with a Velcro strap and a chin strap that keep the head guard securely in place. The sleek black color gives it a professional and sleek look.</p>
        </div>
        <form action="includes/addtocart.php" method="post">
            <input type="hidden" name="productname" value="Venum elite full black">
            <input type="hidden" name="productimage" value="head-guards-venum-elite-full-black-83.webp">
            <input type="hidden" name="productprice" value="83">
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
                <img src="images/head-guards-sz-black-25.webp" alt="">
                <p>head guard full face sz black</p>
                <span>25$</span>
                <a href="head-guard-full-face-sz-black.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/head-guards-sz-red-25.webp" alt="">
                <p>head guard open face sz red</p>
                <span>25$</span>
                <a href="head-guard-open-face-sz-red.php">View</a>
            </div>
            <div class="similar-product">
                <img src="images/head-guards-venum-challenger-open-face-black-54.webp" alt="">
                <p>venum challenger open face black</p>
                <span>54$</span>
                <a href="venum-challenger-open-face-black.php">View</a>
            </div>
        </div>
    </div>
    <div class="product-reviews">
        <h3>Reviews</h3>
        <div class="product-reviews-helper">
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-57.jpg" alt="">
                    <p>Jerome Jacobson</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I highly recommend the Venum Elite Full Black head guard. The full coverage design provides maximum protection and the high-density foam is durable and effective. The secure fit keeps the head guard in place during intense training. The black color gives it a professional look."</p>
                </div>
            </div>
            <div class="review">
                <div class="review-maker">
                    <img src="images/r-p-58.jpg" alt="">
                    <p>Tyron Wesley</p>
                    <div class="product-rating-stars">
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                        <ion-icon name="star-outline" class="star-icon"></ion-icon>
                    </div>
                </div>
                <div class="review-text">
                    <p>"I am very impressed with the Venum Elite Full Black head guard. It offers complete protection, high-density foam is durable, secure fit and the black color is sleek."</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>