<?php
/**
 */
?>

<!DOCTYPE html>
<html lang=en>

	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8">
		
		<style type ="text/css">
		<!-- CSS CODE FOR THE STRUCTURE OF THE  -->
		@import url(http://fonts.googleapis.com/css?family=Oxygen+Mono);
/* Please Keep this font import at the very top of any CSS file */
@charset "UTF-8";
/* Starter CSS for Flyout Menu */
#cssmenu {
  padding: 0;
  margin: 0;
  border: 0;
  line-height: 1;
  margin-left: -10%;
}
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
#cssmenu ul {
	top:-4%;
  position: absolute;
  z-index: 597;
  float: left;
  
    /*Step 2: Basic Button Styles*/
    display: block;
    height: 40%;
    width: 100%;
    background: white;
    border: 0px solid rgba(33, 68, 72, 0.59);
}
#cssmenu ul li {
  float: right;
  min-height: 1px;
  line-height: 1em;
  vertical-align: middle;
  position: relative;
}
#cssmenu ul li.hover,
#cssmenu ul li:hover {
  position:relative;
  z-index: 599;
  cursor: default;
}
#cssmenu ul ul {
  visibility: hidden;
  position: absolute;
  top: 100%;
  left: 0px;
  z-index: 598;
  width: 100%;
}
#cssmenu ul ul li {
  float: none;
}
#cssmenu ul ul ul {
  top: -2px;
  right: 0;
}
#cssmenu ul li:hover > ul {
  visibility: visible;
}
#cssmenu ul ul {
  top: 1px;
  left: 99%;
}
#cssmenu ul li {
  float: none;
}
#cssmenu ul ul {
  margin-top: 1px;
}
#cssmenu ul ul li {
  font-weight: normal;
}
/* Custom CSS Styles */
#cssmenu {
  width: 100px;
  background: purple;
  font-family: 'Oxygen Mono', Tahoma, Arial, sans-serif;
  zoom: 1;
  font-size: 12px;
}
#cssmenu:before {
  content: '';
  display: block;
}
#cssmenu:after {
  content: '';
  display: table;
  clear: both;
}
#cssmenu a {
  left:-170%;	
  display: block;
  padding: 5px 5px;
  text-decoration: none;
  text-transform: uppercase;
  
    border-collapse: collapse;
    z-index: 1;
  position: relative;
  font-family: 'Sansita One', cursive;
  
    display: inline-block
    -webkit-border-radius: 10px;
    
    -webkit-box-shadow: 
        0px 3px rgba(128,128,128,1), /* gradient effects */
        0px 4px rgba(118,118,118,1),
        0px 5px rgba(108,108,108,1),
        0px 6px rgba(98,98,98,1),
        0px 7px rgba(88,88,88,1),
        0px 8px rgba(78,78,78,1),
        0px 14px 6px -1px rgba(128,128,128,1); /* shadow */
    
    -webkit-transition: -webkit-box-shadow .1s ease-in-out;

	 background-color: purple;
    
    background-image: 
        /* gloss gradient */
        -webkit-gradient(
            linear, 
            left bottom, 
            left top, 
            color-stop(50%,rgba(255,255,255,0)), 
            color-stop(50%,rgba(255,255,255,0.3)), 
            color-stop(100%,rgba(255,255,255,0.2))),
        
        /* dark outside gradient */
        -webkit-gradient(
            linear, 
            left top, 
            right top, 
            color-stop(0%,rgba(210,210,210,0.3)), 
            color-stop(20%,rgba(210,210,210,0)), 
            color-stop(80%,rgba(210,210,210,0)), 
            color-stop(100%,rgba(210,210,210,0.3))),
        
        /* light inner gradient */
        -webkit-gradient(
            linear, 
            left top, 
            right top, 
            color-stop(0%,rgba(255,255,255,0)), 
            color-stop(20%,rgba(255,255,255,0.5)), 
            color-stop(80%,rgba(255,255,255,0.5)), 
            color-stop(100%,rgba(255,255,255,0))),        
        
        /* diagonal line pattern */
        -webkit-gradient(
            linear, 
            0% 100%, 
            100% 0%, 
            color-stop(0%,rgba(255,255,255,0)), 
            color-stop(40%,rgba(255,255,255,0)), 
            color-stop(40%,black), 
            color-stop(60%,black), 
            color-stop(60%,rgba(255,255,255,0)), 
            color-stop(100%,rgba(255,255,255,0)));
    
        -webkit-box-shadow:
            0px -1px #fff, /* top highlight */
            0px 1px 1px #FFFFFF; /* bottom edge */
    
    -webkit-background-size: 100%, 100%, 100%, 4px 4px;
    
    -webkit-border-radius: 10px;
    -webkit-transition: -webkit-transform .1s ease-in-out;
    padding: 5px 10px 5px 10px;
    font-family: 'TradeGothicLTStd-BdCn20','PT Sans Narrow';   
    text-shadow: 0px 1px #fff, 0px -1px #262F33;
}
#cssmenu > ul {
  width: 100px;
}
#cssmenu ul ul {
  width: 100px;
}
#cssmenu > ul > li > a {
  border-right: 0px solid #1b9bff;
  color: #ffffff;
}
#cssmenu > ul > li > a:hover {
  color: #ffffff;
}
#cssmenu > ul > li.active a {
  background: #1b9bff;
}
#cssmenu > ul > li a:hover,
#cssmenu > ul > li:hover a {
  background: #1b9bff;
}
#cssmenu li {
  position: absolute;
}
#cssmenu ul li.has-sub > a:after {
  content: '+';
  position: absolute;
  top: 50%;
  right: 15px;
  margin-top: -6px;
}
#cssmenu ul ul li.first {
  -webkit-border-radius: 0 3px 0 0;
  -moz-border-radius: 0 3px 0 0;
  border-radius: 0 3px 0 0;
}
#cssmenu ul ul li.last {
  -webkit-border-radius: 0 0 3px 0;
  -moz-border-radius: 0 0 3px 0;
  border-radius: 0 0 3px 0;
  border-bottom: 0;
}
#cssmenu ul ul {
  -webkit-border-radius: 0 3px 3px 0;
  -moz-border-radius: 0 3px 3px 0;
  border-radius: 0 3px 3px 0;
}
#cssmenu ul ul {
  border: 0px solid #0082e7;
}
#cssmenu ul ul a {
  font-size: 12px;
  color: #ffffff;
}
#cssmenu ul ul a:hover {
  color: #ffffff;
}
#cssmenu ul ul li {
  border-bottom: 0px solid #0082e7;
}
#cssmenu ul ul li:hover > a {
  background: #4eb1ff;
  color: #ffffff;
}
#cssmenu.align-right > ul > li > a {
  border-left: 4px solid #1b9bff;
  border-right: none;
}
#cssmenu.align-right {
  float: right;
}
#cssmenu.align-right li {
  text-align: right;
}
#cssmenu.align-right ul li.has-sub > a:before {
  content: '+';
  position: absolute;
  top: 50%;
  left: 15px;
  margin-top: -6px;
}
#cssmenu.align-right ul li.has-sub > a:after {
  content: none;
}
#cssmenu.align-right ul ul {
  visibility: hidden;
  position: absolute;
  top: 0;
  left: -100%;
  z-index: 598;
  width: 100%;
}
#cssmenu.align-right ul ul li.first {
  -webkit-border-radius: 3px 0 0 0;
  -moz-border-radius: 3px 0 0 0;
  border-radius: 3px 0 0 0;
}
#cssmenu.align-right ul ul li.last {
  -webkit-border-radius: 0 0 0 3px;
  -moz-border-radius: 0 0 0 3px;
  border-radius: 0 0 0 3px;
}
#cssmenu.align-right ul ul {
  -webkit-border-radius: 3px 0 0 3px;
  -moz-border-radius: 3px 0 0 3px;
  border-radius: 3px 0 0 3px;
}

		</style>
		
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
		<title>CSS MenuMaker</title>
	</head>
	
<body>

<div id='cssmenu'>
<ul>
   <li><a href='#'><span> HOME </span></a></li>
   <li class='has-sub'><a href='#'><span> CLASSES </span></a>  
   <li class='has-sub'><a href='#'><span> SERVICES </span></a> 
   <ul>
               <li><a href='#'><span>Sub Product</span></a></li>
               <li class='last'><a href='#'><span>Sub Product</span></a></li>
            </ul>
   </li>
   <li ><a href='#'><span> HIRE A CHEF </span></a> </li>     
   <li> <a href='#'><span> MCK STORE </span></a></li>
   <li ><a href='#'><span> OUR SPONSORS </span></a></li>
   <li><a href='#'><span> ABOUT US </span></a></li>
   <li ><a href='#'><span> CONTACT US </span></a></li>
</ul>
</div>

</body>
</html>
