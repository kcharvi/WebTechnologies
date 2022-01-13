<?php
$data = file_get_contents("data.txt");
echo "<b><u>List of all the characters</u> : </b>";
$str = str_replace(' ','',$data);
$size = strlen($str);
for($i=0;$i<$size;$i++) {
  echo $str[$i].", ";
}
echo "<br><br>";
echo "<b>No.of Characters = </b>".$size;
echo "<hr>";

echo "<b>Uppercase words are : </b>";
$strArray =  explode(" ", $data);
$newUpperString='';
foreach($strArray as $v){
  if(ctype_upper($v[0])) {
    echo $v.", ";
    $newUpperString.=$v.' ';
  }
}
$newfile= 'uppercase.txt';
file_put_contents($newfile, $newUpperString);
?>
