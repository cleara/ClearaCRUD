<?php
$servername = "localhost";

$username = "root";
$password = "";
///
$dbname = "Cleara";

// Create connection
$conn = new mysqli("localhost", "root", "", "Cleara");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM supplier";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo "id : "
     . $row["id_supplier"]
     . "- Name : "
     . $row["nama_supplier"]
     . "-Alamat :"
     .$row["alamat_supplier"]
     ."<a href='supplier_edit.php?id=$row[id_supplier]'> edit <a/><br>"
     ."<a href='supplier_delete.php?id=$row[id_supplier]'> delete <a/><br>";
     
    }
} else {
    echo "0 results";
}
$conn->close();
?>