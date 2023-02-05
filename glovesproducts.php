<?php include 'header.php';?>

<div class="products-page-container">
    <h1>Gloves</h1>
    <div class="items-filter">
        <p>Glove type:</p>
        <ul>
            <li>
                <label class="checkbox-container">Boxing Gloves
                    <input type="radio" id="boxing-gloves-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
            <label class="checkbox-container">MMA Gloves
                    <input type="radio" id="mma-gloves-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
            <label class="checkbox-container">Taekwondo Gloves
                    <input type="radio" id="taekwondo-gloves-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
        </ul>
    </div>   
    <div class="items-filter-input">
        <label for="searchinputgloves">Search For Products:</label>
        <input type="text" id="search-input-gloves" placeholder="Search...">
    </div>
    <div class="products" id="glove-products">
        <div class="product boxing-glove">
            <img src="images/boxing-king-thor-bk-160.webp" alt="">
            <p class="product-name-gloves">King thor bk black</p>
            <span>160$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="King thor bk black">
                <input type="hidden" name="productimage" value="boxing-king-thor-bk-160.webp">
                <input type="hidden" name="productprice" value="160">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="king-thor-bk-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-booster-young-marble-47.webp" alt="">
            <p class="product-name-gloves">Booster Young Marble</p>
            <span>47$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Booster Young Marble">
                <input type="hidden" name="productimage" value="boxing-booster-young-marble-47.webp">
                <input type="hidden" name="productprice" value="47">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="booster-young-marble.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product mma-glove">
            <img src="images/mma-dominator-label-27.webp" alt="">
            <p class="product-name-gloves">MMA domiantor label</p>
            <span>27$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="MMA domiantor label">
                <input type="hidden" name="productimage" value="mma-dominator-label-27.webp">
                <input type="hidden" name="productprice" value="27">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="mma-dominator-label.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product mma-glove">
            <img src="images/mma-leone-gp121-46.webp" alt="">
            <p class="product-name-gloves">MMA leone gp121</p>
            <span>46$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="MMA leone gp121">
                <input type="hidden" name="productimage" value="mma-leone-gp121-46.webp">
                <input type="hidden" name="productprice" value="46">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="leone-gp121.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product taekwondo-glove">
            <img src="images/taekwondo-pride-sport-fingerless-18.webp" alt="">
            <p class="product-name-gloves">Taekwondo Pride Sport Fingerless</p>
            <span>18$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Taekwondo Pride Sport Fingerless">
                <input type="hidden" name="productimage" value="taekwondo-pride-sport-fingerless-18.webp">
                <input type="hidden" name="productprice" value="18">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="taekwondo-pride-sport-fingerless.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product taekwondo-glove">
            <img src="images/taekwondo-sz-blue-20.webp" alt="">
            <p class="product-name-gloves">Taekwondo sz blue</p>
            <span>20$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Taekwondo sz blue">
                <input type="hidden" name="productimage" value="taekwondo-sz-blue-20.webp">
                <input type="hidden" name="productprice" value="20">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="taekwondo-gloves-sz-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product taekwondo-glove">
            <img src="images/taekwondo-sz-red-20.webp" alt="">
            <p class="product-name-gloves">Taekwondo sz red</p>
            <span>20$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Taekwondo sz red">
                <input type="hidden" name="productimage" value="taekwondo-sz-red-20.webp">
                <input type="hidden" name="productprice" value="20">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="taekwondo-gloves-sz-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product mma-glove">
            <img src="images/mma-ringhorns-charger-34.jpg" alt="">
            <p class="product-name-gloves">MMA ringhorns charger</p>
            <span>34$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="MMA ringhorns charger">
                <input type="hidden" name="productimage" value="mma-ringhorns-charger-34.jpg">
                <input type="hidden" name="productprice" value="34">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="mma-ringhorns-charger.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-dominator-fake-leather-black-20.webp" alt="">
            <p class="product-name-gloves">Dominator Fake Leather Black</p>
            <span>20$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator Fake Leather Black">
                <input type="hidden" name="productimage" value="boxing-dominator-fake-leather-black-20.webp">
                <input type="hidden" name="productprice" value="20">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="dominator-fake-leather-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product mma-glove">
            <img src="images/mma-ufc-contender-38.jpg" alt="">
            <p class="product-name-gloves">MMA ufc contender</p>
            <span>38$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="MMA ufc contender">
                <input type="hidden" name="productimage" value="mma-ufc-contender-38.jpg">
                <input type="hidden" name="productprice" value="38">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="mma-ufc-contender.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product mma-glove">
            <img src="images/mma-venom-challenger-47.jpg" alt="">
            <p class="product-name-gloves">MMA venum challenger</p>
            <span>47$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="MMA venum challenger">
                <input type="hidden" name="productimage" value="mma-venom-challenger-47.jpg">
                <input type="hidden" name="productprice" value="47">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="mma-venum-challenger.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-dominator-fake-leather-red-20.webp" alt="">
            <p class="product-name-gloves">Dominator Fake Leather Red</p>
            <span>20$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator Fake Leather Red">
                <input type="hidden" name="productimage" value="boxing-dominator-fake-leather-red-20.webp">
                <input type="hidden" name="productprice" value="20">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="dominator-fake-leather-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-everlast-spark-50.webp" alt="">
            <p class="product-name-gloves">Everlast Spark</p>
            <span>50$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Everlast Spark">
                <input type="hidden" name="productimage" value="boxing-everlast-spark-50.webp">
                <input type="hidden" name="productprice" value="50">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="everlast-spark.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-pride-sport-blue-35.webp" alt="">
            <p class="product-name-gloves">Pride Sport Blue</p>
            <span>35$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Pride Sport Blue">
                <input type="hidden" name="productimage" value="boxing-pride-sport-blue-35.webp">
                <input type="hidden" name="productprice" value="35">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="pride-sport-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product mma-glove">
            <img src="images/mma-venom-sparring-challenger-49.jpg" alt="">
            <p class="product-name-gloves">MMA venum sparring challenger</p>
            <span>49$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="MMA venum sparring challenger">
                <input type="hidden" name="productimage" value="mma-venom-sparring-challenger-49.jpg">
                <input type="hidden" name="productprice" value="49">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="mma-venum-sparring-challenger.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product taekwondo-glove">
            <img src="images/taekwondo-sz-elastic-white-7.webp" alt="">
            <p class="product-name-gloves">taekwondo sz elastic white</p>
            <span>7$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="taekwondo sz elastic white">
                <input type="hidden" name="productimage" value="taekwondo-sz-elastic-white-7.webp">
                <input type="hidden" name="productprice" value="7">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="taekwondo-sz-elastic-white.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-sz-fake-leather-black-20.webp" alt="">
            <p class="product-name-gloves">SZ fake leather black</p>
            <span>20$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="SZ fake leather black">
                <input type="hidden" name="productimage" value="boxing-sz-fake-leather-black-20.webp">
                <input type="hidden" name="productprice" value="20">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="sz-faker-leather-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-twins-thor-bk-166.webp" alt="">
            <p class="product-name-gloves">Twins thor bk</p>
            <span>166$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Twins thor bk">
                <input type="hidden" name="productimage" value="boxing-twins-thor-bk-166.webp">
                <input type="hidden" name="productprice" value="166">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="twins-thor-bk.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-venum-contender-2.0-gold-44.webp" alt="">
            <p class="product-name-gloves">Venum Contender 2.0 Gold</p>
            <span>44$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum Contender 2.0 Gold">
                <input type="hidden" name="productimage" value="boxing-venum-contender-2.0-gold-44.webp">
                <input type="hidden" name="productprice" value="44">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="venum-contender-2.0-gold.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-sz-real-leather-blue-31.webp" alt="">
            <p class="product-name-gloves">SZ real leather blue</p>
            <span>31$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="SZ real leather blue">
                <input type="hidden" name="productimage" value="boxing-sz-real-leather-blue-31.webp">
                <input type="hidden" name="productprice" value="31">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="sz-real-leather-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-sz-real-leather-black-31.webp" alt="">
            <p class="product-name-gloves">SZ real leather black</p>
            <span>31$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="SZ real leather black">
                <input type="hidden" name="productimage" value="boxing-sz-real-leather-black-31.webp">
                <input type="hidden" name="productprice" value="31">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="sz-real-leather-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-fairtex-bk-150.webp" alt="">
            <p class="product-name-gloves">Fairtex bk</p>
            <span>150$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Fairtex bk">
                <input type="hidden" name="productimage" value="boxing-fairtex-bk-150.webp">
                <input type="hidden" name="productprice" value="150">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="fairtex-bk.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-dominator-real-leather-red-30.webp" alt="">
            <p class="product-name-gloves">Dominator Real Leather Red</p>
            <span>30$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator Real Leather Red">
                <input type="hidden" name="productimage" value="boxing-dominator-real-leather-red-30.webp">
                <input type="hidden" name="productprice" value="20">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="dominator-real-leather-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-venum-contender-2.0-black-44.webp" alt="">
            <p class="product-name-gloves">Venum contender 2.0 black</p>
            <span>44$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum contender 2.0 black">
                <input type="hidden" name="productimage" value="boxing-venum-contender-2.0-black-44.webp">
                <input type="hidden" name="productprice" value="44">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="venum-contender-2.0-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product boxing-glove">
            <img src="images/boxing-dominator-samurai-60.webp" alt="">
            <p class="product-name-gloves">Dominator Samurai</p>
            <span>60$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator Samurai">
                <input type="hidden" name="productimage" value="boxing-dominator-samurai-60.webp">
                <input type="hidden" name="productprice" value="60">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="dominator-samurai.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
    </div>
    <div class="product-container-bonus">
        <a href="protectorproducts.php">Protectors</a>
        <a href="otherproducts.php">Other Products</a>
    </div>
</div>

    <script src="scripts/searchinputgloves.js"></script>
    <script src="scripts/products.js"></script>
<?php include 'footer.php';?>