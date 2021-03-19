<!DOCTYPE html>
<html>
<body>

<?php

/* $myfile = fopen("practice.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("practice.txt"));
fclose($myfile);

$myfile = fopen("practice.txt", "w+") or die("Unable to open file!");
fwrite($myfile,"Good Morning rfc "); */

/* 
$myfile = fopen("practice.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

 */

$myfile = fopen("practice.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) 
{
  echo fgetc($myfile);
}
fclose($myfile);

?>

</body>
</html>