<?php
session_start();
if(isset($_POST["addproduct"])){
    $productName = $_POST["productname"];
    $productPrice = $_POST["productprice"];
    $productImage = $_POST["productimage"];
    $productQuantity = $_POST["productquantity"];

    $product = [
        'name' => $productName,
        'image' => $productImage,
        'price' => $productPrice,
        'quantity' => $productQuantity
    ];

    $itemAlreadyInCart = false;
    foreach($_SESSION['cart'] as $key => $item) {
        if ($item['name'] == $productName && $item['price'] == $productPrice && $item['image'] == $productImage) {
            $_SESSION['cart'][$key]['quantity'] += $productQuantity;
            $itemAlreadyInCart = true;
            break;
        }
    }
    if (!$itemAlreadyInCart) {
        $_SESSION['cart'][] = $product;
    }

    $fullPrice = 0;
    foreach($_SESSION['cart'] as $product) {
        $fullPrice += $product['price'] * $product['quantity'];
    }

    header("location: ../index.php");
    exit();
}
else{
    header("location: ../index.php");
    exit();
}