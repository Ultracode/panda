<?php
    session_start();
    
    include 'connect.php';

    if($_POST) {
        $type = $_POST['type'];
        $object = $_POST['object'];
        $name = $_POST['name'];
        $id = '';

        $email = $_SESSION['email'];

        $result = findUser($email);

        if(!$result )
        {
          die('Could not get data: ' . mysql_error());
        }
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
        }

        if($type == 'food') {
            $repeat = countFood($object);
            $count = mysqli_fetch_row($repeat);
            $response = getFoodMessages($object);
            $messages = array();
            while($row = $response->fetch_assoc()) {
                $messages = $row;
            }
            $image = getFoodImage($object);
            $url = mysqli_fetch_row($image);
        }
        elseif ($type == 'toy') {
            $repeat = countToys($object);
            $count = mysqli_fetch_row($repeat);
            $response = getToyMessages($object);
            $messages = array();
            while($row = $response->fetch_assoc()) {
                $messages = $row;
            }
            $image = getToyImage($object);
            $url = mysqli_fetch_row($image);

        }
        // print_r($count);
        include 'hover.html';
    }
