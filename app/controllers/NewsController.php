<?php
/**
 * Created by PhpStorm.
 * User: xiaobo
 * Date: 2018/4/21
 * Time: 上午11:04
 */

namespace app\controllers;

use app\models\User;

class NewsController extends BaseController
{
    public function test()
    {
        $user = User::all();
        dd($user);
    }

}