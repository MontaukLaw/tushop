<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/29
 * Time: 11:35
 */

namespace app\index\controller;


use think\Controller;

class PublicController extends Controller
{
    public function head()
    {

        return $this->fetch();
    }

}