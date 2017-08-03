<?php
 $file=fopen('test.html', 'w');
 $content = $_GET['inp'];
fwrite($file, $content);
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>