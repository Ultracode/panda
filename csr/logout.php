<?php

/*print_r($_SERVER);die;*/

session_destroy();
$url = $_SERVER['SERVER_NAME'];
header('Location: http://' . $url);