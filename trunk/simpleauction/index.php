<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    
    <title>SimpleAuction - Home</title>
    
    <!-- Include CSS -->
    <link href="./css/reset.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700' rel='stylesheet' type='text/css' />

 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="./js/superfish.js"></script>
<script type="text/javascript" src="./js/custom.js"></script>

<meta charset="UTF-8"></meta>
</head>
    
<body>

<!-- START HEADER -->
<div id="header">

	<div class="container">
    
    	<div id="primary-nav" class="header-right">
        
            <ul class="sf-menu">
                <li class="current"><a href="./index.html">Home</a></li>
                <li><a href="./item.html">Item List</a></li>
                <li><a href="./ended.html">Ended Items</a></li>
                <li><a href="./register.html">Register</a></li>
                <li><a href="./about.html">About Us</a></li>	
                <li><a href="./contact.html">Contact</a></li>
                <li>
                	<a href="#">Category</a>
                    <ul>
                      <li><a href="#">Home Furniture</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Vouchers</a></li>
                        <li><a href="#">Token</a></li>
                        <li><a href="#">Other</a></li>
                  </ul>  
              </li>
             </ul>
        </div>
        
        <!-- LOGO -->        
    	<a href="#"><img src="./images/logo.png" border="0" alt="MacLander App Site Template" /></a>
        
        <br class="clear" />
        
    </div>
    
</div><!-- END HEADER -->


<!-- HEADER DIVIDER -->
<div id="head-break">
	<div class="headlineBox">
   	  <div class="tokenBox">
        	<h1>Token Packages</h1>
          
              <ul>
                  <li><a href="#"><p>20 Tokens : $15</p></a></li>
                  <li><a href="#"><p>40 Tokens : $30</p></a></li>
                  <li><a href="#"><p>60 Tokens : $45</p></a></li>
                  <li><a href="#"><p>80 Tokens : $60</p></a></li>
                  <li><a href="#"><p>100 Tokens : $75</p></a></li>
              </ul>
        </div>
        <div class="loginBox">
      	<?php
        if ($_SESSION['error']==1) {
            echo '<script language="javascript">alert("Wrong username or password")</script>';
        ?>
             <h5>Login</h5> 
                <form action="login.php" method="POST">
        
        <label><p>Username</p></label>
        <input name="username" type="text"/>
        <label><p>Password</p></label>
        <input name="password" type="password" />
        <p></p>
        <input name="signIn" type="submit" value="Sign In" />
    	
        </form>
        <?php
        }
        elseif ($_SESSION['username']!='') {
            echo '<span style=color:white>Welcome back, '.'<b>'.$_SESSION['username'].'</b>. <a href="logout.php" alt="Log Out">Log Out</a></span>';
        }
        else {
        ?>
            <h5>Login</h5> 
                <form action="login.php" method="POST">
        
        <label><p>Username</p></label>
        <input name="username" type="text"/>
        <label><p>Password</p></label>
        <input name="password" type="password" />
        <p><input name="remember" type="checkbox" value="" checked="checked"/> Remember me</p>
        <input name="signIn" type="submit" value="Sign In" />
    	
        </form>
         
        <?php
        }
        ?>
        </div>
    </div>
</div><!-- END HEADER DIVIDER -->


<!-- START MAIN CONTAINER -->
<div class="centerBox">
<div class="container">
	<!-- START Auction Item CONTAINER -->
  <div class="newsBox">
  <h1>News</h1>
  <hr />
  <h4>Aldo has became the number one most handsome guy in the whole wide world, But is shortly replaced by Dillan as he has grown his hair back. Pity for Aldo for not being able to grow his hair back to his hobo-emo style.</h4>
  </div>
  <div id="ItemContain">
    <h1>Auction Items List</h1>
    	<div id="ItemBox">
        <img name="itemOne" src="" width="195" height="167" alt="" />
        <p>ITEM NAME</p>
        <p>ITEM PRICE</p>
        <p>TIME LEFT</p>
        <a href="register.html"><img src="images/login.png" alt="Bid Now" width="100" height="60" longdesc="register.html" /></a>
        </div>
        <div id="ItemBox">
        <img name="itemOne" src="" width="195" height="167" alt="" />
         <p>ITEM NAME</p>
        <p>ITEM PRICE</p>
        <p>TIME LEFT</p>
        <a href="register.html"><img src="images/login.png" alt="Bid Now" width="100" height="60" longdesc="register.html" /></a>
        </div>
        <div id="ItemBox">
        <img name="itemOne" src="" width="195" height="167" alt="" />
         <p>ITEM NAME</p>
        <p>ITEM PRICE</p>
        <p>TIME LEFT</p>
        <a href="register.html"><img src="images/login.png" alt="Bid Now" width="100" height="60" longdesc="register.html" /></a>
        </div>
        <div id="ItemBox">
        <img name="itemOne" src="" width="195" height="167" alt="" />
         <p>ITEM NAME</p>
        <p>ITEM PRICE</p>
        <p>TIME LEFT</p>
        <a href="register.html"><img src="images/login.png" alt="Bid Now" width="100" height="60" longdesc="register.html" /></a>
        </div>
        <div id="ItemBox">
        <img name="itemOne" src="" width="195" height="167" alt="" />
         <p>ITEM NAME</p>
        <p>ITEM PRICE</p>
        <p>TIME LEFT</p>
        <a href="register.html"><img src="images/login.png" alt="Bid Now" width="100" height="60" longdesc="register.html" /></a>
        </div>
        <div id="ItemBox">
        <img name="itemOne" src="" width="195" height="167" alt="" />
         <p>ITEM NAME</p>
        <p>ITEM PRICE</p>
        <p>TIME LEFT</p>
        <a href="register.html"><img src="images/login.png" alt="Bid Now" width="100" height="60" longdesc="register.html" /></a>
        </div>
        <div id="ItemBox">
        <img name="itemOne" src="" width="195" height="167" alt="" />
         <p>ITEM NAME</p>
        <p>ITEM PRICE</p>
        <p>TIME LEFT</p>
        <a href="register.html"><img src="images/login.png" alt="Bid Now" width="100" height="60" longdesc="register.html" /></a>
        </div>
        <div id="ItemBox">
        <img name="itemOne" src="" width="195" height="167" alt="" />
         <p>ITEM NAME</p>
        <p>ITEM PRICE</p>
        <p>TIME LEFT</p>
        <a href="register.html"><img src="images/login.png" alt="Bid Now" width="100" height="60" longdesc="register.html" /></a>
        </div>
        <div id="ItemBox">
        <img name="itemOne" src="" width="195" height="167" alt="" />
         <p>ITEM NAME</p>
        <p>ITEM PRICE</p>
        <p>TIME LEFT</p>
        <a href="register.html"><img src="images/login.png" alt="Bid Now" width="100" height="60" longdesc="register.html" /></a>
        </div>
        
    </div>

  <!-- END Auction Item CONTAINER -->
    
    

    
    <br class="clear" />
    
</div><!-- END MAIN CONTAINER -->

<!-- START LIGHTBOX TILES -->
<div id="image-tiles">

	<div class="container">
    <h3>Ended Auctions</h3>
        <a href="images/screens/full_one.jpg" title="App Screen Shot One" rel="lightbox-shots"><img src="images/screens/full_one.png" alt="screenshot one" /></a>
        <a href="images/screens/full_two.jpg" title="App Screen Shot Two" rel="lightbox-shots"><img src="images/screens/full_two.png" alt="screenshot two" /></a>
        <a href="images/screens/full_three.jpg" title="Screen Shot Three" rel="lightbox-shots"><img src="images/screens/full_three.png" alt="screenshot three" /></a>
        <a href="images/screens/full_four.jpg" title="Screen Shot Four" rel="lightbox-shots"><img class="last" src="images/screens/full_four.png" alt="screenshot four" /></a>
    </div>
    
</div><!-- END LIGHTBOX TILES -->
</div>

<!-- START FOOTER -->
<div id="footer">

	<div class="container">
    
    	<div id="footer-right">
        
        	Created by <a href="http://tyler.tc/" target="_blank">Tyler Colwell</a> Modified by Aldo Gushary © 2011<br />
            <a href="#_" class="social facebook">Fan Us</a> <a href="#_" class="social twitter">Follow Us</a> <a href="#_" class="social googleplus">Plus Us</a>
            
        </div>
    
		<a id="top" href="#">Top</a> | <a href="#">Andriod Version</a> | <a href="#">Company Blog</a> | <a href="#">About Us</a> | <a href="#">Contact</a><br />
        Download MacLander on ThemeForest.<br />
        
        <br class="clear" />
    
  </div>
    
</div><!-- END FOOTER -->
</body>
</html>