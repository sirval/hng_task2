<?php
if ($_GET['success'] && $_GET['success'] !='successful')
{
	header("Location: ./index.php");
}
else
{
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8">
	<title>HNG Backend | Stage Two</title>
	<meta name="description" content="">  
	<meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
	<style type="text/css">
		a{
			color: #fff;
		}

		.but1{
			background-color: #ff80ab;
			color: #fff; 
			border-radius: 4px;
			padding: 10px;
		}
	</style>
</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="https://www.zuri.team" target="_blank">Zuri Team</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
										
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
						<li><a class="smoothscroll"  href="https://www.zuri.team" target="_blank">Zuri Team</a></li>	
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Form Submitted Sucessfully</h5>
	   			<p><a  href="#">Login</a> to view data</p>

	   			
	   			<a class="but1"  href="./index.php" title="">Submit Another</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 
   </section> <!-- /intro -->
   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
<?php
}
?>