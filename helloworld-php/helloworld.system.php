<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>服务端动态页面 -- 系统调用</title>
</head>


<body>
<?php
  if(PHP_OS == 'WINNT') {
    $date = exec("echo %date%_%time%");
  }else{
    $date = exec("date");
  }

  $s = "hellow world! Now is ".  $date ;
?>

<h1> <?php print $s;  ?> </h1>

</body></html>



