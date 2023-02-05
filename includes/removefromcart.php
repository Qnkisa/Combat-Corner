<?php

session_start();
if(isset($_POST["removeitemfromcart"])){
    $itemIndex = $_POST["remove-index"];
    array_splice($_SESSION['cart'], $itemIndex, 1);
    header("location: ../index.php");
    exit();
}
else{
    header("location: ../index.php");
    exit();
}