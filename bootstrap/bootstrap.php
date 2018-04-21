<?php
/**
 * Created by PhpStorm.
 * User: xiaobo
 * Date: 2018/4/21
 * Time: 上午11:28
 */


use Illuminate\Database\Capsule\Manager as Capsule;

// 添加对应的数据库
$capsule = new Capsule;
$capsule->addConnection(require CONFIG_PATH . "/database.php");
$capsule->bootEloquent();


//添加对应的错误提示
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();