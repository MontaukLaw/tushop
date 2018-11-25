<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/25
 * Time: 15:13
 */

namespace app\index\controller;


use think\Controller;

class AdminLogController extends Controller
{

    public function viewTest()
    {
        return $this->fetch();
    }


}