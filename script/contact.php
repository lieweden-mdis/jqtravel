<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// connection db
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get list from user selection
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$country = $_POST['country'];
$comment = $_POST['comment'];

$sql = "INSERT INTO contact (Name, Phone, Email, Country, Comment) VALUES ('$name', '$phone', '$email', '$country', '$comment')";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
    header('Location: ../thankyou.html');
    exit;
} else {
    echo "Error inserting record: " . mysqli_error($conn);
    header('Location: ../unsuccee.html');
    exit;
}

// close db connection
mysqli_close($conn);
?>
