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

  function papancatur($baris, $yolom) {
      $x=1;
      echo "<table align=center border=1 cellspacing=0>";
      while ($x <= $baris) {
          echo "<tr>";
          $y=1;

          while ($y <= $yolom) {
              if (($x+$y) %2 > 0)
              echo "<td width=20 height=20 bgcolor=#000000>
                  </td>";
              else
              echo "<td width=20 height=20 bgcolor=#ffffff>
                  </td>";
              $y++;
          }
          echo "</tr>";
          $x++;
      }
      echo "</table><br><br>";
  }

  echo " <h3>Tabel dengan baris = ".$baris." dan Kolom =".$kolom."</h3>";
  echo "<br />";
  echo table_generator($kolom,$baris);

  echo "<br />";
  echo   papancatur($baris,$kolom);








 ?>
