﻿<html>
<center>

<body bgcolor="pink">

<br>

<?php


$name=["Virat kohli","Rohit sharma","shikar Dhawan","KL Rahul","Rishab pant","Hardic pandya","R jadeja","R Ashwin","B kumar","J Bhumrha","m shami"];



echo "<h4> <u><b>CRICKET TEAM PLAYERERS NAME</b></u></h4>
<table border='1px'>
 <tr><th class='h' >Sl No</th>
<th class='h'>NAME</th>
</tr>";

for($i=0;$i<11;$i++)

{

$sl=$i+1;

echo " <tr><th>$sl</th><th>$name[$i]</th></tr>";

}

echo "</table>";

?>

</body>

</html>