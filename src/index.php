<!DOCTYPE html>
<html lang="id">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google" content="notranslate"/>
        <meta charset="UTF-8">
        <title>Tempat Makan Yuk!</title>
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
        <link rel="stylesheet" href="./style/index.css">
    </head>

    <?php include 'header.html'; ?>

<section class="jumbotron" id="jumbotron">
    <img id="img-jumbotron-1" src="./img/Jumbotron-1.png" alt="">
    <div class="jumbotron-container">
        <h1>CARI TEMPAT MAKAN YUK !!!</h1>
        <form action="#">
            <input type="text" id="search" name="search" autocomplete="off" placeholder="Tempat murah, makanan enak ...">
            <input type="submit" id="submit" value="Ayo Cari !">
        </form>
    </div>
    <img id="img-jumbotron-2" src="./img/Jumbotron-2.png" alt="">
</section>
<section class="recomend" id="recomend"> 
    <div class="recomend-container">
        <h2>Recommend Banget!</h2>
        <div class="recomend-content">
            <div class="recomend-card">
                <img src="./img/placeholder.png" alt="">
                <h4>Bebek Ali Borme</h4>
                <a href="all.php"><h6>Lihat Tempat</h6></a>
                <svg width="200" height="4" viewBox="0 0 200 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="2" x2="200" y2="2" stroke="#FF8E3C" stroke-width="4"/>
                </svg>        
            </div>
            <div class="recomend-card">
                <img src="./img/placeholder.png" alt="">
                <h4>Upnormal Djuanda</h4>
                <a href="all.php"><h6>Lihat Tempat</h6></a>
                <svg width="200" height="4" viewBox="0 0 200 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="2" x2="200" y2="2" stroke="#FF8E3C" stroke-width="4"/>
                </svg>        
            </div>
            <div class="recomend-card">
                <img src="./img/placeholder.png" alt="">
                <h4>Bakmie Hokie</h4>
                <a href="all.php"><h6>Lihat Tempat</h6></a>
                <svg width="200" height="4" viewBox="0 0 200 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line y1="2" x2="200" y2="2" stroke="#FF8E3C" stroke-width="4"/>
                </svg>        
            </div>
        </div>
    </div>
</section>
<section class="add">
    <img id="img-add-1" src="./img/add-1.png" alt="">
    <div class="add-container">
        <h2>Spill Tempat Terbaikmu!</h2>
        <div class="add-content">
            <div class="add-card">
                <img src="./img/langkah-1.png" alt="Pergi ke Page Tambah">
                <div class="add-card-text">
                    <h5>1. Masuk ke Page Tambah</h5>
                </div>
            </div>
            <div class="add-card">
                <img src="./img/langkah-2.png" alt="Isi dan Kirim Data">
                <div class="add-card-text">
                    <h5>2. Isi Data dan Kirim</h5>
                </div>
            </div>
            <div class="add-card">
                <img src="./img/langkah-3.png" alt="Data berhasil dikirim">
                <div class="add-card-text">
                    <h5>3. Data Berhasil Dikirim</h5>
                </div>
            </div>
        </div>
    </div>
    <img id="img-add-2" src="./img/add-2.png" alt="">
</section>


<?php include 'footer.html'; ?>

