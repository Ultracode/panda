<?php
    session_start();
    
    include 'connect.php';

    if($_POST) {
        // print_r($_POST);

        $type = $_POST['type'];
        $object = $_POST['object'];
        $name = $_POST['name'];
        $message = $_POST['message'];
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
            $repeat = findFoodEntry($id);
            if(mysqli_num_rows($repeat) == 0) {
                $insert = userAddsFood($id, $object, $name, $message);
            }
            else {
                $insert = 2;        //Already made
            }
        }
        elseif ($type == 'toy') {
            $repeat = findToyEntry($id);
            if(mysqli_num_rows($repeat) == 0) {
                $insert = userAddsToys($id, $object, $name, $message);
            }
            else {
                $insert = 2;        //Already made
            }
            
        }
        echo $insert;
    }