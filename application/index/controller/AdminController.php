<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/26
 * Time: 19:44
 */

namespace app\index\controller;

use app\index\model\Admin as AdminModel;

use think\Controller;
use app\util\JsonMsg;
use think\Verify;

class AdminController extends Controller
{
    public function index()
    {

        return $this->fetch();
    }

    public function loginCheck($username, $password)
    {

        $jmsg = new JsonMsg;

        //先组个data map
        $loginInput = ['user_name' => $username, 'password' => $password];
        //直接用get
        $admin = AdminModel::get($loginInput);

        if (count($admin) > 0) {
            $jmsg->setSuccess(true);
        } else {
            $jmsg->setSuccess(false);
            $jmsg->setMsg('用户名密码不匹配');
        }
        $arr = [$jmsg];
        //dump($jmsg);
        return json($jmsg);
    }

    /**
     * 验证码获取
     */
    public function vertify()
    {
        $config = array(
            'fontSize' => 30,
            'length' => 4,
            'useCurve' => true,
            'useNoise' => false,
            'reset' => false
        );
        $Verify = new Verify($config);
        $Verify->entry("admin_login");
    }

}