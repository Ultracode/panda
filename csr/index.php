<?php
    session_start();

    if(!isset($_SESSION['country'])) {
        $url = $_SERVER['SERVER_NAME'];
        header('Location: http://' . $url);
    }
    include '../translations/'. strtolower($_SESSION['country']) .'.yml.php';

    function __($token) {
        global $translate;

        if(array_key_exists($token, $translate)) {
            return $translate[$token];
        }
        else {
            return $token;
        }
    }
    //Get Country
/*    include '../geoip/geoip-test.php';
    $_SESSION['country'] = $countryCode;
    include 'translations/'. strtolower($countryCode) .'.yml.php';
*/    // echo __('hello');
    // die;

    require 'connect.php';

    $food = getAllFood($_SESSION['country']);
    $smallFood = getAllFood($_SESSION['country']);
    $toys = getAllToys($_SESSION['country']);
    $smallToy = getAllToys($_SESSION['country']);

    include 'foodpanda.php';
    if(!isset($_SESSION['user'])) {
        //Not Logged In
    }
    else {
        //Logged In
    }


?>