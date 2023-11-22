
<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location:login.php");
}


$connect = mysqli_connect("localhost", "root", "", "ceylon_fiberio");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="buynow.php"</script>';
			}
		}
	}
}

?>






<!DOCTYPE html>
<html>
    <head>
        <meta name ="viewport" content="with=device-width , initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/Shopping_Cart.css">  
        <link rel="stylesheet" href="css/whatsappstyle.css">
       
        
        <title>
        Ceylon Fiberio | Outlet
        </title>
    </head>
<body>


    <!--Logo & Navigation Bar-->
    <section class="sub_header">
        <nav>
            <a href="buynow.php"><img src="images/logo/logo-tr.png" alt="image"></a>
            <div class="navbar_links" id="navLinks">  
                <i  class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                        </svg> &nbsp;Home</a>
                    </li>


                    <li><a href="about.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                        </svg> &nbsp;About Us</a>
                    </li>
                   
                    <li><a href="products.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                        </svg> &nbsp;Our Products </a>
                    </li>
                    
                    <li><a href="gallery.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-image" viewBox="0 0 16 16">
                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                        <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z"/>
                        </svg> &nbsp;Gallery</a>
                    </li>

                    <li><a href="buynow.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg> &nbsp;Buy Now</a>
                    </li>

                    <li><a href="careers.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                        <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                        </svg> &nbsp;Careers</a>
                    </li>

                    <li><a href="contact_us.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                        </svg> &nbsp;Contact Us</a>
                    </li>
                </ul> 

                    
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>


<!--Search Bar-->

<div class="row">
    <div class="col-md-12">
        <div class="search">
            <input type="text" class="input" placeholder="What are you looking for ?">
            <div class="searchbtn">
                <a href="buynow.php" class="search_btn"> <i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
</div>

    
   
<h1> Outlet</h1></br>

</section>

<section class="bac" >
    <div class="welcome"> 
<?php echo "<h1> &nbsp; &nbsp; Welcome " . $_SESSION['username'] . ",</h1>"; ?>

</div>
<!--Outlet Description-->

<section class="shop-cov">
     
    <div class="container">
        <img src="images/back-cvr-image.jpg" alt="cover">
  
            <div class="top-left"> Thank You For Connecting With Us...
                    <p>Have A Nice Day<br>
                   <a href="logout.php" class="account-btn"> Logout</a>
            </div>

            <div class="bottom-left">
            <h6 style="font-size: 16px;"> Please subscribe us to get latest news of our products.</h6>
                <a href="buynow.php" class="subscribe"> Subscribe Us&nbsp;&nbsp;
                     
                    <span class="badge"><i class="fa fa-bell" ></i></span>
                </a>
            </div>
            
            <div class="centered">
                    <h1>Welcome to Ceylon Fiberio's Outlet</h1> <br>
                     <p>
                     <i>Take time to seek and feel free to shop any amount of our products with valuable discounts </i>
                    </p>
            </div>  
                     
            <div class="help" style="font-size: 18px;"> 
                    <a href="contact_us.php"> <i class="fa fa-info-circle" ></i></a>&nbsp; 
                    <a href="contact_us.php" >Help</a>
            </div>
            <div class="bottom-right"></div>

    </div>
</section>


<!--Outlet-->

<div class="container">
    


        <?php
            $query = "SELECT * FROM products ORDER BY id ASC";
            $result = mysqli_query($connect, $query);
            if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {
        ?>



    <div class="col-md-4">
        <form method="post" action="buynow.php?action=add&id=<?php echo $row["id"]; ?>">
            
            <section class="product-card">
                    <div class="container-card">
                        <div class="pdct-row">
                            <div class="card-r">

                                <img src="images/products/<?php echo $row["image"]; ?>" class="img-responsive" />

                                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                                    <p class="description"><?php echo $row["description"]; ?></p>
                                    <h4 class="text-danger">LKR <?php echo $row["price"]; ?></h4>

                                    <input type="text" name="quantity" value="1" class="form-control" />
                                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                                    <input type="hidden" name="hidden_descrption" value="<?php echo $row["description"]; ?>" />
                                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="add-btn" value="Add to Cart" />
                        </div>
                </div>
            </section>	

        </form>
    </div>
            <?php
                    }
                }
            ?>
            
    <div style="clear:both"></div>
   

<!--Product Order-->

    
    <h2 class="order">Order Details</h2>
        <div class="table-responsive">
            <table class="table table-bordered table table-hover " >
                    <tr >
                        <th width="30%">Item Name</th>
                        <th width="15%">Quantity (Units/Kg)</th>
                        <th width="15%">Price</th>
                        
                        <th width="15%">Total</th>
                        <th width="10%">Action</th>
                    </tr>

            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
                $total = 0;
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
            ?>

                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td>LKR <?php echo $values["item_price"]; ?></td>
                        <td>LKR <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                        <td><a href="buynow.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                    </tr>

            <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
            ?>
                    <tr>
                        <td colspan="3">Total</td>
                        <td>LKR <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
            <?php
            }
            ?>
                
            </table>
        </div> 
    </div>
</div>

</body>
</html>

<br>
<br>
<br>


<!--End of the Card Section-->

<!--Payment Submission Section-->

<div class="pay-row"  >
    <div class="col-md-1" ></div>
    <div class="col-md-11">
    <h2>Payment Details</h2><br>

    <p>Click on the "Choose File" button to upload a your payment slip:</p>

    <form action="payment.php" method="POST" autocomplete="off">
    <!--<input type="text" name="username" placeholder="Enter Your Name" id="username" class="form-control" required>-->
    <input type="file" id="myFile" name="recept" class="form-control" required> <br>
    <!--<input type="submit" class="account-btn">-->
    <button  type="submit" class="account-btn">Upload</button>
    </form>

    </div>
</div>  
<br><br><br><br><br><br>
<br><br><br><br><br><br>
</section> 

    



<!-- Whatsapp Button -->
<div class="whatsapp-btn-container">
    <a class="whatsapp-btn" href="https://wa.me/+94379245957"><i class="fa fa-whatsapp" style='font-size:60px;'></i></a>
    <span>Contact Us</span>
</div>
 
<!--Footer-->

<section class="footer">
      
        
    <div class="container">
        <div class="c_row">
            
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="products.php">Our Products</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="buynow.php">Outlet</a></li>
                    <li><a href="contact.php">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Get Help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Delivery</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Payment Options</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Online Shop</h4>
                <ul>
                    <li><a href="#bristle-fibre">Bristle Fibre</a></li>
                    <li><a href="#coco-peat">Coco Peat</a></li>
                    <li><a href="#fibr-bale">Coir Fibre Bale</a></li>
                    <li><a href="#hop-twine">Hop Twine</a></li>
                    <li><a href="#fmt">Machine Twisted Fibre-FMT</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Contact Us</h4>
                <p> Ceylon Fiberio Manufacturing PVT Ltd. <br> 
                    No 567/2 <br> 
                    Negambo Road <br> 
                    Kurunegala <br> 
                    +9437 924 5957</p>
            </div>

        </div>


    </div>
    
      
    
    
    <a href="#" class="top_btn"><i class="fa fa-arrow-up" ></i> To the Top</a>

    <!-- Social Media Icons -->
    <div class="icons">

        <p>Get to Know Us Better...  Follow Us On Social Media<br> 
            <a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
            <a href="https://lk.linkedin.com/"><i class="fa fa-linkedin"></i></a>
    
                <!-- Copyrights & Powered by --> 
                </br>
                Powered by <a href="index.php" target="_blank" >       @TW Solutions   </a> </br>
                Copyrights 
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
                </svg> 2022
                <a href="index.php" target="_blank" >  Ceylon Fiberio Manufacturing PVT Ltd.</a> All Rights Reserved.
                
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
            </p>

    
    </div>

</section>




<!--Java Script Part-->

    <script type="text/javascript">
        
        /*Java Script For Toggle Menu*/

        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right ="0";
        }
        function hideMenu(){
            navLinks.style.right ="-280px";    
        }


    </script>


</body>

</html>