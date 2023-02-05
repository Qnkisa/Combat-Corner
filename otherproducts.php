<?php include 'header.php';?>

<div class="products-page-container">
    <h1>Other Products:</h1>
    <div class="items-filter">
        <p>Product type:</p>
        <ul>
            <li>
                <label class="checkbox-container">Jump Ropes
                    <input type="radio" id="jump-rope-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="checkbox-container">Punching Bags
                    <input type="radio" id="punching-bags-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="checkbox-container">Other Products
                    <input type="radio" id="other-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
        </ul>
    </div>
    <div class="items-filter-input">
        <label for="searchinputgloves">Search For Products:</label>
        <input type="text" id="search-input-other-products" placeholder="Search...">
    </div>
    <div class="products" id="other-products">
        <div class="product punching-bag">
            <img src="images/punching-bags-pride-sport-heavy-bag-camo-155.webp" alt="">
            <p class="product-name-other-products">Pride Sport heavy bag camo</p>
            <span>155$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Pride Sport heavy bag camo">
                <input type="hidden" name="productimage" value="punching-bags-pride-sport-heavy-bag-camo-155.webp">
                <input type="hidden" name="productprice" value="155">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="punching-bag-pride-sport-heavy-bag-camo.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product jump-rope">
            <img src="images/jump-ropes-armageddon-wooden-3.webp" alt="">
            <p class="product-name-other-products">jump rope Armageddon wooden</p>
            <span>3$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="jump rope Armageddon wooden">
                <input type="hidden" name="productimage" value="jump-ropes-armageddon-wooden-3.webp">
                <input type="hidden" name="productprice" value="3">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="jump-rope-armageddon-wooden.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product other-product">
            <img src="images/groin-protector-ringhorns-10.webp" alt="">
            <p class="product-name-other-products">Groin protector ringhorns</p>
            <span>10$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Groin protector ringhorns">
                <input type="hidden" name="productimage" value="groin-protector-ringhorns-10.webp">
                <input type="hidden" name="productprice" value="10">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="groin-protector-ringhorns.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product other-product">
            <img src="images/neck-trainer-20.jpg" alt="">
            <p class="product-name-other-products">Neck trainer</p>
            <span>20$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Neck trainer">
                <input type="hidden" name="productimage" value="neck-trainer-20.jpg">
                <input type="hidden" name="productprice" value="20">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="neck-trainer.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product punching-bag">
            <img src="images/punching-bags-pride-sport-trainer-140.webp" alt="">
            <p class="product-name-other-products">Pride Sport trainer</p>
            <span>140$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Pride Sport trainer">
                <input type="hidden" name="productimage" value="punching-bags-pride-sport-trainer-140.webp">
                <input type="hidden" name="productprice" value="140">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="punching-bag-pride-sport-trainer.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product punching-bag">
            <img src="images/punching-bags-pride-sport-water-bag-98.webp" alt="">
            <p class="product-name-other-products">Pride Sport water bag</p>
            <span>98$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Pride Sport water bag">
                <input type="hidden" name="productimage" value="punching-bags-pride-sport-water-bag-98.webp">
                <input type="hidden" name="productprice" value="98">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="punching-bag-pride-sport-water-bag.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product punching-bag">
            <img src="images/punching-bags-sz-angled-heavy-bag-103.webp" alt="">
            <p class="product-name-other-products">Angled heavy bag Sz</p>
            <span>103$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Angled heavy bag Sz">
                <input type="hidden" name="productimage" value="punching-bags-sz-angled-heavy-bag-103.webp">
                <input type="hidden" name="productprice" value="103">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="punching-bag-angled-heavy-bag-sz.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product other-product">
            <img src="images/weight-vest-armageddon-10kg-40.webp" alt="">
            <p class="product-name-other-products">Weight Vest Armageddon 10kg</p>
            <span>40$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Weight Vest Armageddon 10kg">
                <input type="hidden" name="productimage" value="weight-vest-armageddon-10kg-40.webp">
                <input type="hidden" name="productprice" value="40">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="weight-vest-armageddon-10kg.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product other-product">
            <img src="images/weight-vest-armageddon-15kg-50.webp" alt="">
            <p class="product-name-other-products">Weight Vest Armageddon 15kg</p>
            <span>50$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Weight Vest Armageddon 15kg">
                <input type="hidden" name="productimage" value="weight-vest-armageddon-15kg-50.webp">
                <input type="hidden" name="productprice" value="50">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="weight-vest-armageddon-15kg.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product other-product">
            <img src="images/weight-vest-armageddon-20kg-65.webp" alt="">
            <p class="product-name-other-products">Weight Vest Armageddon 20kg</p>
            <span>65$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Weight Vest Armageddon 20kg">
                <input type="hidden" name="productimage" value="weight-vest-armageddon-20kg-65.webp">
                <input type="hidden" name="productprice" value="65">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="weight-vest-armageddon-20kg.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product jump-rope">
            <img src="images/jump-ropes-body-sculpture-counter-9.webp" alt="">
            <p class="product-name-other-products">jump rope body sculpture counter</p>
            <span>9$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="jump rope body sculpture counter">
                <input type="hidden" name="productimage" value="jump-ropes-body-sculpture-counter-9.webp">
                <input type="hidden" name="productprice" value="9">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="jump-rope-body-sculpture-counter.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product punching-bag">
            <img src="images/punching-bags-sz-heavy-bag-blue-83.webp" alt="">
            <p class="product-name-other-products">Heavy bag blue sz</p>
            <span>83$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Heavy bag blue sz">
                <input type="hidden" name="productimage" value="punching-bags-sz-heavy-bag-blue-83.webp">
                <input type="hidden" name="productprice" value="83">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="punching-bag-heavy-bag-blue-sz.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product jump-rope">
            <img src="images/jump-ropes-venum-challenger-speed-15.webp" alt="">
            <p class="product-name-other-products">venum challenger speed</p>
            <span>15$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="venum challenger speed">
                <input type="hidden" name="productimage" value="jump-ropes-venum-challenger-speed-15.webp">
                <input type="hidden" name="productprice" value="15">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="jump-rope-venum-challenger-speed.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product punching-bag">
            <img src="images/punching-bags-sz-heavy-bag-red-83.webp" alt="">
            <p class="product-name-other-products">Heavy bag red sz</p>
            <span>83$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Heavy bag red sz">
                <input type="hidden" name="productimage" value="punching-bags-sz-heavy-bag-red-83.webp">
                <input type="hidden" name="productprice" value="83">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="punching-bag-heavy-bag-red-sz.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product punching-bag">
            <img src="images/punching-bags-sz-speed-bag-15.webp" alt="">
            <p class="product-name-other-products">Speed bag sz</p>
            <span>15$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Speed bag sz">
                <input type="hidden" name="productimage" value="punching-bags-sz-speed-bag-15.webp">
                <input type="hidden" name="productprice" value="15">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="punching-bag-speed-bag-sz.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
    </div>
    <div class="product-container-bonus">
        <a href="glovesproducts.php">Gloves</a>
        <a href="protectorproducts.php">Protectors</a>
    </div>
</div>

    <script src="scripts/searchinputotherproducts.js"></script>
    <script src="scripts/otherproducts.js"></script>
<?php include 'footer.php';?>

