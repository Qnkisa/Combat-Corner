<?php



function emptyInput($firstName, $lastName, $country, $city, $address, $phoneNumber){
    $result = true;
    if(empty($firstName) || empty($lastName) || empty($country) || empty($city) || empty($address) || empty($phoneNumber)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}