<?php
// 引入自动加载文件
define("BASE_PATH", dirname(dirname(__FILE__)));
define("APPLICATION_PATH", BASE_PATH . "/app");
define("CONFIG_PATH", BASE_PATH . "/config");
define("VENDOR_PATH", BASE_PATH . "/vendor");
define("BOOTSTRAP", BASE_PATH . '/bootstrap');
define("LOG_PATH", BASE_PATH . "/log");
require VENDOR_PATH . "/autoload.php";

require BOOTSTRAP . "/bootstrap.php";
//引入路由文件
require CONFIG_PATH . "/routes.php";

