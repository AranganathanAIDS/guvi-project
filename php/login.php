<?php
include('database.php');

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

if (!empty($username) && !empty($password)) {
    try {
        if (mysqli_query($conn, $sql)) {
            echo "{$username} you are registered";
        } else {
            throw new Exception("Error: " . mysqli_error($conn));
        }
    } catch (Exception $e) {
        echo "{$username} you are already registered";
    }
} else {
    echo "Fill all the fields";
}
?>
