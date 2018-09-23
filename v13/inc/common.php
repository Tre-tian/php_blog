<?php
//require 'kint.phar';

// 务必选中 chrome console 窗口上栏的 preserve log 选项
require 'ChromePhp.php';

function redirect_to($dest='/'){
  if (headers_sent()) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $dest");
  }else{
    header("Refresh: 0; URL=$dest");
  }
}

function redirect_back(){
  $dest = $_SERVER['HTTP_REFERER']  ;
  $dest = $dest ? $dest : '/';

  if (headers_sent()) {
    header("Location: $dest");
  }else{
    header("Refresh: 0; URL=$dest");
  }
}

?>