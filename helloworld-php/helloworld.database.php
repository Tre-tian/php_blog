<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>服务端动态页面 -- 来自数据库</title>
</head>

<body>
<?php
	@mysql_connect("127.0.0.1","root","root") or die("sorry,sql wrong!");
	@mysql_select_db("wordpress");

	$sql = 	"select * from wp_posts limit 1 " ;
	$query	=	mysql_query($sql);
	$row =	mysql_fetch_array($query);
	$s = $row["post_title"];
?>


<h1> <?php print $s; ?> </h1>

</body></html>

