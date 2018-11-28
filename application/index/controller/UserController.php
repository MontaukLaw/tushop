<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/27
 * Time: 12:34
 */

namespace app\index\controller;

use app\index\model\User as UserModel;
use app\util\JsonMsg;
use think\Controller;
use think\Db;
use think\Request;

class UserController extends Controller
{
    public function test()
    {
        $arr = ['name' => 'wang', 'pos' => ['aa' => 'aa', 'bb' => 'bb', 'cc' => '李国庆']];

        dump($arr['pos']['aa']);

    }

    public function index($page)
    {
        $userList = UserModel::getAllUserWithPage($page);
        $this->assign('list', $userList);

        $pageView = $userList->render();

        $this->assign('page', $pageView);
        //dump($userList);
        //return json($userList);
        return $this->fetch();

        //$user = UserModel:: get1User();
        //dump($user);
    }

    public function userDetail($id)
    {
        $userDetail = UserModel::getUserDetailByID($id);
        $this->assign('user', $userDetail);
        return $this->fetch();
    }

    public function indexJson()
    {
        $result = Db::table('ty_users')
            ->alias('users')
            ->join('ty_user_level level', 'users.level = level.level_id')
            ->select();

        return json($result);
    }

    public function addUser()
    {
        return $this->fetch();
    }

    public function saveUser(Request $request)
    {
        $user = new UserModel;

        //$result = $user->allowField(['nick_name', 'email'])->save();

        $data = ['nick_name' => $request->param('nick_name'),
            'password' => input('password'),
            'email' => input('email'),
            'qq' => input('qq'),
            'sex' => input('sex'),
            'reg_time' => time(),
            'mobile' => input('mobile'),
        ];

        $result = $user->add($data);

        $jmsg = new JsonMsg($result);

        return json($jmsg);

    }
}