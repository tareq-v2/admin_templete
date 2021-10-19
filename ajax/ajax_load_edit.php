<?php 
include("../../db-connect/connection.php");
$db=new database();

$output='';

$prod_id=$_POST['product_id'];

// echo $prod_id;


$sql_select_prod = $db->link->query("SELECT * FROM `product_info` WHERE `product_id`= '$prod_id' ");

if($sql_select_prod)
{
	$fetch_prod=$sql_select_prod->fetch_assoc();
}



if($_POST["type"] == "")
{
	$sql_select=$db->link->query("SELECT * FROM `item_info`");

	

	if($sql_select)
	{
		while ($fetch=$sql_select->fetch_assoc())
		{
			if($fetch['item_id'] == $fetch_prod['item_id'])
			{
				$select='selected';
			}
			else
			{
				$select='';
			}
			$output.="<option $select value ='{$fetch['item_id']}'>{$fetch['item_name']}</option>";
		}
	}

}
elseif ($_POST["type"] == "catagorie") 
{
	$sql_select=$db->link->query("SELECT * FROM `catagorie_info` WHERE `item_id` = {$_POST['item_id']}");


	if($sql_select)
	{
		while ($fetch_cat=$sql_select->fetch_assoc()) 
		{
			if($fetch_cat['catagorie_id'] == $fetch_prod['cat_id'])
			{
				$select_cat='selected';
			}
			else
			{
				$select_cat='';
			}
			$output.="<option $select_cat  value ='{$fetch_cat['catagorie_id']}'>{$fetch_cat['catagorie_name']}</option>";
		}
	}
}




echo $output;



?>