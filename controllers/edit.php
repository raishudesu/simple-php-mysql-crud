<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "employees";

$connection = new mysqli($servername, $username, $password, $database);

$id = "";
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("location: ../index.php");
        exit;
    }

    $id = $_GET["id"];

    $sql = "SELECT * FROM employees WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location: ../index.php");
        exit;
    }

    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
} else {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    do {
        if (empty($id) || empty($name) || empty($email) || empty($phone) || empty($address)) {
            $errorMessage = "All fields are required.";
            break;
        }

        $sql = "UPDATE employees " .
            "SET name = '$name', email = '$email', phone = '$phone', address = '$address' " . // NEED WHITESPACE FOR NEW LINE
            "WHERE id = '$id'";

        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->connect_error;
            break;
        }
        $successMessage = "Added successfully";

        header('location: ../index.php');
        exit;
    } while (false);
}
