<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/25
 * Time: 16:01
 */

namespace app\index\model;


use think\Model;

class AdminLog extends Model
{
    protected $table = 'ty_admin_log';

    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;


}