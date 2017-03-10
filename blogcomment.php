
					<?php

					$d = "at ".date("h:i:sa Y-m-d"); 




						$towrite = 
						"<div id='sample_comment' class='sample_comment'>
							<div id='sample_name' class='sample_name'>
								".$_POST['name']."
							</div>

							<div id='test_comment' class='test_comment'>
								".$_POST['your_comment']."
							</div>

							<br>	".$d."

						</div>
								<br>
						";

						// $towrite = "<div id='sample_comment' class='sample_comment'><div id='sample_name' class='sample_name'>".$_POST['name']."</div>";









						if(isset($_POST['name'])){

						$name = fopen('name.txt', 'a');
						fwrite($name ,  $towrite);

						}



						header('Location: ' . $_SERVER['HTTP_REFERER']);



						
				  	?>