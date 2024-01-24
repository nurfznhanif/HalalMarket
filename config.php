<?php
$con = mysqli_connect("localhost", "root", "", "tgs_klpk_prak_pweb");

// cek koneksi
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
