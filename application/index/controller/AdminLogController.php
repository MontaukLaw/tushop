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

    public function t(){

        return $this->fetch();
    }

    public function viewTest($page)
    {
        //$adminLogs = AdminModel::get('1=1', 'admin');
        //$adminLogs = AdminModel::all(null, 'admin');
        //$adminLogs = Db::table('ty_admin_log')->where('log_id', '>', 0)->limit(0, 10)->select();
        //$adminLogs = AdminModel::getAllAdminLogWithAdminName();
        //return view()->assign('list', $adminLogs);


        // 查询状态为1的用户数据 并且每页显示10条数据 总记录数为1000
        $adminLogs = AdminModel::getAllAdminLogWithAdminName($page);
        //$list = User::where('status', 1)->paginate(10, 1000);
        // 获取分页显示
        $page = $adminLogs->render();
        // 模板变量赋值
        $this->assign('list', $adminLogs);
        $this->assign('page', $page);
        // 渲染模板输出
        return $this->fetch();

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
        $adminLogs = AdminModel::getAllAdminLogWithAdminName();

        return json($adminLogs);
    }

    public function initAdminLog()
    {
        $adminLog = new AdminModel();

        dump($adminLog);
    }

    public function getAllAdminLogWithAdminPaged()
    {

        // 查询状态为1的用户数据 并且每页显示10条数据 总记录数为1000
        $adminLogs = AdminModel::getAllAdminLogWithAdminName()->paginate(10, 1000);;
        //$list = User::where('status', 1)->paginate(10, 1000);
        // 获取分页显示
        $page = $adminLogs->render();
        // 模板变量赋值
        $this->assign('list', $adminLogs);
        $this->assign('page', $page);
        // 渲染模板输出
        return $this->fetch();

    }

}