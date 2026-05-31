<?php
/**
	Template Name: templatepg
 */
 
	// ASSIGNING THE URL OF THE CURRENT, HOME, AND REGISTRATION PAGES
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";				
	$madchef = "http://madchefkitchen.com/";
	$regf = "http://madchefkitchen.com/registration/";
	$title = "";
?>

<!doctype html>
<html lang=en>

<head>
	<meta charset=utf-8>
	
	<!-- CSS CODE FOR THE STRUCTURE OF THE  -->
	<style type ="text/css">

		@import url(http://fonts.googleapis.com/css?family=Satisfy);

		.quote-container 
		{
	 	 	margin-top: -60px;
  			margin-left: 75%;
  			position: relative;
		}

		.note 
		{
  			color: #333;
 	 		position: relative;
  			width: 100%;
  			margin: 0 auto;
 	 		padding: 20px;
  			font-family: Satisfy;
  			font-size: 16px;
 	 		box-shadow: 0 20px 20px 4px rgba(0,0,0,0.3);
		}

		.note .author 
		{
  			display: block;
 	 		margin: 40px 0 0 0;
  			text-align: right;
		}	

		.yellow 
		{
  			background: #eae672;
  			-webkit-transform: rotate(2deg);
  			-moz-transform: rotate(2deg);
  			-o-transform: rotate(2deg);
 	 		-ms-transform: rotate(2deg);
  			transform: rotate(2deg);
		}	

		.pin 
		{
  			background-color: #aaa;
  			display: block;
  			height: 32px;
  			width: 3px;
  			position: absolute;
  			left: 15%;
  			top: -16px;
 	 		z-index: 1;
		}
	
		.pin:after 
		{
  			background-color: #A31;
  			background-image: radial-gradient(25% 25%, circle, hsla(0,0%,100%,.3), hsla(0,0%,0%,.3));
  			border-radius: 50%;
  			box-shadow: inset 0 0 0 1px hsla(0,0%,0%,.1),
        	      	inset 3px 3px 3px hsla(0,0%,100%,.2),
 	             	inset -3px -3px 3px hsla(0,0%,0%,.2),
        	     	23px 20px 3px hsla(0,0%,0%,.15);
  			content: '';
 	 		height: 12px;
  			left: -5px;
  			position: absolute;
 	 		top: -10px;
  			width: 12px;
		}	

		.pin:before 
		{
	 		background-color: hsla(0,0%,0%,0.1);
  			box-shadow: 0 0 .25em hsla(0,0%,0%,.1);
  			content: '';
	
 		 	height: 24px;
  			width: 2px;
 	 		left: 0;
  			position: absolute;
  			top: 8px;

	  		transform: rotate(57.5deg);
  			-moz-transform: rotate(57.5deg);
  			-webkit-transform: rotate(57.5deg);
  			-o-transform: rotate(57.5deg);
  			-ms-transform: rotate(57.5deg);
	
  			transform-origin: 50% 100%;
  			-moz-transform-origin: 50% 100%;
 	 		-webkit-transform-origin: 50% 100%;
  			-ms-transform-origin: 50% 100%;
  			-o-transform-origin: 50% 100%;
		}
		
			h2 
			{ 
				position: absolute; 
				font-size: 10pt;
				color:black;
				top: -30px; 
				left: 12%; 
				width: 75%; 
			}

			#leftcont 
			{
				position: relative; 
				left:0%;
				width:33%;
				text-align:center;
				margin-top:0px;
				margin-bottom:0px;
			}
			
			#centercont 
			{	
				position: relative;
				left:0%;
				text-align:center;
				width:33%;
				margin-top:0px;
				margin-bottom:0px;
			}

			#rightcont 
			{
				position: relative;
				left:0%;
				width:33%;
				margin-top:0px;
				text-align:center;
				margin-bottom:0px;
			}
			
#top,
#bottom {
    position: relative;
    left: 0;
    right: 0;
    height: 50%;
}

#top {
    top: 0;
}

#bottom {
    bottom: 0;
}
	</style>
		
	<?php
		global $SMTheme;
		get_header(); 
		get_template_part('theloop');	
	?>
</head>
  
<body>

<?php
	if ($actual_link == "http://madchefkitchen.com/gallery/") 
	{ 
?>

		<div id="topcontent">
			<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
		</div>

		<div id="leftcontent">
			<?php echo photo_gallery(8); ?>
		</div>

		<div id="centerleftcontent">
			<?php echo photo_gallery(8);?>
		</div>

		<div id="centerrightcontent">
			<?php echo photo_gallery(8);?>
		</div>

		<div id="rightcontent">
			<?php echo photo_gallery(8);?>
		</div>

<?php 
	} 
	else if($actual_link == "http://madchefkitchen.com/goodwill/")
	{ 
?>
		<IFRAME src="http://thejvf.org/our-goal/" width="100%" height="110%" align="left"></IFRAME> 
<?php 
	} 
	else if($actual_link == "http://madchefkitchen.com/our-story/")
	{

?>
		<div class="quote-container">
  			<i class="pin"></i>
  			<blockquote class="note yellow">
    				We can't solve problems by using the same kind of thinking we used when we created them.
    				<cite class="author">The MadChefKitchen Team</cite>
  			</blockquote>
		</div>
<?php 
	}
	else if($actual_link == "http://madchefkitchen.com/explore/")
	{
?>

			<div id = "top"> 	
				<div id="leftCont">
					<a href="http://madchefkitchen.com/private-chef-services/"> <img src="http://madchefkitchen.com/wp-content/uploads/2015/10/scroll.png"  alt="" />
					<h2>
						<span style="font-family: 'Comic Sans MS', sans-serif; width:bold; font-size: 15pt; color: #ff0000;"><br> Private Chef <br></span>
						<br/> 
						Private chef services are our most personalized option. The chef is typically hired to work exclusively for  one person and/or family.
						<br/><br/><br/><br/><br/>
						<cite class="author" > <a style="font-family: 'Comic Sans MS', sans-serif; width:bold;  color: #ff0000;" href="http://madchefkitchen.com/private-chef-services/"/> Read More About Us </a></cite>
					</h2>
					</a>
				</div>

				<div id="centerCont">
					<a href="http://madchefkitchen.com/the-personal-chef-services/"> <img src="http://madchefkitchen.com/wp-content/uploads/2015/10/scroll.png" alt="" />
					<h2>
						<span style="font-family: 'Comic Sans MS', sans-serif; width:bold; font-size: 15pt; color: #ff0000;"><br>  Personal Chef <br></span>
						<br/>
						Personal Chef services can be hired as a one time event or multiple events. As a personal chef, we offer menu planning, meal preparation, grocery shopping, 
						maintaining a clean kitchen all in the comforts of your home.
						<br/><br/>
						<cite class="author" > <a style="font-family: 'Comic Sans MS', sans-serif; width:bold;  color: #ff0000;" href="http://madchefkitchen.com/the-personal-chef-services/"/> Read More About Us </a></cite>
					</h2>
					</a>
				</div>

				<div id="rightCont">
					<a href="http://madchefkitchen.com/our-chefs/"> <img src="http://madchefkitchen.com/wp-content/uploads/2015/10/scroll.png" href="http://madchefkitchen.com/our-chefs/" alt="" />
					<h2>
						<span style="font-family: 'Comic Sans MS', sans-serif; width:bold; font-size: 15pt; color: #ff0000;"><br> Cooking Classes <br></span>
						<br/>
						Classes are offered in the comfort of your home or in one of our test kitchens located in the San Gabriel Valley and Greater Los Angeles. 
						Classes can be customized and/or are offered on our Calendar.
						<br/><br/>
						<cite class="author" > <a style="font-family: 'Comic Sans MS', sans-serif; width:bold;  color: #ff0000;" href="http://madchefkitchen.com/our-chefs/"/> Read More About Us </a></cite>
					</h2>
					</a>
				</div>
			</div>	
		
			<div id="bottom"> 
				<div id="leftCont">
					<a href="http://madchefkitchen.com/explore/catering/"> <img src="http://madchefkitchen.com/wp-content/uploads/2015/10/scroll.png" alt="" />
					<h2>
						<span style="font-family: 'Comic Sans MS', sans-serif; width:bold; font-size: 15pt; color: #ff0000;"><br> Catering <br></span>
						<br/> 
						Private chef services are our most personalized option. The chef is typically hired to work exclusively for  one person and/or family.
						<br/><br/><br/><br/><br/>
						<cite class="author" > <a style="font-family: 'Comic Sans MS', sans-serif; width:bold;  color: #ff0000;" href="http://madchefkitchen.com/our-chefs/"/> Read More About Us </a></cite>
					</h2>
					</a>
				</div>

				<div id="centerCont">
					<a href="http://madchefkitchen.com/explore/demonstrations/"> <img src="http://madchefkitchen.com/wp-content/uploads/2015/10/scroll.png" href="http://madchefkitchen.com/our-chefs/" alt="" />
					<h2>
						<span style="font-family: 'Comic Sans MS', sans-serif; width:bold; font-size: 15pt; color: #ff0000;"><br>  Product Demonstrations <br></span>
						<br/>
						If you are in need of a demonstrator to showcase your food related product or appliances, please contact our demo department for more information.
						<br/><br/>
						<cite class="author" > <a style="font-family: 'Comic Sans MS', sans-serif; width:bold;  color: #ff0000;" href="http://madchefkitchen.com/our-chefs/"/> Read More About Us </a></cite>
					</h2>
					</a>
				</div>

				<div id="rightCont">
					<a href="http://madchefkitchen.com/explore/the-organized-kitchen-service/"> <img src="http://madchefkitchen.com/wp-content/uploads/2015/10/scroll.png" alt="" />
					<h2>
						<span style="font-family: 'Comic Sans MS', sans-serif; width:bold; font-size: 15pt; color: #ff0000;"><br> Kitchen Organizer <br></span>
						<br/>
						We are pleased to offer kitchen organization services. Our kitchen specialists are certified with the National Association of Organizers. Contact us for more information.
						<br/><br/>
					</a>
						<cite class="author" > <a style="font-family: 'Comic Sans MS', sans-serif; width:bold;  color: #ff0000;" href="http://madchefkitchen.com/explore/the-organized-kitchen-service/"/> Read More About Us </a></cite>
					</h2>
				</div>
			</div>
<?php
	}
?>
</body>

	<?php get_footer(); ?>
</html>