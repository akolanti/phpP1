<?php session_start();

 extract($_POST);
 extract($_SESSION);
require('includes/mysql_connect.php');

 $unm = $_SESSION['unm'];
    $q="select custid from customers WHERE username='$unm'";
  
   
	
    $r=mysqli_query($conn,$q) or die("Can't Execute Query...");
    $row1=mysqli_fetch_assoc($r);
       
              
    $cid = $row1['custid'];
    

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.php");
						?>
					</div>
				</div>
				<div id="logo-wrap">
				
						<center>
					<img src="images/bookimage.jpg" height="300" width="800" alt="book">;
                    </center>
				</div>
				</div>
				
			<!-- end header -->
			<div class="entry">
						        
                                <table border="4" width="100%" >
											<br><br><br><br><br>
                                    <center>
											<?php
												
												
											
												$query="select orderid from orders where custid=$cid ORDER BY orderid DESC LIMIT 1";
	
												$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	
												$row=mysqli_fetch_assoc($res);
												    echo "<h1>You order was successfully Placed</h1>";
													echo '<h2>Order ID '.$row['orderid'].' has been generated</h2>';
																			
													                
											
											?>
                                        <br><br><br><br><br><br>
                                    </center>
								</table>
								
							</div>
    </body>
</html>