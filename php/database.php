<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "aranganathan";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if (!$conn) {
        throw new Exception("Can't connect to MySQL: " . mysqli_connect_error());
    }
    echo "Connected to MySQL";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
