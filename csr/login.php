<?php
    session_start();
    // print_r($_POST);die;
    include 'connect.php';
    $country = isset($_SESSION['country'])? $_SESSION['country']: 'IN';

    if(isset($_POST)) {
        $user = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $facebookId = htmlspecialchars($_POST['id']);

        //check if user exists
        $result = findUser($email);
        // print_r($result);die;
        if(mysqli_num_rows($result) == 0) {
            //User not found
            $result = addUser($user, $email, $facebookId, $country);
            if($result == TRUE) {
                $_SESSION['user'] = $user;
                $_SESSION['email'] = $email;
                echo "success";
            }
            else {
                echo "error";
            }
        }
        else {
            $_SESSION['user'] = $user;
            $_SESSION['email'] = $email;
            echo "success";
        }
    }
    else {
        $url = $_SERVER['SERVER_NAME'];
        header('Location: http://' . $url);
    }