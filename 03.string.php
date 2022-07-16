<?php
$str = "This is my name";
echo $str;
$len=strlen($str);
echo "<br>";
echo "The length of string is ".$len ."  OKAY";
echo "<br> The reverse of string is ".strrev($str)."<br> Its Position is ".strpos($str,"is");

?>