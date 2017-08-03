<!DOCTYPE html>
<html>
<head>	
<title>Ascent Technologers</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type='text/javascript'>
	
	function startTime() {
		var today = new Date();
		var h = today.getHours();
		var m = today.getMinutes();
		var s = today.getSeconds();

		m = checkTime(m);
		s = checkTime(s);

		document.getElementById('timee').innerHTML = h + ':' + m + ':' + s;

		var t = setTimeout(startTime,1000); 
	}

	function checkTime(i) {
		if (i<10) { i = '0' + i};
		return i;
	}
</script>


<?php

	$d1;
	$d2;

 include 'config.txt';
 	 $conn = new mysqli($server, $user, $pwd, $db);
 	 $sql = "SELECT * FROM t1 WHERE dev = 'd1'";
 	 $sql1 = "SELECT * FROM t1 WHERE dev = 'd2'";

 	 $result = $conn->query($sql);
 	 $result1 = $conn->query($sql1);

 	 $row = $result->fetch_assoc();
 	 $row1 = $result1->fetch_assoc();


?>

</head>

<body onload='startTime()'>

	<div class='head'>
		<h1>Ascent Technologers</h1>
		Vishal Pandey(10148)
		Avanish singh(10151)<br>

	</div>

	<div>
		

		Current Time is <span id='timee'>Time Is</span>
	</div>


<div class='col-12'>
	
	<div class='device col-6'>
		<div class='state'>
			<p>Device 1 is currently <span class='d1s'> 
				<?php
					echo $row['state'];
				?>

			 </span></p>
		</div>
		<div class='lastaction'>
			<p>Last Action <span class='act'><?php echo $row['state']; ?></span>  At <span class='tim'><?php echo $row['lastact']; ?></span></p>
		</div>

		<div class='controls'>
			*<br>
			<a href='./d1off.php'><span class='button off'>Off</span></a><br>	
			<a href='./d1on.php'><span class='button on'>On</span></a><br>*
		</div>
		
	</div>

	<div class='device col-6'>
		<div class='state'>
			<p>Device 2 is currently <span class='d2s'><?php echo $row1['state']; ?></span></p>
		</div>
		<div class='lastaction'>
			<p>Last Action <span class='act'> <?php echo $row1['state']; ?> </span> At <span class='tim'><?php echo $row1['lastact']; ?></span></p>
		</div>

		<div class='controls'>
			*<br>
			<a href='./d2off.php'><span class='button off'>Off</span></a><br>	
			<a href='./d2on.php'><span class='button on'>On</span></a><br>*
		</div>
		
	</div>



	<div class='desc col-12'>
		<h2>Description</h2>
		<p>This System controls two device connected to the WiFi Module ESP8266 and ESP8266 is connected to the wifi hotspot at home which in turn connected to the internet. User interface for this system is any device connected to the internet any where in the world. A command is sent from the user inrerface through the internet and recieved be the ESP8266 module to control the device connected to it. This system can be used to switch the devices on or off and also display the last action and also when the last action was taken.</p>
	</div>

</div>
</body>
</html>

<style type='text/css'>

* {
    box-sizing: border-box;
}
	.row::after{
    content: '';
    clear: both;
    display: block;
}
[class*='col-'] {
    float: left;
    padding: 15px;
}

html {
    font-family: 'Lucida Sans', sans-serif;
}

/* For desktop: */
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}


/* For mobile phones: */
@media only screen and (max-width: 768px) {
    [class*='col-'] {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    div.device{
    	padding: 25px;
    }
    
}

	body
	{
		text-align: center;font-size: 25px;
		width: 100%;
		padding: 0;
		margin: 0;
		background-color: #76FF03;
	}
	div.controls span
	{
		padding: 25px;
		border: 1px solid black;
		display: inline-block;
	}

	span.on{
		background-color: lightgreen;
		border-bottom-left-radius: 20px;
		border-bottom-right-radius: 20px;
		box-shadow: 2px 2px 10px black;
	}
	span.off{
		background-color: red;
		border-top-right-radius: 20px;
		border-top-left-radius: 20px;
		box-shadow: 2px 2px 10px black;


	}
	div.controls{
		padding: 25px;
		border: 1px solid black;
		display: inline-block;
		background-color: lightyellow;
		box-shadow: 2px 2px 10px black;
	}
	div.device{
		border:1px solid black;
		background-color: #FFFDE7;
	}

	div.controls a{
		text-decoration: none;
		color: white;
	}
	#timee{
		background-color: pink;
		font-size: 30px;
		padding-left: 10px;
		padding-right: 10px;
	}
	span.d1s, span.d2s, span.act, span.tim{
		background-color: pink;
		padding: 5px;
		font-size: 30px;
	}
	div.state, div.lastaction{
		/*background-color: lightgrey;*/
	}

</style>