<?php
$cookie_name = "user";
$cookie_value = "charvi.19bce7002@vitap.ac.in";
$cookie_time = 86400*10;
setcookie($cookie_name, $cookie_value, time() + $cookie_time, "/"); 
echo "<br>";
echo "<br>";
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie named '" . $cookie_name . "' is set!<br>";
  echo "Cookie value before modification is: " . $_COOKIE[$cookie_name]."<br>";
  echo "Cookie will expire after : " . $cookie_time." seconds";
}
echo "<br><br>";
echo "<br>";
echo "<hr>";
echo "<br>";
?>

<?php
$userInput = "‰ŽœØHelloÿWorld¶œÅØÿ";

echo "Actual Input - ".$userInput."<br><br>";

$userInput = filter_var($userInput, FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW);
$userInput = filter_var($userInput, FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH);

echo "After encoding characters with ASCII value <32 and > 127 - ".$userInput;
echo "<br><br>";
echo "<br>";
echo "<hr>";
echo "<br>";
?>

<?php

$userInput = "‰ŽœØHelloÿWorld¶œÅØÿ";

echo "Actual Input - ".$userInput."<br><br>";

$userInput = filter_var($userInput, FILTER_SANITIZE_ENCODED, FILTER_FLAG_STRIP_LOW);
$userInput = filter_var($userInput, FILTER_SANITIZE_ENCODED, FILTER_FLAG_STRIP_HIGH);

echo "After removing characters with ASCII value <32 and > 127 - ".$userInput;



?>