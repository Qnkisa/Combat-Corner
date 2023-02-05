<?php include 'header.php';?>

<div class="products-page-container">
    <h1>Protectors</h1>
    <div class="items-filter">
        <p>Protector type:</p>
        <ul>
            <li>
                <label class="checkbox-container">Handwraps
                    <input type="radio" id="handwraps-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="checkbox-container">Gum Shields
                    <input type="radio" id="gumshields-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="checkbox-container">Shinguards
                    <input type="radio" id="shinguards-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
            <li>
                <label class="checkbox-container">Head Guards
                    <input type="radio" id="headguards-checkbox" name="radio">
                    <span class="checkmark"></span>
                </label>
            </li>
        </ul>
    </div>
    <div class="items-filter-input">
        <label for="searchinputgloves">Search For Products:</label>
        <input type="text" id="search-input-protectors" placeholder="Search...">
    </div>
    <div class="products" id="protector-products">
        <div class="product shinguard">
            <img src="images/shinguards-dominator-elite-blue-41.webp" alt="">
            <p class="product-name-protector">Dominator elite blue</p>
            <span>41$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator elite blue">
                <input type="hidden" name="productimage" value="shinguards-dominator-elite-blue-41.webp">
                <input type="hidden" name="productprice" value="41">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-dominator-elite-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-dominator-elite-red-41.webp" alt="">
            <p class="product-name-protector">Dominator elite red</p>
            <span>41$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator elite red">
                <input type="hidden" name="productimage" value="shinguards-dominator-elite-red-41.webp">
                <input type="hidden" name="productprice" value="41">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-dominator-elite-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-dominator-elite-white-41.webp" alt="">
            <p class="product-name-protector">Dominator elite white</p>
            <span>41$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator elite white">
                <input type="hidden" name="productimage" value="shinguards-dominator-elite-white-41.webp">
                <input type="hidden" name="productprice" value="41">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-dominator-elite-white.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-dominator-2.5m-black-5.webp" alt="">
            <p class="product-name-protector">Dominator 2.5m black</p>
            <span>5$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator 2.5m black">
                <input type="hidden" name="productimage" value="handwraps-dominator-2.5m-black-5.webp">
                <input type="hidden" name="productprice" value="5">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-dominator-2.5m-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-dominator-2.5m-blue-5.webp" alt="">
            <p class="product-name-protector">Dominator 2.5m blue</p>
            <span>5$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator 2.5m blue">
                <input type="hidden" name="productimage" value="handwraps-dominator-2.5m-blue-5.webp">
                <input type="hidden" name="productprice" value="5">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-dominator-2.5m-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-dominator-2.5m-red-5.webp" alt="">
            <p class="product-name-protector">Dominator 2.5m red</p>
            <span>5$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator 2.5m red">
                <input type="hidden" name="productimage" value="handwraps-dominator-2.5m-red-5.webp">
                <input type="hidden" name="productprice" value="5">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-dominator-2.5m-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-sz-cotton-black-10.webp" alt="">
            <p class="product-name-protector">Sz cotton black</p>
            <span>10$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz cotton black">
                <input type="hidden" name="productimage" value="shinguards-sz-cotton-black-10.webp">
                <input type="hidden" name="productprice" value="10">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-sz-cotton-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-sz-cotton-blue-10.webp" alt="">
            <p class="product-name-protector">Sz cotton blue</p>
            <span>10$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz cotton blue">
                <input type="hidden" name="productimage" value="shinguards-sz-cotton-blue-10.webp">
                <input type="hidden" name="productprice" value="10">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-sz-cotton-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-sz-cotton-red-10.webp" alt="">
            <p class="product-name-protector">Sz cotton red</p>
            <span>10$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz cotton red">
                <input type="hidden" name="productimage" value="shinguards-sz-cotton-red-10.webp">
                <input type="hidden" name="productprice" value="10">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-sz-cotton-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-sz-2.5m-4.webp" alt="">
            <p class="product-name-protector">Sz 2.5m black</p>
            <span>4$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz 2.5m black">
                <input type="hidden" name="productimage" value="handwraps-sz-2.5m-4.webp">
                <input type="hidden" name="productprice" value="4">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-sz-2.5-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-sz-4.5m-6.webp" alt="">
            <p class="product-name-protector">Sz 4.5m black</p>
            <span>6$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz 4.5m black">
                <input type="hidden" name="productimage" value="handwraps-sz-4.5m-6.webp">
                <input type="hidden" name="productprice" value="6">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-sz-4.5-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product gum-shield">
            <img src="images/gum-shield-ufc-opro-black-10.webp" alt="">
            <p class="product-name-protector">Ufc opro black</p>
            <span>10$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Ufc opro black">
                <input type="hidden" name="productimage" value="gum-shield-ufc-opro-black-10.webp">
                <input type="hidden" name="productprice" value="10">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="gumshield-ufc-opro-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product gum-shield">
            <img src="images/gum-shield-venum-challenger-white-15.webp" alt="">
            <p class="product-name-protector">Venum challenger white</p>
            <span>15$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum challenger white">
                <input type="hidden" name="productimage" value="gum-shield-venum-challenger-white-15.webp">
                <input type="hidden" name="productprice" value="15">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="gumshield-venum-challenger-white.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product head-guard">
            <img src="images/head-guards-sz-red-25.webp" alt="">
            <p class="product-name-protector">Head Guard Open Face Sz red</p>
            <span>25$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Head Guard Open Face Sz red">
                <input type="hidden" name="productimage" value="head-guards-sz-red-25.webp">
                <input type="hidden" name="productprice" value="25">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="head-guard-open-face-sz-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product head-guard">
            <img src="images/head-guards-sz-black-25.webp" alt="">
            <p class="product-name-protector">Head Guard Full face Sz black</p>
            <span>25$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Head Guard Full Sz Sz black">
                <input type="hidden" name="productimage" value="head-guards-sz-black-25.webp">
                <input type="hidden" name="productprice" value="25">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="head-guard-full-face-sz-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-sz-leather-black-32.webp" alt="">
            <p class="product-name-protector">Sz leather black</p>
            <span>32$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz leather black">
                <input type="hidden" name="productimage" value="shinguards-sz-leather-black-32.webp">
                <input type="hidden" name="productprice" value="32">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-sz-leather-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-sz-leather-blue-32.webp" alt="">
            <p class="product-name-protector">Sz leather blue</p>
            <span>32$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz leather blue">
                <input type="hidden" name="productimage" value="shinguards-sz-leather-blue-32.webp">
                <input type="hidden" name="productprice" value="32">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-sz-leather-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-sz-leather-red-32.webp" alt="">
            <p class="product-name-protector">Sz leather red</p>
            <span>32$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz leather red">
                <input type="hidden" name="productimage" value="shinguards-sz-leather-red-32.webp">
                <input type="hidden" name="productprice" value="32">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-sz-leather-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-dominator-4.5m-blue-7.webp" alt="">
            <p class="product-name-protector">Dominator 4.5m blue</p>
            <span>7$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator 4.5m blue">
                <input type="hidden" name="productimage" value="handwraps-dominator-4.5m-blue-7.webp">
                <input type="hidden" name="productprice" value="7">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-dominator-4.5m-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-dominator-4.5m-red-7.webp" alt="">
            <p class="product-name-protector">Dominator 4.5m red</p>
            <span>7$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator 4.5m red">
                <input type="hidden" name="productimage" value="handwraps-dominator-4.5m-red-7.webp">
                <input type="hidden" name="productprice" value="7">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-dominator-4.5m-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-doominator-4.5m-black-7.webp" alt="">
            <p class="product-name-protector">Dominator 4.5m black</p>
            <span>7$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator 4.5m black">
                <input type="hidden" name="productimage" value="handwraps-dominator-4.5m-black-7.webp">
                <input type="hidden" name="productprice" value="7">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-dominator-4.5m-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product gum-shield">
            <img src="images/gum-shield-dominator-white-12.webp" alt="">
            <p class="product-name-protector">Dominator White</p>
            <span>12$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Dominator White">
                <input type="hidden" name="productimage" value="gum-shield-dominator-white-12.webp">
                <input type="hidden" name="productprice" value="12">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="gumshield-dominator-white.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product gum-shield">
            <img src="images/gum-shield-sz-4.webp" alt="">
            <p class="product-name-protector">Sz Gum Shield</p>
            <span>4$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz Gum Shield">
                <input type="hidden" name="productimage" value="gum-shield-sz-4.webp">
                <input type="hidden" name="productprice" value="4">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="gumshield-sz-gum-shield.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product gum-shield">
            <img src="images/gum-shield-sz-black-8.webp" alt="">
            <p class="product-name-protector">Sz Gum Shield black</p>
            <span>8$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Sz Gum Shield black">
                <input type="hidden" name="productimage" value="gum-shield-sz-black-8.webp">
                <input type="hidden" name="productprice" value="8">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="gumshield-sz-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-venum-challenger-standup-58.webp" alt="">
            <p class="product-name-protector">Venum challenger standup</p>
            <span>58$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum challenger standup">
                <input type="hidden" name="productimage" value="shinguards-venum-challenger-standup-58.webp">
                <input type="hidden" name="productprice" value="58">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-venum-challenger-standup.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product shinguard">
            <img src="images/shinguards-venum-kontact-blue-24.webp" alt="">
            <p class="product-name-protector">Venum contact blue</p>
            <span>24$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum contact blue">
                <input type="hidden" name="productimage" value="shinguards-venum-kontact-blue-24.webp">
                <input type="hidden" name="productprice" value="24">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="shinguards-venum-contact-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product head-guard">
            <img src="images/head-guards-venum-challenger-open-face-black-54.webp" alt="">
            <p class="product-name-protector">Venum challenger open face black</p>
            <span>54$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum challenger open face black">
                <input type="hidden" name="productimage" value="head-guards-venum-challenger-open-face-black-54.webp">
                <input type="hidden" name="productprice" value="54">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="venum-challenger-open-face-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product head-guard">
            <img src="images/head-guards-venum-elite-full-black-83.webp" alt="">
            <p class="product-name-protector">Venum elite full black</p>
            <span>83$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum elite full black">
                <input type="hidden" name="productimage" value="head-guards-venum-elite-full-black-83.webp">
                <input type="hidden" name="productprice" value="83">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="venum-elite-full-black.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-venum-4m-blue-8.webp" alt="">
            <p class="product-name-protector">Venum 4m blue</p>
            <span>8$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum 4m blue">
                <input type="hidden" name="productimage" value="handwraps-venum-4m-blue-8.webp">
                <input type="hidden" name="productprice" value="8">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-venum-4m-blue.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-venum-4m-red-8.webp" alt="">
            <p class="product-name-protector">Venum 4m red</p>
            <span>8$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum 4m red">
                <input type="hidden" name="productimage" value="handwraps-venum-4m-red-8.webp">
                <input type="hidden" name="productprice" value="8">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-venum-4m-red.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
        <div class="product handwrap">
            <img src="images/handwraps-venum-4m-white-8.webp" alt="">
            <p class="product-name-protector">Venum 4m white</p>
            <span>8$</span>
            <form action="includes/addtocart.php" method="post">
                <input type="hidden" name="productname" value="Venum 4m white">
                <input type="hidden" name="productimage" value="handwraps-venum-4m-white-8.webp">
                <input type="hidden" name="productprice" value="8">
                <div class="product-quantity">
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="productquantity" value="1">
                </div>
                <a href="handwraps-venum-4m-white.php">View</a>
                <button type="submit" name="addproduct">Add to cart</button>
            </form>
        </div>
    </div>
    <div class="product-container-bonus">
        <a href="glovesproducts.php">Gloves</a>
        <a href="otherproducts.php">Other Products</a>
    </div>
</div>

    <script src="scripts/searchinputprotectors.js"></script>
    <script src="scripts/protectorproducts.js"></script>
<?php include 'footer.php';?>

