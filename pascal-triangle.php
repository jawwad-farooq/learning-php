<?php
// echo "hello";


$mf = 5;

for($i=0; $i<$mf; $i++){
     $num = 1;
     $space = "&nbsp;";

     for($k=$mf; $k>$i; $k--){
        print $space;
     }

     for($j=0; $j<=$i; $j++){
        print $num;
        $num = $num * ($i - $j) / ($j + 1);
     }
     print "<br>";
}


?>