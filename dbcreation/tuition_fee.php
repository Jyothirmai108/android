<?php

include('config.php');

// table name 


	 
$tbl_name="Student_degree";

$tuition=$_POST["tuition"];
$consession=$_POST["consession"];
$reimburse=$_POST["reimburse"];
$paid=$_POST["paid"];
$name=$_POST["name"];
$number=$_POST["number"];



$sql="INSERT INTO $tbl_name(tuition,consession,reimburse,paid)VALUES($tuition,$consession,$reimburse,$paid) WHERE name='$name' and sno=$number";
$result=mysql_query($sql);



?>