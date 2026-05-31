<?php
/**
 */
 
?>

<!doctype html>
<html lang=en>

<head>
	<meta charset=utf-8>
	
	<!-- CSS CODE FOR THE STRUCTURE OF THE  -->
	<style type ="text/css">
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
</body>

	<?php get_footer(); ?>
</html>