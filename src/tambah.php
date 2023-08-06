<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="./style/tambah.css">
</head>
<?php include 'header.html'; ?>
<body>

    <section class="tambah">
        <img id="img-tambah-1" src="./img/tambah-1.png" alt="">
        <div class="tambah-container">
            <h3>Tambah Tempat Makanmu!</h3>
            <form action="add-item.inc.php" method="post">
                <div class="tambah-form">
                    <label for="nama_tempat"><h4>Nama Tempat</h4></label>
                    <input type="text" placeholder="Warung Asiapp.." name="namaTempat">
                </div>
                <div class="tambah-form">
                    <label for="alamat"><h4>Alamat</h4></label>
                    <input type="text" placeholder="Sebelah ATM, Jalan Ganesha no 1" name="alamat">
                </div>
                <div class="tambah-form">
                    <label for="Kategori"><h4>Kategori</h4></label>
                    <input type="text" placeholder="Cafe/Rumah makan/Warung..." name="category">
                </div>
                <div class="tambah-form">
                    <label for="jam_buka"><h4>Jam Buka</h4></label>
                    <input type="text" placeholder="Jam Buka" name="jamBuka">
                </div>
                <div class="tambah-form">
                    <label for="linkmenu"><h4>Link Menu/Range Harga Menu</h4></label>
                    <input type="text" placeholder="menu.com...." name="menu">
                </div>
                <div class="tambah-form">
                    <label for="sosmed"><h4>Sosial Media</h4></label>
                    <input type="text" placeholder="@gubernur, @warga" name="socmed">
                </div>
                <div class="tambah-form">
                    <label for="linkgambar"><h4>Link Gambar</h4></label>
                    <input type="text" placeholder="photos.com..." name="gambar">
                </div>
                <div class="tambah-form">
                    <label for="linkmaps"><h4>Link Google Maps</h4></label>
                    <input type="text" placeholder="maps.google.com/..." name="linkMaps">
                </div>
                <div class="tambah-form">
                    <label for="deskripsi"><h4>Jelasin dong!</h4></label>
                    <textarea id="deskripsi" type="text" rows="5" cols="50" placeholder="MURAH BANGET, pedesnya mantappp ..."></textarea>
                </div>
                <div class="tambah-form">
                    <label for="bintang"><h4>Beri Bintang!!</h4></label>
                    <input id="bintang" type="text">
                </div>
                <div class="tambah-form">
                    <label for=""><h4>Siapa nih!</h4>(opsional)</label>
                    <input id="nama_pengirim" type="text" placeholder="BUDI NIM 196220xx ITB FAKULTAS... canda gaess ...">
                </div>
                <button type="submit" name="submit">Tambah Item</button>
            </form>
        </div>
        <img id="img-tambah-2" src="./img/tambah-2.png" alt="">
    </section>
<?php include 'footer.html';?>