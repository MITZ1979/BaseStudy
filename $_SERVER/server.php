<?php
/**
 * $_SERVER 常量, 数组
 * Date: 2018-06-25 10:43
*/

/**
 * 1、获取当前正在执行脚本的文件名
 */
 $path = $_SERVER['PHP_SELF'];
//input http://localhost:8080/server.php
//output /server.php

 $path = __FILE__;
/**
 * D:\xampp\htdocs\BaseText\Classes\server.php
 */

$path =  $_SERVER['SCRIPT_FILENAME'];
//D:\xampp\htdocs\BaseText\Classes\server.php

/**
 * 2、请求页面时通信协议的名称和版本
 */
 $path = $_SERVER['SERVER_PROTOCOL'];
 //HTTP/1.1

/**
 * 3、请求开始时的时间戳。
 */
$path =  $_SERVER['REQUEST_TIME'];
//int(1529907287)
/**
 * ??
 * 4、传递给该脚本的参数
 */
//$path = $_SERVER['argv'][0];

//$path =  $_SERVER['SERVER_NAME'];
//localhost

/**
 * 7、$_SERVER['REQUEST_METHOD'] -- 访问页面时的请求方法。例
 */
//$path = $_SERVER['REQUEST_METHOD'];
//string(3) "GET"

/**
 * 6、$_SERVER['SERVER_SOFTWARE'] -- 服务器标识的字串，在响应请求时的头信息中给出。 如Microsoft-IIS/6.0
 */
$path = $_SERVER['SERVER_SOFTWARE'];
var_dump($path);
/**
 * 17.返回用户使用的浏览器信息。
 */
$path = $_SERVER['HTTP_USER_AGENT'];

/**
 * 16、$_SERVER['HTTP_REFERER'] -- 链接到当前页面的前一页面的 URL 地址
 */
//$path = $_SERVER['HTTP_REFERER'];

/**
 * 15、$_SERVER['HTTP_HOST'] -- 当前请求的 Host: 头信息的内容。
 */
$path = $_SERVER['HTTP_HOST'];
/**
 * 14、$_SERVER['HTTP_CONNECTION'] -- 当前请求的 Connection: 头信息的内容。例如：“Keep-Alive”。
 */
$path = $_SERVER['HTTP_CONNECTIOHN'];
/**
 * 31、$_SERVER['PHP_AUTH_PW'] -- 当 PHP 运行在 Apache 或 IIS（PHP 5 是 ISAPI）模块方式下，并且正在使用 HTTP 认证功能，这个变量便是用户输入的密码。
 */
$path = $_SERVER['PHP_AUTH_PW'];
echo $path;



