<!DOCTYPE html>
<html>
<head>
  <title>Blog - Vishal Pandey</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="blog.css">
  <link rel="stylesheet" type="text/css" href="comment.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
  <meta name="theme-color" content="black">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="Unicode/UTF-8">
  <meta name="description" content="vishal pandey is a budding web designer. This is portfolio of Vishal pandey">
  <meta name="keywords" content="vishalpandey vishal pandey pandeyvishal vishalthewebdesigner web designer">
  	

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





	<div class="menu">
	    <div class="titl"><a href="http://www.vishalpandey.xyz"><b> Vishal Pandey </b></a> </div>




	    <ul>

	      <li><a href="">Home</a></li>
	      <li><a href="">Work</a></li>
	      <li><a href="">Blog</a></li>
	      <li><a href="">Resume</a></li>
	      <li><a href="">Contact Me</a></li>
	    </ul>
	  
	</div>

	<br>
	<br>

		 <div class="content col-9">
		  	<div class="blogheading"><h2>My First Blog</h2></div>
		  	Hello This Is My First Blog In The World<br>
		  	This Is Just To Test It And I Am Writting Nonsense<br>
		  	hello How Are you<br>
		  	I Am Fine and ok how are you<br>
		  	I am also fine so tell me what are you doing today<br>






		  	<div class="col-12 share">
		  		<div class="fb-share-button" data-href="http://www.vishalpandey.xyz" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.vishalpandey.xyz%2F&amp;src=sdkpreparse">Share</a></div>
		  	</div>

		  	<div class="col-12">

		  		<div id="comment" class="comment">
			

					<div class="heading">Comments</div>

					<?php include 'name.txt';  ?>

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

				function get_title($url){
				  $str = file_get_contents($url);
				  if(strlen($str)>0){
				    $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
				    preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
				    return $title[1];
				  }
				}








				 $dir = getcwd();
				 $blog = scandir($dir);

				 for ($i=0; $i < sizeof($blog) ; $i++) { 


					 	$ext = pathinfo($blog[$i], PATHINFO_EXTENSION);
				 	// echo $ext;
				 	if ($ext == 'php' & $blog[$i] != 'test.php' & $blog[$i] != 'blogcomment.php') {
				 		


				 		$link = 'http://www.vishalpandey.xyz/blog/'.$blog[$i];
				 		$title = get_title($link);
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











</body>
</html>
