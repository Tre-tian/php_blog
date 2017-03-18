<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>服务端动态页面 -- 来自数据库</title>
</head>

<body>
<?php 
	@mysql_connect("localhost","demo") or die("sorry,sql wrong!");
	@mysql_select_db("phpdemo");
	
	$sql = 	"select * from posts where id = 1 " ;
	$query	=	mysql_query($sql);
	$row =	mysql_fetch_array($query);
	$s = $row["body"];
?>


<h1> <?php print $s; ?> </h1>
	
</body></html>



