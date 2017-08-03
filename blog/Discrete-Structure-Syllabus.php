<!DOCTYPE html>
<html>
<head>
  <title>Syllabus - Blog - Vishal Pandey</title>
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
		  	<img src="./bpic/ds.jpg" style="float: right; width:250px; height: 150px;margin-top: 30px;">
			<div class="syllabus" style="font-family: sans-serif;">
	<h2>Discrete Structure - Syllabus</h2>
	<ul>
		<li>
			<h3>Unit I - Mathematical Logic</h3>
			<ul>
				<li>Statements and Notations</li>
				<li>Connectives</li>
				<li>well formed formulas</li>
				<li>truth tables</li>
				<li>tautology</li>
				<li>equivalence implication</li>
				<li>normal forms</li>
				<li>predicates</li>
				<li>predicative logic</li>
				<li>free and bound variables</li>
				<li>rules of inference</li>
				<li>consistency	</li>
				<li>proof of contradiction</li>
				<li>automatic theorem proving</li>
			</ul>
		</li>

		<li>
			<h3>Unit II - Set Theory</h3>
			<ul>
				<li>Properties of binary relation</li>
				<li>equivalence</li>
				<li>compatiblity and partial ordering relation</li>
				<li>hasse diagram</li>
				<li>functions</li>
				<li>inverse function comports of functions</li>
				<li>recursive function </li>
				<li>lattice and its properties</li>
				<li>pigeon hole principles and its application</li>
				<li> algebraic structures: algebraic systems examples and general properties</li>
				<li> semi groups and monads</li>
				<li> groups sub groups homomorphism</li>
				<li> isomorphism</li>
			</ul>
		</li>

		<li>
			<h3>Unit III - ELEMENTARY COMBINATORICS</h3>
			<ul>
				<li>Basis of counting</li>
				<li> combinations &amp; permutations</li>
				<li> with repetitions</li>
				<li> constrained repetitions</li>
				<li> binomial coefficients</li>
				<li> binomial multinomial theorems</li>
				<li> the principles of inclusion exclusion</li>
			</ul>
		</li>

		<li>
			<h3>Unit IV - Recurrence Relaion</h3>
			<ul>
				<li>Generating functions</li>
				<li> function of sequences calculating coefficient of generating function</li>
				<li> recurrence relations</li>
				<li> solving recurrence relation by substitution and generating funds</li>
				<li> characteristics roots solution of in homogeneous recurrence relation</li>
			</ul>
		</li>

		<li>
			<h3>Unit V - Graph Theory</h3>
			<ul>
				<li>Representation of graph</li>
				<li> DFS</li>
				<li> BFS</li>
				<li> spanning trees</li>
				<li> planar graphs. graph theory and applications</li>
				<li> basic concepts isomorphism and sub graphs</li>
				<li> multi graphs and euler circuits</li>
				<li> hamiltonian graphs</li>
				<li> chromatic numbers</li>
			</ul>
		</li>
	</ul>
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
