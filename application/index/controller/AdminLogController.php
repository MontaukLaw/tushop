<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/25
 * Time: 15:13
 */

namespace app\index\controller;

use app\index\model\AdminLog as AdminModel;

use think\Controller;

class AdminLogController extends Controller
{

    public function viewTest()
    {
        return $this->fetch();
    }

    public function getAllAdminLog()
    {
        $adminLogs = AdminModel::all();

        return json($adminLogs);

    }


}