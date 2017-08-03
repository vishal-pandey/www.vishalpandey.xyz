<!DOCTYPE html>
<html>
<head>
  <title>Nokia - Blog - Vishal Pandey</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="blog.css">
  <link rel="stylesheet" type="text/css" href="comment.css">
  <link rel="stylesheet" type="text/css" href="syllabus.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Gloria+Hallelujah|Rock+Salt" rel="stylesheet">
  <meta name="theme-color" content="black">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta charset="Unicode/UTF-8">
  <meta name="description" content="vishal pandey is a budding web designer. This is the syllabys of 4th semester of GBU Computer Science and engineering">
  <meta name="keywords" content="vishalpandey vishal pandey pandeyvishal vishalthewebdesigner web designer syllabus 4th semester GBU sc syllabus computer science syllabus soict syllabus">
   <!-- <meta property="og:image" content="http://www.vishalpandey.xyz/blog/bpic/panda.jpg" /> -->


	<meta property="og:image:type" content="image/jpeg" /> 
	<meta property="og:image:width" content="400" /> 
	<meta property="og:image:height" content="300" />	

</head>
<body>





		<div id="fb-root"></div>
		<script>(function(d, s, id) 
		{
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7&appId=821938314588057";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>





<?php include '../menu.txt'; ?>
	<br>
	<br>

		 <div class="content col-9">
		  	
			<div class="syllabus" style="font-family: sans-serif; width: 100%;">
			<h2>Rise And Fall Of Nokia</h2>
	
			<p>
				<ol>
				<li>The Finnish company sold its Here mapping unit to a group of german car - makers.</li><br>

				<li>	The company started out as a paper mill, established in 1865 by mining engineer Fredrik Idestam at the Tammerkoski Rapids in south - western Finland.</li><br>

				<li>	The company name Nokia was named after the bank of the Nokianvrirta river. Firstly named as Nokia ab something around 1871.</li><br>

				<li>	Around 1967, Nokia Transformed into Nokia corporation and focused on four markets mainly
					1. Paper
					2. Electronics
					3. Rubber
					4. Cables</li><br>

					<li>Around 1979 Nokia first stepped into communication industry and made first car phone which weighted around 10kg.</li><br>

					<li>1984 Nokia made first mobile phone named Mobira Talkman that can be used both inside and outside the car and weighted around 5kg.</li><br>

					<li>1988 Nokia launched first compact mobile phone weighted 800g named.
					Mobira Cityman 900. It was first hand held device. The price tag was around $5456 It sold like hot cakes.</li><br>

					<li>1992 the first GSM hand held phone was launched Named Nokia 1011 had talk time of 90 minutes and could store 99 contact numbers.</li><br>

					<li>1998 was the year in which Nokia launched 6100 series of phones which were  the first phone that came with the classic snake game pre installed.</li><br>

					<li>Nokia 7650 was the phone to feature a built in camera and color display.</li><br>

					<li>In 2003 Nokia Launched N-Gage device. Running symbian OS 6.1</li><br>
					<li>In 2008 Nokia launched Its first touch enabled device 5800 Xpress Music.</li><br>

					<li>In Q2 2011 Apple overtook Nokia in smart phone sales </li><br>

					<li>In 2011 itself Nokia tied up with Microsoft and launched its windows smartphone Lumia 800 and Lumia 710.</li><br>

					<li>In September 2013 Nokia announced its selling its devices and services division to Microsoft the sale officially completed in April 2014.</li><br>
</ol>

				
			</p>

			</div>

















		  	<div class="col-12 share">
		  		<div class="fb-share-button" data-href="" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.vishalpandey.xyz%2F&amp;src=sdkpreparse">Share</a></div>
		  	</div>

		  	<div class="col-12">

		  		<div id="comment" class="comment">
			

					<div class="commentheading">Comments</div>


					<br>
					

					<?php 

						$commentfilename = basename( $_SERVER['PHP_SELF'],php)."txt";

						fopen($commentfilename, 'a');	



						include $commentfilename;  
						?>

					<form action="blogcomment.php" method = "post" >
						Name:<input type="text" name="name" id="name"></input><br>
						Your comment:<br><textarea rows="10" cols="40" name="your_comment" id="your_comment"></textarea>
						<br><input type="submit" value="submit" onClick="location.reload()"></input><br>
					</form>


				

















				  <br>
				</div>
			</div>
			</div>

		


	  <div class="col-3 otherblog">
	  	<div class="oblogheading"><h3>Other Blogs</h3></div>

	  	<ul>
	  		

	  					<?php		  		

				








				 $dir = getcwd();
				 $blog = scandir($dir);

				 for ($i=0; $i < sizeof($blog) ; $i++) { 


					 	$ext = pathinfo($blog[$i], PATHINFO_EXTENSION);
				 	// echo $ext;
				 	// if ($ext == 'php' & $blog[$i] != 'test.php' & $blog[$i] != 'blogcomment.php') {
				 	if ($ext == 'php' & $blog[$i] != 'test.php' & $blog[$i] != 'blogcomment.php' & $blog[$i] != 'index.php') {
				 		


				 		$link = './'.$blog[$i];
				 		$title = basename($blog[$i],'.php');
				 		$output = "<li><a href=".$link.">".$title."</a></li>";





				 		// echo $blog[$i]."<br>";
				 		echo $output;

				 		// $name = basename($blog[$i]);
					 	// $ext = pathinfo($name, PATHINFO_EXTENSION);
				 		// echo $name."<br><br>";
				 		// echo $ext."<br><br>";

				 	}




				 }

				?>







	  	</ul>


	  	
	  </div>



<?php

include '../footer.txt';
?>








</body>
</html>
