<?php
    session_start();

    //include 'geoip/geoip-test.php';
    $countryCode = 'ma';
    $_SESSION['country'] = $countryCode;
    include 'translations/'. strtolower($countryCode) .'.yml.php';
    $url = $_SERVER['SERVER_NAME'];
    header('Location: http://' . $url . '/csr/');
    // header('Location: http://' . $url . '/daily/');
