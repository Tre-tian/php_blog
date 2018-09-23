<?php

  //ChromePhp::log('Hello console!');
  //ChromePhp::log($_SERVER);
  //ChromePhp::warn('something went wrong!');

  require_once $_SERVER['DOCUMENT_ROOT'] . '/inc/ChromePhp.php' ;

  // for chromephp
  function redirect_to($dest='/'){
    if (headers_sent()) {
      header("HTTP/1.1 301 Moved Permanently");
      header("Location: $dest");
    }else{
      header("Refresh: 0; URL=$dest");
    }
  }


  function redirect_back(){
    $dest = $_SERVER['HTTP_REFERER'];
    if (headers_sent()) {
      header("Location: $dest");
    }else{
      header("Refresh: 0; URL=$dest");
    }
  }




/*
function redirect($url, $time=0, $msg='') {
    //多行URL地址支持
    $url = str_replace(array("\n", "\r"), '', $url);
    if ( empty($msg) )
        $msg = "系统将在{$time}秒之后自动跳转到{$url}！";
    if (!headers_sent()) {
        // redirect
        if (0 === $time) {
            header('Location: ' . $url);
        } else {
            header("refresh:{$time};url={$url}");
            echo($msg);
        }
        exit();
    } else {
        $str = "<meta http-equiv='Refresh' content='{$time};URL={$url}'>";
        if ($time != 0)
            $str .= $msg;
        exit($str);
    }
}

//url重定向2
function redirect($url) {

    echo "<script>".
    "function redirect() {window.location.replace('$url');}\n".
    "setTimeout('redirect();', 1000);\n".
    "</script>";
    exit();

}
*/

?>