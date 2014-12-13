<?php
session_start();

    if(!isset($_SESSION['user'])) {
        echo 0;
    }
    else {
        echo 1;
    }
    exit;