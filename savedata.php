<?php
require "config.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
//   echo "Connected successfully" . '<br>';
$emailadress = $_POST["emailadress"];
$passwords = $_POST["passwords"];
// $email = $_POST["email"];
// sql to insert data
$sql = "INSERT INTO authorization (emailadress, passwords)
VALUES ('$emailadress', '$passwords')";
if ($conn->query($sql) === TRUE) {
  
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    
    $conn->close();
?>
