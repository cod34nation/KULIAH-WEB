<?php
	$K = $_POST['k'];
	$B = $_POST['b'];
	
	echo "Kolom : ".$K;
	echo "<br>";
	echo "Baris : ".$B;
	echo "<br>";

	$hasil = "<table border='1' cellpadding='3' cellspacing='4'>";
	// echo $hasil;
			for($i=1;$i<=$B;$i++){
				if($i%2==0){
					$hasil.="<tr>";
						
						for($j=1;$j<=$K;$j++){
							if(($j+1)%4==0 || ($j)%4==0){
								$hasil.="<td> $i"." $j</td>";
							}

							else{
								$hasil.="<td bgcolor=blue> $i"." $j</td>";
							}
						}

					$hasil.="</tr>";
				}


				else if($i%2==1){
					$hasil.="<tr>";
						
						for($j=1;$j<=$K;$j++){
							if(($j+1)%4==0 || ($j)%4==0){
								$hasil.="<td bgcolor=blue> $i"." $j</td>";
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
	

?>

		