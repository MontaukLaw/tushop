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
use think\Db;

class AdminLogController extends Controller
{

    public function viewTest()
    {
        //$adminLogs = AdminModel::get('1=1', 'admin');
        //$adminLogs = AdminModel::all(null, 'admin');
        //$adminLogs = Db::table('ty_admin_log')->where('log_id', '>', 0)->limit(0, 10)->select();
        $adminLogs=AdminModel::getAllAdminLogWithAdminName();
        return view()->assign('list', $adminLogs);
    }

    public function getAllAdminLog()
    {
        $adminLogs = AdminModel::all();

        return json($adminLogs);

    }

    public function getAllAdminLogWithAdmin()
    {
        //$adminLogs = Db::table('ty_admin_log')->where('log_id', '>', 0)->order('log_time','desc')->limit(0, 10)->select();

        //$adminLogs = AdminModel::all(null, 'admin');
        $adminLogs=AdminModel::getAllAdminLogWithAdminName();

        return json($adminLogs);
    }



}