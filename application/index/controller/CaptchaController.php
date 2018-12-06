<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/26
 * Time: 22:08
 */

namespace app\index\controller;

use app\util\JsonMsg;
use think\Controller;

class CaptchaController extends Controller
{
    // 验证码表单
    public function index()
    {
        return $this->fetch();
    }

    // 验证码检测
    public function check($code = '')
    {
        //准备输出用的msg
        $jmsg = null;
        $captcha = new \think\captcha\Captcha();

        if (!$captcha->check($code)) {
            $jmsg = new JsonMsg(0);
        } else {
            $jmsg = new JsonMsg(1);
        }

        return json($jmsg);
    }
}