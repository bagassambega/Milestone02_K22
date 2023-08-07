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
        $namaTempat = $_POST["namaTempat"];
        $rating = $_POST["rating"];
        $reviewer = $_POST["namaReviewer"];
        $komentar = $_POST["komen"];

        if (empty($rating)) {
            echo "Rating harus diisi";
        }
        if (empty($reviewer)) {
            $reviewer = "Anonymous";
        }
        if (empty($komentar)) {
            $komentar = "-";
        }

        $query = "INSERT INTO review (namaTempat, ratingTotal, ratinger, deskripsi, namaRating) VALUES ('$namaTempat', '$rating', 1, '$komentar', '$reviewer')";
        if ($conn->query($query) === TRUE) {
            echo "Berhasil";
            echo '<a href="all.php" style="padding: 10px; background-color: #f0f0f0;">Kembali</a>';
        }
        else {
            echo "gagal";
        }
    }

    $conn->close();
