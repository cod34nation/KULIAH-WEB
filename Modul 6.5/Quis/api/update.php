<?php


  require 'config.php';


  $id  = $_POST["id"];

  $post = $_POST;


  $sql = "UPDATE mahasiswa SET alamat = '".$post['title']."'

    ,description = '".$post['description']."'

    WHERE nim = '".$id."'";


  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM mahasiswa WHERE nim = '".$id."'";


  $result = $mysqli->query($sql);


  $data = $result->fetch_assoc();


  echo json_encode($data);


?>
