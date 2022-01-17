<?php
error_reporting(E_ERROR | E_PARSE);

$userFile = $_POST["myfile"];
$txtfile = fopen($userFile, "r") or die("Error opening text file!");
?>

<?php
$freq=array();
$word = "";
$getFile = fopen($userFile, "r") or die("Error opening text file!");

if ($getFile === false)
{ 
  exit; 
}

while (false !== ($eachChar = fgetc($getFile)))
{ 
  if ($eachChar == ' ')
  { 
    $freq[$word]++; 
    $word = ""; 
  } 
  else
  { 
    $word .= $eachChar; 
  } 
}

echo print_r($freq);
echo "<br>";
?>

<?php
$wordCount = str_word_count(file_get_contents($userFile));
echo "Total words =".$wordCount;
fclose($txtfile);
?>

</html>