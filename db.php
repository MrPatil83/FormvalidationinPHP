<?php
session_start();
$insert = false;

if (isset($_POST['name']) && !isset($_SESSION['form_submitted'])) {
    // set connection variables
    $servername = "localhost";
    $username = "root";
    $password = "";

    // create a connection
    $conn = mysqli_connect($servername, $username, $password);

    // check for connection success
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `UK_trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$description', current_timestamp());";

    // Execute query
    if ($conn->query($sql) === true) {
        $insert = true;
        $_SESSION['form_submitted'] = true;
        header("Location: index.php");
        exit();
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }

    // close the database connection
    $conn->close();
}
?>