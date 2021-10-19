<?php 
include("../../db-connect/connection.php");
$db=new database();

$output="";


if($_POST["type"] == "")
{
	$sql_select=$db->link->query("SELECT * FROM `item_info`");

	

	if($sql_select)
	{
		while ($fetch=$sql_select->fetch_assoc()) 
		{
			$output.="<option value ='{$fetch['item_id']}'>{$fetch['item_name']}</option>";
		}
	}

}
elseif ($_POST["type"] == "catagorie") 
{
	$sql_select=$db->link->query("SELECT * FROM `catagorie_info` WHERE `item_id` = {$_POST['item_id']}");


	if($sql_select)
	{
		// $output.="<option value=''>select one</option>";
		while ($fetch=$sql_select->fetch_assoc()) 
		{
			$output.="<option value ='{$fetch['catagorie_id']}'>{$fetch['catagorie_name']}</option>";
		}
	}
}


echo $output;



?>