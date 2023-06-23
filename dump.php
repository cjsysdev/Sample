<?php
 $names = fix_names("WILLIAM", "henry", "gatES");
 $names2 = explode(' ',$names);
 echo "$names <br>";
 echo $names2[2];
 function fix_names($n1, $n2, $n3)
 {
 $n1 = ucfirst(strtolower($n1));
 $n2 = ucfirst(strtolower($n2));
 $n3 = ucfirst(strtolower($n3));

 return $n1 . " " . $n2 . " " . $n3;
 }
?>