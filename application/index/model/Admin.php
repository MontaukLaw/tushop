<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/26
 * Time: 10:31
 */

namespace app\index\model;

use think\Model;

class Admin extends Model
{

    protected $table = 'ty_admin';

    // 开启自动写入时间戳
    protected $autoWriteTimestamp = true;

    public function adminLog()
    {
        // Log BELONGS TO 关联 admin
        //return $this->belongsTo('AdminLog');
    }

}