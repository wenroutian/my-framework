<?php
/**
 * Created by PhpStorm.
 * User: xiaobo
 * Date: 2018/4/21
 * Time: 上午11:36
 */

if (!function_exists("pp")) {
    function pp($data)
    {
        echo "<pre>";
        print_r($data);
        die;
    }
}