<?php 
header ("Content-type: text/plain");

$mysqli = new mysqli('localhost', 'root', '', 'babysleep');

if($mysqli->connect_errno) {
	echo "Failed to connect to MySql:(" . $mysqli->connect_errno . ") " .$mysqli->connect_error;
}
else {
	echo "connect to database\n";
	print_r($mysqli);
}

if(!($res = $mysqli->query("CALL babysleepsum()")))
{
	echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
else
{

print_r($res);

while($row = $res->fetch_assoc());
   {
	//echo $row->babyname, $row->sleepday, $row->duration;
	echo $row["babyname"], ",", $row["sleepday"],",", $row["duration"], "/n";
    }
}
?>