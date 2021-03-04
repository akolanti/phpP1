<?php session_start();?>

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
				
			

				<div id="page">
				
					<div id="content">
						<div class="post">
							
							<?php 
								if(isset($_SESSION['status']))
								{
									echo "<h1> Below are your favourite books</h1>"; 
								}
								else
								{	
									echo '<h5 style= "color:white">Note: Please login if you want to buy</h5>';
								}
							?>
                            
							<div class="entry">
						        
                                <table border="4" width="100%" >
											<br><br><br><br><br>
											<?php
												
												
											
												$query="select * from BookInventory";
	
												$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}	
													echo '<td valign="top" width="20%" align="center">
														<a href="detail.php?id='.$row['book_id'].'">
														<img src="'.$row['book_img'].'" width="80" height="100">
														<br>'.$row['book_name'].'</a>
													</td>';
													$count++;							
													                
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
								</table>
								
							</div>
				
						</div>
						
					</div>
			
					

					<div style="clear: both;">&nbsp;</div>
				</div>
		
				<div id="footer">
							<?php
								include("includes/footer.php");
							?>
				</div>
		
</body>
</html>
