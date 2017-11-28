<?php
$file = 'schools.json';
if(file_exists($file)){
  $filedata = file_get_contents($file);
  $objson = json_decode($filedata, true);

  echo"<hr><code><pre>";
  print_r($objson);
  echo"</pre></code><hr>";
}
else echo $file . " does not exist";

//test output
echo($objson['school']["Mediacollege"]["category"]);
echo("<br>");
echo($objson["school"]["HVA"]["courses"]["SD"]);
?>
