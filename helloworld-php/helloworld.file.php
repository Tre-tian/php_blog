<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>服务端动态页面 -- 来自文件</title>
</head>

<body>
<?php 
	$s = file_get_contents("hello.txt",'r');
?>


<h1> <?php print $s; ?> </h1>
	
</body></html>




