<?php
$servername = "mysql.hostinger.in";
$username = "u293410575_aipl";
$password = "apexipl";
$database="u293410575_apex";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO Enquiry (Name, Mob_No, Email, City) VALUES ('".$_POST['name']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['city']."')";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: http://apexinst.pe.hu/thank_you.html");

?>