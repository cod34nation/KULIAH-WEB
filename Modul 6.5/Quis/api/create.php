<?php


require '../config.php';


  $post = $_POST;


  $sql = "INSERT INTO mahasiswa (nama,alamat,username,password)


	VALUES ('".$post['nama']."','".$post['alamat']."','".$post['username']."','".$post['password']."')";


  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM mahasiswa Order by nim desc LIMIT 1";


  $result = $mysqli->query($sql);


  $data = $result->fetch_assoc();


echo json_encode($data);


?>
