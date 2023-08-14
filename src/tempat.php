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
$sql3 = "SELECT namaTempat, deskripsi, ratingTotal, ratinger, namaRating FROM review WHERE namaTempat = '$submittedName'";
$result3 = $conn->query($sql3);

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $submittedName; ?></title>
     <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./style/tempat.css">
</head>
<?php include 'header.html'; ?>
<body>
    <section class="content">
        <img class="content-img-1" src="./img/tempat-1.png" alt="">
        <div class="content-container">
            <div class="content-main">
                <img class="main-img" src="<?php echo $linkfoto;?>" alt="Gambar">
                <div class="content-main-text">
                    <h2><?php echo $submittedName; ?></h2>
                    <div class="content-main-stars">
                        <h5>Rating: <?php
                        if ($result2) {
                            // Check if there is at least one row in the result set
                            if ($row2 = $result2->fetch_assoc()) {
                                $sumTotal = $row2['sumTotal'];
                                $nbanyak = $row2['nbanyak'];
                                echo round($sumTotal / $nbanyak, 2) . "/5";
                            } else {
                                echo "Belum ada rating diberikan";
                            }
                        } else {
                            echo "Query gagal.";
                        }
                        
                        ?></h5>
                    </div>
                    <h4>Lokasi : <?php echo $alamat."<a target=\"_blank\" href=\"http://maps.google.com/?q=".$alamat."\">" ?><img src="./img/map.png" alt=""></a></h4>
                </div>
            </div>
            <div class="content-description">
                <h3>Deskripsi</h3>
                <h5>Jam Buka: <?php echo $jam;?></h5>
                <h5>Menu: </h5>
                <p><?php echo $menu;?></p> 
            </div>
            <div class="rating">
                <h3>Rating!</h3>
                <div class="rating-container">
                    <p>
                        <?php 
                            if ($result3->num_rows > 0) {
                                while ($row3 = $result3->fetch_assoc()) {
                                    echo '<div class="rating-card">';
                                    echo '<h5>' . $row3["namaRating"] . '</h5>';
                                    echo '<h5 style="font-size: smaller;">' . $row3['ratingTotal'] . ' / 5 </h5>';
                                    echo '<p>' . $row3['deskripsi'] . '</p>';
                                    echo '</div>';
                                    echo '<svg width="3" height="90" viewBox="0 0 3 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="1.5" y1="6.55671e-08" x2="1.49999" y2="149" stroke="black" stroke-width="3"/>
                                    </svg>
                                    ';
                                }
                            }
                            else {
                                echo "<h5>Belum ada rating yang diberikan</h5>";
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="review-add">
                <h3>Beri Ratingmu!</h3>
                <form action="review.php" method="post">
                    <label for="nama">Nama (opsional)</label>
                    <input type="text" name="namaReviewer">
                    <br> <br>
                    <label for="rate">Rating (1-5)</label>
                    <input autocomplete="off" name="rating" type="range" value="1" min="1" max="5" step="1">
                    <br> <br>
                    <label for="komen">Komentarmu</label>
                    <input type="text" name="komen">
                    <br> <br>
                    <input type="hidden" name="namaTempat" value="<?php echo $submittedName;?>">
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
        <img class="content-img-2" src="./img/tempat-2.png" alt="">
    </section>
</body
<?php include 'footer.html'; 
 $conn->close();
exit;?>