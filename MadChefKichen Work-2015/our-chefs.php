<?php
/**
 */
?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
td{
	color: #8B0000; font-weight: bold;
	
	font-family: 'Comic Sans MS', sans-serif; font-size: 10pt; 
}

th{
	color: black; font-weight: bold;
	
	font-family: 'Comic Sans MS', sans-serif; font-size: 10pt; 
	width:30%;
}

table{
	
   border-collapse:collapse; table-layout:fixed; 
}

   table td {border:solid 1px #fab; word-wrap:break-word;}
   
		.yellow::after {
			
  content: "";
			
  opacity: 0.3;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}
		 #leftcont 
		{
			position: absolute;
			left:-3%;
			width:33%;
			text-align:center;
			margin-top:6%;
			margin-bottom:0px;
			background:white;
		}
		#centercont 
		{	
			position: absolute;
			left:35.5%;
			text-align:center;
			width:33%;
			margin-top:6%;
			margin-bottom:0px;
			background:white;
		}

		#rightcont 
		{
			position: absolute;
			left:74%;
			width:33%;
			margin-top:6%;
			text-align:center;
			margin-bottom:0px;
			background:white;
		}
		

		.note
		{
			width: 100%;
		}	

		.yellow 
		{	
			width: 100%;
  			transform: rotate(0deg);	
			position: relative;
		}	

		.yellow::after 
		{
			width: 100%;
  			background-image: url("http://madchefkitchen.com/wp-content/uploads/2015/10/backg.jpg");
			background-size: 50%;
			opacity: 0.2;
			position: absolute;
			z-index: -1;   
		}
</style>
</head>

<body>
	<h2> </h2>
	<div id="leftCont">
		<div class="note yellow">
			<table style="width:100%">
				<tr>
					<th  style="width:40%;">
						<a href="http://madchefkitchen.com/our-story/"><img src="http://madchefkitchen.com/wp-content/uploads/2015/10/MaleNP.png" style="width: auto; height: auto;max-width: 120px;max-height: 100px border="0" alt="Our Story"/>
					</th>
					<td>
						<table style="width:100% ">
							<tr>
								<th>Name:</th>
								<td>Dave Matthews </td>
							</tr>
							<tr>
								<th>Email:</th>
								<td>dave@madchefkitchen.com </td>
							</tr>
							<tr>
								<th>Phone:</th>
								<td>626-394-1777</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</div>
			
			
	<div id="centerCont">
		<div class="note yellow">
			<table style="width:100%">
				<tr>
					<th  style="width:40%;">
						<a href="http://madchefkitchen.com/our-story/" ><img src="http://madchefkitchen.com/wp-content/uploads/2015/10/MaleNP.png" style="width: auto; height: auto;max-width: 120px;max-height: 100px border="0" alt="Our Story"/>
					</th>
					<td>
						<table style="width:100%">
							<tr>
								<th>Name:</th>
								<td>Christine Rosas</td>
							</tr>
							<tr>
								<th>Email:</th>
								<td>Christine@madchefkitchen.com</td>
							</tr>
							<tr>
								<th>Phone:</th>
								<td>323-984-0331</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</div>
			
			
	<div id="rightCont">
		<div class="note yellow">
			<table style="width:100%">
				<tr>
					<th  style="width:40%;">
						<a href="http://madchefkitchen.com/our-story/"><img src="http://madchefkitchen.com/wp-content/uploads/2015/10/MaleNP.png" style="width: auto; height: auto;max-width: 120px;max-height: 100px border="0" alt="Our Story"/>
					</th>
					<td>
						<table style="width:100%">
							<tr>
								<th>Name:</th>
								<td>Keri Bowman </td>
							</tr>
							<tr>
								<th>Email:</th>
								<td>karen@madchefkitchen.com</td>
							</tr>
							<tr>
								<th>Phone:</th>
								<td>626-506-9074</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
