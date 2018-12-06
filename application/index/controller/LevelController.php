<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/28
 * Time: 12:37
 */

namespace app\index\controller;

use app\index\model\Level as LevelModel;
use think\Controller;

class LevelController extends Controller
{

    public function index()
    {
        $res = LevelModel::getLevelAttr();
        return json($res);

    }

}