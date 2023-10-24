<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "employees";

$connection = new mysqli($servername, $username, $password, $database);

$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
}

do {
    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        $errorMessage = "All fields are required.";
        break;
    }

    // ADD EMPLOYEE TO DATABASE
    $sql = "INSERT INTO employees (name, email, phone, address)" .
        "VALUES ('$name', '$email', '$phone', '$address')";

    $result = $connection->query($sql);

    if (!$result) {
        $errorMessage = "Invalid query: " . $connection->connect_error;
        break;
    }

    $name = "";
    $email = "";
    $phone = "";
    $address = "";

    $successMessage = "Added successfully";

    header('location: ../index.php');
    exit;
} while (false);
