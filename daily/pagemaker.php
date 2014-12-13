<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        $url = $_SERVER['SERVER_NAME'];
        header('Location: http://' . $url);
        exit;
    }
    if(isset($_SESSION['country'])) {
        $countryCode = $_SESSION['country'];
        include '../translations/'. strtolower($countryCode) .'.yml.php';
    }

    $key = array(
        date('y-m-d', strtotime('2014/12/12')) => 1,
        date('y-m-d', strtotime('2014/12/13')) => 2,
        date('y-m-d', strtotime('2014/12/14')) => 3,
        date('y-m-d', strtotime('2014/12/15')) => 4,
        date('y-m-d', strtotime('2014/12/16')) => 5,
        date('y-m-d', strtotime('2014/12/17')) => 6,
        date('y-m-d', strtotime('2014/12/18')) => 7,
        date('y-m-d', strtotime('2014/12/19')) => 8,
        date('y-m-d', strtotime('2014/12/20')) => 9,
        date('y-m-d', strtotime('2014/12/21')) => 10,
        date('y-m-d', strtotime('2014/12/22')) => 11,
        date('y-m-d', strtotime('2014/12/23')) => 12
    );


    $today = date('y-m-d');
    
    if(!array_key_exists($today, $key)) {
        $url = $_SERVER['SERVER_NAME'];
        header('Location: http://' . $url);
        exit;
    }

    function __($token) {
        global $translate;

        if(array_key_exists($token, $translate)) {
            return $translate[$token];
        }
        else {
            return $token;
        }
    }
    if(!isset($_SESSION['user'])) {
        $url = $_SERVER['SERVER_NAME'];
        header('Location: http://' . $url);
        exit;
    }
    date_default_timezone_set("Asia/Bangkok");
    $page = isset($_GET['page'])? ('day-'.$_GET['page'].'.php'): 'day-1.php';

    include $page;