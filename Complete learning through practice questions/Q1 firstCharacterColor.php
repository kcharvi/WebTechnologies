
<?php
  $my_sentence = "Hello World! I am Charvi, a student from Vellore Institute of Technology, AP.";
  echo "Before: <br>";
  echo $my_sentence."<br>";
  $my_sentence = preg_replace('/\b([a-z])/i', '<span style="color:red;">\1</span>', $my_sentence);
  echo "After"."<br>";
  echo $my_sentence."<br>";
  ?>