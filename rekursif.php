<?php

function rekursif ($batas){
	echo "<pre>";
	for ($i=1;$i<=$batas;$i++){
     for ($j=$batas;$j>=$i;$j--){
    echo "*";
      }
     echo "<br>";
}
	echo "</pre>";
}
rekursif(5);
?>
