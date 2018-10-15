<?php
include("connection.php");
if($_POST)
{
	$insQuery = "INSERT INTO jquery SET `name` = '".$_POST["name"]."',`email` = '".$_POST["email"]."',`phone`='".$_POST["phone"]."'";
	
	if(mysql_query($insQuery))
	{
		echo "record inserted successfully";	
	}
	else
	{
		echo "error while insert query";		
	}
}
else
{
	
}
?>