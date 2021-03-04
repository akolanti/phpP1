<?php session_start(); ?>

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
									<h1 class="title">Welcome to Registration.</h1>
						
									<div class="entry">
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table class="form">
											<form action="process_register.php" method="POST">
                                                
                                                
												
												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>
													
												</tr>
                                                
                                                <tr><td>&nbsp;</tr>
                                                
												<tr>
													<td><b>First Name :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='fnm'></td>
												
												</tr>
                                                <tr><td>&nbsp;</tr>
                                                <tr>
													<td><b>Last Name :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='lnm'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
                                                
                                                <tr>
													<td><b>Address :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="200" name='adr'></td>
												
												</tr>
												
                                                <tr><td>&nbsp;</tr>
                                                
												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pwd' size="30"></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
											
                                                <tr>
													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='mail' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>				
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  OK  " >
													</td>
												</tr>
											</form>
										</table>
									</div>
									
								</div>
					
					
							</div>
				
				
						<div id="sidebar">
								<?php
									include("includes/search.php");
								?>
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
