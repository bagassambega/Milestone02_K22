<?php

function emptyInputAdd($name, $jamBuka, $category, $menu, $linkmaps, $gambar, $socmed, $alamat) {
    if (empty($name) || empty($alamat) || empty($category)) {
        echo "Nama, alamat, dan kategori dibutuhkan";
    }

    if (empty($jamBuka) || empty($menu) || empty($linkmaps) || empty($socmed) || empty($gambar)) {
        $jamBuka = '-';
        $menu = '-';
        $gambar = '-';
        $linkmaps = '-';
        $socmed = '-';
    }
}