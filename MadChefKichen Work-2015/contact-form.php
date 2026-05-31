<!DOCTYPE html>
<!--
o                                                    o8      
o8                                                   88      
o88oo ooooooo   oooo 88   88  ooo  ooo  oo   oo    oo 88oooo.  ooooooo  ooooodb
88   88       88     88   88  88   88   88P"Y8bP"Y8b  d8   8b  88        88 
88   8888888  88     8888888  88   88   88   88   88  88   88  8888888   88
88   88       88     88   88  88   88   88   88   88  88   88  88        88    
888  ooooooo   8ooo  88   88   V888V   o88o o88o o88o  Y8b8P   oooooooo   d88b   
@url: www.techumber.com
-->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <meta name="description" content="Cute HTML5 Ajax Contact Form With Google Maps">
  <meta name="author" content="aravind buddha">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!-- CSS
  ================================================== -->
  
		<!-- CSS CODE FOR THE STRUCTURE OF THE  -->
		<style type ="text/css">
		
		* { 
	border: 0; 
	margin: 0; 
	padding: 0; 
}
body { 
	font: 62.5% "Lucida Grande", "Lucida Sans Unicode", Arial, sans-serif; 
	min-width: 100%; 
	min-height: 101%; 
	color: #666; 
	background:#eee; 
}
.container{
	width: 100%;
	margin: 0 auto;
}
.logo{
	text-align: center;
}
#contact {
	display: block;
	width: 750px;
	margin: 50px auto;
	padding: 35px;
	border: 1px solid #cbcbcb;
	background-color: #FFF;
	border-radius:5px;
	box-shadow: 0 2px 5px rgba(50, 50, 50, 0.1);
	-webkit-box-shadow: 0 2px 5px rgba(50, 50, 50, 0.1);
	-moz-box-shadow: 0 2px 5px rgba(50, 50, 50, 0.1);
	position: relative;
}
#contact h1 {
	margin: 10px 0 10px;
	font-size: 24px;
	color: #333333;
}
#contact p, label, legend {
	font: 1.5em "Lucida Grande", "Lucida Sans Unicode", Arial, sans-serif;
}
#contact fieldset {
	padding: 20px;
	border: 1px solid #eee;
	margin: 0 0 20px;
}
#contact legend {
	padding: 7px 10px;
	font-weight: bold;
	color: #000;	
	border: 1px solid #eee;
	margin-bottom: 20px;
}
#contact label {
	display: inline-block;
	float: left;
	height: 1em;
	line-height: 1em;
	padding: 6px 0 0;
	width: 155px;
	font-size: 1.4em;
	margin: 5px 0;
	clear: both;
}
#contact input, #contact textarea {
	width: 220px;
	padding: 5px;
	color: #666;
	background: #f5f5f5;
	border: 1px solid #ccc;
	margin: 5px 0;
	outline: none;
	font: 1.4em "Lucida Grande", "Lucida Sans Unicode", Arial, sans-serif;
	border-radius: 5px;
	transition: all 0.25s ease-in-out;
	-webkit-transition: all 0.25s ease-in-out;
	-moz-transition: all 0.25s ease-in-out;
	box-shadow: 0 0 5px rgba(81, 203, 238, 0);
	-webkit-box-shadow: 0 0 5px rgba(81, 203, 238, 0);
	-moz-box-shadow: 0 0 5px rgba(81, 203, 238, 0);
}
#contact input:focus, #contact textarea:focus {
	border: 1px solid #ddd;
	background-color: #fff;
	color: #333;
	outline: none;
	position: relative;
	z-index: 5;
	box-shadow: 0 0 5px rgba(81, 203, 238, 1);
	-webkit-box-shadow: 0 0 5px rgba(81, 203, 238, 1);
	-moz-box-shadow: 0 0 5px rgba(81, 203, 238, 1);
	-webkit-transform: scale(1.05);
	-moz-transform: scale(1.05);
	transition: all 0.25s ease-in-out;
	-webkit-transition: all 0.25s ease-in-out;
	-moz-transition: all 0.25s ease-in-out;
}
#contact input.error, #contact textarea.error, #contact select.error {
	box-shadow: 0 0 5px rgba(204, 0, 0, 0.5);
	-webkit-box-shadow: 0 0 5px rgba(204, 0, 0, 0.5);
	-moz-box-shadow: 0 0 5px rgba(204, 0, 0, 0.5);
	border: 1px solid #faabab;
	background: #fef3f3;
}
#contact input.submit {
	width: auto;
	cursor: pointer;
	position: relative;
	border: 1px solid #282828;
	color: #fff;
	padding: 6px 16px;
	text-decoration: none;
	font-size: 1.5em;
	background: #555;
	background: -webkit-gradient( linear, left bottom, left top, color-stop(0.12, rgb(60,60,60)), color-stop(1, rgb(85,85,85)) );
	background: -moz-linear-gradient( center bottom, rgb(60,60,60) 12%, rgb(85,85,85) 100% );
	box-shadow: 0 2px 3px rgba(0,0,0,0.25);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.25);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.25);
	text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
}
#contact input.submit:hover {
background: #282828 !important;
transition: none;
-webkit-transition: none;
-moz-transition: none;
}
#message {
	font-size: 1.5em;
	margin: 1em 0;
	padding: 10px;
	display: block;
	background: green;
	border-radius: 10px;
	color: #fff;
	text-align: center;
}
#map-outer {
	width: 260px;
	height: 200px;
	padding: 6px;
	border: 1px solid #ccc;
	clear: both;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-box-shadow: 0 0 6px #ddd;
	-webkit-box-shadow: 0 0 6px #ddd;
	float: right;
	position: absolute;
	top: 200px;
	right: 60px;
}

#map_canvas{
	width: 260px;
	height: 200px;
	float: right;
	position: relative;
	background-color: rgb(229, 227, 223);
	overflow: hidden;
	-webkit-transform: translateZ(0);
}
		
		</style>
  <!-- js
  ================================================== -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="scripts.js"></script>
</head>
<body>
  <div class="container">
	  <section id="contact">
	  	<header>
				<h1>MadChefKitchen Contact Form</h1>
				<p>Please fill your details below!</p>
			</header>
			<mark id="message" style="display: none;"></mark>
			<form method="post" action="phpcontact.php" name="cform" id="cform" autocomplete="on">
				<fieldset>
					<legend>Contact Details</legend>
					<div>
						<label for="name" accesskey="U">Your Name</label>
						<input name="name" type="text" id="name" placeholder="Enter your name" required="required">
					</div>
					<div>
						<label for="email" accesskey="E">Email</label>
						<input name="email" type="email" id="email" placeholder="Enter your Email Address" required="required">
					</div>
					<div>
						<label for="comments" accesskey="C">Comments</label>
						<textarea name="comments" cols="40" rows="7" id="comments" placeholder="Enter your comments" spellcheck="true" required="required"></textarea>
					</div>
					<section id="map-outer">
				<div id="map_canvas"></div>
			</section>
				</fieldset>
				<input type="submit" class="submit" id="submit" value="Submit">
			</form>
	  </section>
  </div>
  
  
  
  
  
  
  
  
  
  
				<script type="text/javascript">
				
				$(function() {
	//For all form validations
	var validate={
		init:function(){
			var $this=this;
			// validation will be done at focus out event
			$('#name, #comments').focusout(function() { 
				$this.checkEmpty($(this));
			});
			$('#email').focusout(function() {
				$this.checkEmail($(this));
			});
		},
		//To check email is valid
		isEmail:function(email){
				var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
				return pattern.test(email);
		},
		checkEmpty:function($this){
				if (!$this.val())
					$this.addClass('error');
				else
					$this.removeClass('error');
		},
		checkEmail:function($this){
			if (!$this.val() || !this.isEmail($this.val()))
				$this.addClass('error');
			else
				$this.removeClass('error');
		}
	};
	validate.init();

	//Ajax submit
	var ajax={
		init:function(){
			$this=this;
			$('#cform').submit(function(e){
				e.preventDefault();
				var action = $(this).attr('action');
				$this.ajaxSubmit($(this),action);
			});
		},
		ajaxSubmit:function($this,action){
			if ($('#contact .error').size()>0) 
				return false;
			$('#submit')
			.after('<img src="ajax-loader.gif" class="loader" />')
			.attr('disabled','disabled');

			$.post(action, $('#cform').serialize(),
				function(data){
					$('#message').html('Thank You! We will get back to you soon.');
					$('#message').slideDown();
					$('#cform img.loader').fadeOut('slow',function(){$(this).remove()});
					$('#cform #submit').removeAttr('disabled');
					if(data.match('success') != null) 
						$('#contactform').slideUp('slow');
				}
			);
		}
	};
	ajax.init();

	var gmap={
	 	init:function(Lat,Lng) {
    	var mapCanvas = document.getElementById('map_canvas');
    	var mapOptions = {
      	center: new google.maps.LatLng(Lat,Lng),
      	zoom: 8,
      	mapTypeId: google.maps.MapTypeId.ROADMAP
    	};
    	var map = new google.maps.Map(mapCanvas, mapOptions);
  	}
	}
	google.maps.event.addDomListener(window, 'load', gmap.init(17.81368, 83.20520));

});

				
				</script>
  
  <?php
if($_POST){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comments=$_POST['commments'];

	//Here Write Sql Insert commeand to srote 
	//the data into database as well as send acknowledgement mail 


	//Here i'm considering both sql insert and send mail success so $result=1
	$result=1;

	if($result){
		echo "success";
	}

exit();
}
?>
  
</body>
</html>
