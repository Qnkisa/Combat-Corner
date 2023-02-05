<?php

session_start();
if(isset($_POST["order"])){

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phoneNumber"];
    $cart = json_encode($_SESSION['cart']);
    
    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    if(emptyInput($firstName, $lastName, $country, $city, $address, $phoneNumber) !== false){
        header("location: ../purchasestep-one.php?error=emptyinput");
        exit();
    }

    $sql = "INSERT INTO orders (firstName, lastName, country, city, address, phoneNumber, cartProducts) VALUES ('$firstName','$lastName','$county','$city','$address','$phoneNumber','$cart');";
    $conn->query($sql);
    header("location: ../successfullorder.php");
    exit();
}
else{
    header("location: ../index.php");
    exit();
}