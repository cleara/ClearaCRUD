<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cleara";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO supplier (id_supplier, nama_supplier , alamat_supplier)
VALUES ( 67145, 'Tika', 'Bandung')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>