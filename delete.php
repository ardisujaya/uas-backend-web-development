<?php 

$id = $_GET['id'];

//koneksi ke (dbconnect.php);
include('dbconnect.php');

//kode hapus
$query = "DELETE FROM buku WHERE id_buku = '$id' ";

if (mysqli_query($conn , $query)) {
	# redirect ke index.php
	header("location:index.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
