<!DOCTYPE html>
<html>
<head>
  <title>About Me - Blog - Vishal Pandey</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="blog.css">
  <link rel="stylesheet" type="text/css" href="comment.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Gloria+Hallelujah|Rock+Salt" rel="stylesheet">
  <meta name="theme-color" content="black">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta charset="Unicode/UTF-8">
  <meta name="description" content="vishal pandey is a budding web designer. This is the first Blog Written By ME a new start">
  <meta name="keywords" content="vishalpandey vishal pandey pandeyvishal vishalthewebdesigner web designer first blog about me">
   <meta property="og:image" content="http://www.vishalpandey.xyz/blog/bpic/panda.jpg" />


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
		  	<div class="blogheading"><h2>My First Blog (ABOUT ME)</h2></div>
		  	
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hey, I am a lil shy when it comes to talking about me. but, once I start, there's no stoping me! so, in brief, I am a boy born 19 years back in West Bengal, who was brought up in Delhi.<br><br>

					I am very particular about everything. Anything I do must have some reason for it. And yes, also, I just can't spend even a moment doing nothing. Sometimes I go mad when I've got nothing to do. "An empty mind is a Devil's Workshop" works quite literally for me!<br><br>

					Well, these are little things about me nobody usually tells anybody:
					<ol>
					  
					<li> I like Shinchan very much (I think nothing's new in it).</li>
					<li> I have a special liking for South Indian. Specifically, Masala Dosa.</li>
					<li> I can do anything for RASOGULLA. (After all, I am A 'Bengali', right?).</li>
					<li> My favourite ice-cream is "Choco Treat".</li>
					<li> I love flowers! My favourite one is Rose. A Red Rose.</li>
					<li> My favourite hangout place is Biodiversity Park near my Home.</li>
					<li> I enjoy my own company.</li>
					<li> I always write with my favourite pen, i.e. Flair Writo Meter.</li>
					<li> I love my family very much. my DIDI is the dearest to me!  </li>
					<li> My favourite songs: 1. Man Mera 2. Raabta</li>
					<li> I can't let go something I like. At ANY cost!</li>
					</ol>

					Besides this, I always try to create new things.<br>
					Back in school days, I loved to indulge in Science activities and be a part of any Science Fair.<br>
					I think those school days helped me bud a Designer in myself.<br>
					<br>
					<br>
					<br>
					<br>




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
