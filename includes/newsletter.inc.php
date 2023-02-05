<?php

if(isset($_POST["newslettersubscribe"])){
    $userEmailNewsletter = $_POST["useremailnewsletter"];

    if(empty($userEmailNewsletter)){
        header("location: ../index.php?error=emptyemail");
        exit();
    }

    if(!filter_var($userEmailNewsletter, FILTER_VALIDATE_EMAIL)){
        header("location: ../index.php?error=incorrectemail");
        exit();
    }

    header("location: ../index.php?error=none");
}
else{
    header("location: ../index.php");
    exit();
}