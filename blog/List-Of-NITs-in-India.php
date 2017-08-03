<!DOCTYPE html>
<html>
<head>
  <title>List Of NITs in India - Blog - Vishal Pandey</title>
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
			<h2>List Of NITs in India</h2>
	
			<p>
				<ol>
					
					<li>	National Institute of Technology, Agartala	</li><br>
					<li>	Motilal Nehru National Institute of Technology, Allahabad	</li><br>
					<li>	Maulana Azad National Institute of Technology, Bhopal	</li><br>
					<li>	National Institute of Technology, Calicut	</li><br>
					<li>	National Institute of Technology, Durgapur	</li><br>
					<li>	National Institute of Technology, Hamirpur	</li><br>
					<li>	Malaviya National Institute of Technology, Jaipur	</li><br>
					<li>	Dr. B. R. Ambedkar National Institute of Technology, Jalandhar	</li><br>
					<li>	National Institute of Technology, Jamshedpur	</li><br>
					<li>	National Institute of Technology, Kurukshetra	</li><br>
					<li>	Visvesvaraya National Institute of Technology, Nagpur	</li><br>
					<li>	National Institute of Technology, Patna	</li><br>
					<li>	National Institute of Technology, Raipur	</li><br>
					<li>	National Institute of Technology, Rourkela	</li><br>
					<li>	National Institute of Technology, Silchar	</li><br>
					<li>	National Institute of Technology, Srinagar	</li><br>
					<li>	S V National Institute of Technology, Surat	</li><br>
					<li>	National Institute of Technology Karnataka, Surathkal	</li><br>
					<li>	National Institute of Technology, Trichy	</li><br>
					<li>	National Institute of Technology, Tadepalligudem	</li><br>
					<li>	National Institute of Technology, Warangal	</li><br>
					<li>	National Institute of Technology, Arunachal Pradesh (Yupia)	</li><br>
					<li>	National Institute of Technology Sikkim	</li><br>
					<li>	National Institute of Technology, Goa	</li><br>
					<li>	National Institute of Technology, Meghalaya	</li><br>
					<li>	National Institute of Technology, Nagaland	</li><br>
					<li>	National Institute of Technology, Manipur	</li><br>
					<li>	National Institute of Technology Mizoram	</li><br>
					<li>	National Institute of Technology Uttarakhand	</li><br>
					<li>	National Institute of Technology, Delhi	</li><br>
					<li>	National Institute of Technology, Pondicherry	</li><br>
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
