		<?php
if (isset($_POST['contactSubmit'])) 
{
	$regNum = stripslashes($_POST['contactName']);
	$admDate = stripslashes($_POST['contactEmail']);
	$admTime = stripslashes($_POST['contactSubject']);
	$schoolCode = stripslashes($_POST['contactMessage']);
	header('location: contact.php?success=successful');
}
 
$dev = 'Ohuka Valentine';
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

	   			<h5>Hello, <strong style="color: #fff">I'm</strong></h5>
	   			<h1><?php echo $dev; ?></h1>

	   			<p class="intro-position">
	   				<span>Back-end Developer</span>
	   				<span>PHP </span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#contact" title="">Contact Us</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
         <li><a href="https://zuri.team" title="Zuri Official Website"><img src="./images/zuri.png" height="30px" width="30px"></a></li>
         <li><a href="https://hng.tech" title="HNG Official Website"><img src="./images/hng.png"  height="30px" width="30px"></a></li>
         <li><a href="https://ingressive.org" title="I4G Official Website"><img src="./images/i4g.png"  height="30px" width="30px"></a></li>
         
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			
   			<div class="intro-info">

   				<img src="images/my_pics.jpg" alt="Profile Picture">

   				<p class="lead">I am <?php echo $dev; ?> a graduate of Akanu Ibiam Federal Polytechnic Afikpo, Ebonyi state. My passion for coding is unequal to any other thing as I speak fluently the following language: PHP, Javascript and Python. And also an upcoming Machine Learning expert. </p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<p><?php echo $dev; ?> is a goal getter, a team player with high communication skills</p>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span><?php echo $dev; ?></span>
   				</li>
   				<li>
   					<strong>Age:</strong>
   					<span>26</span>
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span>Freelancer, Backend Developer</span>
   				</li>
   				
   				<li>
   					<strong>Email:</strong>
   					<span>ohukaiv@gmail.com</span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
   			<p>I speak the following fluently</p>

				<ul class="skill-bars">
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>HTML5</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>CSS3</strong>
				   </li>
				   <li>
				   	<div class="progress percent70"><span>65%</span></div>
				   	<strong>JQuery</strong>
				   </li>
				   <li>
				   	<div class="progress percent95"><span>85%</span></div>
				   	<strong>PHP</strong>
				   </li>
				   <li>
				   	<div class="progress percent75"><span>60%</span></div>
				   	<strong>Javascript</strong>
				   </li>
				   <li>
				   	<div class="progress percent75"><span>60%</span></div>
				   	<strong>Python</strong>
				   </li>
				   
      
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
   			<a href="#" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			
   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Work Experience</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Backend Developer</h3>
	   					<p>Feb 2017 - July 2019</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Disqussion</h4>
	   				</div>

	   			</div> <!-- /timeline-block -->
	   		</div>
	   		<div class="timeline-wrap">
	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Backend Developer</h3>
	   					<p>Feb 2017 - July 2019</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Done-Right Technologies</h4>
	   				</div>

	   			</div> <!-- /timeline-block -->
	   		</div>
	   		<div class="timeline-wrap">
	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Backend Developer</h3>
	   					<p>Aug 2021 - Present</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>HNG Internship</h4>
	   				</div>

	   			</div> <!-- /timeline-block -->
	   		</div>

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Education</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">
   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Python Programming</h3>
	   					<p>July 2021 - Present</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Zero to Mastery Academy</h4>
	   					<p>Python Programming</p>
	   				</div>

	   			</div> <!-- /timeline-block -->


   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>PGD</h3>
	   					<p>March 2021 - July</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>International College of Safety and Management Professional</h4>
	   					<p>Project Management and Construction</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Higher National Diploma</h3>
	   					<p>Oct 2017 - Oct 2019</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Akanu Ibiam Federal Polytechnic Unwana, Ebonyi State</h4>
	   					<p>Computer Science</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>National Diploma</h3>
	   					<p>Oct 2014 - Nov 2016</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Akanu Ibiam Federal Polytechnic Unwana, Ebonyi State</h4>
	   					<p>Computer Science</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
		
	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Portfolio</h5>
   			<h1>Check Out Some of My Works.</h1>

   			<a href="#" class="lead">Modern School Management System</a><br>
   			<a href="#" class="lead">Lodging booking App</a><br>
   			<a href="#" class="lead">ID card generation System</a><br>
   			<a href="#">View More <i class="fa fa-arrow-right"></i></a>

   		</div><!-- /twelve -->    		
   	</div> <!-- /section-intro--> 
	</section> <!-- /portfolio --> 


	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Services</h5>
   			<h1>What Can I Do For You?</h1>

   			<p class="lead">As a fullstack developer for 5 year, we can take up all the following</p>

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	      	<div class="service">	

	      		<span class="icon"><i class="icon-earth"></i></span>            

	            <div class="service-content">	

	            	 <h3>Web App Development</h3>

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>
	         		
	         	</div> 	         	 

				</div> <!-- /service -->

				<div class="service">	

					<span class="icon"><i class="icon-window"></i></span>                          

	            <div class="service-content">	

	            	<h3>API Development</h3>  

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p>

	            </div>	                          

			   </div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-paint-brush"></i></span>		            

	            <div class="service-content">

	            	<h3>Unit Testing</h3>

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	        			</p> 

	            </div> 	            	               

			   </div> <!-- /service -->

				<div class="service">

					<span class="icon"><i class="icon-toggles"></i></span>	              

	            <div class="service-content">

	            	<h3>Data Analytics</h3>

		            <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
	         		</p> 
	         		
	            </div>                

				</div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-image"></i></span>	            

	           

	      </div> <!-- /services-list -->
   		
   	</div> <!-- /services-content -->
		
	</section> <!-- /services -->	


	<!-- stats Section
   ================================================== -->
	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Projects Completed
						</h5>

					</div> <!-- /stat -->					

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							900
						</h3>

						<h5 class="stat-title">
							Happy Clients
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							200
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div> <!-- /stat -->									

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							120
						</h3>

						<h5 class="stat-title">
							Crazy Ideas
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Coffee Cups
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
							7200
						</h3>

						<h5 class="stat-title">
							Hours
						</h5>

					</div> <!-- /stat -->

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> <!-- /stats -->

	
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

   			<p class="lead">Be the first to get in touch with us</p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="" method="post" action="<?php echo (htmlspecialchars($_SERVER['PHP_SELF'])); ?>">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name"  minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email"  required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button type="submit" name="contactSubmit" class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
            Paradise Estate<br>
             Ado Ekiti, Ekiti State<br>
              Nigeria
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>ohukaiv@gmail.com<br>
			   			     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Phone: (+234) 808 2646 718<br>
			   	
			   </p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="#"><i class="fa fa-behance"></i></a></li>
			      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>?? Copyright Kards 2016.</span> 
		        	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
