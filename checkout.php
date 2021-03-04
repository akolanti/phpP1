<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
	require('includes/mysql_connect.php');
	
    $unm = $_SESSION['unm'];
    $q="select custid from customers WHERE username='$unm'";
  
   
	
    $r=mysqli_query($conn,$q) or die("Can't Execute Query...");
    $row=mysqli_fetch_assoc($r);
       
              
    $cid = $row['custid'];
    
    if(isset($submit))
	{
       
			$fnm=$_POST['firstname'];
            $lnm=$_POST['lastname'];
			$adr=$_POST['address'];
			$zip=$_POST['zipcode'];
			$city=$_POST['city'];
			$coun=$_POST['country'];
			    
        
        
	$query="insert into orders(custid, firstname, lastname, ship_address, ship_zip_code, ship_city, ship_country) values('$cid','$fnm','$lnm','$adr','$zip','$city','$coun')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:payment_details.php");
	
        }
                
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.php");
		?>
</head>

<body>
		
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.php");
						?>
					</div>
				</div>
				
				
	
			<h1 style="font-size:30px;color:white;">Shipping Details</h1>	
			<div class="container">
	
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div> 
		
      <div  class="form">
    		<form id="contactform" method="post"> 
                <p class="contact"><label for="name">First Name</label></p> 
    			<input id="firstname" name="firstname" placeholder="First name" required="" tabindex="1" type="text"> 
                
    			<p class="contact"><label for="name">Last Name</label></p> 
    			<input id="lastname" name="lastname" placeholder="last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="Ship address">Address</label></p> 
    			<textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="text"> </textarea>
                
                <p class="contact"><label for="zipcode">Postal Code</label></p> 
    			<input id="zipcode" name="zipcode" placeholder="201001" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="city">City</label></p> 
    			<input type="text" id="city" name="city" required="" placeholder="City"> 
                <p class="contact"><label for="country">Country</label></p> 
    			<input type="text" id="country" name="country" required="" placeholder="Country"> 
                
                <label for="cname">Name on the Card</label>
               <input type="text" id="cname" name="cardname" required="" placeholder="Name on the Card">
               <label for="ccnum">Credit card number</label>
               <input type="text" id="ccnum" name="cardnumber"  required="" maxlength="19" minlength="19" placeholder="1111-2222-3333-4444">
               <label for="expmonth">Exp Month</label>
               <input type="number" id="expmonth" name="expmonth"  required="" placeholder="Exp Month"><br>
               <label for="expyear">Exp Year</label>
                <input type="number" id="expyear" name="expyear"  required="" placeholder="Exp Year"><br>
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv"  required="" placeholder="CVV">
            
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div>      
</div>
</body>
