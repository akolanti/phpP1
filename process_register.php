<?php
	require('includes/mysql_connect.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['unm']) || empty($_POST['pwd']) || empty($_POST['mail'])||empty($_POST['adr']))
		{
			$msg.="<li>Please fill all requirement";
		}
		
		if(!$_POST['mail'])
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
		}
		
		
		if(strlen($_POST['pwd'])>10)
		{
			$msg.="<li>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['fnm']) || is_numeric($_POST['lnm']) )
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['fnm'];
            $lnm=$_POST['lnm'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
			$email=$_POST['mail'];
			$address=$_POST['adr'];
			
			
			$query="insert into customers(username,firstname,lastname,address,cust_pwd,cust_email)
			values('$unm','$fnm','$lnm','$address','$pwd','$email')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>