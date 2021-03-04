    <?php session_start();
    require('includes/mysql_connect.php');
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
        

        <div id="page">
           
            <div id="content">
                <div class="post">
                    <h1 class="title">Viewcart</h1>
                    
                    <h5 style="color:white; height:1em;" >Note: Please click on 'Re-Calculate' Button to update the inventory</h5>
                    <div class="entry">

                        <pre><?php
                               
                                ?></pre>

                        <form class="cartForm" action="process_cart.php" method="POST">
                            <table width="100%" border="0" style="background-color:lightgray">
                                <tr>
                                    <td> <b>No
                                    <td> <b>Product
                                    <td> <b>Qty
                                    <td> <b>Available Qty
                                    <td> <b>Rate
                                    <td> <b>Price
                                    <td> <b>Delete
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <hr style="border:1px Solid #a1a1a1;">
                                    </td>
                                </tr>

                                <?php


                                        $tot = 0;
                                        $i = 1;
                                        if(isset($_SESSION['cart']))
                                        {

                                        foreach($_SESSION['cart'] as $id=>$x)
                                        {	
                                            echo '
                                                <tr>
                                                <Td > '.$i.'
                                                <td > '.$x['nm'].'
                                                <td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
                                                <td > '.$x['aqt'].'
                                                <td > '.$x['rate'].'
                                                <td > '.($x['qty']*$x['rate']).'
                                                <td > <a href="process_cart.php?id='.$id.'">Delete</a>
                                            </tr>';

                                            $tot = $tot + ($x['qty']*$x['rate']);
                                            $i++;
                                          
                                           if($x['qty'] > $x['aqt']){
                                            echo "<p>WARNING:Quantity selected is greater than Available quantity</p>";
                                        }
                                            else {
                                $nam = ''.$x['nm'].'';   
                              $updqt = $x['aqt'] - $x['qty'];  
                               $query="update BookInventory SET book_quantity=$updqt where book_name='$nam'";
                                mysqli_query($conn,$query) or die("Can't Execute Query...");
                                            }

                                        
                                
                                        }
                                        

                                        }    
                                        
                                       
                                    ?>
                                <tr>
                                    <td colspan="7">
                                        <hr style="border:1px Solid #a1a1a1;">
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="6" align="right">
                                        <h4>Total:</h4>

                                    </td>
                                    <td>
                                        <h4><?php echo $tot; ?> </h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <hr style="border:1px Solid #a1a1a1;">
                                    </td>
                                </tr>

                                <Br>
                            </table>

                            <br><br>
                            <center>
                                <input type="submit" value=" Re-Calculate ">
                                <a style="color:white; font-size:1em; border:2px solid black; background-color:black" href="checkout.php">CONFIRM & PROCEED<a />
                            </center>
                        </form>
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
