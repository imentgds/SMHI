<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "smhibd";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Get form data
$nom = $_POST['nom'];
$cin = $_POST['cin'];

$email = $_POST['email'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$services = $_POST['services'];
$description = $_POST['description'];

$req1 = "INSERT INTO demandes VALUES ('$cin','$nom', '$email', '$telephone ','$adresse ','$code_postal','$description','$services')";

if (mysqli_query($con,$req1)) {
    include("sucess.html");
} else {
    include("erreur.html");
}

?>