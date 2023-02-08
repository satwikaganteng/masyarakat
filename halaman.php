<?php

if(isset($_GET['url'])){
    switch ($_GET['url']){
        case 'tulis-pengaduan':
            include 'tulis-pengaduan.php';
            break;
        case 'lihat-pengaduan':
                // include 'lihat-pengaduan.php';
            break;  
        default:
            echo "Halaman ini tidak ditemukan";
            break;
    }
}
    else{
        echo "selamat datang di aplikasi pengaduan masyarakat, disini hanya memberikan anda seputar informasi desa sebelah <br/>" ;
        echo"anda login sebagai: ".$_SESSION['nama'];
    }