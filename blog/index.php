<!DOCTYPE html>
<html>
<head>
  <title>Blog - Vishal Pandey</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="menu.css">
  <link rel="stylesheet" type="text/css" href="blog.css">
  <link rel="stylesheet" type="text/css" href="comment.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Gloria+Hallelujah|Rock+Salt" rel="stylesheet">
  <meta name="theme-color" content="black">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="Unicode/UTF-8">
  <meta name="description" content="vishal pandey is a budding web designer. This is portfolio of Vishal pandey">
  <meta name="keywords" content="vishalpandey vishal pandey pandeyvishal vishalthewebdesigner web designer">
</head>
<body>
<?php include '../menu.txt'; ?>
<br>
<div class="blog-container col-12">
	<div class="blog-inner col-8">
	<div class="blog-title col-12">Blog Post</div>

			<br>
			<br>
			
			<ol>
				<?php		  		
				 $dir = getcwd();
				 $blog = scandir($dir);
				 for ($i=0; $i < sizeof($blog) ; $i++) { 
					 	$ext = pathinfo($blog[$i], PATHINFO_EXTENSION);
				 	if ($ext == 'php' & $blog[$i] != 'test.php' & $blog[$i] != 'blogcomment.php' & $blog[$i] != 'index.php') {
				 		$link = 'http://www.vishalpandey.xyz/blog/'.$blog[$i];
				 		$title = basename($blog[$i],'.php');
				 		$output = "<li><a href=".$link.">".$title."</a></li>";
				 		echo $output;
				 	}
				 }
				?>
			</ol>
	</div>
</div>

<?php

include '../footer.txt';

?>
</body>
</html>


<style type="text/css">

div.blog-title{
	text-align: center;
	font-family: 'Rock Salt';
	font-weight: bolder;
	/*font-stretch:extra-condensed;*/
	font-size: 50px;
}
div.blog-inner{
	font-size: 30px;
	float: initial;
	margin-right: auto;
	margin-left: auto;
	/*text-align: center;*/
	background-color: lightblue;
	opacity: 0.8;
	/*height: 100%;*/
}
div.blog-container{

	/*height: 100%;*/
}

div.blog-inner ol a{
	text-decoration: none;
	color: black;
	/*cursor: crosshair;*/


}

div.blog-inner ol li{


	width: 100%;
	margin-left: 50px;
	/*background-color: red;	*/


}




</style>