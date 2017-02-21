<?php 

  function redirect_to($dest="/"){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $dest"); 
  }
  
  function redirect_back(){
  	header("Location: {$_SERVER['HTTP_REFERER']} "); 
  }


//简单的 autoloader 定义，old style
function __autoload($className) {
	$class_path = __DIR__ . '/' . $className . '.php'; 
	if (file_exists($class_path )) {
	  require_once $class_path ;
	  return true;
	}
	return false;
}

// spl style as PSR-4,允许多个autoload函数 https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md
/**
 * 当注册了这个SPL函数后,则当执行下列语句时，将激活此函数去装载相应的代码 
 × 即从/path/to/project/src/Baz/Qux.php 装载\Foo\Bar\Baz\Qux 类 
 * 
 *      new \Foo\Bar\Baz\Qux;
 *      
 * @param string $class The fully-qualified class name.
 * @return void
 
spl_autoload_register(function ($className) {


    // project-specific namespace prefix
    $prefix = 'Foo\\Bar\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }

});

*/