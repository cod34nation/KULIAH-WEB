<?php
$hostname ="localhost";
$username ="root";
$pw	="";
$db= "14650018_afrizal";

$koneksi = mysql_connect($hostname,$username,$pw);
mysql_select_db($db);
if($koneksi){
	
}else{
	echo "gagal";
}
// mysql_select_db($koneksi,$db) or die(mysql_error());

?>