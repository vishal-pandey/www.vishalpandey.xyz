<?php
 $file=fopen('test.html', 'w');
 $content = "00";
fwrite($file, $content);

include 'config.txt';
 	$conn = new mysqli($server, $user, $pwd, $db);
	date_default_timezone_set("Asia/Kolkata");
 	$lastact = date("h:i:sa");
 	$sql = "update t1 set state = 'Off' , lastact = '".$lastact."' where dev = 'd1'";
	if ($conn->query($sql) === TRUE) {
    	echo "New record created successfully";
	} 
	else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>