<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SimpleAuction - Items List</title>
    
    <!-- Include CSS -->
    <link href="./css/reset.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link href="./css/slimbox2.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700' rel='stylesheet' type='text/css' />

    <!-- Include Scripts -->	
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.lite.min.js"></script>
    <script type="text/javascript" src="js/jquery.pngFix.pack.js"></script>
    <script type="text/javascript" src="js/jquery.color.js"></script>
    <script type="text/javascript" src="js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/slimbox2.js"></script>
    <script type="text/javascript" src="js/slides.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>	

    <meta charset="UTF-8"></meta>
</head>

<body>

<!-- START HEADER -->
<div id="header">

	<div class="container">
    
    	<div id="primary-nav" class="header-right">
        
            <ul class="sf-menu">
                <li class="current"><a href="./index.php">Home</a></li>
                <li><a href="./item.php">Item List</a></li>
                <li><a href="./ended.php">Ended Items</a></li>
                <?php if($_SESSION['username'] == "") 
                    echo '<li><a href="./register.php">Register</a></li>'?>
                <li><a href="./about.php">About Us</a></li>	
                <li><a href="./contact.php">Contact</a></li>
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
      	<? if ($_SESSION['username']=="") {
				?>
           
            <form id="login-form" action="index.php" method="POST">
             	 <h5>Login</h5>
        	    <label><p>Username</p></label>
        		<input class="input" name="username" id="username" type="text"/>
        		<label><p>Password</p></label>
        		<input class="input" name="password" id="password" type="password" />
        		<p class="button">
                <input type="submit"  value="Login" name="submit" id="submit" />
            	</p>
    	    </form>
            <div id="successMsg"></div>
            <div id="errorMsg"></div>
            <?
			}
			else {
				echo "<span style='color:white'>Welcome back, <b>".$_SESSION['username']."</b> | </span> <a href='logout.php'>Log Out</a>";
			}
			?>
      </div>
    </div>
</div><!-- END HEADER DIVIDER -->
<div class="centerBox">

<!-- START MAIN CONTAINER -->
<div class="container">

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
<br class="clear" />
    <!-- start slider -->  
    <div id="feature-slider">                
    
        <!-- start slides_container-->
        <div class="slides_container">
      
            
            <!-- start slide -->
            <div class="slide">
            
                <div class="grid onehalf">
                
                    <h2>How About Another Slider?</h2>
                    
                    <p>MacLander comes with a slick, custom made slider for your features page to show off all of your App / Software's goodies. Each slide is a simple div, and inside of those divs you can put whatever content you want! HTML, text, images, video, flash, you name it.</p>
                    
                    <p>It's jQuery powered and will auto adjust the height of your slides for you to create a cool shrinking and expanding effect when the slides change.</p>
                    
                    <p class="grid onefourth">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p class="grid onefourth last">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    
                </div>
                
                <div class="grid onehalf last">
                
                    <img src="images/slider-imac.jpg" alt="imac" align="right" />
        
                </div>
                
            </div><!-- end slide -->
        
        
            <!-- start slide -->
            <div class="slide">
            
                <div class="grid last"><img src="images/slide-two.jpg" alt="screenshot" /></div>
                
                <div class="grid onefourth">
                    <h4>Cool Feature Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
        
                <div class="grid onefourth">
                    <h4>Cool Feature Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
        
                <div class="grid onefourth">
                    <h4>Cool Feature Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
        
                <div class="grid onefourth last">
                    <h4>Cool Feature Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                      
            </div><!-- end slide -->


            <!-- start slide -->
            <div class="slide">
            
                <div class="grid last"><img src="images/slide-three.jpg" alt="screenshot" /></div>
                
                <div class="grid onefourth">
                    <h4>Cool Feature Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
        
                <div class="grid onefourth">
                    <h4>Cool Feature Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
        
                <div class="grid onefourth">
                    <h4>Cool Feature Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
        
                <div class="grid onefourth last">
                    <h4>Cool Feature Title</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                      
            </div><!-- end slide -->
            
            
            <!-- start slide -->
            <div class="slide">
            
            	<h2>Get Your Grid On</h2>
                
                <p class="grid onehalf">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
                <p class="grid onehalf last">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
                <p class="grid onethird">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="grid onethird">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="grid onethird last">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            
                <p class="grid onefourth">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="grid onefourth">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="grid onefourth">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="grid onefourth last">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                
            </div><!-- end slide -->
            
            
            <!-- start slide -->
            <div class="slide">
            
            	<div class="grid video-left">
                
                	<h2>How About A Video?</h2>
                    
                   	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    
               </div>
               
               <div class="grid video-right last">
               
                   <iframe src="http://player.vimeo.com/video/18490373?title=0&amp;byline=0&amp;portrait=0&amp;color=000000" width="612" height="344" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
               
               </div>
               
           </div><!-- end slide -->
        
        </div><!-- end slide_container -->
        
        
    	<!-- start slide nav -->
        <div id="slide-nav">
        
            <a href="#_" class="prev-slide">Previous</a>
                                
            <div id="slide-counter"><span id="counter-current">1</span> / <span id="counter-total">5</span></div>
            
        	<a href="#_" class="next-slide">Next</a>
            
            <br class="clear" />
            
        </div><!-- end slide nav -->
      
    </div><!-- end slider -->    
    
        
    <br class="clear" />
    
</div><!-- END MAIN CONTAINER -->


<!-- START SUBSCRIBE CONTAINER -->
<div id="subscribe">

	<!-- CLOSE BUTTON -->
	<img id="close" src="images/close.png" border="0" alt="Close" />

	<div class="container">
    
        <p>No Spam, We Promise!</p>
        <h1>Get Our Latest App Updates.</h1>
    
    	<!-- ENAIL FORM -->
        <div id="footer-subscribe">
                            
            <form method="post" action="">
                <input id="email" type="text" onfocus="if (this.value == 'enter your email to subscribe!') {this.value = '';}" onblur="if (this.value == '') {this.value = 'enter your email to subscribe!';}" value="enter your email to subscribe!" />
                <input type="submit" value="submit" id="email-submit" />
            </form>
                            
        </div><!-- END EMAIL FORM -->
                        
	</div>

</div><!-- END SUBSCRIBE CONTAINER -->


<!-- START LIGHTBOX TILES --><!-- END LIGHTBOX TILES -->


<!-- START SUB TILES ONE --><!-- END SUB TILES -->
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