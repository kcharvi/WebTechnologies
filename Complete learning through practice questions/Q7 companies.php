<?php 

$file= 'companies.txt';
$string = "Amazon Facebook Microsoft Netflix Apple Google YouTube Intel Wipro TCS Flipkart";
file_put_contents($file, $string);

$myfile = file_get_contents($file);
$strArray =  explode(" ", $myfile);

echo "Contents of the file are : ";
foreach($strArray as $v){
    echo $v." ";
}

echo "<hr>";
?>

<?php
$ctr = sizeof($strArray);
echo "<b>Count of companies: </b>".$ctr;
echo "<br>";
echo "<h3><u>The Companies are</u> : </h3>";
echo "<ul>";
foreach($strArray as $item) {
	echo "<li>".$item."</li>";
}
echo "</ul>";

echo "<hr>";
echo "<table>";
for($i=0;$i<$ctr;$i++){
    if($i% 3 ==0)echo "<br><br>";
    echo " ".$strArray[$i]." ";
}
echo "</table>";
?>
