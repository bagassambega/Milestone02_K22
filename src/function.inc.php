<?php

function emptyInputAdd($name, $komen, $jamBuka, $category, $menu, $linkmaps, $gambar, $socmed, $alamat, $deskripsi, $rating, $pengirim) {
    if (empty($name) || empty($alamat) || empty($category)) {
        echo "Nama, alamat, dan kategori dibutuhkan";
    }

    if (empty($jamBuka) || empty($komen) || empty($menu) || empty($linkmaps) || empty($socmed) || empty($gambar) || empty($deskripsi) || empty($rating) || empty($pengirim)) {
        $jamBuka = '-';
        $menu = '-';
        $gambar = '-';
        $linkmaps = '-';
        $socmed = '-';
        $deskripsi = '-';
        $rating = 0;
        $pengirim = 'Anonymous';
        $komen = '-';
    }
}