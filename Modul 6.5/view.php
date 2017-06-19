<?php
include "koneksi.php";
$baris = $_POST['baris'];
echo $baris;
	echo papancatur($baris);
function papancatur($baris) {
	$query = "SELECT * FROM `mahasiswa` LIMIT $baris";
	$data = mysql_query($query) or die(mysql_error());

 echo "<table border =1>";
	 echo "<tr>
		 <th>Nama</th>
		 <th>Jurusan</th>
		 <th>Alamat</th>

	 </tr>";


	while ($row100 = mysql_fetch_array($data)) {



		echo "<tr>";
			echo "<td bgcolor=#fff>".$row100['nama']."</td>";
			echo "<td bgcolor=#ccc>".$row100['jurusan']."</td>";
			echo "<td bgcolor=#fff>". $row100['alamat']."</td>";

		echo "</tr>";


	}
		echo "</table>";

    return "cek";


		}







 ?>
