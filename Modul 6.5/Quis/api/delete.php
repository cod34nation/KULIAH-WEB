<?php


 require 'config.php';


 $id  = $_POST["id"];


 $sql = "DELETE FROM mahasiswa WHERE nim = '".$id."'";


 $result = $mysqli->query($sql);


 echo json_encode([$id]);


?>
