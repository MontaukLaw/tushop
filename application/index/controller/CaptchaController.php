<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/26
 * Time: 22:08
 */

namespace app\index\controller;


use think\Controller;

class CaptchaController extends Controller
{
    // 验证码表单
    public function index()
    {
        return $this->fetch();
    }

    // 验证码检测
    public function check($code='')
    {
        $captcha = new \think\captcha\Captcha();
        if (!$captcha->check($code)) {
            $this->error('验证码错误');
        } else {
            $this->success('验证码正确');
        }
    }
}