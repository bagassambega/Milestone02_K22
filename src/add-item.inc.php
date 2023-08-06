<?php

$servername = "containers-us-west-135.railway.app";
$dBName = "railway";
$dBUsername = "root";
$dBPassword = "uXKmGWFvCasGce9YGVzX";
$dBport = "5590";
$dBurl = "mysql://root:uXKmGWFvCasGce9YGVzX@containers-us-west-135.railway.app:5590/railway";

$conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName, $dBport);

if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $name = $_POST["namaTempat"];
    $jamBuka = $_POST["jamBuka"];
    $category = $_POST["category"];
    $menu = $_POST["menu"];
    $linkmaps = $_POST["linkMaps"];
    $gambar = $_POST["gambar"];
    $socmed = $_POST["socmed"];
    $alamat = $_POST["alamat"];

    require_once 'function.inc.php';

    $query = "INSERT INTO makanTable (namaTempat, jamBuka, category, menu, linkMaps, gambar, socmed, alamat) VALUES ('$name', '$jamBuka', '$category', '$menu', '$linkmaps', '$gambar', '$socmed', '$alamat')";
    if ($conn->query($query) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    
    // if (emptyInputAdd($name, $jamBuka, $category, $menu, $linkmaps, $gambar, $socmed) !== false) {
    //     header("location: ./add.php?error=emptyinput");
    //     exit();
    // }
}

$conn->close();