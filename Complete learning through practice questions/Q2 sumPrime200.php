<?php
$arr_prime = array();
for ($i = 2; $i<200; $i++) {
   $flag = true; 
      for ($j = 2; $j<=($i/2); $j++) {
         if ($i%$j==0) {
            $flag = false;
            break;
         }
      }
      if ($flag)array_push($arr_prime,$i);      
      if (count($arr_prime)==200)break;      
}
echo "<b> List of primes:</b> ";
for($i=0;$i<count($arr_prime);$i++){
   if($i%20==0)echo "<br>";
   echo "$arr_prime[$i], ";
   
}

echo "<br><br>";
echo "<b>Sum Of Prime Numbers Less Than 200: \n";
echo array_sum($arr_prime)."\n";
?>