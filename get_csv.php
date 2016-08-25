<?php
include('../database/config.php');
$obj_connection= new DBController();
include('../common/database.class.php');
    $obj_common= new common();    


$file = fopen("test.csv","r");
echo"<table border='1'>";
while(! feof($file))
  {
  	echo "<tr>";
	$line=(fgetcsv($file));
	for($i=0;$i<=5;$i++)
	{
		echo"<td>".$line[$i]."</td>";
	}
	echo"</tr>";
}
echo"</table>";
fclose($file);