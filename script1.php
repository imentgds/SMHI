<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "smhibd";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Get form data
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

$req1 = "INSERT INTO contact (nom, email, message) VALUES ('$nom', '$email', '$message')";

if (mysqli_query($con,$req1)) {
    include("sucess.html");
} else {
    include("erreur.html");
}

?>