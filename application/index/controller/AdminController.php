<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/26
 * Time: 19:44
 */

namespace app\index\controller;


use think\Controller;

class AdminController extends Controller
{
    public function index(){

        return $this->fetch();
    }

}