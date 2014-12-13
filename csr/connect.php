<?php

    function addUser($userName, $email, $facebookId, $country) {
        $query = "insert into customer values('', '$userName', '$email', '$facebookId', '$country');";
        return executeQuery($query);
    }

    function findUser($email) {
        $query = "select * from customer where email = '$email';";
        return executeQuery($query);
    }

    function getCountry($symbol) {
        $query = "select * from country where symbol = '$symbol';";
        return executeQuery($query);
    }

    function getAllFood($country) {
        $query = "select * from food where country_id = '$country'";
        return executeQuery($query);
    }

    function getAllToys($country) {
        $query = "select * from toys where country_id = '$country'";
        return executeQuery($query);
    }

    function userAddsFood($customerId, $food, $name, $message) {
        $query = "insert into customer_gave_food values('', '$customerId', '$food', '$name', '$message');";
        return executeQuery($query);
    }

    function userAddsToys($customerId, $toy, $name, $message) {
        $query = "insert into customer_gave_toys values('', '$customerId', '$toy', '$name', '$message');";
        return executeQuery($query);
    }

    function findFoodEntry($customerId) {
        $query = "select * from customer_gave_food where customer_id = $customerId;";
        return executeQuery($query);
    }

    function findToyEntry($customerId) {
        $query = "select * from customer_gave_toys where customer_id = $customerId;";
        return executeQuery($query);
    }

    function countFood($id) {
        $query = "select count(*) from customer_gave_food where food_id = $id;";
        return executeQuery($query);
    }

    function countToys($id) {
        $query = "select count(*) from customer_gave_toys where toy_id = $id;";
        return executeQuery($query);
    }

    function getFoodMessages($id) {
        $query = "select message from customer_gave_food where food_id = $id order by id desc limit 10;";
        return executeQuery($query);
    }

    function getToyMessages($id) {
        $query = "select message from customer_gave_toys where toy_id = $id order by id desc limit 10;";
        return executeQuery($query);
    }

    function getFoodImage($id) {
        $query = "select image_url from food where id='$id'";
        return executeQuery($query);
    }

    function getToyImage($id) {
        $query = "select image_url from toys where id='$id'";
        return executeQuery($query);
    }

    function executeQuery($query) {
        $servername = "localhost";
        $username = "foodpan1_panda";
        $password = "helloPanda";
        $db = 'foodpan1_panda';
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        try{
            $result = mysqli_query($conn, $query);
            return $result;
        }
        catch(Exception $e) {
            return "Error";
        }
        mysqli_close($conn);
    }