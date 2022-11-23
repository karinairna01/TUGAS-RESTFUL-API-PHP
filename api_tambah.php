<?php
require_once('../config/koneksi_db.php');
if (isset($_POST['nama_produk']) && isset($_POST['harga']) && isset($_POST['tipe_produk']) && isset($_POST['stok'])) {
	$nama_produk   	= $_POST['nama_produk'];
	$harga 	= $_POST['harga'];
    $sql = $conn->prepare("INSERT INTO produk (nama_produk, harga, tipe_produk, stok) VALUES (?, ?, ?, ?)");
	$tipe_produk 			= $_POST['tipe_produk'];
	$stok 			= $_POST['stok'];
	$sql->bind_param('ssdd', $nama_produk, $harga, $tipe_produk, $stok);
	$sql->execute();
	if ($sql) {
		//echo json_encode(array('RESPONSE' => 'FAILED'));
		echo json_encode(array('RESPONSE' => 'SUCCESS'));
        //header("location:../readapi/tampil.php");
	} else {
	echo "GAGAL";
    }
}
?>