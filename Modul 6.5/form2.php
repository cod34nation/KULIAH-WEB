<?php

$kolom = $_POST['kolom'];
$baris = $_POST['baris'];

  function table_generator($kolom,$baris)
  {

    echo "<table border =1>";

    for ($i=1; $i <= $baris; $i++) {
      echo "<tr> ";
      for ($j=1; $j <= $kolom; $j++) {
        echo "<td>".$j."</td>";


      }
      echo "</tr>";


    }

    echo "</table>";

  }

  function papancatur($baris, $kolom) {
      $hasil = "<table border='1' cellpadding='3' cellspacing='4'>";
  // echo $hasil;
      for($i=1;$i<=$baris;$i++){
        if($i%2==0){
          $hasil.="<tr>";

            for($j=1;$j<=$kolom;$j++){
              if(($j+1)%4==0 || ($j)%4==0){
                $hasil.="<td> $i"." $j</td>";
              }

              else{
                $hasil.="<td bgcolor=red> $i"." $j</td>";
              }
            }

          $hasil.="</tr>";
        }


        else if($i%2==1){
          $hasil.="<tr>";

            for($j=1;$j<=$kolom;$j++){
              if(($j+1)%4==0 || ($j)%4==0){
                $hasil.="<td bgcolor=red> $i"." $j</td>";
              }

              else{
                $hasil.="<td > $i"." $j</td>";
              }
            }

          $hasil.="</tr>";
        }
      }

  $hasil.="</table>";
  echo $hasil;

  }

  echo " <h3>Tabel dengan baris = ".$baris." dan Kolom =".$kolom."</h3>";
  echo "<br />";
  echo table_generator($kolom,$baris);

  echo "<br />";
  echo   papancatur($baris,$kolom);








 ?>
