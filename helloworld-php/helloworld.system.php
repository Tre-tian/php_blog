<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>服务端动态页面 -- 系统调用</title>
</head>


<body>
<?php 
   $s = "hellow world! Now is ".  exec("date") ; 
?>

<h1> <?php print $s; ?> </h1>
	
</body></html>



