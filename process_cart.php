<?php
	require('includes/mysql_connect.php');
session_start();

	if(isset($_GET['nm']) and isset($_GET['rate']))
       {
		
		$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"aqt"=>$_GET['aqt'],"rate"=>$_GET['rate'],"qty"=>"1");
        header("location: viewcart.php");
	}
	else if(isset($_GET['id']))
	{
		
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{
		
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
            
			header("location: viewcart.php");
		}
	}


?>