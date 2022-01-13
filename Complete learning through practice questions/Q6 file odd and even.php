<?php 
$file= 'randomNumbers.txt';

$nums=rand(1,50);
for($i=0;$i<49;$i++){
    $nums.= ' ';
    $nums.= rand(1,50);
}

file_put_contents($file, $nums);

$myfile = file_get_contents($file);
$numArray =  explode(" ", $myfile);

echo "<b>Contents of the file are : </b>";
foreach($numArray as $v){
    echo $v." ";
}

echo "<br>";echo "<br>";
$num15;
echo "<b>Reading 15 numbers from file : </b>";
for($i=0;$i<15;$i++){
    $num15[$i]=$numArray[$i];
	echo $num15[$i]." ";
    intval($num15[$i]);
}
echo "<hr>";
?>

<?php
function getCountUnique(&$num15){
	$unique = array_count_values($num15);
	echo "<pre>";
	print_r($unique);
	echo "</pre>";
	$evencnt;
	$oddcnt;
	$k=array_keys ($unique);
	$v=array_values($unique);
	for($j=0; $j<count($k); $j++){
    	// echo $k[$j]." ";
    	// echo $v[$j]."<br>";
		if($v[$j]%2==0){
			$evencnt[$j]=$k[$j];
		}
		else{
			$oddcnt[$j]=$k[$j];
		} 
	}
	
	echo "<b>Odd Occurrances are : </b>";
	foreach($oddcnt as $o){
		echo $o." ";
	}
	
	echo "<br><br>";
	
	echo "<b>Even Occurrances are : </b>";
	foreach($evencnt as $e){
		echo $e." ";
	}
	
}
// function getOdd(&$numArray)
// {
// 	for($i=0;$i<$n;$i++) {
// 		$count=0;
// 		for($j=$i+1;$j<$n;$j++){
// 			if($i==$j){
// 				$count=$count+1;
// 			}
// 		}
// 		$ans =$count % 2;
// 		if($ans !=0){
// 			echo $i." ";
// 		}
// 	  }
// }

// function getEven(&$numArray)
// {
// 	foreach ($numArray as $i) {
// 		$count=0;
// 		foreach($numArray as $j){
// 			if($i==$j){
// 				$count=$count+1;
// 			}
// 		}
// 		$ans =$count % 2;
// 		if($ans ==0){
// 			echo $i." ";
// 		}
// 	}
// }
// $n = sizeof($num15);
// echo "<b>Odd Occurrances are = </b>";
// echo(getOdd($num15));

// echo "<br><br>";

// echo "<b>Even Occurrances are = </b>";
// echo(getEven($num15));

getCountUnique($num15);
?>
