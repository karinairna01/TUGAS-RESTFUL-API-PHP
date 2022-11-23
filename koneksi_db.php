<?php
    define('HOST','localhost');
    define('USER','root');
    define('DB','tugas_restful_api');
    define('PASS','');
    $conn = new mysqli(HOST,USER,PASS,DB) or die('Koneksi error untuk mengakses database');
?>