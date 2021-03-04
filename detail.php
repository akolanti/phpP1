<?php session_start();
	require('includes/mysql_connect.php');
	
	$id=$_GET['id'];
	
	$q="select * from BookInventory where book_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
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

					

				<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo $row['book_name'];?></h1>
									<div class="entry">
										<?php
										
											echo '	<table class="detail" style="color:white" border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0" style="color:white" width="100%" bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['book_img'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table style="color:#ffffff" border="0"  width="100%" height="100%">
															<tr valign="top">
																<td style="color:#ffffff"align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td  style="color:#ffffff" align="left">'.$row['book_name'].'</td>
															</tr>

															
															<tr>
																<td style="color:#ffffff" align="right">Available</td>
																<td>: </td>
																<td style="color:#ffffff" align="left">'.$row['book_quantity'].'</td>
																
															</tr>
															
																					
															<tr>
																<td style="color:#ffffff" align="right">Publisher </td>
																<td>: </td>
																<td style="color:#ffffff" align="left">'.$row['book_publisher'].'</td>
																
															</tr>											
															
															
															
															<tr>
																<td style="color:#ffffff" align="right"> PRICE</td>
																<td>: </td>
																<td style="color:#ffffff" align="left">'.$row['book_price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												<tr valign="bottom" >
												
														<a href="'.$row['book_img'].'" rel="lightbox"><img src="images/zoom.gif" ></a>
													
												</tr>
											
											<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3" color="white">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
																		
											 </table>
											 
											 <font color="white">
											 '.$row['book_desc'].'
											</font>									

											 
											 <tr><td colspan=2><hr color="white"></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td><a href="process_cart.php?nm='.$row['book_name'].'&aqt='.$row['book_quantity'].'&rate='.$row['book_price'].'">
														<img src="images/addcart.jpg">
													</a></td>';
												}
												else
												{
													echo '<td><img src="images/addcart.jpg"><br><a href="register.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
										?>
									</div>
				
								</div>
			
							</div>
					
							<div id="sidebar">
									<?php
										include("includes/search.php");
									?>
							</div>
							<!-- end sidebar -->
								<div style="clear: both;">&nbsp;</div>
				
				</div> 
		
						<div id="footer">
									<?php
										include("includes/footer.php");
									?>
						</div>
					
</body>
</html>
