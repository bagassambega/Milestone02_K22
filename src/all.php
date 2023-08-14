
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Semua Tempat Makan</title>
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
        <link rel="stylesheet" href="./style/semua.css">
    </head>
<?php include_once 'header.html'; ?>
<body>
    <section class="content">
    <div class="card-container">
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

            $sql = "SELECT namaTempat, alamat, gambar FROM makanTable";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $counter = 1;
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<img class="circle-frame" alt="gambar" src="' . $row["gambar"] . '">'  ;
                    echo '<div class="item">';
                    echo '<div>' . $row["namaTempat"] . '</div>';
                    echo "<div>" . $row["alamat"] . "</div>";
                    echo '<form action="tempat.php" method="post">
                                <button type="submit" name="detailButton" value="' . $row["namaTempat"] . '">Detail</button>
                            </form>
                    ';
                    echo '</div>';
                    echo "</div>";
                    $counter++;
                }
            } else {
                echo "<tr><td colspan='2'>No items found.</td></tr>";
            }

            $conn->close();
            
        ?>
    </div>
    </section>
    
<?php include_once 'footer.html'; ?>
