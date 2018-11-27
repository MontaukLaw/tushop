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
        $jmsg = new JsonMsg;
        $captcha = new \think\captcha\Captcha();
        if (!$captcha->check($code)) {
            $jmsg->setSuccess(false);
            $jmsg->setMsg('验证码错误');
        } else {
            $jmsg->setSuccess(true);
        }

        return json($jmsg);
    }
}