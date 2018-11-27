



<?php

$var = array(
1=>"janvier",
2=>"février",
3=>"mars",
4=>"avril",
5=>"mai",
6=>"juin",
7=>"juillet",
8=>"aout",
9=>"septembre",
10=>"octobre",
11=>"novembre",
12=>"décembre");

$var[8] = "Août";
foreach ($var as $key => $value) {
echo "{$key}". " " . "{$value}<br>";
}
echo "<br> $var[3]";
echo "<br> $var[5]";

?>
