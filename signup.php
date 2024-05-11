<?php
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $serving = $_POST["serving"];
    $phones = $_POST["phones"];
    $orders = $_POST["orders"];

    // Insert user into the database


    // Insert employee record into the database
    $orderplaceSql = "INSERT INTO orderplace (username, email, serving , phones ,orders) VALUES ('$username', '$email', '$serving' , '$phones', '$orders')";
    $conn->query($orderplaceSql);

    echo "Signup successful!";



    
}
?>