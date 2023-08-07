<?php 
session_start();
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

$submittedName = $_POST["detailButton"];

$sql = "SELECT namaTempat, jamBuka, category, menu, linkMaps, gambar, socmed, alamat, description FROM makanTable WHERE namaTempat = '$submittedName'";
$result = $conn->query($sql);
$sql2 = "SELECT namaTempat, COUNT(*) as nbanyak, SUM(ratingTotal) as sumTotal FROM review WHERE namaTempat = '$submittedName'  GROUP BY namaTempat";
$result2 = $conn->query($sql2);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $alamat = $row['alamat'];
        $jam = $row['jamBuka'];
        $linkfoto = $row['gambar'];
        $menu = $row['menu'];
        $deskripsi = $row['description'];
    }
}
else {
    echo "Data tidak ditemukan";
}
$row2 = $result2->fetch_assoc();
$sumTotal = $row2['sumTotal'];
$nbanyak = $row2['nbanyak'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $submittedName; ?></title>
    <link href="./style/tempat.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
</head>
<?php include 'header.html'; ?>
<body>
<section class="content">
        <img class="content-img-1" src="./img/tempat-1.png" alt="">
        <div class="content-container">
            <div class="content-main">
                <img src="<?php echo $linkfoto;?>" alt="Gambar">
                <div class="content-main-text">
                    <h2><?php echo $submittedName; ?></</h2>
                    <div class="content-main-stars">
                        <!-- <img src="./img/star-full.png" alt="fullstar">
                        <img src="./img/star-full.png" alt="fullstar">
                        <img src="./img/star-full.png" alt="fullstar">
                        <img src="./img/star-full.png" alt="fullstar">
                        <h5> | 4</h5> -->
                        <h5>Rating: <?php echo $sumTotal / $nbanyak; ?> / 5</h5>
                    </div>
                    <h4>Lokasi : <?php echo $alamat ?> <a href="#"><img src="./img/map.png" alt=""></a></h4>
                </div>
            </div>
            <div class="content-description">
                <h3>Deskripsi</h3>
                <h5>Jam Buka: <?php echo $jam;?></h5>
                <h5>Menu:</h5>
                <p><?php echo $menu;?></p>
                <h5>Rating!</h5>
                <!-- <?php 
                if ($result2->num_rows > 0) {
                    while ($row = $result2->fetch_assoc()) {
                        echo $row["ratingTotal"];
                    }
                }
                ?> -->
                <p><?php echo $deskripsi; ?></p>
            </div>
        </div>
        <img class="content-img-2" src="./img/tempat-2.png" alt="">
    </section>
    <?php include 'footer.html'; 
    $conn->close();
    exit;?>