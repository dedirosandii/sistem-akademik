<?php
$koneksi = mysqli_connect("localhost", "root", "", "sistem_akademik");

if (mysqli_connect_error($koneksi)) {
	echo "ada masalah dalam koneksi" . mysqli_connect_errno();
}

function query($data)
{
	global $koneksi;
	$result = mysqli_query($koneksi, $data);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}
