<?php
include "koneksi.php";

echo tangkap($_POST['nama'],$_POST['alamat'],$_POST['jurusan']);
  
// $baris = $_POST['baris'];
$kolom = 3;



function tangkap($nama,$alamat,$jurusan)
{


	$query= "INSERT INTO mahasiswa (nama,jurusan,alamat) values('$nama','$jurusan','$alamat')";
	$hasil = mysql_query($query) or die(mysql_error());
	$identias = "Nama : ".$nama." Jurusan : ".$jurusan."  Alamat:  ".$alamat." <h1>Telah tersimpan di database</h1>";

	return $identias;

}

// function table_generator($kolom,$baris)
// {
//
// 	echo "<table border =1>";
//
// 	for ($i=1; $i <= $baris; $i++) {
// 		echo "<tr> ";
// 		for ($j=1; $j <= $kolom; $j++) {
// 			echo "<td>".$j."</td>";
//
//
// 		}
// 		echo "</tr>";
//
//
// 	}
//
// 	echo "</table>";
//
// }



?>
